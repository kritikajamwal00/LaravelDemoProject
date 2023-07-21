<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth/login');
    }

    public function showSignup(){
        return view('auth/signup');
    }

   

    // public function showChangepassword(){
    //     return view('auth/changepassword');
    // }

    public function showForgetpassword(){
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
