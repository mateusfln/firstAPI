<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

// Listar todos os produtos
Route::get('produtos', [ProdutosController::class, 'index']);

// Mostrar um produto específico
Route::get('produtos/{id}', [ProdutosController::class, 'show']);

// Criar um novo produto
Route::post('produtos', [ProdutosController::class, 'store']);

// Atualizar um produto
Route::put('produtos/{id}', [ProdutosController::class, 'update']);

// Excluir um produto
Route::delete('produtos/{id}', [ProdutosController::class, 'destroy']);