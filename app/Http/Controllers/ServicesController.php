<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Services;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();

        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $parent = Services::where('parent_id',NULL)->get();
        return view('admin.services.create',compact('parent','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $request->validate(
            [
                'title' => 'required',
                'heading'=>'required',
                'content'=> 'required',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',

            ],
            [
                'title.required' => 'Enter :attribute First',
                'content.required' => 'Enter :attribute First',
                'image.required' => 'Upload a image is required for create a service',
            ]
        );

        // echo "<pre>";print_r($data);die;
        $service = new Services;
        $service->title = $data['title'];
        $service->heading = $data['heading'];
        $service->slug = SlugService::createSlug(Services::class, 'slug', $request->title);
        $service->description = $data['content'];
        $service->tag = $data['tag'];
        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/service/small/'.$input['file']);
        $destinationPath2 = public_path('/uploads/service/medium/'.$input['file']);
        $destinationPath3 = public_path('/uploads/service/large/'.$input['file']);
        Image::make($image)->resize(1500,700)->save($destinationPath3);
        Image::make($image)->resize(800,533)->save($destinationPath2);
        Image::make($image)->resize(null,115,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1);

        $service->image = $input['file'];
        }
        if($request->hasfile('icon')){
            $image = $request->file('icon');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/service/icon/'.$input['file']);

        Image::make($image)->resize(null,64,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1);

        $service->ico = $input['file'];
        }
        if(!empty($data['status'])){
            $service->status=$data['status'];
        }else{
            $service->status=0;
        }
        $service->parent_id = $data['parent_id'];
        $saved = $service->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","Service Created Successfully");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        $tags = Tag::all();
        $parent = Services::where('parent_id',NULL)->get();
        return view('admin.services.edit', compact(['service', 'tags' ,'parent']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $service)
    {
        $request->validate(
            [
                'title' => 'required',
                'heading'=>'required',
                'content'=> 'required',

            ],
            [
                'title.required' => 'Enter :attribute First',
                'content.required' => 'Enter :attribute First',
                'heading.required'=>'Enter :attribute First',
            ]
        );

        $data = $request->all();
        // echo "<pre>";print_r($data);die;
        $service->title = $data['title'];
        $service->slug = SlugService::createSlug(Services::class, 'slug', $request->title);
        $service->description = $data['content'];
        $service->tag = $data['tag'];
        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath1 = public_path('/uploads/service/small/'.$input['file']);
            $destinationPath2 = public_path('/uploads/service/medium/'.$input['file']);
            $destinationPath3 = public_path('/uploads/service/large/'.$input['file']);
            Image::make($image)->resize(1000,550)->save($destinationPath3);
            Image::make($image)->resize(800,533)->save($destinationPath2);
            Image::make($image)->resize(null,115,function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath1);
            if(!empty($service->image)){
                $image_path1= public_path('/uploads/service/small/'.$service->image);
                $image_path2= public_path('/uploads/service/medium/'.$service->image);
                $image_path3= public_path('/uploads/service/large/'.$service->image);
                unlink($image_path1);
                unlink($image_path2);
                unlink($image_path3);
            }
             $service->image = $input['file'];
        }
        if($request->hasfile('icon')){
            $image = $request->file('icon');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/service/icon/'.$input['file']);

        Image::make($image)->resize(null,64,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1);
        if(!empty($service->ico)){
            $image_path1= public_path('/uploads/service/icon/'.$service->ico);
            unlink($image_path1);
        }
        $service->ico = $input['file'];
        }
        if(!empty($data['status'])){
            $service->status=$data['status'];
        }else{
            $service->status=0;
        }
        $service->parent_id = $data['parent_id'];
       $saved = $service->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","Service Update Successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
    public function singleService($slug)
    {
        $serv = Services::where('slug', $slug)->first();
        $count=Services::where('parent_id', $serv->id)->count();
        return view('frontend.singleservice',compact('serv','count'));

    }
}
