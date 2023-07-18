<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesboardController;
use App\Http\Controllers\Invoices\InvoiceController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Users\UserController;

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

Auth::routes();

Route::get('/',[DesboardController::class,'index'])->name('home')->middleware('auth');

Route::get('login',[UserController::class, 'login'])->name('login');
Route::post('authenticate',[UserController::class, 'authenticate'])->name('authenticate');
Route::get('register',[UserController::class, 'register'])->name('register');
Route::post('register',[UserController::class, 'registerUser'])->name('register');
Route::get('logout',[UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['prefix'=>'user','as'=>'user.'], function(){
    Route::get('/',[UserController::class,'view'])->name('view');
    Route::get('/index',[UserController::class,'index'])->name('index');
    Route::post('/create',[UserController::class,'create'])->name('create');
});

Route::group(['prefix' => 'role', 'as'=>'role.'],function(){
    Route::get('/',[RoleController::class,'index'])->name('index');
    Route::get('/{id}',[RoleController::class, 'view'])->name('view');
});

Route::group(['prefix'=>'invoice','as'=>'invoice.'], function(){
    Route::get('/',[InvoiceController::class,'index'])->name('index');
    Route::post('/create',[InvoiceController::class,'create'])->name('create');
    Route::get('/edit/{id}',[InvoiceController::class,'edit'])->name('edit');
    Route::get('/delete/{id}',[InvoiceController::class,'delete'])->name('delete');
});
