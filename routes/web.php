<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', [StudentsController::class, 'index'])->name('home');
Route::get('/students/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentsController::class, 'store'])->name('students.store');
Route::get('/students/edit/{id}', [StudentsController::class, 'edit'])->name('students.edit');
Route::post('/students/update/{id}', [StudentsController::class, 'update'])->name('students.update');
Route::get('/students/destroy/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
