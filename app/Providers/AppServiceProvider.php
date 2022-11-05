<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        Schema::defaultStringLength(191);
        $frontServices = Services::where('status',1)->get();
        $recentBlogs = Blog::where('status',1)->latest()->take(5)->get();
        $categories = Category::latest()->take(5)->get();
        View::share('categories', $categories);
        View::share('frontServices', $frontServices);
        View::share('recentBlogs', $recentBlogs);
        $categories2 = Services::whereNull('parent_id')->with('children')->latest()->get();
        View::share('categories2', $categories2);
        $titles = DB::table('section_titles')->first();
        View::share('titles', $titles);
    }
}
