<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jo extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "jo";
    protected $fillable = array(
        'jo_code',
        'title',
        'start_date',
        'deadline',
        'description',
        'image_url',
        'material',
        'finishing',
        'qty',
        'size',
        'notes',
        'user_id',
        'category_id',
        'parent_id'
    );

    public function parent() {
        return $this->belongsTo(JoParent::class);
    }

}
