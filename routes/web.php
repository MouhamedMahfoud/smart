<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AgenceCommunicationController;
use App\Http\Controllers\PrintEdictionController;
use App\Http\Controllers\SignaletiqueController;
use App\Http\Controllers\ReseauxSociauxController;
use App\Http\Controllers\GoodiesController;
use App\Http\Controllers\siteWebController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\PersonnalisationTextileController;
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

Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'store'])->name('contact.us.store');

Route::get('/email', function () {
    return view('emails.contact');
});
//! agence
Route::get('/agence-de-communication',[AgenceCommunicationController::class,'index']);
Route::get('/studio-creation',[AgenceCommunicationController::class,'studioCreation']);
Route::get('/studio-logo',[AgenceCommunicationController::class,'studioLogo']);
Route::get('/studio-Charte-graphique',[AgenceCommunicationController::class,'studioCharteGraphique']);
Route::get('/creation-logo',[AgenceCommunicationController::class,'creationLogo']);
Route::get('/Charte-graphique',[AgenceCommunicationController::class,'carteGraphie']);
//! print-edition
Route::get('/print-edition',[PrintEdictionController::class,'index']);

//! signaletique
Route::get('/signaletique',[SignaletiqueController::class,'index']);

//! RéseauxSociaux
Route::get('/reseauxSociaux',[ReseauxSociauxController::class,'index']);

//! Goodies
Route::get('/Goodies',[GoodiesController::class,'index']);

//! site web
Route::get('/siteweb',[siteWebController::class,'index']);

//! site web
Route::get('/Production-even',[ProductionController::class,'index']);

//! PersonnalisationTextile
Route::get('/Personnalisation',[PersonnalisationTextileController::class,'index']);
