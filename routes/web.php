<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('home', [
        'name' => 'Farras Rifqi',
        'role' => 'admin',
        'buah' => ['Apel', 'Semangka', 'Melon', 'Starberry', 'Jeruk']
    ]);
});

Route::get('/student', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);
Route::get('/ekskul', [EkskulController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);