<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoaiTinController;
// use DB;




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

Route::get('/', [PostController::class, 'useForIndex']
);

Route::get('posts/all', [PostController::class, 'all']);
Route::get('/ct/{id}', [PostController::class, 'postChiTiet'])->name('ct');
Route::get('/loai/{id}', [PostController::class, 'listTin'])->name('loaitin');
Route::get('/timkiem',[PostController::class,'timKiem'])->name('timkiem');



