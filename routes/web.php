<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resume', [ResumeController::class, 'index']);
Route::post('/resume', [ResumeController::class, 'store']);


Route::get('/resumes/create', function () {
    return view('create'); // Adjust the view name as needed
})->name('resume.create');

Route::post('/resumes', [ResumeController::class, 'store'])->name('resume.store');
