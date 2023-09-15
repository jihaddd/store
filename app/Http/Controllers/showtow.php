<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class showtow extends Controller
{
    public function viewpro(Request $req,$idd){
        $id=Auth::user()->id;

        $caver=DB::table('subsections')->where('section_id','19')->get();

        $techert=DB::table('subsections')->where('section_id','20')->get();

        $talka=DB::table('subsections')->where('section_id','21')->get();

        $mg=DB::table('subsections')->where('section_id','22')->get();

        $data = DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
        ->where([['id_subsection',$idd],['satat','1']])->paginate(20);
        
     return view('shop.pro', compact('data','caver','techert','talka','mg','id'));
    }

    public function viweproduct(Request $request, $id, $id_section){
        $idd=Auth::user()->id;

        $products=Product::find($id);

        $tonz=DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
        ->where([['id_section',$id_section],['satat','1']])->get();

        $caver=DB::table('subsections')->where('section_id','19')->get();

        $techert=DB::table('subsections')->where('section_id','20')->get();

        $talka=DB::table('subsections')->where('section_id','21')->get();

        $mg=DB::table('subsections')->where('section_id','22')->get();

        return view('shop.showproducts',compact('idd','products','tonz','caver','techert','talka','mg'));
    }

    public function allpro(Request $req){
        $id=Auth::user()->id;

        $caver=DB::table('subsections')->where('section_id','19')->get();

        $techert=DB::table('subsections')->where('section_id','20')->get();

        $talka=DB::table('subsections')->where('section_id','21')->get();

        $mg=DB::table('subsections')->where('section_id','22')->get();

        $data = DB::table('products')->join('dasigns','dasigns.id','=','products.design_id')
        ->select('products.name','products.id_section','products.price','products.image','products.id','dasigns.namee')
        ->where([['satat','1']])->paginate(20);
        
     return view('shop.allproduct', compact('data','caver','techert','talka','mg','id'));
    }
}
