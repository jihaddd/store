<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class hostry extends Controller
{
    //
    public function show_history(Request $req,$id){
        $bil=DB::table('bills')->where('user_id',$id)
        ->get();
        // var_dump($bil);
        // die;
        return view('usercontrol.hostory',compact('bil'));
    }
}
