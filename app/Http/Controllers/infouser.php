<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class infouser extends Controller
{
    function updateinfo(Request $req){
         
        $this->validate($req, [
            'email' => 'required|string|unique:users',
            
        ]);

        $id=Auth::user()->id;
        if($req->isMethod('post')){
            
            $name=$req->input('name');
            $email=$req->input('email');
           DB::update('update users set name = ?, email = ? where id = ?', [$name,$email,$id]);
            return redirect('home');
        }
        return view('usercontrol.editinfo');

    }

    public function showinfo(){
        $id=Auth::user()->id;
        $data=DB::table('users')->find($id);
        return view('usercontrol.editinfo',compact('data','id'));
    }

    function updatepass(Request $req){
         
        $this->validate($req, [
            'password' => 'required|string|min:8|confirmed',     
        ]);

        $id=Auth::user()->id;
       
        if($req->isMethod('post')){
            
            $password=$req->input('password');
            $hash=Hash::make($password);
           DB::update('update users set password = ? where id = ?', [$hash,$id]);
            return redirect('home');
        }
        return redirect ('/home');

    }

}
