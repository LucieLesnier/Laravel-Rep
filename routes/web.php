<?php

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
    return 'Home page';
});
Route::get('/cart', function () {
    return 'Panier';
});
Route::get('/product/{id}', function ($id) {
    return 'Fiche du produit'.' '.$id;
});
Route::get('/product', function () {
    return 'Liste des produits';
});
