<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Script;

class IndexController extends Controller
{
    public function index() 
    { 
        return view('index', [
            "scripts" => Script::paginate(6)
        ]);
    }
}
