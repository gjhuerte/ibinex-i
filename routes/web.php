<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('/contact-us', function () {
    return view('contact-us.contact-us');
});

Route::get('/pricing', function () {
    return view('pricing.pricing');
});

Route::get('/security', function () {
    return view('security.security');
});

Route::get('/why-ibinex', function () {
    return view('why-ibinex.why');
});

Route::get('/services', function () {
    return view('services.services');
});

Route::get('/about-us', function () {
    return view('about-us/about-us');
});