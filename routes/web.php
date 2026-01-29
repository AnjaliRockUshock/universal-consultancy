<?php

use App\Http\Controllers\ContactController;
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

Route::get('/leadership-executive-coaching', function () {
    return view('leadership-executive-coaching');
});

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