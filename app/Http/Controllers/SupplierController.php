<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $suppliers = Supplier::all();
        return view('inventory/suppliers/index', ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $supplier = Supplier::all();
        return view('inventory.suppliers.create', $supplier);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'name'          => 'required|min:3|max:100',
        ]);

        $input = $request->all();

        $input['image_url'] = null; // defaultnya null

        $dirname = '/uploads/inventories/suppliers';

        if ($request->hasFile('image_url')){
            $input['image_url'] = $dirname .str_slug($input['name'], '-').'.'.$request->image_url->getClientOriginalExtension();
            $request->image_url->move(public_path($dirname), $input['image_url']);
        }
        Supplier::create($input);
        return redirect('inventory.suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data = array(
            'supplier' => Supplier::find($id)
        );
        return view('inventory/suppliers/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
