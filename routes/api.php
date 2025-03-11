<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RollController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;



// http://php_api.test/api/users/roll


Route:: get('/roll', [RollController::class, "index"]);
Route:: get('/status', [StatusController::class, "status"]);
Route:: get('/store', [UserController::class, "store"]);

// http://php_api.test/api/users/
Route:: get('/users', [UserController::class, "index"]);

// http://php_api.test/api/users/1
Route:: get('/users/{user}', [UserController::class, 'show']);

// http://php_api.test/api/users/
Route:: post('/users', [UserController::class, "store"]);

// http://php_api.test/api/users/
Route:: put('/users/{user}', [UserController::class, "update"]);




