<?php

use App\Http\Controllers\ProdutosController;
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

Route::get('/layout', function () {
    return view('layouts.layoutBase');
});


Route::get('/', 'ProdutosController@index');

Route::get('/carrinho', function () {
    return view('cart');
});

Route::get('/produtos', function () {
    return view('product-details');
});

Route::get('/shop', 'ProdutosController@catalogo');

Route::get('/pagamento', function () {
    return view('checkout');
});