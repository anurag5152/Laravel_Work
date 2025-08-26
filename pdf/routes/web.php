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


Route::get('/resume_2/download', [ResumeController::class, 'downloadTwo'])->name('resume_2.download');
Route::get('/resume_2/preview', [ResumeController::class, 'previewTwo'])->name('resume_2.preview');

Route::get('/resume_3/download', [ResumeController::class, 'downloadThree'])->name('resume_3.download');
Route::get('/resume_3/preview', [ResumeController::class, 'previewThree'])->name('resume_3.preview');

Route::get('/resume_4/download', [ResumeController::class, 'downloadFour'])->name('resume_4.download');
Route::get('/resume_4/preview', [ResumeController::class, 'previewFour'])->name('resume_4.preview');


Route::get('/resume/generate', [ResumeController::class, 'generate']);
Route::get('/resume/generate1', [ResumeController::class, 'generate1']);
