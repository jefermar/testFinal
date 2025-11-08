<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('Categorys')->group(function(){
    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('{id}', [CategoryController::class, 'show']);
    Route::put('{id}', [CategoryController::class, 'update']);
    Route::delete('{id}', [CategoryController::class, 'destroy']);
});

Route::prefix('Messages')->group(function(){
    Route::get('/', [MessageController::class, 'index']);
    Route::post('/', [MessageController::class, 'store']);
    Route::get('{id}', [MessageController::class, 'show']);
    Route::put('{id}', [MessageController::class, 'update']);
    Route::delete('{id}', [MessageController::class, 'destroy']);
});

Route::prefix('Notificacions')->group(function(){
    Route::get('/', [NotificacionController::class, 'index']);
    Route::post('/', [NotificacionController::class, 'store']);
    Route::get('{id}', [NotificacionController::class, 'show']);
    Route::put('{id}', [NotificacionController::class, 'update']);
    Route::delete('{id}', [NotificacionController::class, 'destroy']);
});

Route::prefix('Profiles')->group(function(){
    Route::get('/', [ProfileController::class, 'index']);
    Route::post('/', [ProfileController::class, 'store']);
    Route::get('{id}', [ProfileController::class, 'show']);
    Route::put('{id}', [ProfileController::class, 'update']);
    Route::delete('{id}', [ProfileController::class, 'destroy']);
});

Route::prefix('Publications')->group(function(){
    Route::get('/', [PublicationController::class, 'index']);
    Route::post('/', [PublicationController::class, 'store']);
    Route::get('{id}', [PublicationController::class, 'show']);
    Route::put('{id}', [PublicationController::class, 'update']);
    Route::delete('{id}', [PublicationController::class, 'destroy']);
});

Route::prefix('Roles')->group(function(){
    Route::get('/', [RoleController::class, 'index']);
    Route::post('/', [RoleController::class, 'store']);
    Route::get('{id}', [RoleController::class, 'show']);
    Route::put('{id}', [RoleController::class, 'update']);
    Route::delete('{id}', [RoleController::class, 'destroy']);
});

Route::prefix('Users')->group(function(){
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('{id}', [UserController::class, 'show']);
    Route::put('{id}', [UserController::class, 'update']);
    Route::delete('{id}', [UserController::class, 'destroy']);
});