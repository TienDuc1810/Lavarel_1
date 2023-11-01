<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/student/list', [StudentController::class, 'listStudent'])->name('list');
Route::get('/student/create', [StudentController::class, 'createStudent'])->name('create');
Route::post('/student/store', [StudentController::class, 'storeStudent'])->name('store');

Route::get('/product/list', [ProductController::class, 'listProduct'])->name('list');
Route::get('/product/create', [ProductController::class, 'createProduct'])->name('create');
Route::post('/product/store', [ProductController::class, 'storeProduct'])->name('store');
Route::delete('/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete');
