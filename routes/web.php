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

Route::middleware('auth')->group(function () {
    Route::view('/', 'home');
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::post('/logout', [SessionController::class, 'destroy'])
        ->name('logout');
});
Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});
Route::controller(SubjectController::class)->group(function () {
    Route::get('subjects', 'index');
    Route::get('subjects/create', 'create');
    Route::post('subjects', 'store');
    Route::get('subjects/{subject:slug}', 'show');
    Route::get('subjects/{subject:slug}/edit', 'edit');
    Route::patch('subjects/{subject:slug}', 'update');
    Route::delete('subjects/{subject:slug}', 'destroy');
});
Route::controller(StudentController::class)->group(function () {
    Route::get('students', 'index');
    Route::get('students/create', 'create');
    Route::post('students', 'store');
    Route::get('students/{student}', 'show');
    Route::get('students/{student}/edit', 'edit');
    Route::patch('students/{student}', 'update');
    Route::delete('students/{student}', 'destroy');
});
Route::controller(TeacherController::class)->group(function () {
    Route::get('teachers', 'index');
    Route::get('teachers/create', 'create');
    Route::post('teachers', 'store');
    Route::get('teachers/{teacher}', 'show');
    Route::get('teachers/{teacher}/edit', 'edit');
    Route::patch('teachers/{teacher}', 'update');
    Route::delete('teachers/{teacher}', 'destroy');
});
Route::controller(ReportController::class)->group(function () {
    Route::get('reports', 'index');
    Route::get('reports/create', 'create');
    Route::post('reports', 'store');
    Route::get('reports/{report}', 'show');
    Route::get('reports/{report}/edit', 'edit');
    Route::patch('reports/{report}', 'update');
    Route::delete('reports/{report}', 'destroy');
});
Route::get('charts', [ChartController::class, 'index']);

Route::get('notifications', [NotificationController::class, 'index']);
