<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\editoraController;
use App\Http\Controllers\generolitController;
use App\Http\Controllers\autorController;
use App\Http\Controllers\livrosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('editoras', editoraController::class);
Route::resource('biblioteca', generolitController::class);
Route::resource('autorCadastro', autorController::class);
Route::resource('livros', livrosController::class);
