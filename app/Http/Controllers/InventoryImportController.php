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

        /* validation */
        $this->validate($request,
            ['file' => 'required|mimes:xls,xlsx']
        );

        if($request->hasFile('file')) {
            $file = $request->file('file'); // get a file
            Excel::import(new InventoryImport, $file); // import file
            return redirect()->back()->with(['success' => 'Upload success']);
        }
        
        return redirect()->back()->width(['error' => 'Please choose a file']);

    }


}
