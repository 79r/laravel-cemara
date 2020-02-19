<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

    public function inventory() {
        return $this->hasMany('App\Inventory');
    }

}
