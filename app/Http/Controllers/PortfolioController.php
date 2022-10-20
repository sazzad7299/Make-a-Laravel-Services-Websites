<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.list',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
        $portfolio = new Portfolio;
        $portfolio->title = $data['title'];
        $portfolio->slug = SlugService::createSlug(Portfolio::class, 'slug', $request->title);
        $portfolio->desc = $data['content'];

        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/portfolio/small/'.$input['file']);
        $destinationPath2 = public_path('/uploads/portfolio/medium/'.$input['file']);
        $destinationPath3 = public_path('/uploads/portfolio/large/'.$input['file']);
        Image::make($image)->resize(1500,700)->save($destinationPath3);
        Image::make($image)->resize(800,533)->save($destinationPath2);
        Image::make($image)->resize(null,115,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1);

        $portfolio->image = $input['file'];
        }

        if(!empty($data['status'])){
            $portfolio->status=$data['status'];
        }else{
            $portfolio->status=0;
        }

        $saved = $portfolio->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","Portfolio Created Successfully");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {

        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
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
        $portfolio->title = $data['title'];
        $portfolio->slug = SlugService::createSlug(Portfolio::class, 'slug', $request->title);
        $portfolio->desc = $data['content'];

        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath1 = public_path('/uploads/portfolio/small');
        $destinationPath2 = public_path('/uploads/portfolio/medium');
        $destinationPath3 = public_path('/uploads/portfolio/large');
        Image::make($image)->resize(1500,700)->save($destinationPath3.'/'.$input['file']);
        Image::make($image)->resize(800,533)->save($destinationPath2.'/'.$input['file']);
        Image::make($image)->resize(null,115,function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath1.'/'.$input['file']);

                //unlink image path
                unlink($destinationPath1.'/'.$portfolio->image);
                unlink($destinationPath2.'/'.$portfolio->image);
                unlink($destinationPath3.'/'.$portfolio->image);
        $portfolio->image = $input['file'];
        }

        if(!empty($data['status'])){
            $portfolio->status=$data['status'];
        }else{
            $portfolio->status=0;
        }

        $saved = $portfolio->save();

        if(!$saved){
            return back()->with("error","Sorry! Try again");
        }else{
            return back()->with("success","Portfolio update Successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if($portfolio){
            if(!empty($portfolio->image)){
                $destinationPath1 = public_path('/uploads/portfolio/small');
                $destinationPath2 = public_path('/uploads/portfolio/medium');
                $destinationPath3 = public_path('/uploads/portfolio/large');
                unlink($destinationPath1.'/'.$portfolio->image);
                unlink($destinationPath2.'/'.$portfolio->image);
                unlink($destinationPath3.'/'.$portfolio->image);
            }
            $portfolio->delete();
            Session::flash('success','Portfolio deleted successfully');
        }
        

        return redirect()->back();
    }
}
