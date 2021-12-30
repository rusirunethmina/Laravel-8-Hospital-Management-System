<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/doctor',[HomeController::class,'doctor'])->name('doctor');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/blog/details',[HomeController::class,'blogDetails'])->name('blog_deatils');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('add/doctor',[AdminController::class,'doctor_view'])->name('add.doctor_view');
Route::post('/doctor/add',[AdminController::class,'doctor_add'])->name('add.doctor');
