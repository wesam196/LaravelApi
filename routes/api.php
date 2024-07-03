<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/data/{id}/{pass}" , [myApi::class,"getData"]);

Route::post("/postData" , [myApi::class,"postData"]);
