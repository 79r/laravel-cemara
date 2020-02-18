<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {

    protected $table = "inventory";

    protected $fillable = [
        'name', 'price', 'image', 'merk_id', 'category_id', 'supplier_id', 'tahun_beli'
    ];

    public function merk() {
        return $this->belongsTo('App\Merk');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
