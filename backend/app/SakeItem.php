<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SakeItem extends Model
{
    use SoftDeletes;
    protected $guarded = array('id', 'created_at', 'updated_at', 'deleted_at');

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function sake_item_images()
    {
        return $this->hasMany('App\SakeItemImage');
    }
}
