<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class, 'index'])->name('');
Route::get('/product/create',[ProductController::class, 'create'])->name('create');
Route::post('/product/create',[ProductController::class, 'getdata'])->name('create');
Route::get('/product/details',[ProductController::class, 'details'])->name('details');
Route::get('/product/list',[ProductController::class, 'list'])->name('list');
Route::get('/product/edit/{id}/{name}',[ProductController::class, 'edit']);
Route::post('/product/edit',[ProductController::class, 'editSubmit'])->name('edit');
Route::get('/product/delete/{id}/{name}',[ProductController::class,'delete']);
