<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WalletController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[IndexController::class,'index']);
Route::get("/home",[IndexController::class,'home']);

Route::prefix('income')->group(function(){
    Route::get('/create',[IncomeController::class,'create']);
});

Route::prefix('expense')->group(function(){
    Route::get('/create',[ExpenseController::class,'create']);
});

Route::prefix('category')->group(function(){
    Route::get('/index',[CategoryController::class,'index']);
});

Route::prefix('wallet')->group(function(){
    Route::get('/index',[WalletController::class,'index']);
});
