<?php

use App\Http\Controllers\Adder;
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

Route::get('/adduser', [Adder::class, 'index']);
Route::get('/login', [Adder::class, 'logging']);
Route::get('/loggeduser', [Adder::class, 'loginvalidate']);
Route::get('/deleteuser', [Adder::class, 'delete']);
Route::get('/deleteuser', [Adder::class, 'updateuser']);