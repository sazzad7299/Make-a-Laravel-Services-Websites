<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Cviebrock\EloquentSluggable\Services\SlugService;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blogs = Blog::with('category')->get();

        return view('admin.blog.index',compact('blogs'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.blog.create',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required',
                'content'=> 'required',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
                'category'=>'required'

            ],
            [
                'title.required' => 'Enter :attribute First',
                'content.required' => 'Enter :attribute First',
                'image.required' => 'Upload a image is required for create a blog',
                'category.required'=>'Category Field Must be selected',
            ]
        );

        $data = $request->all();
        // echo "<pre>";print_r($data);die;
        $blog = new Blog;
        $blog->title = $data['title'];
        $blog->slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        $blog->description = $data['content'];
        $blog->tag = $data['tag'];
        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/blog/small/'.$input['file']);
        $destinationPath2 = public_path('/uploads/blog/medium/'.$input['file']);
        $destinationPath3 = public_path('/uploads/blog/large/'.$input['file']);
        Image::make($image)->resize(1500,700)->save($destinationPath3);
        Image::make($image)->resize(800,533)->save($destinationPath2);
        Image::make($image)->resize(null,115,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1);

        $blog->image = $input['file'];
        }
        if(!empty($data['status'])){
            $blog->status=$data['status'];
        }else{
            $blog->status=0;
        }
        if(!empty($data['offer'])){
            $blog->is_offer=$data['offer'];
        }else{
            $blog->is_offer=0;
        }
        $blog->cat_id=$data['category'];
       $saved = $blog->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","Blog Created Successfully");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.blog.edit', compact(['blog', 'categories', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate(
            [
                'title' => 'required',
                'content'=> 'required',
                'category'=>'required'

            ],
            [
                'title.required' => 'Enter :attribute First',
                'content.required' => 'Enter :attribute First',
                'category.required'=>'Category Field Must be selected',
            ]
        );

        $data = $request->all();
        // echo "<pre>";print_r($data);die;

        if($data['title']  != $blog->title){
            $blog->slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
            $blog->title = $data['title'];
        }

        $blog->description = $data['content'];
        $blog->tag = $data['tag'];
        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath1 = public_path('/uploads/blog/small/'.$input['file']);
            $destinationPath2 = public_path('/uploads/blog/medium/'.$input['file']);
            $destinationPath3 = public_path('/uploads/blog/large/'.$input['file']);
            Image::make($image)->resize(1000,550)->save($destinationPath3);
            Image::make($image)->resize(800,533)->save($destinationPath2);
            Image::make($image)->resize(null,115,function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath1);
            if(!empty($blog->image)){
                $image_path1= public_path('/uploads/blog/small/'.$blog->image);
                $image_path2= public_path('/uploads/blog/medium/'.$blog->image);
                $image_path3= public_path('/uploads/blog/large/'.$blog->image);
                unlink($image_path1);
                unlink($image_path2);
                unlink($image_path3);
            }
             $blog->image = $input['file'];
        }
        if(!empty($data['status'])){
            $blog->status=$data['status'];
        }else{
            $blog->status=0;
        }
        $blog->cat_id=$data['category'];
       $saved = $blog->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","Blog Update Successfully");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog){
            if(!empty($blog->image)){
                $image_path1= public_path('thumbnail/'.$blog->image);
                $image_path2= public_path('uploads/'.$blog->image);
                unlink($image_path1);
                unlink($image_path2);
            }

            $blog->delete();
            Session::flash('success','Blog deleted successfully');
        }

        return redirect()->back();
    }
    // public function checkslug(Request $req)
    // {
    //     $slug = SlugService::createSlug(Post::class, 'slug', $req->title, ['unique' => false]);
    //     return response()->json($slug);
    // }

}
