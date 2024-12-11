<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/search', function () {
    return view('search.search');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/blog', function () {
    return view('blog.blog');
});
