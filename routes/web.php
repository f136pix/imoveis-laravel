<?php

use App\Http\Controllers\ListaController;
use Illuminate\Support\Facades\Route;
use App\Models\Lista;

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

// main page
Route::get('/', [ListaController::class, 'index']);

// render form 
Route::get('/oportunidades/criar', [ListaController::class, 'create']);

// store item
Route::post('/oportunidades', [ListaController::class, 'store']);

// edit item page
Route::get('/oportunidades/{id}/edit', [ListaController::class, 'edit']);

// update item
Route::put('oportunidades/{id}', [ListaController::class, 'update']);

// unico item          // url param
Route::get('/oportunidades/{id}', [ListaController::class, 'show']);



