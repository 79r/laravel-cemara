<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* excel */
use App\Imports\InventoryImport;
use Excel;

class InventoryImportController extends Controller {

    public function import() {
        return view('inventory.import');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new InventoryImport, $file); //IMPORT FILE 
            return redirect()->back()->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);
    }


}
