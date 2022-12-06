<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;
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




Route::get('/', [HomeController::class,'index']);


Route::get('/cadastro',function(){
    return view('cadastro');
});
Route::get('/login',function(){
    return view('login');
});

Route::get('/editar/{id}',[PedidoController::class,'editar']);


Route::post('/cadastro',[UserController::class,'create']);
Route::post('/pedido',[PedidoController::class,'create']);
Route::post('/login',[UserController::class,'login']);
Route::post('/update',[PedidoController::class,'update']);
Route::delete('/remove/{id}',[PedidoController::class,'destroy']);
