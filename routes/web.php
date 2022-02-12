<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PilihanController;
use App\Http\Controllers\VoteController;
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


// Route::get('/',function(){
//     return 'Hello World'
// });
Route::get('/', [HomeController::class, 'login']);
Route::get('home', [HomeController::class, 'index']);
Route::post('auth', [HomeController::class, 'auth']);
Route::get('tambah', [PilihanController::class, 'index']);
Route::get('create', [PilihanController::class, 'create']);
Route::post('store', [PilihanController::class, 'store']);
Route::get('edit{id}', [PilihanController::class, 'edit']);
Route::post('edit{id}', [PilihanController::class, 'update']);
Route::get('vote', [VoteController::class, 'vote']);
Route::get('hasil', [VoteController::class, 'hasil']);
Route::get('cetak', [VoteController::class, 'cetak']);
Route::post('delete{id}', [VoteController::class, 'delete']);
Route::get('votting{id}', [VoteController::class, 'votting']);
Route::post('deleted{id}', [PilihanController::class, 'destroy']);
Route::get('logout', [HomeController::class, 'logout']);
