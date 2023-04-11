<?php


use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationsController;
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
//Route::get('/admin/reservations', [ReservationsController::class,'index'])->name('reservation');
Route::get('/clients',[ClientController::class,'index'])->name(name:'client.index');
Route::get('/clients/create',[ClientController::class,'create'])->name(name:'clients.create');
Route::get('/clients/{id}/edit',[ClientController::class,'edit'])->name(name:'clients.edit');
Route::post('/clients/store',[ClientController::class,'store'])->name(name:'clients.store');
Route::put('/clients/{id}/update',[ClientController::class,'update'])->name(name:'clients.update');
Route::delete('clients/{id}/delete',[ClientController::class,'destroy'])->name(name:'clients.destroy');