<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Get User Info
Route::get('/user/{user}/', [UserController::class, 'getUser']);
Route::get('/users', [UserController::class, 'getUsers']);

// Get User Posts
Route::get('/user/{user}/posts', [PostController::class, 'getUserPosts']);
