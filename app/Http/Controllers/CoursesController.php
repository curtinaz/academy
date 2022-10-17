<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function getCourses() {
        $courses = Course::all();
        return $courses;
    }

    public function createCourse(CreateCourseRequest $req) {
        $course = Course::create([
            "name" => $req->name,
            "description" => $req->description 
        ]);

        return $course;
    }
}
