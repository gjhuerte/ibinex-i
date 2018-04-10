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
    return view('base.home');
});

Route::get('contact-us', function () {
    return view('base.contact-us');
});

Route::get('pricing', function () {
    return view('base.pricing');
});

Route::get('security', function () {
    return view('base.security');
});

Route::get('why-ibinex', function () {
    return view('base.why-ibinex');
});

Route::get('services', function () {
    return view('base.services');
});

Route::get('about-us', function () {
    return view('base.about-us');
});