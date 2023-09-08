<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('register');
});


Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout',[LoginController::class,'logout'])->name("logout");

Route::get('/login',[RegisterController::class,'tampil'])->name('login');
Route::get('/register',[RegisterController::class,'tambah']);
Route::post('/register/save',[RegisterController::class,'save']);

Route::prefix("/")->middleware("auth")->group(function(){


    Route::get('beranda', ['\App\Http\Controllers\PageDepanController', 'beranda']);


    Route::get('stok', ['\App\Http\Controllers\PageDepanController', 'stok']);

    Route::get('dokter', ['\App\Http\Controllers\PageDepanController', 'dokter']);

    Route::get('tentang', ['\App\Http\Controllers\PageDepanController', 'tentang']);


    Route::get('data', ['\App\Http\Controllers\PageDepanController', 'data']);
    Route::post('data/register', ['\App\Http\Controllers\PageDepanController', 'register_member']);
    
    
    Route::get('blog', ['\App\Http\Controllers\PageDepanController', 'blog']);
    
    
    Route::get('kontak', ['\App\Http\Controllers\PageDepanController', 'kontak']);
    
    
    
});

Route::middleware(['auth'])->group(function(){
    Route::get('admin', ['\App\Http\Controllers\PageDepanController','admin']);
    Route::get('tambahdata', ['\App\Http\Controllers\PageDepanController', 'tambahdataview']);
    Route::get('listpendonor', ['\App\Http\Controllers\PageDepanController', 'listpen']);
    Route::post('tambahdata', ['\App\Http\Controllers\PageDepanController', 'tambahdata']);
});