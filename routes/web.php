<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if(version_compare(PHP_VERSION,'7.2.0','>=')){
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Auth::routes();
Route::view('/test', 'test');
Route::get('/profile/{namee}','show@profil');
Route::get('/profilee/{namee}','HomeController@profill');
Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/home/post','salsecontrol@salse');
Route::get('/','show@viwe');

Route::post('viewproduct/{id}/{id_section}','show@viweproduct');

Route::get('viewproduct/{id}/{id_section}','show@viweproduct');

Route::get('/products/{id}','show@index');
Route::get('/allproducts','show@allproduct');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('add-to-cart/{id}', 'salsecontrol@addToCart');
Route::get('viewproductt/{id}', 'salsecontrol@addToCart');
  
Route::get('cartshop', 'salsecontrol@cart_shop');

Route::post('cart', 'order@send');


Route::group(['middleware' => 'auth'], function () {

  // Route::get('/myAccounte/{id}','show@showinfo');

  Route::post('/editinfo','infouser@updateinfo');

  Route::get('/editinfo','infouser@showinfo');

  Route::view('/repassword', 'usercontrol.repassword');

  Route::post('/repassword','infouser@updatepass');


  Route::get('pro/{id}','showtow@viewpro');
  Route::get('allproductt','showtow@allpro');

  Route::post('showproducts/{id}/{id_section}','showtow@viweproduct');
  Route::get('hostory/{id}','hostry@show_history');
  Route::get('showproducts/{id}/{id_section}','showtow@viweproduct');
  Route::get('showproductss/{id}', 'salsecontrol@addToCart');

   

  Route::get('cart', 'salsecontrol@cart');

});

Route::patch('update-cart', 'salsecontrol@update');
Route::delete('remove-from-cart', 'salsecontrol@remove');
Route::view('/about','about');
Route::view('/conect','conect');