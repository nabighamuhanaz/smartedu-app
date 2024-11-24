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

Route::get('/upload-tugas', function () {
    return view('upload_tugas.upload_tugas');
})->name('upload-tugas');

Route::get('/sertifikat', function () {
    return view('sertifikat.sertif'); 
})->name('sertifikat');

