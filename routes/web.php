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

Route::get('/', function () {
    return view('welcome');
});


//normal route
Route::get('/about',function (){
    return view('pages/about');
});

// passing array for page
Route::get('/profile/{name}/{age}',function ($name,$age){
    $data = array('name'=> $name, 'age'=>$age);
    return view('pages/profile')->withData($data);
});

// short cut for pages view 
Route::view('/register','pages/register');

// left route point, right location
Route::redirect('home','/');

// point sa taas , location sa baba
Route::get('/welcome',function (){
    return redirect('');
});

// controllers users ito ung functions from controllers

// index users
Route::get('users','Users@index');
// view users
Route::get('users/view/{name}','Users@view');
// users show
Route::get('users/show/{name}/{age}/{course}','Users@show');
