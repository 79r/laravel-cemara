<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model {

    protected $table = "merk";

    public function item() {
        return $this->hasMany('App\Item');
    }

}
