<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function show(Request $req) {
        $module = Module::find($req->module_id);
        return $module;
    }
}
