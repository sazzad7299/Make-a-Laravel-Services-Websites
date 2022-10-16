<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function home()
    {
        $blogs = Blog::latest()->get();
        return view('frontend.index',compact('blogs'));
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function portfolio()
    {
        return view('frontend.portfolio');
    }
    public function project()
    {
        return view('frontend.project');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
