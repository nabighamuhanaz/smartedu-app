<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/chat', function () {
    return view('chat.chat');
})->name('chat');

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

Route::get('/quiz', function () {
    return view('quiz.quiz');
})->name('quiz');

Route::get('/upload-finpro', function () {
    return view('upload_finpro.upload_finpro');
})->name('upload_finpro');
