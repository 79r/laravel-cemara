<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryCategory extends Model {

    protected $table = "inventory_categories";

    protected $fillable = array(
        'name',
        'notes',
        'image_url'
    );

    public function inventories() {
        return $this->hasMany(InventoryItem::class);
    }
}
