<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function getCourses() {
        return [
            "name" => "Laravel 9 Curso Completo",
            "alunos" => 75
        ];
    }
}
