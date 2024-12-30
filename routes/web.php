<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrganizerController;
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
})->name('login')->middleware(['guest:web', 'guest:organizer']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('auth:web')->group(function () {
    Route::get('/register-complete', [UserController::class, 'showForm'])->name('user.showForm');
    Route::put('/register-complete', [UserController::class, 'update'])->name('register.complete');
});

Route::get('/register-organizer', function () {
    return view('register-organizer');
})->middleware('guest');
Route::post('/register-organizer', [RegisterController::class, 'storeOrganizer']);

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
})->middleware('auth');
Route::put('/edit-setting', [UserController::class, 'updateProfile'])->name('user.updateProfile')->middleware('auth:web');

Route::get('/change-password', function () {
    return view('change-password');
})->middleware('auth:web');
Route::put('/change-password', [UserController::class, 'changePassword'])->middleware('auth:web');

Route::get('/settingOrg', function () {
    return view('settingOrg');
})->middleware('auth:organizer');
Route::get('/edit-organizer', function () {
    return view('edit-organizer');
})->middleware('auth:organizer');
Route::put('/edit-organizer', [OrganizerController::class, 'updateOrganizer'])->name('organizer.update')->middleware('auth:organizer');
Route::get('/change-password-org', function () {
    return view('change-password-org');
})->middleware('auth:organizer');
Route::put('/change-password-org', [OrganizerController::class, 'changePassword'])->middleware('auth:organizer');


Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');
Route::get('{provider}/callback/', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');

Route::get('/api/locations/provinces', [LocationController::class, 'getProvinces']);
Route::get('/api/locations/cities', [LocationController::class, 'getCities']);
Route::get('/api/locations/districts', [LocationController::class, 'getDistricts']);

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/seemore-experience', function () {
    return view('seemore-experience');
})->middleware('auth');

Route::get('/post-carier', function () {
    return view('post-carier');
});

Route::get('/accept-employe', function () {
    return view('accept-employe');
});

Route::get('/interview', function () {
    return view('interview');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->middleware(['admin']);
    Route::get('/dashboard/users', [AdminController::class, 'index'])->name('admin.user.dashboard');
    Route::get('users/search', [AdminController::class, 'search'])->name('users.search');
    Route::get('dashboard/users/{id}', [AdminController::class, 'show'])->name('users.show');
    Route::get('dashboard/users/{id}/edit', [AdminController::class, 'edit'])->name('users.edit');
    Route::delete('dashboard/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');

    Route::get('/dashboard/create-user', function () {
        return view('dashboard.users.create-user');
    });

    Route::get('dashboard/organizer', [AdminController::class, 'indexOrg'])->name('dashboard.organizer.organizer');
    Route::get('dashboard/organizer/{id}', [AdminController::class, 'showOrganizer'])->name('organizer.show');
    Route::get('dashboard/organizer/{id}/edit', [AdminController::class, 'editOrganizer'])->name('organizer.edit');
    Route::delete('dashboard/organizer/{id}', [AdminController::class, 'destroyOrganizer'])->name('organizer.destroy');
    Route::get('organizer/search', [AdminController::class, 'searchOrganizer'])->name('organizer.search');


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

    Route::get('/dashboard/blogs', function () {
        return view('dashboard.blog.blogs');
    });

    Route::get('/pdf-report', [OrganizerController::class, 'generatePdfReport'])->name('organizer.pdf-report');
});
