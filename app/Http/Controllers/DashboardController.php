<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inventory;

class DashboardController extends Controller {

    /* Controller ini di proteksi dengan middleware 
        hanya admin dan staff yang boleh masuk */
        
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $inventories = array(
            'inventories' => Inventory::paginate(10)
        );

        return view('dashboard/index', $inventories);
    }

}
