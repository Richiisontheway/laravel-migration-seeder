<?php

use App\Http\Controllers\treni\TrainController;
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
Route::get('/', [TrainController::class, 'index'])->name('welcome');



// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
