<?php

use Illuminate\Support\Facades\Route;
use App\Models\Header;
use App\Models\Post;
use App\Models\About;
use App\Models\Message;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Services;
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

Route::get('', 'indexController@index');
Route::get('admin', 'PostsController@index');



Route::resource('admin/post', 'PostsController');
Route::resource('admin/User', 'UserController');

Route::get('admin/login',function(){
    if(auth()->user()){
        return redirect(url('admin/User'));
    }
        return view('admin/login');
})->name('login');

Route::post('admin/login', 'UserController@login');
Route::get('admin/logOut', 'UserController@logOut');

Route::resource('admin/settings/header', 'settings\headerController');
Route::resource('admin/settings/about', 'settings\AboutController');
Route::resource('admin/settings/services', 'settings\ServicesController');

Route::resource('admin/settings/portfolio', 'settings\PortfolioController');
Route::resource('admin/settings/contact', 'settings\ContactController');

Route::resource('admin/settings/message', 'settings\MessageController');


// Route::get('post','PostsController@create')     \\ Return Form Create Post 
// Route::post('post','PostsController@store');     \\ Create Post + Validate + Set Data in DB
// Route::post('post/{id}', 'PostsController@show'); \\ Show Details Single Post 
// Route::get('post/{id}', 'PostsController@edit');   \\ Get Data From DB 
// Route::put('post/{id}', 'PostsController@update');  \\Upload Data In DB 
// Route::delete('post/{id}','PostsController@destroy');\\ Delete Row From DB