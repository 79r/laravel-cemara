<?php

namespace App\Imports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\ToModel;

use Carbon\Carbon;

class InventoryImport implements ToModel, WithHeadingRow {
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row) {

        if ($row['status'] == "Belum Verifikasi"){
            $status = 0;
        } else {
            $status = 1;
        }

        return new Inventory([
            'name'              => $row['name'],
            'user_id'           => $row['user_id'],
            'category_id'       => $row['category_id'],
            'brand_id'          => $row['brand_id'],
            'supplier_id'       => $row['supplier_id'],
            'division_id'       => $row['division_id'],
            'price'             => $row['price'],
            'qty'               => $row['qty'],
            'image_url'         => $row['image_url'],
            'year_of_purchase'  => date('Y-m-d H:i:s'),
            'notes'             => $row['notes'],
            'serial_number'     => $row['serial_number'],
            'barcode'           => $row['barcode'],
            'created_at'        => Carbon::now(),
        ]);
    }
}
