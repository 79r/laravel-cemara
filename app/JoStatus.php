<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoStatus extends Model {

    protected $table    = 'jo_status';
    
    public function jo() {
        return $this->hasMany(Jo::class);
    }
}
