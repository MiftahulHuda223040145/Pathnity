<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    return view('search.search');
});

Route::get('/search/vacancies', function () {
    return view('search.search-vacancies');
});

Route::get('/login', function () {
    return view('login.login');
})->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/blogs', function () {
    return view('blog.blogs');
});

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/notifications', function () {
    return view('notification.notifications');
});

Route::get('/notification', function () {
    return view('notification.notification');
});

Route::get('/register', function () {
    return view('register.register');
})->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register-organizer', function () {
    return view('register.register-organizer');
})->middleware('guest');

Route::get('/term-condition', function () {
    return view('term.term-condition');
});

Route::get('/careers', function () {
    return view('career.careers');
});

Route::get('/careers-2', function () {
    return view('career.careers-2');
});

Route::get('/career', function () {
    return view('career.career');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/dashboard/users', function () {
    return view('dashboard.users');
});

Route::get('/dashboard/organizer', function () {
    return view('dashboard.organizer');
});

Route::get('/dashboard/vacancies', function () {
    return view('dashboard.vacancies');
});

Route::get('/dashboard/blogs', function () {
    return view('dashboard.blogs');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/apply', function () {
    return view('apply.form-apply');
});

Route::get('/progress', function () {
    return view('apply.progress-apply');
});

Route::get('/interview', function () {
    return view('career.listinterview');
});

Route::get('/interview2', function () {
    return view('career.interview');
});
Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');
Route::get('{provider}/callback/', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);