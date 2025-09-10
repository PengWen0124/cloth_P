<?php

use App\Http\Controllers\QAcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});
Route::get("/qa", [QAcontroller::class, "list"]);
