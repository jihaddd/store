<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public $table="saless";
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
