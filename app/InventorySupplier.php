<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventorySupplier extends Model {

    public function inventories() {
        return $this->hasMany(InventoryItem::class);
    }
}
