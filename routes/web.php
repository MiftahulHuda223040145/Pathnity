<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashOrgController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\VacanciesController;

Route::get('/', [HomeController::class, 'index']);


// Route::get('/', function () {
//     $jobs = [
//         [
//             'title' => 'Fullstack Developer',
//             'company_name' => 'PT. Pertahanan Jaya',
//             'location' => 'Jakarta, Indonesia',
//             'status' => 'Online',
//             'salary' => 20000000,
//             'logo' => 'img/defender.png',
//         ],
//         [
//             'title' => 'Pramuniaga/SPG',
//             'company_name' => 'PT. Alihkan',
//             'location' => 'Jakarta, Indonesia',
//             'status' => 'Online',
//             'salary' => 2000000,
//             'logo' => 'img/compass.png',
//         ],
//         [
//             'title' => 'Product Developer',
//             'company_name' => 'PT. Pertama',
//             'location' => 'Jakarta, Indonesia',
//             'status' => 'Online',
//             'salary' => 2000000,
//             'logo' => 'img/gas.png',
//         ],
//     ];

//     $volunteers = [
//         [
//             'title' => 'Volunteering Pertanian dan Kehutanan',
//             'organization' => 'Kementerian Pertanian',
//             'location' => 'Jakarta, Indonesia',
//             'date' => '02 Februari 2024',
//             'logo' => 'img/tea.png',
//         ],
//         [
//             'title' => 'Pembersihan Kali Ciliwung',
//             'organization' => 'Pandawara Group',
//             'location' => 'Jakarta, Indonesia',
//             'date' => '02 Februari 2024',
//             'logo' => 'img/clean.png',
//         ],
//         [
//             'title' => 'Humas Kuali Merah Putih',
//             'organization' => 'Bobon Group',
//             'location' => 'Jakarta, Indonesia',
//             'date' => '03 Februari 2024',
//             'logo' => 'img/cooking.png',
//         ],
//     ];

//     $logos = [
//         'cooking.png',
//         'defender.png',
//         'compass.png',
//         'gas.png',
//         'tea.png',
//         'clean.png',
//         'apple.png',
//         'brand-image.png',
//         'netflix.png',
//         'cooking.png',
//         'defender.png',
//         'compass.png',
//         'gas.png',
//         'tea.png',
//         'clean.png',
//         'apple.png',
//         'brand-image.png',
//         'netflix.png',
//         'cooking.png',
//         'defender.png',
//         'compass.png',
//         'gas.png',
//         'tea.png',
//         'clean.png',
//         'apple.png',
//         'brand-image.png',
//         'netflix.png',
//         'gas.png',
//         'tea.png',
//     ];


//     return view('home', compact('jobs', 'volunteers', 'logos'));
// });


Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search/vacancies/{id}', [SearchController::class, 'vacancyDetails'])->name('search.vacancyDetails');
Route::post('/vacancies/{id}/apply', [VacanciesController::class, 'apply'])->middleware('auth:web')->name('vacancies.apply');


Route::get('/search/vacancies', [SearchController::class, 'index'])->name('index');
Route::get('/search/vacanciesSearch', [SearchController::class, 'searchVacancies'])->name('search.vacanciesSearch');

Route::get('/login', function () {
    return view('login.login');
})->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/blogs', [BlogController::class, 'indexMainPage'])->name('blogs.indexMainPage');
Route::get('/blog/{blog}', [BlogController::class, 'showDetails'])->name('blog.show');


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

Route::get('/careers', [CareerController::class, 'index'])->name('career.index')->middleware(['auth:web']);
Route::get('/career/{application}', [CareerController::class, 'show'])->name('career.detail');
Route::put('/applicant/{application}/status/{status}', [ApplicantController::class, 'updateStatus'])->name('applicant.updateStatus');
Route::post('/applicants/{id}/interview', [ApplicantController::class, 'setInterview'])->name('applicants.interview');
Route::post('/applicants/{id}/accept', [ApplicantController::class, 'setAccept'])->name('applicants.accept');
Route::get('/dashorg/workers', [DashOrgController::class, 'workers'])->name('dashorg.workers');
Route::put('/dashorg/workers/{id}/fire', [DashOrgController::class, 'fireWorker'])->name('dashorg.fireWorker');
Route::get('/search-vacancies', [VacanciesController::class, 'searchVacancies'])->name('search.vacancies');


Route::get('/careers-2', function () {
    return view('career.careers-2');
});

Route::get('/career', function () {
    return view('career.career');
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

Route::get('/accept-employe', function () {
    return view('recruitment.accept-employe');
});

Route::get('/interview', function () {
    return view('recruitment.interview');
});

Route::get('/login', function () {
    return view('login.login');
})->name('login')->middleware(['guest:web', 'guest:organizer']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth:web')->group(function () {
    Route::get('/register-complete', [UserController::class, 'showForm'])->name('user.showForm');
    Route::put('/register-complete', [UserController::class, 'update'])->name('register.complete');
});

Route::get('/register-organizer', function () {
    return view('register.register-organizer');
})->middleware('guest');
Route::post('/register-organizer', [RegisterController::class, 'storeOrganizer']);

Route::get('/setting', function () {
    return view('settings.setting');
})->middleware('auth:web');
Route::get('/edit-setting', function () {
    return view('settings.edit-setting');
})->middleware('auth');
Route::put('/edit-setting', [UserController::class, 'updateProfile'])->name('user.updateProfile')->middleware('auth:web');

Route::get('/change-password', function () {
    return view('settings.change-password');
})->middleware('auth:web');
Route::put('/change-password', [UserController::class, 'changePassword'])->middleware('auth:web');




Route::get('/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');
Route::get('{provider}/callback/', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');

Route::get('/api/locations/provinces', [LocationController::class, 'getProvinces']);
Route::get('/api/locations/cities', [LocationController::class, 'getCities']);
Route::get('/api/locations/districts', [LocationController::class, 'getDistricts']);

Route::get('/profile/{id}', [UserController::class, 'ProfileUser'])->name('profile.show');


Route::get('/seemore-experience', function () {
    return view('seemore-experience');
})->middleware('auth');

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

    Route::get('/dashboard/vacancies', [AdminController::class, 'showVacancies'])->name('dashboard.vacancies');
    Route::delete('/vacancies/{id}', [VacanciesController::class, 'destroy'])->name('vacancies.destroy');
    Route::get('/dashboard/detail-vacancy/{id}', [VacanciesController::class, 'show'])->name('dashboard.detail-vacancy');



    Route::get('/dashboard/detail-vacancy',  [VacanciesController::class, 'show'])->name('vacancies.detail');

    Route::get('/dashboard/create-blog', [BlogController::class, 'create'])->name('dashboard.blog.create');
    Route::post('/dashboard/create-blog', [Blogcontroller::class, 'store'])->name('create.store');
    Route::get('/dashboard/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/dashboard/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('/dashboard/detail-blog/{blog}', [BlogController::class, 'show'])->name('blogs.detail');
    Route::get('/dashboard/Blog/checkSlug', [BlogController::class, 'checkSlug'])->name('blogs.checkSlug');
    Route::delete('/dashboard/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');


    Route::resource('/dashboard/blogs', BlogController::class);

    Route::get('/pdf-report', [OrganizerController::class, 'generatePdfReport'])->name('organizer.pdf-report');
});

Route::middleware(['auth:organizer'])->group(function () {
    Route::get('/create-vacancy', [VacanciesController::class, 'create'])->name('vacancies.create');
    Route::post('/vacancies', [VacanciesController::class, 'store'])->name('vacancies.store');
    Route::post('/vacancies/{id}/toggle-status', [VacanciesController::class, 'toggleStatus'])->name('vacancies.toggleStatus');
    Route::get('/dashorg/see-applicants/{vacancy}', [DashOrgController::class, 'seeApplicants'])->name('dashorg.seeApplicants');
    Route::get('/applicants/profile/{id}', [ApplicantController::class, 'showProfile'])->name('applicants.profile');




    Route::get('/dashorg/vacancies', [DashOrgController::class, 'showVacancies'])->name('dashorg.vacancies');

    Route::delete('/vacancies/{id}', [DashOrgController::class, 'destroyVacancy'])->name('vacancies.destroy');

    Route::get('/settingOrg', function () {
        return view('settings.settingOrg');
    });
    Route::get('/edit-organizer', function () {
        return view('settings.edit-organizer');
    });
    Route::put('/edit-organizer', [OrganizerController::class, 'updateOrganizer'])->name('organizer.update');
    Route::get('/change-password-org', function () {
        return view('settings.change-password-org');
    });
    Route::put('/change-password-org', [OrganizerController::class, 'changePassword']);

    Route::get('/dashorg', [DashOrgController::class, 'index'])->name('dashorg.index');
    Route::get('/active-career', function () {
        return view('dashorg.active-career');
    });
    Route::get('/see-aplicants', function () {
        return view('dashorg.see-aplicants');
    });
    Route::get('/seemore-worker', function () {
        return view('dashorg.seemore-worker');
    });
    Route::get('/seemore-active-vacancies', function () {
        return view('dashorg.seemore-activevacancies');
    });
    Route::get('/seemore-waiting', function () {
        return view('dashorg.seemore-waiting');
    });
});
