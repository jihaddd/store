<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\Session;



class order extends Controller
{
    //
    public function send(Request $req){

      $this->validate($req, [
        // 'total' => 'required',
        'state' => 'required',
        'contry' => 'required',
        'hai' => 'required',
        'phone' => 'required',
        'payment' => 'required',
     ]);
    
        $name=$req->name;
        $img=$req->imag;
        $price=$req->price;
        $num=$req->num;
        $subtotal=$req->subtotal;
        $totla=$req->totall;
        $contry=$req->state;
        $ctiy=$req->contry;
        $hai=$req->hai;
        $str=$req->stret;
      
        $numhom=$req->numhome;
        $phone=$req->phone;
        $payment=$req->payment;
        $id=$req->id;
        $product_id=$req->product; 
        // $id=Auth::user()->id;
       
        foreach($name as $key => $no)
        {
           
          $input['name'] = $no;
          $input['imag'] = $img[$key];
          $input['price'] = $price[$key];
          $input['quantity'] = $num[$key];
          $input['subtotal']=$subtotal[$key];
          $input['totall'] = $totla[$key];
          $input['contry'] = $contry[$key];
          $input['city'] = $ctiy[$key];
          $input['hai'] = $hai[$key];
          $input['stret'] = $str[$key];
          $input['numhome'] = $numhom[$key];
          $input['phone'] = $phone[$key];
          $input['paymeny'] = $payment[$key];
          $input['user_id']=$id[$key];
          $input['product_id']=$product_id[$key];

          // var_dump(Bill::create($input));
          //     die;
          Bill::create($input);
           
        }
       
        $req->session()->forget('cart');
        
        return redirect('home'); 
    }
}
