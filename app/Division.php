<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model {

    public function inventory() {
        return $this->hasMany(Division::class);
    }
    
}
