<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login', [LoginController::class, 'loginPage'])->name('loginPage');
Route::post('/create-user', [UserController::class, 'createUser'])->name('createUser');
Route::get('/get-user-list', [UserController::class, 'getUserList'])->name('getUserList');
Route::post('/edit-user/{id}', [UserController::class, 'editUser'])->name('editUser');
Route::post('/delete-user', [UserController::class, 'deleteUser'])->name('deleteUser');