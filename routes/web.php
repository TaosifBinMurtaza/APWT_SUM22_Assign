<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\usercontroller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[pagescontroller::class,'welcome'])->name('welcome');
Route::get('/login',[pagescontroller::class,'login'])->name('users.login');
Route::post('/login',[pagescontroller::class,'logincheck'])->name('users.login.check');
Route::get('/user/dashboard',[pagescontroller::class,'dashboard'])->name('users.userdashboard');
Route::get('/admin/dashboard',[pagescontroller::class,'admin_dashboard'])->name('admin.userdashboard');

Route::get('/account/details',[pagescontroller::class,'account_details'])->name('account.details');

Route::get('/user/details/{id}',[pagescontroller::class,'user_details'])->name('user.details');


Route::get('/register',[pagescontroller::class,'register'])->name('users.registration');
Route::post('/register',[usercontroller::class,'userregistration'])->name('user.registration.submit');