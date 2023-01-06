<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailVerify;
use App\Http\Controllers\ForgotPasswordController;

//Landing Pages
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\HomepageComponent\Aboutpage;
use App\Http\Livewire\Register;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\ForgotPasswordView;

use App\Http\Livewire\Services;
use App\Http\Livewire\ServicesChild;

//User Pages
use App\Http\Livewire\User\Dashboard;

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

Auth::routes();

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/about', Aboutpage::class)->name('about');
Route::get('/register', Register::class)->name('register');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('verify/{token}', [EmailVerify::class, 'userVerify']);
Route::get('forgot/{token}', ForgotPasswordView::class)->name('forgotview');

Route::get('services/{id}', Services::class)->name('services');
Route::get('service-child/{id}', ServicesChild::class)->name('services-child');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'u'], function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
    });
});