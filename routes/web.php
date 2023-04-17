<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationsController;

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
    return view('welcome');  //stranica na koju ce se redirektovati neuspeli yahtevi za login
});
// za ulogovanog
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// za neulogovanog


//za admina

//Route::get('admin/login',[AdminController::class, 'index'])->name('login_form'); //ovo je forma za login

//Route::get('admin/owner',[AdminController::class, 'login'])->name('admin_login');//admin koji se loguje
//Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin_dashboard');//prikaz oji admin dobija

// za klijenta
Route::get('/clients',[ClientController::class,'index'])->name('clients.index');//izlistavanje klijenata
Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
Route::get('/clients/{client}/edit',[ClientController::class,'edit'])->name('clients.edit');
Route::post('/clients/store',[ClientController::class,'store'])->name('clients.store');
Route::put('/clients/{client}/update',[ClientController::class,'update'])->name('clients.update');
Route::delete('/clients/{client}/delete',[ClientController::class,'destroy'])->name('clients.destroy');


//za meni
Route::get('/menu',[MenuController::class,'index'])->name('menu.index');//izlistavanje menija
Route::get('/menu/create',[MenuController::class,'create'])->name('menu.create');
Route::get('/menu/{menu}/edit',[MenuController::class,'edit'])->name('menu.edit');
Route::post('/menu/store',[MenuController::class,'store'])->name('menu.store');
Route::put('/menu/{menu}/update',[MenuController::class,'update'])->name('menu.update');
Route::delete('/menu/{menu}/delete',[MenuController::class,'destroy'])->name('menu.destroy');


// za  rezervaciju
Route::get('/reservation', [ReservationsController::class, 'index'])->name('reservation');
Route::post('/reservation', [ReservationsController::class, 'store'])->name('reservation.store');
//za ulogovani profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
