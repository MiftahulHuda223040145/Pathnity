<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register-organizer', function () {
    return view('register-organizer');
});

Route::get('/term-condition', function () {
    return view('term-condition');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/edit-setting', function () {
    return view('edit-setting');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
});


Route::get('/change-password', function () {
    return view('change-password');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/seemore-experience', function () {
    return view('seemore-experience');
});

Route::get('/post-carier', function () {
    return view('post-carier');
});

Route::get('/accept-employe', function () {
    return view('accept-employe');
});

Route::get('/accept-interview', function () {
    return view('accept-interview');
});

