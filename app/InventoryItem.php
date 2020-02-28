<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model {

    // protected $table = "inventory_items";

    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'brand_id',
        'supplier_id',
        'division_id',
        'unit_price',
        'price',
        'qty',
        'image_url',
        'year_of_purchase',
        'notes',
        'serial_number',
        'barcode'
    ];

    public function brand() {
        return $this->belongsTo(InventoryBrand::class);
    }

    public function supplier() {
        return $this->belongsTo(InventorySupplier::class);
    }

    public function category() {
        return $this->belongsTo(InventoryCategory::class);
    }

    public function division() {
        return $this->belongsTo(Division::class);
    }

}
