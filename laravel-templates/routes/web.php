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