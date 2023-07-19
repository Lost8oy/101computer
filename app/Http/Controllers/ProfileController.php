<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{

    public function view(){

        if (Auth::check())
        {   $currentUser = auth()->user()->id;
            $user = User::find($currentUser);
            return view('profile.view',compact('user'));
        }
    }

    public function changepassword(){

        if (Auth::check())
        {   $currentUser = auth()->user()->id;
            $user = User::find($currentUser);
            return view('profile.change-password',compact('user'));
        }
    }

    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            $notification_success = array(
                'message' => 'Password was Successfully changed',
                'alert-type' => 'success'
            );



          //  session()->flash('message','Password Updated Successfully');
            return redirect()->back()->with($notification_success);
        } else{

            $notification_fail = array(
                'message' => 'Old password is not match',
                'alert-type' => 'alert'
            );

           // session()->flash('message','Old password is not match');

            return redirect()->back()->with($notification_fail);
        }

    }// End Method











    // Store Edited profile
    public function store(Request $request){

        if (Auth::check()){

            $id = Auth::user()->id;
            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
       
     

            if ($request->file('profile_image')) {
               $file = $request->file('profile_image');

               $filename = date('YmdHi').$file->getClientOriginalName();
               $file->move(public_path('uploads/profile/images'),$filename);
               $data['profile_image'] = $filename;
            }
            $data->save();
        }
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'info'
        );

       return redirect()->route('profile.view')->with($notification);

    }// End Method


    public function edit(){
        if (Auth::check()){
        $id = Auth::user()->id;
        $user = User::find($id);
        }
        return view('profile.edit',compact('user'));
    }// End Method



   public function remove_editProfile(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();



        $notification = array(
            'message' => 'Current User Logout was Successfull',
            'alert-type' => 'success'
        );
           return Redirect::to('/')->with($notification);
    }
}
