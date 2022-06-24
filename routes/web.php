<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstituteDetailsController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//<----------------------------------------Admin panel------------------------------->
Route::get('/admin',[AdminController::class,'index']);

//**************Institute controller****************/
Route::get('/admin/institute/details',[InstituteDetailsController::class,'index'])->name('InstituteDetails');
Route::get('/admin/institute/add-details',[InstituteDetailsController::class,'add'])->name('AddInstituteDetails');
Route::post('/admin/institute/store-details',[InstituteDetailsController::class,'store'])->name('StoreInstituteDetails');
Route::get('/admin/institute/delete-details/{id}',[InstituteDetailsController::class,'delete'])->name('DeleteInstituteDetails');
Route::get('/admin/institute/edit-details/{id}',[InstituteDetailsController::class,'edit'])->name('EditInstituteDetails');
Route::get('/admin/institute/view-details/{id}',[InstituteDetailsController::class,'view'])->name('ViewInstituteDetails');


Route::get('/admin/institute/links',[LinksController::class,'index'])->name('links');
Route::get('/admin/institute/seo',[SeoController::class,'index'])->name('seo');

//**************Students controller****************/
Route::get('/admin/student',[StudentController::class,'index'])->name('student');
Route::get('/admin/staff',[StaffController::class,'index'])->name('staff');

