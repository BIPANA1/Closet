<?php

use App\Http\Controllers\ClosetController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ClosetController::class, 'welcome']);
Route::get('/description/{id}',[ClosetController::class,'description']);



Auth::routes();

Route::group(['middleware' => ["auth", "admin"]], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/product', [ClosetController::class, 'addProduct']);
    Route::get('/addItem',[ClosetController::class,'addItem']);
    Route::post('/create-closet',[ClosetController::class,'createCloset']);
    Route::get('/delete-closet/{id}',[ClosetController::class,'destroy']);
    Route::get('/edit/{id}',[ClosetController::class,'edit']);
    Route::post('/edit-blog/{id}',[ClosetController::class,'editBlog']);
    Route::get('/description/{id}',[ClosetController::class,'description']);
});
