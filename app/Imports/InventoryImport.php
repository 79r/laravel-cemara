<?php

namespace App\Imports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\ToModel;

use Carbon\Carbon;

class InventoryImport implements ToModel {
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row) {
        return new Inventory([
            'name'              => $row[0],
            'user_id'           => $row[1],
            'category_id'       => $row[2],
            'brand_id'          => $row[3],
            'supplier_id'       => $row[4],
            'division_id'       => $row[5],
            'price'             => $row[6],
            'qty'               => $row[7],
            'image_url'         => $row[8],
            'year_of_purchase'  => $row[9],
            'notes'             => $row[10],
            'serial_number'     => $row[11],
            'barcode'           => $row[12],
            'created_at'        => Carbon::now(),
        ]);
    }
}
