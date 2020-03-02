<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jo extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "jo";
    protected $fillable = array(
        'serial_number',
        'title',
        'start_date',
        'deadline',
        'description',
        'image_url',
        'material',
        'finishing',
        'qty',
        'notes',
        'user_id',
        'category_id',
        'parent_id'
    );

    public function parent() {
        return $this->belongsTo(JoParent::class);
    }

}
