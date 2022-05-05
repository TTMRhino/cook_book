<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RecipeController;
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
Auth::routes();
Route::middleware(['auth','role:admin'])->prefix('admin_panel')->group( function(){

Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

Route::resource('Recipe',App\Http\Controllers\Admin\RecipeController::class);


//user LogOut
Route::get('logout', [App\Http\Controllers\Admin\UserController::class, 'logout'])->name('User.logout');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
