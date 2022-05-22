<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubmissionsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\UserController;
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

Route::GET('/', function () {
  return view('auth.login');
})->middleware('guest');

Route::GET('/login', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();
//Removed home route ... Home = Dashboard
Route::group(['middleware'=> ['auth']],function(){
  Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
  Route::get('schedule', [SchedulesController::class, 'schedule'])->name('schedule');
  Route::get('submissions', [SubmissionsController::class, 'submissions'])->name('submissions');
  // Route::get('users', 'UserController@users')->name('users');
  Route::get('admins', [UserController::class, 'admin'])->name('admins');
});