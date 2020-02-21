<?php

namespace App\Imports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\ToModel;

/* excel with heading */
use Maatwebsite\Excel\Concerns\WithHeadingRow; 

use Carbon\Carbon;

class InventoryImport implements ToModel, WithHeadingRow {
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row) {

        return new Inventory([
            'name'              => $row['name'], // ok
            'user_id'           => $row['user_id'], // ok
            'category_id'       => $row['category_id'],
            'brand_id'          => $row['brand_id'], // ok
            'supplier_id'       => $row['supplier_id'],
            'division_id'       => $row['division_id'], // ok
            'price'             => $row['price'], // ok
            'qty'               => $row['qty'], // ok
            'year_of_purchase'  => $row['year'], // ok
            'serial_number'     => $row['serial_number'], // ok
            'created_at'        => Carbon::now(),
        ]);
    }
}
