<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryBrand extends Model {

    public function inventories() {
        return $this->hasMany(InventoryItem::class);
    }

}
