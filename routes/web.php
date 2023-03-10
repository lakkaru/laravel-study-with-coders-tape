<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('about', function(){
//     return view("about");
// });
// Route::get('contact', function(){
//     return view("contact");
// });
Route::view('/', 'welcome');
Route::view('about', 'about');
Route::view('contact', 'contact');

// use App\Http\Controllers\CustomersController;
Route::get('customers', 'App\Http\Controllers\CustomersController@list');


