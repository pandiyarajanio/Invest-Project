<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControllerUseraccountdetails;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controllerusertransition;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('Client.welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::get('/forget', [AuthController::class, 'forget'])->name('forget');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/eprofile', [ControllerUseraccountdetails::class, 'eprofile'])->name('eprofile');
    Route::post('/eprofile', [ControllerUseraccountdetails::class, 'updateCityForUser'])->name('update-user-city');
    Route::get('/change-password', [AuthController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [AuthController::class, 'updatePassword'])->name('update-password');

    Route::get('/ebank', [ControllerUseraccountdetails::class, 'ebank'])->name('ebank');
    Route::post('/ebank', [ControllerUseraccountdetails::class, 'updateBankDetails'])->name('update-bank-details');

    Route::get('/photoupdate', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/photoupdate', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/deposit', [Controllerusertransition::class, 'deposit'])->name('deposit');
    Route::post('/deposit', [Controllerusertransition::class, 'Usertransitiondata'])->name('user-transfer');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});


Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('admin/login', [AdminController::class, 'doLogin'])->name('admin.login.submit');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/logout', [AdminController::class, 'doLogout'])->name('admin.logout');
    Route::get('admin/userlist', [AdminController::class, 'userlist'])->name('admin.userlist');
    Route::get('admin/change-password', [AdminController::class, 'showchangepassword'])->name('admin.showchangepassword');
    Route::post('admin/change-password', [AdminController::class, 'changePassword'])->name('admin.change-password');
    Route::post('/send-random-number', [AdminController::class, 'sendRandomNumber'])->name('send-random-number');
    Route::get('admin/Investment', [AdminController::class, 'Investment'])->name('admin.Investment');
    Route::get('admin/Invoice/{userId}', [AdminController::class, 'Invoice'])
    ->name('admin.Invoice');
    Route::get('admin/profit', [AdminController::class, 'profit'])->name('profit');
    Route::post('admin/profit', [AdminController::class, 'updateProfitPercentage'])->name('updateProfitPercentage');
});