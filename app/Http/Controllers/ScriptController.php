<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Script;

class ScriptController extends Controller
{

    function index() 
    { 
        return view('scripts.index', [
            "scripts" => Script::all()
        ]);
    }

    function show() {
        
    }

}
