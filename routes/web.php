<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->name('home')->middleware('auth','verified');
Route::resource('doctor', DoctorController::class);
Route::post('appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('myappointment',[HomeController::class,'myappointment'])->name('myappointment');
Route::get('cancel_appoint/{id}',[HomeController::class,'cancel_appoint'])->name('cancel_appoint');
Route::get('showappointment',[AdminController::class,'showappointment'])->name('showappointment');
Route::post('approve/{id}',[AdminController::class,'approve'])->name('admin.approve');
Route::post('cancel/{id}',[AdminController::class,'cancel'])->name('admin.cancel');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
