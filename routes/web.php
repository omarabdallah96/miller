<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ContactController;


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
    //get image from storage url
    $image = Storage::url('/slider/1.jpeg');

    //get url url of website


    return view('home.home', compact('image'));
});
Route::get('/test', function () {
    //get image from storage url

    //get url url of website


    return view('home.home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact_us', [ContactController::class, 'store']);

Route::get('example-tree-view', array('as' => 'example.treeview', 'uses' => 'TreeController@treeView'));
//TREEVIEW ROUTE 




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
