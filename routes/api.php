<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Middleware\SetSanctumGuard;
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

Route::post('/create',[AdminController::class,'store']);
Route::post('/login',[AdminController::class, 'login']);
Route::get('admin/teste',[AdminController::class, 'verificaUsuarioLogado'])->middleware([
    'auth:sanctum',SetSanctumGuard::class, IsAuthenticated::class]);