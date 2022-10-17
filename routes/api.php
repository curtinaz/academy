<?php

use App\Http\Controllers\CoursesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses',[CoursesController::class, 'getCourses']);
Route::post('/courses', [CoursesController::class, 'createCourse']);