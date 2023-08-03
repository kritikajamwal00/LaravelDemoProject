<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Country;
use App\Models\State;
use App\Models\User;



class UserprofileController extends Controller
{
   
    public function showUserprofile()
{
    $user = Auth::user();

    $countryId = $user->country;
    $stateId = $user->state_id;

    $countryName = Country::where('id', $countryId)->value('name');
    $stateName = State::where('id', $stateId)->value('name');
    // Debug information
    // print_r(compact('user', 'countryName', 'stateName'));


    return view('userprofile.userprofile', compact('user', 'countryName', 'stateName'));
}

    public function showEdituserprofile()
    {
        $user = Auth::user();
        $countryId = $user->country;
    $stateId = $user->state_id;

    $countryName = Country::where('id', $countryId)->value('name');
    $stateName = State::where('id', $stateId)->value('name');
        // print_r($user);
        return view('userprofile/edituserprofile', compact('user','countryName', 'stateName'));

    }


    public function updateUserprofile(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $user->update($request->validated());
        return back()->with('success', 'Profile updated successfully!');
    }


}








// use Illuminate\Support\Facades\Auth;
// use App\Models\Country;
// public function showUserProfile()
// {
//     $user = Auth::user();
//     $countryId = $user->country; // Get the selected country ID from the "users" table
//     // Fetch the country name from the "countries" table using the country ID
//     $countryName = Country::where('id', $countryId)->value('name');
//     return view('userprofile.userprofile', compact('user', 'countryName'));
// }
// Or without model
// 7:37
// app/Models/User.php
// namespace App\Models;
// use Illuminate\Database\Eloquent\Model;
// class User extends Model
// {
//     public function country()
//     {
//         return $this->belongsTo(Country::class, 'country');
//     }
// }
// 7:37
// use Illuminate\Support\Facades\Auth;
// use App\Models\Country;
// public function showUserProfile()
// {
//     $user = Auth::user();
//     $countryName = $user->country->name; // Access the country name using the relationship method.
//     return view('userprofile.userprofile', compact('user', 'countryName'));
// }