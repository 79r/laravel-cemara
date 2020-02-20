<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str; // untuk generate random string

// include Model Item
use App\Brand;
use App\Category;
use App\Supplier;
use App\Division;
use App\Inventory;


/* excel */
use App\Imports\InventoryImport;
use Excel;


class InventoryController extends Controller {


    /* Controller ini di proteksi dengan middleware 
        hanya admin dan staff yang boleh masuk */
        
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data  = array(
            'inventories' => Inventory::all()
        );
        return view('inventory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $brand = Brand::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $supplier = Supplier::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');
            
        $division = Division::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $inventory = Inventory::all();
        return view('inventory.create', compact('category', 'brand', 'supplier', 'division'));
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
            'price'         => 'required',
            'brand_id'      => 'required',
            'category_id'   => 'required',
            'supplier_id'   => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = 1; // defaultnya adalah 1 (ini adalah admin)

        $input['image_url'] = null; // defaultnya null

        $dirname = '/uploads/inventories/';

        if ($request->hasFile('image_url')){
            $input['image_url'] = $dirname .str_slug($input['name'], '-').'.'.$request->image_url->getClientOriginalExtension();
            $request->image_url->move(public_path($dirname), $input['image_url']);
        }
        Inventory::create($input);
        return redirect('inventory');
    }


    
    /* Store data by excel file */
    public function storeDataExcel(){

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data = array(
            'inventory' => Inventory::find($id)
        );
        return view('inventory/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $inventory = Inventory::find($id);

        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $brand = Brand::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $supplier = Supplier::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $division = Division::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');
        
        return view('inventory.edit', compact('inventory', 'category', 'brand', 'supplier', 'division'));
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
