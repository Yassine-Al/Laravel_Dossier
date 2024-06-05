<?php

use App\Http\Controllers\BibliController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function(){
    Route::resource('Commande' , CommandeController::class);
});


// Route Login
Route::get('login', [LoginController::class , 'login']);
Route::post('Connect', [LoginController::class , 'connect'])->name('connect');


Route::get('Liste_Commande', [CommandeController::class , 'index'])->name('index');
Route::get('Commande_Create', [CommandeController::class , 'create'])->name('create');
Route::post('Commande_store', [CommandeController::class , 'store'])->name('store');
Route::get('Commande_edit/{id}', [CommandeController::class , 'edit'])->name('edit');
Route::put('Commande_update/{id}', [CommandeController::class , 'update'])->name('update');
Route::delete('Commande_delete/{id}', [CommandeController::class , 'destroy'])->name('delete');
