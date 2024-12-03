<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/dashboard', function () {
    return view('inicio');
})->name('inicio');




Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('projects', ProjectController::class)->except(['index', 'show']);
});


Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
});


Route::middleware('auth')->group(function () {
    Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
});