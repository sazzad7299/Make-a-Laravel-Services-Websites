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
use App\Http\Controllers\TeamController;

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
Route::get('/category/{slug}',[CategoryController::class,'singleCat'])->name('singleCat');
Route::get('/service/{slug}',[ServicesController::class,'singleService'])->name('singleService');
Route::get('/submain/{id}',[ServicesController::class,'subMain']);

Route::get('/popup',[frontendController::class,'popup'])->name('quote2');
Route::match(['get','post'],'/search',[ServicesController::class,'serviceSearch'])->name('service.search');


Route::get('/contact',[frontendController::class,'contact'])->name('contact');
Route::post('/send-message',[frontendController::class,'sendmessage'])->name('sendmessage');
Route::match(['get','post'],'/send-quote',[frontendController::class,'freequotesend'])->name('freequotesend');



Auth::routes();

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::match(['get','post'],'/settings',[ServicesController::class,'settings'])->name('settings');
    Route::match(['get','post'],'/pages/{about}',[ServicesController::class,'pages'])->name('pages');
    Route::view('service', 'admin.services.list');
    Route::resources([
        'blog'=>BlogController::class,
        'tag'=>TagController::class,
        'category'=>CategoryController::class,
        'service'=>ServicesController::class,
        'portfolio'=>PortfolioController::class,
        'project'=>ProjectController::class,
        'team'=>TeamController::class,

    ]);
});



