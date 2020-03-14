<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use DataTables;

class ClientajaxController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }


    public function index(Request $request) {
        $clients = Client::latest()->get();

        if ($request->ajax()) {
            return Datatables::of($clients)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = 'Edit';
                    $btn = $btn . ' Delete';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('client-ajax.index', compact('clients'));
    }

    public function store(Request $request) {
        Client::updateOrCreate([
            'id'        => $request->id
        ],[
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'address'   => $request->address
        ]);

        // return response
        $response = [
            'success' => true,
            'message' => 'Client saved successfully.',
        ];
        return response()->json($response, 200);
    }


    public function edit($id) {
        $client = Client::find($id);
        return response()->json($client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client) {
        $client->delete();

        // return response
        $response = [
            'success' => true,
            'message' => 'Book deleted successfully.',
        ];
        return response()->json($response, 200);
    }

}
