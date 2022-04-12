<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Script\ScriptController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\IndexController;

// Route::get('/', function () {
//     return view('index');
//     Route::get('/', 'index')->name('index')
// });


Route::controller(IndexController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});



Route::controller(ScriptController::class)->group(function() {
    Route::get('/scripts', 'index')->name('scripts.index');
    Route::get('/scripts/create', 'create')->name('scripts.create');
    Route::post('/scripts', 'store')->name('scripts.store');
    Route::get('/scripts/{script:slug}', 'show')->name('scripts.show');
});


Route::controller(UserProfileController::class)->group(function() {
    Route::get('/@', 'index')->name('user-profile.index');
    Route::get('/@{user}', 'show')->name('user-profile.show');
});



require __DIR__.'/auth.php';



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/docs', function () {
    return ;// lua-documentation is under this route via web server redirect in a different repo
});