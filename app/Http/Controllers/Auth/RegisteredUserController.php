<?php

namespace App\Http\Controllers\Auth;

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Session;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\{Country, State};
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Requests\RegisterRequest;




class RegisteredUserController extends Controller
{

    public function create(): view
    {
        return view('auth/register');

    }

    public function fetchStates(Request $request)
    {
        $data['states'] = State::where('country_id', $request->country_id)->get(['name', 'id']);
        return response()->json($data);
    }

    /**


     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(RegisterRequest $request): RedirectResponse
    {

        $user = User::create([


            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => $request->country,
            'state' => $request->state_id,
            'gender' => $request->gender,
            'hobbies' => $request->input('hobbies', []),

        ]);


        event(new Registered($user));
      

        return redirect()->route('home')->with('success', 'User registered successfully.');
     
    }
}













// app/Http/Controllers/Auth/RegisteredUserController.php
