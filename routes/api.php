<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ModulesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses',[CoursesController::class, 'getCourses']);
Route::post('/courses', [CoursesController::class, 'createCourse']);
Route::get('/courses/{course_id}', [CoursesController::class, 'show']);
Route::patch('/courses/{course_id}', [CoursesController::class, 'updateCourse']);
Route::delete('/courses/{course_id}', [CoursesController::class, 'deleteCourse']);


Route::get('/modules/{module_id}', [ModulesController::class, 'show']);