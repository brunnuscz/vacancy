<?php

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

use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CandidateController;

Route::get('/', [VacancyController::class, 'index']);
Route::get('/dashboard', [VacancyController::class, 'dashboard'])->middleware('auth');

Route::get('/vacancies/create', [VacancyController::class, 'createVacancy'])->middleware('auth');
Route::post('/vacancies', [VacancyController::class, 'storeVacancy']);
Route::delete('/vacancies/delete/{id}', [VacancyController::class, 'destroyVacancy'])->middleware('auth');
Route::get('/vacancies/edit/{id}', [VacancyController::class, 'editVacancy'])->middleware('auth');
Route::put('/vacancies/update/{id}', [VacancyController::class, 'updateVacancy'])->middleware('auth');


Route::get('/candidates/create', [CandidateController::class, 'createCandidate'])->middleware('auth');
Route::post('/candidates', [CandidateController::class, 'storeCandidate']);
