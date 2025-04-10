<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages\auth\auth-login', );
});

//Groping Routes
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages/app/dashboard-home', ['type_menu' => '']);
    })->name('home');

    // Route::get('/dashboard', function () {
    //     return view('pages/app/dashboard-home', ['type_menu' => '']);
    // })->name('dashboard');

    // Route::get('/profile', function () {
    //     return view('pages/app/profile');
    // })->name('profile');

    // Route::get('/settings', function () {
    //     return view('pages/app/settings');
    // })->name('settings');
});

// Route::get('/', function () {
//     return view('pages\app\dashboard-home', ['type_menu' => '']);
// });

// Route::get('/register', function () {
//     return view('pages\auth\auth-register');
// })->name('register');

// Route::get('/forgot', function () {
//     return view('pages\auth\auth-forgot-password');
// })->name('forgot');

// Route::get('/reset', function () {
//     return view('pages\auth\auth-reset-password');
// })->name('reset');
