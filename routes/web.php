<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/service/single', function () {
    return view('frontend.single');
});
Route::get('/free-quote', function () {
    return view('frontend.free-quote');
});
Route::get('/project', function () {
    return view('frontend.project');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});


