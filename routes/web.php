<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('subjects', [SubjectController::class, 'index'])
    ->name('subjects.index');
Route::get('subjects/{subject:slug}', [SubjectController::class, 'show'])->name('subjects.show');
Route::get('subject/create', [SubjectController::class, 'create']);

Route::get('teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/{student}', [StudentController::class, 'show'])->name('students.show');

Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('reports/{report}', [ReportController::class, 'show'])->name('reports.show');
