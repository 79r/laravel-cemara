<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    /* Controller ini di proteksi dengan middleware 
        hanya admin dan staff yang boleh masuk */
        
    public function __construct() {
        $this->middleware('auth');
    }

}
