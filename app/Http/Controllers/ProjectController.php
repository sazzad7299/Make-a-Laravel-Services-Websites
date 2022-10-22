<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::all();
        return view('admin.project.list',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
                'content'=> 'required',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',

            ],
            [
                'name.required' => 'Enter :attribute First',
                'content.required' => 'Enter :attribute First',
                'image.required' => 'Upload a image is required for create a service',
            ]
        );
        $project = new Project;
        $project->title = $data['title'];
        $project->slug = SlugService::createSlug(Project::class, 'slug', $request->title);
        $project->desc = $data['content'];

        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/project/small/'.$input['file']);
        $destinationPath2 = public_path('/uploads/project/medium/'.$input['file']);
        $destinationPath3 = public_path('/uploads/project/large/'.$input['file']);
        Image::make($image)->resize(1500,700)->save($destinationPath3);
        Image::make($image)->resize(800,533)->save($destinationPath2);
        Image::make($image)->resize(null,115,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1);

        $project->image = $input['file'];
        }

        if(!empty($data['status'])){
            $project->status=$data['status'];
        }else{
            $project->status=0;
        }

        $saved = $project->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","project Created Successfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $request->validate(
            [
                'title' => 'required',
                'content'=> 'required',

            ],
            [
                'title.required' => 'Enter :attribute First',
                'content.required' => 'Enter :attribute First',
            ]
        );
        $project->title = $data['title'];
        $project->slug = SlugService::createSlug(Project::class, 'slug', $request->title);
        $project->desc = $data['content'];

        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/project/small');
        $destinationPath2 = public_path('/uploads/project/medium');
        $destinationPath3 = public_path('/uploads/project/large');
        Image::make($image)->resize(1500,700)->save($destinationPath3.'/'.$input['file']);
        Image::make($image)->resize(800,533)->save($destinationPath2.'/'.$input['file']);
        Image::make($image)->resize(null,115,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1.'/'.$input['file']);

                //unlink image path
                unlink($destinationPath1.'/'.$project->image);
                unlink($destinationPath2.'/'.$project->image);
                unlink($destinationPath3.'/'.$project->image);
        $project->image = $input['file'];
        }

        if(!empty($data['status'])){
            $project->status=$data['status'];
        }else{
            $project->status=0;
        }

        $saved = $project->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","project update Successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if($project){
            if(!empty($project->image)){
                $destinationPath1 = public_path('/uploads/project/small');
                $destinationPath2 = public_path('/uploads/project/medium');
                $destinationPath3 = public_path('/uploads/project/large');
                unlink($destinationPath1.'/'.$project->image);
                unlink($destinationPath2.'/'.$project->image);
                unlink($destinationPath3.'/'.$project->image);
            }
            $project->delete();
            Session::flash('success','project deleted successfully');
        }


        return redirect()->back();
    }
}
