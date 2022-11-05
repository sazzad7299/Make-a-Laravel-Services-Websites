<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function profile(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        if($request->isMethod('post')){
            $data = $request->all();
            $admin = DB::table('users')->where(['id'=>Auth::user()->id])->update(['name'=>$data['name'],'email'=>$data['email']]);
            return redirect()->back()->with('success','Profile update Successfully');
        }
        $user = User::where('id', Auth()->user()->id)->first();
        // echo "<pre>"; print_r($user);die;
        return view('admin.profile', compact('user'));
    }
    public function updatepassword(Request $request)
    {
        $request->validate(
            [
                'currentpassword' => 'required',
                'password' => ['required', 'string', 'min:8', 'confirmed'],

            ]);
        $id = Auth::user()->id;
        $user = DB::table('users')->where(['id'=>$id])->first();
        if(Hash::check($request->currentpassword,$user->password)){
            $password = Hash::make($request->password);
            DB::table('users')->where(['id'=>$id])->update(['password'=>$password]);
            return redirect('/admin/profile')->with('success','Password Update Successfully!');
        } else{
            return redirect('/admin/profile')->with('error','Current Password is incorrect!');
        }

    }
}
