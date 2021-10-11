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
// Front Route
Route::get('/', function () {
    return view('welcome');
});

// Admin Route
Route::prefix('admin')->group(function () {
    // admin/artikel
    Route::get('/artikel', function () {
        return view('artikel.index');
    });
    Route::get('/kategori', function () {
        return view('kategori.index');
    });

});
