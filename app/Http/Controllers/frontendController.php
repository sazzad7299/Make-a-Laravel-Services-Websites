<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Project;
use App\Models\Services;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $portfolio = Portfolio::where('status',1)->latest()->get();
        return view('frontend.portfolio',compact('portfolio'));
    }
    public function project()
    {
        $project = Project::where('status',1)->latest()->get();
        return view('frontend.project',compact('project'));
    }
    public function blog()
    {
        $blogs = Blog::with('category')->where('status',1)->latest()->simplePaginate(9);
        return view('frontend.blog',compact('blogs'));
    }
    public function about()
    {
        $about = DB::table('pages')->where(['slug'=>'about'])->first();
        $teams = Team::latest()->get();
        return view('frontend.about',compact('about','teams'));
    }
    public function contact()
    {
        $contact = DB::table('pages')->where(['slug'=>'contact'])->first();
        return view('frontend.contact',compact('contact'));
    }
    public function singlepost($slug)
    {

        $post = Blog::where('slug', $slug)->count();
        if($post>0){
            $post = Blog::where('slug', $slug)->first();
            // get previous user id
            $previous = Blog::where('id', '<', $post->id)->first();

            // get next user id
            $next = Blog::where('id', '>', $post->id)->first();
            return view('frontend.single',compact('post','previous','next'));
        }
        else abort('404');

    }
    public function singlePortfolio($slug)
    {

        $portfolio = Portfolio::where('slug', $slug)->count();
        if($portfolio>0){
            $item = Portfolio::where('slug', $slug)->first();

            return view('frontend.singleportfolio',compact('item'));
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
    public function popup()
    {
        return view('frontend.popup');
    }
    public function sendmessage(Request $req)
    {
        $data = $req->all();
        // dd($data);
        $email = $data['email'];
        $messageData = ['email'=>$email,'name'=>$data['name'],'phone'=>$data['phone'],'text'=>$data['message']];
       $send = Mail::send('mail.contact',$messageData,function($message) use($email){
            $message->to($email)->subject('New Contact List Added');
        });

        if($send){
            return back()->with("success","Thanks for messaging, We will contact you as soon as possible");
        }
    }
    public function freequotesend(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
        $serv = Services::where('id', $data['mainservice'])->first();
        $email = $data['email'];
        $messageData = ['email'=>$email,'name'=>$data['name'],'phone'=>$data['phone'],'text'=>$data['comments'], 'mainservice'=>$serv->title,'subservice'=>$data['subservice'],'url'=>$data['url']];
       $send = Mail::send('mail.freeQuote',$messageData,function($message) use($email){
            $message->to($email)->subject('New Contact List Added');
        });
        if($send){
            return back()->with("success","Thanks for messaging, We will contact you as soon as possible");
        }
        }else{
            abort(404);
        }

    }
}
