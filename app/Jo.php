<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jo extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "jo";
    protected $fillable = array(
        'client_id',
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
        'parent_id',
        'jo_status_id'
    );

    public function parent() {
        return $this->belongsTo(JoParent::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function jo_status() {
        return $this->belongsTo(JoStatus::class);
    }

    public function category() {
        return $this->belongsTo(JoCategory::class);
    }
}
