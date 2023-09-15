<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $fillable = ['name','imag','price','quantity','subtotal','totall','contry','city','hai','phone','paymeny','user_id','product_id'];
}
