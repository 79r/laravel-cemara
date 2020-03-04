<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Auth;
use App\Jo;
use App\Client;
use App\JoParent;
use App\JoCategory;

class JoCemaraController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $job_list  = Jo::where('parent_id', '=', 1)->paginate(20);
        return view('jo.cemara.index', array('job_list' => $job_list));
    }


    /* Fungsi Buat JO secara otomatis */
    private function createJoCode($codeName) {

        //  ambil kode jo terbaru
        $lastJoCode     = Jo::orderBy('jo_code', 'DESC')->first()->jo_code;
        
        $cemara_codename    = "CK";
        $mim_codename       = "MIM";
        
        /* Uji dan ambil sebagian karakter misal : CK07914 jadi 07914 sekaligus jadikan integer */
        if (Str::contains($lastJoCode, $cemara_codename)) {
            $newCode        = (int)substr($lastJoCode, 2);
        }
        else {
            $newCode        = (int)substr($lastJoCode, 3);
        }

        /* tambah nomor jo dengan 1, sehingga jadi 7915 */
        $codePlusOne       = $newCode + 1;
        $newJoCode;

        /* uji nomor Jo nya */
        switch(strlen((string)$newCode)) {
            case 1  : $newJoCode = $codeName . "0000" . (string)$codePlusOne; break;
            case 2  : $newJoCode = $codeName  . "000" . (string)$codePlusOne; break;
            case 3  : $newJoCode = $codeName   . "00" . (string)$codePlusOne; break;
            case 4  : $newJoCode = $codeName    . "0" . (string)$newCode; break;
            default : $newJoCode = (string)$newCode;
        }
        return $newJoCode; // kembalikan nilai JO baru
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $parents        = JoParent::orderBy('name', 'ASC')->pluck('name', 'id');
        $clients        = Client::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('jo.create', compact('parents', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        $input['user_id']       = Auth::user()->id;
        $input['parent_id']     = (int)$request->parent_id;
        $input['jo_code']       = $input['parent_id'] === 1 ? $this->createJoCode('CK') : $this->createJoCode("MIM");

        
        $input['start_date']    = $request->start_date;
        $input['deadline']      = $request->deadline;
        
        $input['category_id']   = 1;
        $input['client_id']     = (int)$request->client_id;
        $input['qty']           = (int)$request->qty;
        Jo::create($input);
        return redirect()->route('jo.cemara.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $jo = Jo::findOrFail($id);
        return view('jo.show', array('jo' => $jo));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return "<h3>Fitur belum tersedia :((</h3>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
