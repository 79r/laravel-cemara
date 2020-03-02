<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoParent extends Model {
    public function jo() {
        return $this->hasMany(Jo::class);
    }
}
