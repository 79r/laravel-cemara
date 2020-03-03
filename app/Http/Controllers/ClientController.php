<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use DataTables;

class ClientController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }

    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Client::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm edit_button">Edit</a>';

                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm delet_button">Delete</a>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('client.client_ajax');
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        Client::updateOrCreate(['id' => $request->client_id],
                ['name' => $request->name, 'phone' => $request->phone]);        
        return response()->json(['success'=>'Client saved successfully.']);
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $client = Client::find($id);
        return response()->json($client);
    }


    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        Client::find($id)->delete();
        return response()->json(['success'=>'Client deleted successfully.']);
    }
}
