<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\CatalogController;
use App\Models\Catalog;

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

Route::get('/Guide', function () {
    return view('Guide');
})->name('Guide');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/insurance', function () {
    return view('insurance');
})->name('insurance');

Route::get('/calculator', function () {
    return view('calculator');
})->name('calculator');

Route::get('/filter/{company}', [App\Http\Controllers\CatalogController::class, 'filter']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/calculate', 'Calculator@calculatefunc');


Route::resource('catalog', CatalogController::class);

Route::get('catalog/filter/category/{type}', function ($type) {
    $items = Catalog::all()->where('sale_type',$type);
      return view('catalog/index')->with('items', $items);
});

Route::get('catalog/filter/type/{type}', function ($type) {
    $items = Catalog::all()->where('type',$type);
      return view('catalog/index')->with('items', $items);
});

Route::get('catalog/filter/company/{type}', function ($type) {
    $items = Catalog::all()->where('company',$type);
      return view('catalog/index')->with('items', $items);
});
