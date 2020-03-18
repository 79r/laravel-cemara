<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jo;

class JoajaxController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function job() {
        $pageTitle      = "Semua Jo";
        return view('jo.jo-ajax/index', compact('pageTitle'));
    }

    public function jobWaitingList() {
        $pageTitle      = "Jo Waiting List";
        return view('jo.jo-ajax/waiting-list', compact('pageTitle'));
    }

    public function jobProgress() {
        $pageTitle      = "Jo Progress";
        return view('jo.jo-ajax/progress', compact('pageTitle'));
    }

    public function jobDone() {
        $pageTitle      = "Jo Selesai";
        return view('jo.jo-ajax/done', compact('pageTitle'));
    }

    public function search(Request $request) {

        /* ambil keyword yang di input user */
        $keyword = $request->keyword;

        /* mengambil data dari table inventory sesuai pencarian */
        $job = Jo::where('title', 'LIKE',"%".$keyword."%")
            ->orWhere('jo_code', 'LIKE',"%".$keyword."%")->paginate(30);
        return view('inventory.index', compact('job'));
    }

    /* ajax jo index */
    public function index() {
        $data = Jo::with(['client', 'jo_status', 'category'])->orderBy('created_at', 'DESC')->paginate(20);
        return response()->json($data);
    }

    /* ajax jo waiting list */
    public function ajaxWaitingList() {
        $data = Jo::where('jo_status_id', 1)->with(['client', 'jo_status', 'category'])->orderBy('created_at', 'DESC')->paginate(10);
        return response()->json($data);
    }

    /* ajax jo progress */
    public function ajaxProgress() {
        $data = Jo::where('jo_status_id', 2)->with(['client', 'jo_status', 'category'])->orderBy('created_at', 'DESC')->paginate(10);
        return response()->json($data);
    }

    /* ajax jo done */
    public function ajaxDone() {
        $data = Jo::where('jo_status_id', 3)->with(['client', 'jo_status', 'category'])->orderBy('created_at', 'DESC')->paginate(10);
        return response()->json($data);
    }
    
    public function show($id) {
        $jo  = Jo::findOrFail($id);
        return response()->json($jo);
    }

    public function store(Request $request)  {
        $post = Jo::create($request->all());
        return response()->json($post);
    }

    public function update(Request $request, $id)  {
        $post = Jo::find($id)->update($request->all());
        return response()->json($post);
    }

    public function destroy($id) {
        Jo::find($id)->delete();
        return response()->json(['done']);
    }
}