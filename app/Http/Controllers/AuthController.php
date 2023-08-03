<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth/login');
    }

    public function showSignup()
    {
        return view('auth/signup');
    }



    public function showChangepassword()
    {
        return view('auth/changepassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required', 'current_password'],
            // Custom rule 'current_password'
            'new_password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        // Check if the old password matches the authenticated user's password
        if (!Hash::check($request->old_password, $request->user()->password)) {
            return redirect()->back()->withErrors(['old_password' => 'Incorrect old password.']);
        }
        // Update the user's password
        $request->user()->update([
            'password' => Hash::make($request->new_password),
        ]);
        // return redirect()->back()->with('success', 'Password updated successfully.');
        
            Auth::logout();
         return redirect('login')->withSuccess(' Password updated successfully.');
       
    }



    public function showForgetpassword()
    {
        return view('auth/forgetpassword');
    }





}

//     public function getStates(Request $request)
// {
//     $countryId = $request->input('country_id');

//     $states = [
//         'state_id_1' => 'State 1',
//         'state_id_2' => 'State 2',

//     ];

//     return response()->json($states);
// }
