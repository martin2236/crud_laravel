<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
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

Route::get('/',[App\Http\Controllers\MenuController ::class, 'index'] );

Route::get('/login', [App\Http\Controllers\LoginController ::class, 'index'])->name('login');


Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    route::resource('/productos',ProductoController::class);
    route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');
});
