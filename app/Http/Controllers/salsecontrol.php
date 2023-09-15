<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class salsecontrol extends Controller
{
   
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function cart()
    {    $id=Auth::user()->id;
        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();

        return view('shop.cart',compact('lohat','clok','cart','maskat','id','caver','techert','talka','mg'));
    }

    public function cart_shop()
    {
        $caver=DB::table('subsections')->where('section_id','19')->get();
        $techert=DB::table('subsections')->where('section_id','20')->get();
        $talka=DB::table('subsections')->where('section_id','21')->get();
        $mg=DB::table('subsections')->where('section_id','22')->get();
        $maskat=DB::table('subsections')->where('section_id','24')->get();
        $cart=DB::table('subsections')->where('section_id','25')->get();
        $clok=DB::table('subsections')->where('section_id','26')->get();
        $lohat=DB::table('subsections')->where('section_id','27')->get();
        return view('nologin.cart',compact('lohat','clok','cart','maskat','caver','techert','talka','mg'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "id"=>$product->id,
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];

            session()->put('cart', $cart);

            // return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            // return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id"=>$product->id,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
       

        session()->put('cart', $cart);

        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);
            // return response()->json(['success'=>'Got Simple Ajax Request.']);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            
            session()->flash('success', 'Product removed successfully');
        }
    }

     
  
}







 //
    // public function salse(Request $request){
    //     $id=Auth::user()->id;
    //     $name=$request->input('Name');
    //     $priec=$request->input('Price');
    //     $img=$request->input('Img');
    //     DB::insert('insert into saless (name, price, image, user_id) values (?, ?, ?, ?)', [$name, $priec, $img, $id]);
    //     return response()->json(['success'=>'Data is successfully added']);

    // }