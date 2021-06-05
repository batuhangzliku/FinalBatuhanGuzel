<?php
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('student');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/studentsave', [StudentController::class, 'Save'])->name('Save');
Route::post('/saveInformation', [StudentController::class, 'saveInformation'])->name('saveInformation');
