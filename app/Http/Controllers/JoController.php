<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Auth;
use App\Jo;
use App\Client;
use App\JoParent;
use App\JoCategory;

class JoController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return "Hello World";
    }


    /* Fungsi Buat JO secara otomatis */
    private function createJoCode() {
        $codeName       = "CK";

        //  ambil kode jo terbaru
        $lastJoCode     = Jo::orderBy('jo_code', 'DESC')->first()->jo_code; 

        /* ambil sebagian karakter misal : CK07914 jadi 7914 sekaligus jadikan integer
        dan ditambah nilainya dengan 1, sehingga jadi 7915 */
        $newCode        = (int)Str::after($lastJoCode, $codeName) + 1;

        /* uji nomor Jo nya */
        switch(strlen((string)$newCode)) {
            case 1  : $newJoCode = $codeName . "0000" . (string)$newCode; break;
            case 2  : $newJoCode = $codeName  . "000" . (string)$newCode; break;
            case 3  : $newJoCode = $codeName   . "00" . (string)$newCode; break;
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
        $new_jo_code    = $this->createJoCode();
        return view('jo.create', compact('parents', 'clients', 'new_jo_code'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        $input['jo_code']       = $this->createJoCode();
        $input['user_id']       = Auth::user()->id;
        $input['category_id']   = 1; // buat defaultnya 1   aja
        $input['parent_id']     = (int)$request->parent_id;
        $input['client_id']     = (int)$request->client_id;
        $input['qty']           = (int)$request->qty;
        Jo::create($input);
        return redirect()->route('jo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
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
