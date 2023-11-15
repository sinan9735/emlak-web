<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminilanlarController;
use App\Http\Controllers\admin\OnaypageController;
use App\Http\Controllers\admingiris\AdminGirisController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\HomePageController;
use App\Http\Controllers\Site\IlanDetayController;
use App\Http\Controllers\Site\IlanlarContoller;
use App\Http\Controllers\Site\IlanlarımController;
use App\Http\Controllers\Site\IlanVerController;
use App\Http\Controllers\Site\RegisterController;
use App\Http\Controllers\Site\UserProfilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\EmployeeController;


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

Route::get('/', [HomePageController::class, 'index'])->name('home.index');
Route::get('/kayitol', [RegisterController::class, 'index'])->name('register.index');
Route::get('/girişyap', [RegisterController::class, 'login'])->name('login.index');
Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about.index');
Route::get('/userprofil', [UserProfilController::class, 'index'])->name('userprofile.index');
Route::get('/İlanVer', [IlanVerController::class, 'index'])->name('yeniilanver.index');
Route::get('/Ilanlarım', [IlanlarımController::class, 'index'])->name('ilanlistem.index');
Route::get('/Adminhome', [AdminController::class, 'index'])->name('homeadmin.index');
Route::get('/Adminonay', [OnaypageController::class, 'index'])->name('onaysayfa.index');
Route::get('/ilanlar', [IlanlarContoller::class, 'index'])->name('İlanlar.index');
Route::get('/İlanDetay', [IlanDetayController::class, 'index'])->name('İlanDetay.index');
Route::get('/adminilanlar', [AdminilanlarController::class, 'index'])->name('Adminİlanlar.index');
Route::get('/admingiris', [AdminGirisController::class, 'index'])->name('Admingiris.index');
Route::post('/register-user', [RegisterController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [RegisterController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [RegisterController::class, 'dashboard'])->name('Dashboard');
Route::get('/logout',[RegisterController::class,'logout']);
Route::resource("/employee",EmployeeController::class);



