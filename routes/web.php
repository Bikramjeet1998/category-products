<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\formcontroler;
use App\Http\Controllers\newcontrole;
use App\Http\Controllers\usercontroler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SearchController;

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

Route::get('/', function () {
    return view('old.welcome');
});

// Route::get('check{name?}', function ($name = null) {
//     $data = compact('name');
//     return view('check')->with($data);
// });
// Route::get('/demo', [newcontrole::class, 'hello']);

// Route::get('/d{name}', [newcontrole::class, 'some']);

// Route::get('/form', [formcontroler::class, 'form']);
// Route::post('/form', [formcontroler::class, 'data']);
// Route::get('/pass', [formcontroler::class, 'pass']);
// Route::get('/abc', [Controller::class, 'test']);
// Route::get('/show', [usercontroler::class, 'show']);
// Route::post('my/submit/form', [usercontroler::class, 'insert'])->name('insert');

// By Kawal

Route::group(['moduleNamee' => 'dashboard'], function () {
    Route::get('dashboard', 'DashboardController@home')->name('dashboard');
    Route::resource('categories', CategoriesController::class);
    Route::post('/categories/destroy/{id}', 'CategoriesController@destroy');
    // route::get('/categories/search', 'CategoriesController@index');
});


Route::resource('products', ProductsController::class);
Route::get('products/search/list', 'ProductsController@search')->name('products.search');
// Route::DELETE('/products/destroy/{id}', 'ProductsController@destroy');
// Route::get('/search', 'ProductController@search');
// Route::get('check', 'SearchController@search')->name('search');
// Route::get('search', 'ProductController@search')->name('search');
// Route:: resource('product',)

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
