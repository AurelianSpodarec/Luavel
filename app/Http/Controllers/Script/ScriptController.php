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
            "scripts" => Script::latest()->paginate(9)
        ]);
    }

    public function show(Script $script) 
    {
        return view('scripts.show', [
            "script" => $script
        ]);
    }

    public function create()
    {
        return view('scripts.create');
    }

    public function store(Script $script)
    {
        // request()->validate([
        //     'category_id' => 'sometimes',
        //     'title' => 'required',
        //     // $table->foreignId('category_id');

        //     // $table->string('title');
        //     // $table->string('slug')->unique();
        //     // $table->text('excerpt');
        // ]);

        $script->create([
            'user_id' => request()->user()->id,
            'category_id' => 1,
            'slug' => 'sasssa',
            'excerpt' => 'sjkddddddddddddd',
            'title' => request('title')
        ]);


        return redirect()->route('scripts.index');
    }

    public function destroy()
    {

    }

}
