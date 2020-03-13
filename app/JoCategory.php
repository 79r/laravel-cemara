<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoCategory extends Model {
    public function jo() {
        return $this->hasMany(Jo::class);
    }
}
