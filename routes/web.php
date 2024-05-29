<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->middleware('auth');

Route::get('/profile', [ProfileController::class, 'show'])
    ->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])
    ->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy'])
    ->name('logout');

Route::get('subjects', [SubjectController::class, 'index'])
    ->name('subjects.index');
Route::get('subject/create', [SubjectController::class, 'create']);
Route::post('subjects', [SubjectController::class, 'store']);
Route::get('subjects/{subject:slug}', [SubjectController::class, 'show'])
    ->name('subjects.show');
Route::get('subjects/{subject:slug}/edit', [SubjectController::class, 'edit']);
Route::patch('subjects/{subject:slug}', [SubjectController::class, 'update']);
Route::delete('subjects/{subject:slug}', [SubjectController::class, 'destroy']);

Route::get('teachers', [TeacherController::class, 'index'])
    ->name('teachers.index');
Route::get('teachers/create', [TeacherController::class, 'create']);
Route::post('teachers', [TeacherController::class, 'store']);
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])
    ->name('teachers.show');
Route::get('teachers/{teacher}/edit', [TeacherController::class, 'edit']);
Route::patch('teachers/{teacher}', [TeacherController::class, 'update']);
Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy']);

Route::get('students', [StudentController::class, 'index'])
    ->name('students.index');
Route::get('students/create', [StudentController::class, 'create']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{student}', [StudentController::class, 'show'])
    ->name('students.show');
Route::get('students/{student}/edit', [StudentController::class, 'edit']);
Route::patch('students/{student}', [StudentController::class, 'update']);
Route::delete('students/{student}', [StudentController::class, 'destroy']);

Route::get('reports', [ReportController::class, 'index'])
    ->name('reports.index');
Route::get('reports/{report}', [ReportController::class, 'show'])
    ->name('reports.show');

Route::get('charts', [ChartController::class, 'index'])
    ->name('charts.index');

Route::get('notifications', [NotificationController::class, 'index']);
