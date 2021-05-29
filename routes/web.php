<?php

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

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

use App\Http\Controllers\MahasiswaController;
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

use App\Http\Controllers\StudentsController;
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::get('/students/{student}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);
