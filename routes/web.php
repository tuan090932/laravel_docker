<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JWTAuthController;



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



Route::get('/home', 'App\Http\Controllers\ProductController@index');

Route::get('/view/{id}', 'App\Http\Controllers\ProductController@getProductbyid');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
//Route::post('login', [JWTAuthController::class, 'login']);
//EmailController

Route::get('/EmailController', 'App\Http\Controllers\EmailController@testAction');
Route::get('/EmailController11', 'App\Http\Controllers\EmailController@sendEmail');

use App\Mail\GuiEmail;
