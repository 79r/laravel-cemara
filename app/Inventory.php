<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {

    protected $table = "inventories";

    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'brand_id',
        'supplier_id',
        'price',
        'image_url',
        'year_of_purchase',
        'qty',
        'notes'
    ];

    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
