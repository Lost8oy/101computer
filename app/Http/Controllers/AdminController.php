<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if (Auth::check())
    {
        $currentUser = auth()->user()->id;
        $user = User::find($currentUser);
        return view('admin.index',compact('user'));
    }

    }

  public function terms(){
      return 'terms and conditions ';
  }

  /*The compact() function is used to convert given variable to to array in which the
  key of the array will be the name of the variable and the value of the array will be the value of the variable.
  */
  public function profile(){

    if (Auth::check())
    {
        $currentUser = auth()->user()->id;
        $user = User::find($currentUser);
        return view('admin.profile.profile',compact('user'));

    }
}



    public function edit(){

    if (Auth::check())
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        return view('admin.profile.edit',compact('profile'));
    }
    }// End Method


    public function store(Request $request){

    $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
    


        if ($request->file('profile_image')) {
          $file = $request->file('profile_image');

           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/admin/profiles'),$filename);
           $data['profile_image'] = $filename;
        }

        $data->save();

        return redirect()->route('admin.profile');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Current User Logout was Successfull',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }



}
