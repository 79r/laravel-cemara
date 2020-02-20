<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemsTemp extends Model {

    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'brand_id',
    ];
}
