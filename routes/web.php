<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Events\UserRegistration;
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
    return view('dump.homepage');
});

Route::get('/redirectdashboard', function () {
    if (auth()->user()->role_id == 1) {
        return redirect()->route('dashboard.admin');
    } else {
        return redirect()->route('dashboard.user');
    }
});

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route::get('/users', [UserController::class, 'getUserList'])->name('users.list');
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('users.edit');
    Route::patch('/edit-user/{id}', [UserController::class, 'updateUser'])->name('users.update');
    Route::patch('/photo-user/{id}', [UserController::class, 'photoUpload'])->name('picture.update');
    Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('users.delete');

    //cth route get dari controller
    Route::get('/userlist', [UserController::class, 'getUserList'])->name('admin.userlist');

    Route::view('/transaction', 'dashboard.admin.transaction')->name('admin.transaction');
    Route::view('/trainers', 'dashboard.admin.trainers')->name('admin.trainers');
    Route::view('/membership', 'dashboard.admin.membership')->name('admin.membership');
    Route::view('/classes', 'dashboard.admin.classes')->name('admin.classes');
    Route::view('/instructors', 'dashboard.admin.instructors')->name('admin.instructors');
    Route::view('/broadcast', 'dashboard.admin.broadcast')->name('admin.broadcast');
});

Route::group(['middleware' => ['auth', 'isUser'], 'prefix' => 'user'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.user');  
    })->name('dashboard.user');

    //bmi, chat, course, payment, transaction
    Route::view('/bmi', 'dashboard.user.bmi')->name('user.bmi');
    Route::view('/chat', 'dashboard.user.chat')->name('user.chat');
    Route::view('/course', 'dashboard.user.course')->name('user.course');
    Route::view('/payment', 'dashboard.user.payment')->name('user.payment');
    Route::view('/transaction', 'dashboard.user.transaction')->name('user.transaction');
    Route::view('/membership', 'dashboard.user.membership')->name('user.membership');
    Route::view('/class', 'dashboard.user.class')->name('user.class');
    Route::view('/trainer', 'dashboard.user.trainer')->name('user.trainer');
    Route::view('/home', 'dashboard.user.home')->name('user.home'); 
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

Route::get('/userRegistration', function () {
    return view('userRegistration');
});

Route::post('/userRegistration', function () {
    $name = request()->name;
    event(new UserRegistration($name));
});