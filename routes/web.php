<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthManager;

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

Route::get('/',[HomeController::class, 'login'])->name('login');
Route::post('loginPost',[AuthManager::class, 'loginPost'])->name('login.post');

Route::group(['middleware'=>'auth'], function () {
    Route::get('dashboard',[HomeController::class, 'index'])->name('dashboard');
    Route::get('student',[HomeController::class, 'student'])->name('student');
    Route::get('user',[AuthManager::class, 'user'])->name('user');
    Route::post('userPost',[AuthManager::class, 'userPost'])->name('user.post');
    Route::get('userlist',[HomeController::class, 'userList'])->name('user.list');
    Route::get('logout',[AuthManager::class, 'logout'])->name('logout');
});


// Route::get('logout', [AuthManager::class, 'logout'])-name('logout');
// routes/web.php

// Route::middleware(['auth.check'])->group(function () {
//     Route::get('/dashboard', 'HomeController@index')->name('dashboard');
//     // Add other dashboard routes here
// });
