<?php

use App\Http\Controllers\NotaireController;
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


Route::get('/rechercher', [NotaireController::class , 'Rechercher']);

Route::post('/supprimerTous' , [NotaireController::class , 'SupprimerTous']);

Route::post('/ajouter' , [NotaireController::class , 'Ajouter']);
