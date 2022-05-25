<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;

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

Route::get('/', [CommonController::class, 'partOne']);

Route::get('subject-list',[CommonController::class, 'subjectList'])->name('subject.list');
Route::get('faculty-list',[CommonController::class, 'facultyList'])->name('faculty.list');
Route::get('subject-add',[CommonController::class, 'subjectAdd'])->name('subject.add');
Route::get('faculty-add',[CommonController::class, 'facultyAdd'])->name('faculty.add');
Route::post('subject-store',[CommonController::class, 'subjectStore'])->name('subject.store');
Route::post('faculty-store',[CommonController::class, 'facultyStore'])->name('faculty.store');
