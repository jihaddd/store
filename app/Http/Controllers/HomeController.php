<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
          
        $iphx=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
        ->where([['id_section','19'],['satat','1']])->get();
        // iphon 7
        $iph=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','20'],['satat','1']
        ])->get();
        // iphon 6
        $ph=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','21'],['satat','1']
        ])->get();

        $phh=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','22'],['satat','1']
        ])->get();

        $phone=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','24'],['satat','1']
        ])->get();


        $haml=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','25'],['satat','1']
        ])->get();


        $jdarya=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','26'],['satat','1']
        ])->get();
        // var_dump($jdarya);
        // die;


        $madnia=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')->where([
            ['id_section','27'],['satat','1']
        ])->get();


        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();

        $id=Auth::user()->id;

        return view('home',compact('madnia','jdarya','haml','phone','lohat','clok','cart','maskat','iphx','iph','ph','phh','caver','techert','talka','mg','id'));
    }

    public function profill(Request $req, $name){
        $id=Auth::user()->id;
        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();

        $data = DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
        ->where([['satat','1'],['dasigns.namee',$name]])->paginate(20);
        return view('shop.profile', compact('data','caver','techert','talka','mg','id'));

    }
}
