<?php

use App\Http\Controllers\TemplateController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/template1', [TemplateController::class, 'show1'])->name('resume.show1');
Route::get('/template2', [TemplateController::class, 'show2'])->name('resume.show2');
Route::get('/template3', [TemplateController::class, 'show3'])->name('resume.show3');
Route::get('/template4', [TemplateController::class, 'show4'])->name('resume.show4');
Route::get('/template5', [TemplateController::class, 'show5'])->name('resume.show5');
Route::get('/template6', [TemplateController::class, 'show6'])->name('resume.show6');
Route::get('/template7', [TemplateController::class, 'show7'])->name('resume.show7');
Route::get('/template8', [TemplateController::class, 'show8'])->name('resume.show8');
Route::get('/template9', [TemplateController::class, 'show9'])->name('resume.show9');
Route::get('/template10', [TemplateController::class, 'show10'])->name('resume.show10');
Route::get('/template11', [TemplateController::class, 'show11'])->name('resume.show11');
Route::get('/template12', [TemplateController::class, 'show12'])->name('resume.show12');