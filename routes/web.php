<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Events\UserRegistration;
use Illuminate\Support\Facades\DB;
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

    Route::get('/userlist', [UserController::class, 'getUserList'])->name('admin.userlist');

    Route::view('/transaction', 'dashboard.admin.transaction')->name('admin.transaction');
    Route::view('/trainers', 'dashboard.admin.trainers')->name('admin.trainers');
    Route::view('/membership', 'dashboard.admin.membership')->name('admin.membership');
    Route::view('/classes', 'dashboard.admin.classes')->name('admin.classes');
    Route::view('/instructors', 'dashboard.admin.instructors')->name('admin.instructors');
    Route::view('/broadcast', 'dashboard.admin.broadcast')->name('admin.broadcast');

    Route::get('/membership', function () {
        $memberships = DB::table('memberships')
            ->paginate(10);

        return view('dashboard.admin.membership', ['memberships' => $memberships]);
    })->name('admin.membership');

    //transaction, from subscriptions table, join users, payments, personal trainer join personal trainers, membership, join memberships, get data user->name, payment->amount, payment->method, payment->status, (if personal trainer not null, personal_trainer->name or if membership not null, membership->duration as product)
    Route::get('/transaction', function () {
        $subscriptions = DB::table('subscriptions')
            ->join('users', 'subscriptions.user_id', '=', 'users.id')
            ->join('payments', 'subscriptions.payment_id', '=', 'payments.id')
            ->leftJoin('personal_trainers', 'subscriptions.personal_trainer_id', '=', 'personal_trainers.id')
            ->leftJoin('memberships', 'subscriptions.membership_id', '=', 'memberships.id')
            ->select(
                'subscriptions.*',
                'users.name as user_name',
                'payments.total as payment_total',
                'payments.method as payment_method',
                'payments.status as payment_status',
                DB::raw('CASE 
                    WHEN subscriptions.personal_trainer_id IS NULL THEN memberships.duration
                    ELSE personal_trainers.name 
                    END AS product')
            )
            ->paginate(10);

        return view('dashboard.admin.transaction', ['subscriptions' => $subscriptions]);
    })->name('admin.transaction');

    Route::get('/classes', function () {
        $workoutClasses = DB::table('workout_classes')
            ->join('instructors', 'workout_classes.instructor_id', '=', 'instructors.id')
            ->select('workout_classes.*', 'instructors.name as instructor_name')
            ->paginate(10);

        return view('dashboard.admin.classes', ['classes' => $workoutClasses]);
    })->name('admin.classes');

    Route::get('/instructors', function () {
        $instructors = DB::table('instructors')
            ->leftJoin('instructor_expertise', 'instructors.id', '=', 'instructor_expertise.instructor_id')
            ->leftJoin('expertises', 'instructor_expertise.expertise_id', '=', 'expertises.id')
            ->leftJoin('workout_classes', 'instructors.id', '=', 'workout_classes.instructor_id')
            ->select('instructors.*', 'expertises.name as expertise_name', 'workout_classes.name as class_name')
            ->paginate(10);

        return view('dashboard.admin.instructors', ['instructors' => $instructors]);
    })->name('admin.instructors');

    Route::get('/trainers', function () {
        $trainers = DB::table('personal_trainers')
            ->leftJoin('trainer_expertise', 'personal_trainers.id', '=', 'trainer_expertise.trainer_id')
            ->leftJoin('expertises', 'trainer_expertise.expertise_id', '=', 'expertises.id')
            ->select('personal_trainers.*', 'expertises.name as expertise_name')
            ->paginate(10);

        return view('dashboard.admin.trainers', ['trainers' => $trainers]);
    })->name('admin.trainers');

    Route::get('/api/payment-data', [PaymentController::class, 'getPaymentData'])->name('api.payment-data'); 
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

    Route::get('/membership', function () {
        //check table subscriptions jika ada user_id = auth()->user()->id dan membership_id != null maka show membership data, else show membership list
        $memberships = DB::table('subscriptions')
            ->join('memberships', 'subscriptions.membership_id', '=', 'memberships.id')
            ->where('subscriptions.user_id', '=', auth()->user()->id) 
            ->whereNotNull('subscriptions.membership_id')
            ->select('memberships.*')
            ->get();
        if ($memberships->isEmpty()) {
            $memberships = DB::table('memberships')
                ->paginate(10);
        }
 
        return view('dashboard.user.membership', ['memberships' => $memberships]);
    })->name('user.membership');

    Route::get('/class', function(){
        $activeClasses = DB::table('user_workout_class')
            ->join('workout_classes', 'user_workout_class.workout_class_id', '=', 'workout_classes.id')
            ->where('user_workout_class.user_id', '=', auth()->user()->id)
            ->select('workout_classes.*')
            ->get();
        
        $classes = DB::table('workout_classes')
            ->paginate(10);

        return view('dashboard.user.class', ['classes' => $classes, 'activeClasses' => $activeClasses]);
    })->name('user.class');


    //personal trainer
    Route::get('/trainer', function () {
        //check table subscriptions jika ada user_id = auth()->user()->id dan personal_trainer_id != null maka show personal trainer data, else show personal trainer list
        $activeTrainers = DB::table('subscriptions')
            ->join('personal_trainers', 'subscriptions.personal_trainer_id', '=', 'personal_trainers.id')
            ->where('subscriptions.user_id', '=', auth()->user()->id) 
            ->whereNotNull('subscriptions.personal_trainer_id')
            ->select('personal_trainers.*')
            ->get();
        $trainers = DB::table('personal_trainers')
            ->paginate(10);

        return view('dashboard.user.trainer', ['trainers' => $trainers, 'activeTrainers' => $activeTrainers]);
    })->name('user.trainer');

        //transaction, from subscriptions table, join users, payments, personal trainer join personal trainers, membership, join memberships, get data user->name, payment->amount, payment->method, payment->status, (if personal trainer not null, personal_trainer->name or if membership not null, membership->duration as product)
    Route::get('/transaction', function () {
        $subscriptions = DB::table('subscriptions')
            ->join('users', 'subscriptions.user_id', '=', 'users.id')
            ->join('payments', 'subscriptions.payment_id', '=', 'payments.id')
            ->leftJoin('personal_trainers', 'subscriptions.personal_trainer_id', '=', 'personal_trainers.id')
            ->leftJoin('memberships', 'subscriptions.membership_id', '=', 'memberships.id')
            ->where('subscriptions.user_id', '=', auth()->user()->id)
            ->select(
                'subscriptions.*',
                'users.name as user_name',
                'payments.total as payment_total',
                'payments.method as payment_method',
                'payments.status as payment_status',
                DB::raw('CASE 
                    WHEN subscriptions.personal_trainer_id IS NULL THEN memberships.duration
                    ELSE personal_trainers.name 
                    END AS product')
            )
            ->paginate(10);

        return view('dashboard.user.transaction', ['subscriptions' => $subscriptions]);
    })->name('user.transaction');
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