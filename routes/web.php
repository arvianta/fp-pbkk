<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

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

Route::view('/', 'home')->name('home');

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.admin');
    });

    Route::get('/users', [UserController::class, 'getUserList'])->name('users');
    Route::post('/edit-user/{id}', [UserController::class, 'editUser'])->name('editUser');
    Route::post('/delete-user', [UserController::class, 'deleteUser'])->name('deleteUser');
});

Route::group(['middleware' => ['auth', 'isUser']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.user');
    });


});

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});