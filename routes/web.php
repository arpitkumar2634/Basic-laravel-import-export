<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/export', [StudentController::class, 'export'])->name('students.export');
Route::post('/import', [StudentController::class, 'import'])->name('students.import');
