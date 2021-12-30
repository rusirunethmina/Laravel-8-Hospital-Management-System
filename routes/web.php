<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/logout',[HomeController::class,'logout'])->name('logout');

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/doctor',[HomeController::class,'doctor'])->name('doctor');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/blog/details',[HomeController::class,'blogDetails'])->name('blog_deatils');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('add/doctor',[AdminController::class,'doctor_view'])->name('add.doctor_view');
Route::post('/doctor/add',[AdminController::class,'doctor_add'])->name('add.doctor');


Route::post('/appointment/add',[AppointmentController::class,'appointment_add'])->name('add.appoinment');
Route::get('user/appointment',[AppointmentController::class,'appointment_user'])->name('user.appointment');
Route::get('appointment/cancle/{id}',[AppointmentController::class,'appointment_cancle']);


Route::get('admin/appointment/show',[AppointmentController::class,'appointment_show'])->name('show.appoin');
Route::get('/approved/{id}',[AppointmentController::class,'approved']);
Route::get('/cancle/{id}',[AppointmentController::class,'cancle']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/send/email/{id}',[AdminController::class,'emailSend']);
