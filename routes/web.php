<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('dashboard', function (){
   return view('main.dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('main.home');
})->name('home');

Route::resource('groups', GroupController::class)->middleware('auth');
Route::resource('subjects', SubjectController::class)->middleware('auth');
Route::post('/subjects/{subjectId}/grade', [SubjectController::class, 'saveGrade'])->name('subjects.saveGrade');


require __DIR__.'/auth.php';
