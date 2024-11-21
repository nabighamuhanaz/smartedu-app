<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/detail-course', function () {
    return view('detail_course.detailcourse');
})->name('kursus-saya');

Route::get('/video', function () {
    return view('video.video');  // pastikan pathnya sesuai dengan file video.blade.php
})->name('video.belajar');