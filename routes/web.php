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
Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard.admin');
    // })->name('dashboard.admin');
    Route::get('/dashboard', function () {
        return view('dump.homepage');
    })->name('dashboard.admin');

    Route::get('/users', [UserController::class, 'getUserList'])->name('users.list');
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('users.edit');
    Route::patch('/edit-user/{id}', [UserController::class, 'updateUser'])->name('users.update');
    Route::patch('/photo-user/{id}', [UserController::class, 'photoUpload'])->name('picture.update');
    Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('users.delete');
});

Route::group(['middleware' => ['auth', 'isUser']], function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard.user');
    // })->name('dashboard.user');
    Route::get('/dashboard', function () {
        return view('dump.homepage');
    })->name('dashboard.user');
});

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// dump => about, blog, blogs, bmi, class, classes, contact, homepage, schedule, trainer, trainers
Route::view('/about', 'dump.about')->name('about');
Route::view('/contact', 'dump.contact')->name('contact');
Route::view('/homepage', 'dump.homepage')->name('homepage');
Route::view('/schedule', 'dump.schedule')->name('schedule');
Route::view('/trainer', 'dump.trainer')->name('trainer');
Route::view('/trainers', 'dump.trainers')->name('trainers');
Route::view('/class', 'dump.class')->name('class');
Route::view('/classes', 'dump.classes')->name('classes');
Route::view('/blog', 'dump.blog')->name('blog');
Route::view('/blogs', 'dump.blogs')->name('blogs');
Route::view('/bmi', 'dump.bmi')->name('bmi');

