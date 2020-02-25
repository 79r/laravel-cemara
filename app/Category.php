<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = "categories";

    protected $fillable = array(
        'name',
        'notes',
        'image_url'
    );

    public function inventories() {
        return $this->hasMany('App\Inventory');
    }
}
