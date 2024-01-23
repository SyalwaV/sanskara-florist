<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
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

Route::get('/home', [ViewController::class, 'home']);
Route::get('/selamat', [ViewController::class, 'selamat']);
Route::get('/pernikahan', [ViewController::class, 'pernikahan']);
Route::get('/berduka', [ViewController::class, 'berduka']);
Route::get('/kontak', [ViewController::class, 'kontak']);
Route::get('/aboutus', [ViewController::class, 'aboutus']);