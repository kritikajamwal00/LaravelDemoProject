<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth/register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'country' => ['required', 'string', 'max:255'],
            // // 'state' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:male,female'],
            'hobbies' => ['required', 'array'], // Make sure it's an array
            'hobbies.*' => ['string', 'max:255'], // Each hobby should be a string
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => $request->country,
            // // 'state' => $request->state,
            'gender' => $request->gender,
            'hobbies' => implode(', ', $request->hobbies), 
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}




<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Requests\Auth\RegisterUserRequest;
class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => $request->country,
            'gender' => $request->gender,
            'hobbies' => $request->input('hobbies', []),
        ]);
        // You can trigger an event if needed
        // event(new Registered($user));
        // Redirect to a specific route or return a response
        return redirect()->route('login')->with('message', 'Registration successful. Please log in.');
    }
}
























<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required', 'string', 'max:255'],
            'gender' =>['required', 'string', 'max:255'],
            'hobbies' => ['required', 'array'], // Make sure it's an array
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'hobbies' => $data['hobbies'], // Save hobbies as an array
            'gender' => $data['gender'],
        ]);
    }
}




// userprofile page
@extends('layout.header')

@section('title')
UserProfile
@endsection

@section('content')

@include('layout.userprofilenav')

@include('layouts.app')


<div class="container ">

    <div class="row ms-lg-4">
        <div class="col-lg-11">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search by name" required>
        </div>
        <!-- <div class="col-4">
                <button type="submit" id="searchBtn" class="btn btn-primary ">Search</button>
            </div> -->
    </div>

</div>
<div id="searchResults" class="container mt-4"></div>

<div class="container mt-lg-5">
    <div class="row userprowid">
       
      <div class="col-lg-4 col-12 userproback ">
    <div class="userprobox">
    <div class="userproimg pt-lg-5 pt-4"><img src="images/userprofile.png" class="img-fluid  "></div>
            
     <div class="text-center mt-4">
    <ul class="list-unstyled userprolist">
     <li class="fs-2 fw-semibold text-capitalize" id="name" id="llname" > {{$user->name}}{{$user->lastname}} </li>


    <li class="fs-5 pt-lg-3 fw-semibold" id="email">Email - {{$user->email}} </li>

     <li class="fs-5 pt-lg-2 fw-semibold"> Phone- 259 875 69875</li>
     </ul>

    </div>

        <div class="pt-lg-4 pb-lg-4 text-center">

     <a href="edituserprofile"><button type="button" class="btn btn-primary rounded-0">Edit</button></a>
     <a href="changepassword"><button type="button" class="btn btn-primary rounded-0">change Password</button></a>
    </div>

    </div>
    </div>
    <div class="col-lg-7 ms-lg-5 col-12  userproback">
     <div class="userprolistbox pt-lg-5 pt-4 ">
        <div class="row userprolistfont">
        <a id="profile-details"></a>

     <div class="col-6 pt-lg-5 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">First Name</div>
    <div class="col-6 pt-lg-5 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="fname">{{$user->name}}</div>


    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize"> Last name </div>
    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="lname"> {{$user->lastname}}</div>

    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">Gender </div>
    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="gender">
        {{$user->gender}} </div>



    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">Country</div>
    
    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="country">{{$user->country}}
     </div>
        

     <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">State</div>
    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="state">
       Himachal Pradesh </div>
        

    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">Hobbies </div>
    
    <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="hobbies">
        {{$user->hobbies}} </div> 
</div >
</div>
</div>

</div>
    </div>
</div>
</div>
</div>

@include('layout.footer')
@endsection

// chamgepass
<div class="container mt-lg-3 mt-4 signcolwid2">
     <p class="success">
                        @if(session('status'))
                            {{ session('status') }}
                        @endif
                    </p>
    <div class="row rowheight pt-lg-5">
        <div class="col-lg-6 col-md-6 col-12">
            <span class="loginimage"><img src="../images/signup1.png" class="img-fluid"></span>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-3 justify-content-center backlogin signupbox1">
            <div class=" signupbox">
                <h3 class="fw-bold pb-lg-4 fs-3">Change your password?</h3>
                <form method="POST" id="myForm" enctype="multipart/form-data" action="#">
                    <form method="POST" id="myForm" enctype="multipart/form-data" action="{{ route('password.update')  }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="mb-3">
                        <label for="old_password" class="form-label fw-bold">Old Password</label>
                        
                        <input type="password" name="old_password"  class="form-control" id="old_password">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label fw-bold">New Password</label>
                       
                        <input type="password" name="new_password" class="form-control" id="new_password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label fw-bold">Confirm Password</label>
                      
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                    </div>
                    <p class="error">
                        @if ($errors->any())
                            {{ $errors->first() }}
                        @endif
                    </p>
                   <p class="text-center"> <button type="submit" class="btn btn-primary">Change Password</button></p>
                </form>
            </div>
        </div>
    </div>
</div>