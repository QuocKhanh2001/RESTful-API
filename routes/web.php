<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::post('/send-email',[ContactController::class,'sendEmail'])->name('send.email'); //gui email va hang doi

Route::prefix('posts')->name('post.')->group(function(){  // test Eloquent  DB Operations
    Route::get('/',[PostController::class,'index'])->name('index');
    Route::get('/add',[PostController::class,'add'])->name('add');
});

Route::get('/users', 'UserController@index')->name('users.index');  //Error/Exception 
Route::post('/users/search', 'UserController@search')->name('users.search');
