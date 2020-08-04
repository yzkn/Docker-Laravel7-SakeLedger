<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Brand extends Model
{
    use SoftDeletes;
    protected $guarded = array('id', 'created_at', 'updated_at', 'deleted_at');

    public function kura()
    {
        return $this->belongsTo('App\Kura');
    }
}
