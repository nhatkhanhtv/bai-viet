<?php

use App\Http\Controllers\BaiVietController;
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


Route::get('/bai-viet/',[BaiVietController::class,'index'])->name('bai-viet.index');;
Route::get('/bai-viet/them-moi',[BaiVietController::class, 'create'])->name('bai-viet.create');
Route::post('/bai-viet/luu',[BaiVietController::class, 'store'])->name('bai-viet.store');