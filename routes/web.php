<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;

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

// Route::get('/admin/service', function () {
//     return view('admin.services.list');
// })->middleware('auth');


Auth::routes();

// Route::get('/admin', [HomeController::class, 'index'])->name('home');
// Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
//     Route::get('/', [HomeController::class, 'index'])->name('admin.home');
//     Route::view('service', 'admin.services.list');
//     Route::resources([
//         'blog'=>BlogController::class,
//         'tag'=>TagController::class,
//     ]);
//     // Route::get('/blog/checkslug', [BlogController::class,'checkslug'])->name('admin.blog.checkslug');
// });
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::view('service', 'admin.services.list');
    Route::resources([
        'blog'=>BlogController::class,
        'tag'=>TagController::class,
    ]);
});




