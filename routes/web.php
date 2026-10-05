<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/',[EtudiantController::class, 'liste_etudiant']);
Route::get('/update-etudiant/{id}',[EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement',[EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/ajouter',[EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::get('/delete-etudiant/{id}',[EtudiantController::class, 'delete_etudiant']);
