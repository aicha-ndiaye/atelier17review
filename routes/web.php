<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BiensController;
use App\Http\Controllers\UtilisateurController;

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

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/acceuil', function () {
    return view('acceuil');
});
Route::get('/connexion', function () {
    return view('connexion');
});


Route::get('/home', function () {
    return view('home');
});
Route::get('/listeAdmin', function () {
    return view('listeAdmin');
});

Route::get('/pageUser', function () {
    return view('pageUser');
});
Route::get('/modifsuppbien', function () {
    return view('modifsuppbien');
});
Route::get('/ajoutBien',[BiensController::class,'create']);
Route::post('/ajoutBiens',[BiensController::class,'store']);
Route::get('/user',[UtilisateurController::class,'index']);
Route::get('/connecter',[UtilisateurController::class,'index']);
Route::get('/pageAdmin',[AdminController::class,'index']);
Route::get('/modifsuppbien/{id}',[AdminController::class,'edit']);
Route::get('/voirplus/{id}',[AdminController::class,'voirplus']);


