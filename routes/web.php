<?php

use Illuminate\Support\Facades\Route;
use App\Showcar;
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
    return view('project.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin.admin');
});
//=======================show======================
Route::get('/show', 'carcontroler@show');

Route::get('/contact', 'carcontroler@contact');

Route::get('/details/{id}', 'carcontroler@details');


//===============Auth=controller====================
Route::get('/delete', 'addcar@delete');
Route::get('/delete/{id}', function($id){
    $remove =  Showcar::find($id);
    $remove->delete();
    return back();
});

Route::get('/add', 'addcar@add');

Route::post('/newcar', 'addcar@postadd');



