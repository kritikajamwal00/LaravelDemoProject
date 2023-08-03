@extends('layout.header')

@section('title')
    UserProfile
@endsection

@section('content')
    @include('layout.userprofilenav')


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
                            <li class="fs-2 fw-semibold text-capitalize" id="name" id="llname">
                                {{ $user->name }}{{ $user->lastname }} </li>


                            <li class="fs-5 pt-lg-3 fw-semibold" id="email">Email - {{ $user->email }} </li>

                            <li class="fs-5 pt-lg-2 fw-semibold"> Phone- 259 875 69875</li>
                        </ul>

                    </div>

                    <div class="pt-lg-4 pb-lg-4 text-center">

                        <a href="edituserprofile"><button type="button" class="btn btn-primary rounded-0">Edit</button></a>
                        {{-- <a href="changepassword"><button type="button" class="btn btn-primary rounded-0">change Password</button></a> --}}
                        <a href="changepassword">
                            <button type="button" class="btn btn-primary rounded-0">Change Password</button>
                        </a>
                        {{-- <a class="btn btn-primary button1  rounded-0" href="changepassword"
                          type="button">Signup</a> --}}
                        {{-- onclick="window.location='{{ route("some_route_name") }}' --}}

                    </div>

                </div>
            </div>
            <div class="col-lg-7 ms-lg-5 col-12  userproback">
                <div class="userprolistbox pt-lg-5 pt-4 ">
                    <div class="row userprolistfont">
                        <a id="profile-details"></a>

                        <div class="col-6 pt-lg-5 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">First Name</div>
                        <div class="col-6 pt-lg-5 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="fname">
                            {{ $user->name }}</div>


                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize"> Last name </div>
                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="lname">
                            {{ $user->lastname }}</div>

                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">Gender </div>
                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="gender">
                            {{ $user->gender }} </div>



                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">Country</div>

                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="country">
                           
                             {{ $countryName }}
                          
                        </div>

                      
                        
                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">State</div>
                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="state">
                            {{ $stateName }}
                        </div>


                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize">Hobbies </div>

                        <div class="col-6 pt-lg-3 ps-lg-0 ps-4 fs-5 fw-normal text-capitalize" id="hobbies">
                            {{ $user->hobbies }} </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>

    @include('layout.footer')
@endsection
