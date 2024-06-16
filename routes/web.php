<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/student',StudentController::class);
Route::resource('/teacher',TeacherController::class);
Route::resource('/practice',\App\Http\Controllers\PracticeController::class);
Route::resource('/doctor',\App\Http\Controllers\DoctorController::class);
Route::resource('/learning',\App\Http\Controllers\LearningController::class);
