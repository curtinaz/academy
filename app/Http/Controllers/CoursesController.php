<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function show(Request $req) {
        $course = Course::where('id', $req->course_id)->with('modules')->first();
        if(!$course) {
            return response([
                "Course not found"
            ], 404);
        }

        return $course;
    }

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

    public function updateCourse(UpdateCourseRequest $req) {

        $course = Course::find($req->course_id);
        if(!$course) {
            return response(["Course not found"], 404);
        }

        $req->name ? $course->name = $req->name : null;
        $req->description ? $course->description = $req->description : null;

        $course->save();

        return $course;
    }

    public function deleteCourse(Request $req) {

        $course = Course::find($req->course_id);
        if(!$course) {
            return response(["Course not found"], 404);
        }

        $course->delete();

        return response([
            "Course deleted"
        ], 200);
    }
}
