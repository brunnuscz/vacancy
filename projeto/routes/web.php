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

Route::get('/', [VacancyController::class, 'index']);
Route::get('/vacancies/create', [VacancyController::class, 'create'])->middleware('auth');
Route::get('/dashboard', [VacancyController::class, 'dashboard'])->middleware('auth');

Route::post('/vacancies', [VacancyController::class, 'store']);

