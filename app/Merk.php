<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model {

    public function inventory() {
        return $this->hasMany('App\Inventory');
    }

}
