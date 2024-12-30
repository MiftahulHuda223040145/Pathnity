<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\VancaviesController;


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

Route::get('/register-organizer', function () {
    return view('register-organizer');
})->middleware('guest');

Route::get('/term-condition', function () {
    return view('term-condition');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');
Route::get('{provider}/callback/', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('blogs', Blogcontroller::class);
Route::resource('vancavies',VancaviesController::class);

use Illuminate\Support\Str;
use Illuminate\Http\Request;

Route::get('/create-slug', function (Request $request) {
    $title = $request->query('title');
    return response()->json([
        'slug' => Str::slug($title)
    ]);
});

Route::get('/create-slug', [BlogController::class, 'checkSlug'])->name('blogs.checkSlug');


//route dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/dashboard/users', function () {
    return view('dashboard.users.users');
});

Route::get('/dashboard/create-user', function () {
    return view('dashboard.users.create-user');
});

Route::get('/dashboard/organizer', function () {
    return view('dashboard.organizer.organizer');
});

Route::get('/dashboard/vacancies', function () {
    return view('dashboard.vacancies.vacancies');
});

Route::get('/dashboard/detail-vacancy', function () {
    return view('dashboard.vacancies.detail-vacancy');
});


Route::get('/dashboard/create-blog', function () {
    return view('dashboard.blog.create-blog');
});

Route::get('/dashboard/detail-blog', function () {
    return view('dashboard.blog.detail-blog');
});
