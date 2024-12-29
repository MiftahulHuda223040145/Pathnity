<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialiteController;

Route::get('/', function () {
    $jobs = [
        [
            'title' => 'Fullstack Developer',
            'company_name' => 'PT. Pertahanan Jaya',
            'location' => 'Jakarta, Indonesia',
            'status' => 'Online',
            'salary' => 20000000,
            'logo' => 'img/defender.png',
        ],
        [
            'title' => 'Pramuniaga/SPG',
            'company_name' => 'PT. Alihkan',
            'location' => 'Jakarta, Indonesia',
            'status' => 'Online',
            'salary' => 2000000,
            'logo' => 'img/compass.png',
        ],
        [
            'title' => 'Product Developer',
            'company_name' => 'PT. Pertama',
            'location' => 'Jakarta, Indonesia',
            'status' => 'Online',
            'salary' => 2000000,
            'logo' => 'img/gas.png',
        ],
    ];

    $volunteers = [
        [
            'title' => 'Volunteering Pertanian dan Kehutanan',
            'organization' => 'Kementerian Pertanian',
            'location' => 'Jakarta, Indonesia',
            'date' => '02 Februari 2024',
            'logo' => 'img/tea.png',
        ],
        [
            'title' => 'Pembersihan Kali Ciliwung',
            'organization' => 'Pandawara Group',
            'location' => 'Jakarta, Indonesia',
            'date' => '02 Februari 2024',
            'logo' => 'img/clean.png',
        ],
        [
            'title' => 'Humas Kuali Merah Putih',
            'organization' => 'Bobon Group',
            'location' => 'Jakarta, Indonesia',
            'date' => '03 Februari 2024',
            'logo' => 'img/cooking.png',
        ],
    ];

    $logos = [
        'cooking.png',
        'defender.png',
        'compass.png',
        'gas.png',
        'tea.png',
        'clean.png',
        'apple.png',
        'brand-image.png',
        'netflix.png',
        'cooking.png',
        'defender.png',
        'compass.png',
        'gas.png',
        'tea.png',
        'clean.png',
        'apple.png',
        'brand-image.png',
        'netflix.png',
        'cooking.png',
        'defender.png',
        'compass.png',
        'gas.png',
        'tea.png',
        'clean.png',
        'apple.png',
        'brand-image.png',
        'netflix.png',
        'gas.png',
        'tea.png',
    ];


    return view('home', compact('jobs', 'volunteers', 'logos'));
});


Route::get('/search', function () {
    return view('search');
});

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// routes/web.php
Route::middleware('auth:web')->group(function () {
    Route::get('/register-complete', [UserController::class, 'showForm'])->name('user.showForm');
    Route::put('/register-complete', [UserController::class, 'update'])->name('register.complete');
});

Route::get('/register-organizer', function () {
    return view('register-organizer');
})->middleware('guest');

Route::get('/term-condition', function () {
    return view('term-condition');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/setting', function () {
    return view('setting');
})->middleware('auth:web');
Route::get('/edit-setting', function () {
    return view('edit-setting');
})->middleware('auth:web');
Route::put('/edit-setting', [UserController::class, 'updateProfile'])->name('user.updateProfile')->middleware('auth:web');

Route::get('/change-password', function () {
    return view('change-password');
})->middleware('auth:web');
Route::put('/change-password', [UserController::class, 'changePassword'])->middleware('auth:web');

Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');
Route::get('{provider}/callback/', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/api/locations/provinces', [LocationController::class, 'getProvinces']);
Route::get('/api/locations/cities', [LocationController::class, 'getCities']);
Route::get('/api/locations/districts', [LocationController::class, 'getDistricts']);

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth:web');

Route::get('/seemore-experience', function () {
    return view('seemore-experience');
})->middleware('auth:web');

Route::get('/post-carier', function () {
    return view('post-carier');
});

Route::get('/accept-employe', function () {
    return view('accept-employe');
});

Route::get('/accept-interview', function () {
    return view('accept-interview');
});

