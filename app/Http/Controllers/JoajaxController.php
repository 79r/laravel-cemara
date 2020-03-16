<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jo;

class JoajaxController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function job() {
        return view('jo.jo-ajax/ajax');
    }

    public function index() {
        $data = Jo::with(['client', 'jo_status', 'category'])->orderBy('created_at', 'DESC')->paginate(10);
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