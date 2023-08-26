<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::post('/save_enquiry', [IndexController::class, 'save_enquiry'])->name('home.save_enquiry');
Route::get('/current_openings', [IndexController::class, 'current_openings'])->name('home.current_openings');
Route::get('/job_application/{id}', [IndexController::class, 'job_application'])->name('home.job_application');
Route::post('/save_job', [IndexController::class, 'save_job'])->name('home.save_job');

