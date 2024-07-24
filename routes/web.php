<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::get('/', [AnimalController::class, 'index'])->name('animals.index');
Route::post('/', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
Route::get('/show/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/edit/{animal}', [AnimalController::class, 'edit'])->name('animal.edit');
Route::put('/edit/{animal}', [AnimalController::class, 'update'])->name('animal.update');
Route::delete('/show/{animal}', [AnimalController::class, 'destroy'])->name('animal.destroy');
