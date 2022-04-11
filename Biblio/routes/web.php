<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExemplaireController;
use App\Http\Controllers\AccueilController;


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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [App\Http\Controllers\AccueilController::class, 'index'])->name('welcome');

Route::get('/livre', [App\Http\Controllers\LivreController::class, 'index'])->name('livre');
Route::get('/liste_livre', [App\Http\Controllers\LivreController::class, 'index0'])->name('liste_livre');
Route::get('/nouveau_livre', [App\Http\Controllers\LivreController::class, 'index1'])->name('nouveau_livre');
Route::get('/supprimer_livre', [App\Http\Controllers\LivreController::class, 'index2'])->name('supprimer_livre');

Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('/liste_client', [App\Http\Controllers\ClientController::class, 'index0'])->name('liste_client');
Route::get('/nouveau_client', [App\Http\Controllers\ClientController::class, 'index1'])->name('nouveau_client');


Route::get('/supprimer_client', [App\Http\Controllers\ClientController::class, 'index2'])->name('supprimer_client');
Route::get('/inspecter_client', [App\Http\Controllers\ClientController::class, 'index3'])->name('inspecter_client');

Route::get('/exemplaire', [App\Http\Controllers\ExemplaireController::class, 'index'])->name('exemplaire');
Route::get('/liste_exemplaire', [App\Http\Controllers\ExemplaireController::class, 'index0'])->name('liste_exemplaire');
Route::get('/nouveau_exemplaire', [App\Http\Controllers\ExemplaireController::class, 'index1'])->name('nouveau_exemplaire');
Route::get('/supprimer_exemplaire', [App\Http\Controllers\ExemplaireController::class, 'index2'])->name('supprimer_exemplaire');







Route::post('/nouveau_client', function(){


    $client = new App\Client;
 /*
    $client->nom = request('nom');
    $client->prenom = request('prenom');
    $client->adresse = request('adresse');
    $client->NPA = request('NPA');
    $client->ville = request('ville');
    $client->tel = request('tel');
    $client->save();
    */
    return "Nous avons bien recu M." . request('nom');


});



