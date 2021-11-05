<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Webfrontend\AboutController;
use App\Http\Controllers\Webfrontend\ProductController;
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
Route::get('/shop', function () {
    return view('shops.shop');
});
Route::get('/about', [AboutController::class, 'aboutPage']);
Route::get('/product', [ProductController::class, 'productPage']);
Route::get('/contact', [ContactController::class, 'contactPage']);