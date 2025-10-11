<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
Route::view('/productos', 'landing.products')->name('products');
Route::view('/suma', 'landing.suma')->name('suma');
Route::post('/suma', [App\Http\Controllers\SumaController::class, 'sumar'])->name('suma.post');
// Route::post('/suma', [App\Http\Controllers\SumaController::class, 'sumar'])->name('suma.post');
