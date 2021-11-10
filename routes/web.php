<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillCOntroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->prefix('skill')->group(function() {
    Route::get('/', [SkillController::class, 'index'])->name('skill');
    Route::get('/{id}', [SkillController::class, 'show'])->name('skill.show');
});

require __DIR__.'/auth.php';
