<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn () => auth()->check() ? redirect('/home') :  view('welcome'));


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('contacts', ContactController::class);
/* Estas rutas se pueden simplificar de la siguiente forma, importancia de como se escriben modelos */

/* Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{contact}/', [ContactController::class, 'destroy'])->name('contacts.destroy'); */




