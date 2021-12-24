<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('/store', [MahasiswaController::class, 'store']); 
Route::get('/edit/{mahasiswaID}', [MahasiswaController::class, 'edit']); 
Route::post('/update/{mahasiswaID}', [MahasiswaController::class, 'update']); 
Route::get('/delete/{mahasiswaID}', [MahasiswaController::class, 'destroy']); 
