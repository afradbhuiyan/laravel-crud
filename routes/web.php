<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', [StudentsController::class, 'index'])->name('home');
Route::get('/students/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentsController::class, 'store'])->name('students.store');
