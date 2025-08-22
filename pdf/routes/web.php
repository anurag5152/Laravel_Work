<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resume_1/download', [ResumeController::class, 'download'])->name('resume_1.download');
Route::get('/resume_1/preview', [ResumeController::class, 'preview'])->name('resume_1.preview');


Route::get('/resume_one/download', [ResumeController::class, 'downloadOne'])->name('resume_one.download');
Route::get('/resume_one/preview', [ResumeController::class, 'previewOne'])->name('resume_one.preview');
