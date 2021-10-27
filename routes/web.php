<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\CatalogController;

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
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/FAQ', function () {
    return view('FAQ');
})->name('FAQ');

Route::get('/guide', function () {
    return view('guide');
})->name('guide');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/filter/{company}', [App\Http\Controllers\CatalogController::class, 'filter']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('catalog', CatalogController::class);