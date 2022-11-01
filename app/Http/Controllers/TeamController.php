<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams =Team::all();
        return view('admin.team.list',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:teams,name',
            'title' => 'required',
        ]);
        if($request->hasfile('image')){
            $image = $request->file('image');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/team/'.$input['file']);
        Image::make($image)->resize(350,350)->save($destinationPath);
        }
        $team = Team::create([
            'name' => $request->name,
            'title'=>$request->title,
            'image' => $input['file'],
        ]);

        Session::flash('success', 'Member created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //validation
       $this->validate($request, [
        'name' => "required|unique:teams,name,$team->id",
    ]);
    // dd($request->all());
    if($request->hasfile('image')){
        $image = $request->file('image');
        $input['file'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/team/'.$input['file']);
        Image::make($image)->resize(350,350)->save($destinationPath);
        unlink(public_path('/uploads/team/'.$team->image));
        $team->image =$input['file'];
    }
    $team->name = $request->name;
    $team->title = $request->title;
    $team->save();

    Session::flash('success', 'Team updated successfully');
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if($team){
            unlink(public_path('/uploads/team/'.$team->image));
            $team->delete();
            Session::flash('success', 'Delete Member successfully');
            return redirect()->back();
        }
    }
}
