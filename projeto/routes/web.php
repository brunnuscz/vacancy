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
Route::get('/panel', [VacancyController::class, 'panel'])->middleware('auth');

Route::get('/vacancy/create', [VacancyController::class, 'createVacancy'])->middleware('auth');
Route::post('/vacancy', [VacancyController::class, 'storeVacancy']);
Route::delete('/vacancy/delete/{id}', [VacancyController::class, 'destroyVacancy'])->middleware('auth');
Route::get('/vacancy/edit/{id}', [VacancyController::class, 'editVacancy'])->middleware('auth');
Route::put('/vacancy/update/{id}', [VacancyController::class, 'updateVacancy'])->middleware('auth');
Route::get('/vacancy/show/{id}', [VacancyController::class, 'showVacancy'])->middleware('auth');


Route::get('/candidate/create', [CandidateController::class, 'createCandidate'])->middleware('auth');
Route::post('/candidate', [CandidateController::class, 'storeCandidate']);
Route::delete('/candidate/delete/{id}', [CandidateController::class, 'destroyCandidate'])->middleware('auth');
Route::get('/candidate/edit/{id}', [CandidateController::class, 'editCandidate'])->middleware('auth');
Route::put('/candidate/update/{id}', [CandidateController::class, 'updateCandidate'])->middleware('auth');