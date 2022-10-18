<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function home()
    {
        $blogs = Blog::latest()->take(3)->get();
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
        $blogs = Blog::with('category')->get();
        return view('frontend.blog',compact('blogs'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function singlepost($slug)
    {
        $blogs = Blog::where('status',1)->latest()->take(5)->get();
        $post = Blog::where('slug', $slug)->count();
        if($post>0){
            $post = Blog::where('slug', $slug)->first();
            // get previous user id
            $previous = Blog::where('id', '<', $post->id)->first();

            // get next user id
            $next = Blog::where('id', '>', $post->id)->first();
            return view('frontend.single',compact('post','previous','next','blogs'));
        }
        else abort('404');

    }
    public function searchTag ($tag)
    {
        $tag = Tag::where('name',$tag)->first();
        echo "<pre>";print_r($tag);die;
    }



    //free-quation
    public function freeQuote()
    {
        return view('frontend.free-quote');
    }
}
