<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/erp/dashboard/index');
});
// Route::get('/product', function () {
//     return view('product/index');
// });
Route::prefix("school")->controller(SchoolController::class)->group(function (){
   Route::get("/", "index");
   Route::get("create", "create");
   Route::post("save", "save");
   Route::get("edit/{id}", "edit");
   Route::post("update/{id}", "update");
   Route::delete("delete/{id}", "delete");
});

// Example Route::prefix("system")->group(function () {
//     Route::resource('users', UserController::class);
// });  Route::get("users/trashed", [UserController::class,"trashed"])->name("user.trashed");

Route::prefix("category")->group(function(){

    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class)->names("category.orders");
});





Auth



::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
