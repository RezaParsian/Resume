<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(["register" => false, "reset" => false]);


Route::prefix("dashboard")->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource("portfolio", PortfolioController::class);
});


Route::prefix("/")->group(function () {
    Route::get("/", [BlogController::class, "index"])->name("blog.index");
    Route::get("/portfolio/{slug}", [BlogController::class, "show"])->name("blog.show");
});
