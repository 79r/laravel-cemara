<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Inventory;

class DashboardController extends Controller {

    /* Controller ini di proteksi dengan middleware 
        hanya admin dan staff yang boleh masuk */
        
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $inventories = array(
            'inventories'   => Inventory::paginate(10),
            'total_rp'      => Inventory::sum('price')
        );

        return view('dashboard/index', $inventories);
    }

}
