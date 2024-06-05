<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Http\Request;
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
})->name('welcome');

Route::get('/test/{nom}/{id}', function (Request $request) {
    $str="bonjour ";
    $nom = $request->nom;
    $id = $request->id;
    $str.="nous sommes le ".date("d/m/Y")."<br/>";
    $str.="je m'apelle ".$nom."<br/>";
    $str.= "mon id est ".$id."<br/>";
    return $str;
});


Route::get('/tdd', function () {
    return view('tdd');
});


Route::get('/edit',  [EtudiantController::class , 'Edit']);



Route::get('/Create', [EtudiantController::class , 'Create'])->name('create');

Route::get('/index', [EtudiantController::class , 'index'])->name('index');

Route::post('/store', [EtudiantController::class , 'Store'] )->name('store');

Route::put('/update/{id}', [EtudiantController::class,'update'])->name('update');

Route::view('/TestMiddleware' , 'TestMiddleware')->middleware('Test');

// Route::get('Home' , function(){
//     return 'Hello';
// });

Route::get('/Home/{Nom?}', function($n=null){
    return 'hello' .$n;
});


Route::get('/Stagiaire' , [StagiaireController::class , 'index'])->name('index');

Route::get('/StagiaireCreate' , [StagiaireController::class , 'create'])->name('create');

Route::post('/StagiaireStore' , [StagiaireController::class , 'store'])->name('store');

Route::get('/StagiaireShow/{id}' , [StagiaireController::class , 'show'])->name('show');

Route::post('/StagiaireUpdate/{id}' , [StagiaireController::class , 'update'])->name('update');

Route::get('/Delete/{id}', [StagiaireController::class , 'showdelete'])->name('showdelete');

Route::get('/StagiaireDelete/{id}' , [StagiaireController::class , 'destroy'])->name('delete');

// Filtrage

