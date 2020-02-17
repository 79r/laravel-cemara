<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {

    protected $table = "inventory";

    protected $fillable = [
        'name', 'price', 'image'
    ];

    public function merk() {
        return $this->belongsTo('App\Merk');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier');
    }

}
