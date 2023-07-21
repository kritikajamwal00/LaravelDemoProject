<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
// use App\Models\User;



class UserprofileController extends Controller
{
    public function showUserprofile()
{
    $user = Auth::user();
    // dd($user->hobbies); // Check the value of hobbies
    // dd(is_array($user->hobbies));
   
    if ($user) {
        // dd($user.name);
        // print_r($user);
        // $user->hobbies = json_decode($user->hobbies, true); 
        return view('userprofile.userprofile', compact('user'));
    } else {
        return redirect()->route('login');
    }
}

    
       

    public function showEdituserprofile(){
        $user = Auth::user();
        print_r($user);
        
        return view('userprofile/edituserprofile',compact('user'));
        
    }

   
    public function updateUserprofile(ProfileUpdateRequest $request)
{
    
  
    $user = Auth::user();
    $user->update($request->validated());
   

    return back()->with('success', 'Profile updated successfully!');
}

   
}


