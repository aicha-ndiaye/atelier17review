<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiensController;
use App\Http\Controllers\UtilisateurController;
use Faker\Guesser\Name;

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



Route::get('/ajoutBien',[BiensController::class,'create']);
Route::post('/ajoutBiens',[BiensController::class,'store']);
Route::get('/user',[UtilisateurController::class,'index']);
Route::get('/connecter',[UtilisateurController::class,'index']);
Route::get('/pageAdmin',[AdminController::class,'index']);
Route::get('/modifierBien/{id}',[AdminController::class,'edit']);
Route::get('/voirplus/{id}',[AdminController::class,'voirplus']);
Route::get('/supprimerBien/{id}',[AdminController::class,'delete']);
Route::post('/modificationBien/{bien}',[AdminController::class,'update']);
Route::get('/pageUser',[UserController::class,'index']);
Route::get('/inscription',[UserController::class,'create']);
Route::post('/inscriptionUser',[UserController::class,'store']);
Route::post('/connecters',[UserController::class,'connecter']);
Route::get('/acceuil',[AdminController::class,'show']);

Route::get('/connexion',[UserController::class,'connexion']);

Route::post('/auth',[AuthController::class,'authentificate'])->name('auth');


