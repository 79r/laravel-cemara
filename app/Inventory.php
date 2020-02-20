<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {

    protected $table = "items";

    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'brand_id',
        'supplier_id',
        'division_id',
        'price',
        'qty',
        'image_url',
        'year_of_purchase',
        'notes',
        'serial_number',
        'barcode'
    ];

    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function division() {
        return $this->belongsTo(Division::class);
    }

}
