<?php

namespace App\Http\Controllers\Script;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Script;

class ScriptController extends Controller
{

    public function index() 
    { 
        return view('scripts.index', [
            "scripts" => Script::paginate(9)
        ]);
    }

    public function show(Script $script) 
    {
        return view('scripts.show', [
            "script" => $script
        ]);
    }

}
