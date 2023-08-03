<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $countryId = $user->country;
        $stateId = $user->state_id;
    
        $countryName = Country::where('id', $countryId)->value('name');
        $stateName = State::where('id', $stateId)->value('name');
        // print_r($user);
        return view('home',compact('user', 'countryName', 'stateName'))->withSuccess('successfully');
    }
 }



// {
//     public function __construct()
//     {
//         $this->middleware('verified');
//     }

//     public function index()
//     {
//         // Your home page logic
//     }
// }
