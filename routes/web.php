<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScriptController;


Route::get('/', function () {
    return view('index');
});


Route::controller(ScriptController::class)->group(function() {
    Route::get('/scripts', 'index')->name('scripts.index');
    Route::get('/scripts/{script:slug}', 'show')->name('scripts.show');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::get('/docs', function () {
    return ;// lua-documentation is under this route via web server redirect in a different repo
});