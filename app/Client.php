<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $fillable = array('name', 'phone', 'email', 'address');

    public function jo() {
        return $this->hasMany(Jo::class);
    }
}
