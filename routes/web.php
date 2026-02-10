<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GlobalClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/honorary-doctorate', function () {
    return view('honorary-doctorate');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::post('/ask-questions-email', [ContactController::class, 'askQuestions'])->name('askQuestions.send');

Route::get('/business-consulting', function () {
    return view('business-consulting');
});

Route::get('/global-experts-board', [GlobalClientController::class, 'expertList'])->name('global-clients.index');

Route::get('/branding-advisory', function () {
    return view('branding-advisory');
});

Route::get('/academic-honorary-recognition', function () {
    return view('academic-honorary-recognition');
});

Route::get('/global-partnerships', function () {
    return view('global-partnerships');
});

Route::get('/check', function () {
    return view('l');
});

Route::get('/detailed', function () {
    return view('detailed');
});

Route::get('/expert-details/{id}',[GlobalClientController::class, 'show'])->name('expert.details');

Route::get('/login', function () {
    return view('login');
});

Route::get('/global-clients-list', [GlobalClientController::class, 'index'])->name('global-clients.index');

Route::get('/global-clients-create', [GlobalClientController::class, 'createExpertView'])->name('global-clients.create');

Route::post('/global-clients-create', [GlobalClientController::class, 'createExpert'])->name('global-clients.store');