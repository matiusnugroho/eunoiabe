<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return [$request->user(), User::first()];
})->middleware('auth:sanctum');
