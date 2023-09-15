<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class show extends Controller
{

    public function viwe(){

        // $products=DB::table('products')->paginate(8);
         
        $iphx=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','19'],['satat','1']
        ])->limit(20)->get();
        // iphon 7
        $iph=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','20'],['satat','1']
        ])->limit(20)->get();
        // iphon 6
        $ph=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','21'],['satat','1']
        ])->limit(20)->get();

        $phh=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','22'],['satat','1']
        ])->limit(20)->get();


        
        $phone=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','24'],['satat','1']
        ])->limit(20)->get();


        $haml=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','25'],['satat','1']
        ])->limit(20)->get();


        $jdarya=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','26'],['satat','1']
        ])->limit(20)->get();

        $madnia=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','27'],['satat','1']
        ])->limit(20)->get();
    

        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();

        return view('index',compact('madnia','jdarya','haml','phone','lohat','clok','cart','maskat','iphx','iph','ph','phh','caver','techert','talka','mg'));
        
    }

    public function viweproduct(Request $request, $id, $id_section){
        
       $or=DB::table('products')->join('sections','sections.id','=','products.id_section')
       ->where([['products.id',$id],['products.id_section',$id_section]])->get();
    //    var_dump($or);
    //    die;

       $tonz=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
       ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
       ->where([['id_section',$id_section],['satat','1']])->get();

       $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();

        
        return view('nologin.viewproduct',compact('lohat','clok','cart','maskat','or','tonz','caver','techert','talka','mg'));
    }
   
    public function index(Request $req, $id)
    {
        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();

        $data = DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.price','products.id_section','products.image','products.id','dasigns.namee')
        ->where([['id_subsection',$id],['satat','1']])->paginate(20);

        return view('nologin.products', compact('lohat','clok','cart','maskat','data','caver','techert','talka','mg'));

    }

    public function allproduct()
    {
        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();

        $data = DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
        ->where('satat','1')->paginate(20);
        // var_dump($cart);
        // die;

        return view('nologin.allproduct', compact('lohat','clok','cart','maskat','data','caver','techert','talka','mg'));

    }

    public function profil(Request $req, $name){
        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();
        $data = DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
        ->where([['satat','1'],['dasigns.namee',$name]])->paginate(20);

        return view('nologin.profile', compact('lohat','clok','cart','maskat','data','caver','techert','talka','mg'));
    }

}
