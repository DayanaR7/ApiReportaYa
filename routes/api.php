<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




use App\Http\Controllers\UserController;
Route::middleware('auth:sanctum')->group(function () {


});
Route::post('/usuario/register', [UserController::class, 'register']);//registrarce
Route::post('/usuario/login', [UserController::class, 'login']);//guardar la secion