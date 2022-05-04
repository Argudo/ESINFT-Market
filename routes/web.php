<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login',[UserController::class, 'login']);
//Route::get('/home',[UserController::class, 'home']);
Route::get('/', function () {
    return view('welcome');
});


Route::post('/perfil',[UserController::class, 'perfil']);
Route::get('/perfil',[UserController::class, 'perfil']);

Route::post('/actualizar',[UserController::class, 'actualizar']);
Route::post('/home',[UserController::class, 'añadirUser']);
Route::get('/home',[UserController::class, 'home']);

Route::get('/NFT',[UserController::class, 'NFT']);
Route::post('/NFT',[UserController::class, 'NFT']);

Route::post('/guardarNFT',[UserController::class, 'saveNFT']);

Route::get('/misNFTs',[UserController::class, 'myNFTs']);
