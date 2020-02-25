<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inventory;
use App\Exports\InventoryExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Carbon;

class InventoryExportController extends Controller {
    
    public function export() {
        return Excel::download(new InventoryExport, 'Cemara-Inventory-Global-' . Carbon::now() . '.xlsx');
    }

}
