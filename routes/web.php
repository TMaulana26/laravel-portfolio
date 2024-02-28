<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Portfolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('app');
});

Route::get('/home', [Home::class, 'render'])->name('home');
Route::get('/about', [About::class, 'render'])->name('about');
Route::get('/portfolio', [Portfolio::class, 'render'])->name('portfolio');
Route::get('/contact', [Contact::class, 'render'])->name('contact');

Route::post('/contactme', [UserController::class, 'contactMe']);
