<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/shop', ProductsController::class);

Route::resource('/admin', AdminsController::class);

Auth::routes();

Auth::routes(['reset' => false]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', function ()
// {
//     if (auth()->user()->account_type == 'admin') 
//     {
//         redirect('/admin');
//     }
//     else 
//     {
//         redirect('/');
//     }
// });

