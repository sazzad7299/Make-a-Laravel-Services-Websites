<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
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

Route::get('/',[frontendController::class,'home'])->name('home');
Route::get('/service',[frontendController::class,'service'])->name('service');
Route::get('/project',[frontendController::class,'project'])->name('project');
Route::get('/portfolio',[frontendController::class,'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}',[frontendController::class,'singlePortfolio'])->name('singlePortfolio');
Route::get('news/',[frontendController::class,'blog'])->name('blog');
Route::get('/news/{slug}',[frontendController::class,'singlepost'])->name('singlepost');
Route::get('/about',[frontendController::class,'about'])->name('about');
Route::get('/free-quate',[frontendController::class,'freeQuote'])->name('quote');
Route::get('/tag/{slug}',[frontendController::class,'searchTag'])->name('searchTag');
Route::get('/category/{slug}',[frontendController::class,'singleCat'])->name('singleCat');
Route::get('/service/{slug}',[ServicesController::class,'singleService'])->name('singleService');


Route::get('/contact',[frontendController::class,'contact'])->name('contact');



Auth::routes();

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::view('service', 'admin.services.list');
    Route::resources([
        'blog'=>BlogController::class,
        'tag'=>TagController::class,
        'category'=>CategoryController::class,
        'service'=>ServicesController::class,
        'portfolio'=>PortfolioController::class,
        'project'=>ProjectController::class,

    ]);
});



