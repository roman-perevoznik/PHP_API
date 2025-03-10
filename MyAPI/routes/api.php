<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RollController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StoreController;

//http://myapi.test/api/roll


Route:: get('/roll', [RollController::class, "index"]);
Route:: get('/status', [StatusController::class, "status"]);
Route:: get('/store', [StoreController::class, "store"]);