<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\commodityController;
use App\Http\Controllers\memberController as mc;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\productController;
use App\Http\Controllers\QAcontroller;
use App\Models\member;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    echo "前端 / home";
    return view('front.home');
});

Route::group(["prefix" => "member"], function () {
    Route::get("/", [mc::class, "showLogin"]);
    Route::post("login", [mc::class, "login"]);
    Route::get("orders", [mc::class, "orders"]);

});

Route::get("/qa", [QAcontroller::class, "list"]);

Route::get("/commodity", [commodityController::class, "list"]);

Route::group(["prefix" => "myadmin"], function () {
    Route::get("/", [AdminController::class, "showLogin"]);
    Route::post("login", [AdminController::class, "login"]);
    Route::get("logout", [AdminController::class, "logout"]);
    Route::get("home", [AdminController::class, "home"])->middleware("manager");
    
});

Route::group(["middleware" => ["manager"], "prefix" => "myadmin/"], function () {

    Route::group(["prefix" => "member"], function () {
        Route::get('list', function () {
            $list = member::all();
            return view('admin.member', compact('list')); // Blade 只輸出表格部分
        })->name('member.list');
        Route::get("add", [mc::class, "add"]);
    });

    Route::group(["prefix" => "product"], function () {
        Route::get("list", [productController::class, "list"]);
        Route::get("add", [productController::class, "add"]);
    });

    Route::group(["prefix" => "orders"], function () {
        Route::get("list", [ordersController::class, "list"]);
        Route::get("add", [ordersController::class, "add"]);
    });

    Route::group(["prefix" => "account"], function () {
        Route::get("info", [adminController::class, "info"]);
        Route::get("setting", [adminController::class, "setting"]);
    });
});
