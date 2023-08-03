@extends('layout.header')

@section('title')
    UserProfile
@endsection

@section('content')
    @include('layout.userprofilenav')


    <div class="container border border-2 rounded-2 fontedituser">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- form -->
        <form method="POST" action="{{url('update')}}">
            @csrf
            <div class="row ">
                <div class="col-12 edituserproback text-center rounded-top">
                    <h3 class="text-center pt-3"> <i class="bi bi-image"></i>
                    </h3>
                </div>

                <div class="col-12 p-lg-4 ">

                    <div class="pt-4">
                        <div class="row">

                            <div class="col-lg col-12 d-flex align-items-center">
                                <span class="usereditproimg d-flex justify-content-center "><i
                                        class="bi bi-image usericon fs-4 rounded-2"></i></span>
                                <div class="userinfo">
                                    <span class="fw-bold fs-5">

                                    </span>
                                    <p class="fs-5" style="color:#585C65">

                                    </p>

                                </div>
                            </div>


                            <!-- button -->
                            <div class="col-lg col-12 py-lg-0 py-md-0 py-3 px-lg-0 px-md-0 px-4 ">
                                <button type="submit" name="submit"
                                    class="btn btn-primary float-lg-end float-md-end float-sm-start"> Update </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- firstname -->
                <div class="col-lg-6 p-lg-4">
                    <div class="pb-2"> <label for="exampleInputPassword1" class="form-label fw-bold"
                            style="color: #6B6C6F;">First Name</label>
                        <span class="error">

                        </span>
                    </div>
                    <input type="text" name="name" value=" {{ $user->name }}" class="form-control "
                        style="background: #F9F9F9; ">
                </div>
                <!-- lastname -->
                <div class="col-lg-6  p-lg-4">
                    <div class="pb-2"> <label for="exampleInputPassword1" class="form-label fw-bold "
                            style="color: #6B6C6F;">Last
                            Name</label>

                    </div>
                    <input type="text" class="form-control" placeholder="Your Last Name" value="{{ $user->lastname }} "
                        name="lname" style="background: #F9F9F9;">
                </div>
                <!-- gender -->
                <div class="col-lg-6 p-lg-4">
                    <label for="exampleInputPassword1" class="form-label fw-bold" style="color: #6B6C6F;">Gender</label>

                    <div class=" ps-lg-2">

                        <span><label class="fw-bold " style="color: #6B6C6F;">
                                <input type="radio" name="gender" value="male"
                                    {{ $user->gender === 'male' ? 'checked' : '' }}><span class="ps-2">Male</span>
                            </label>
                            <label class="ps-3 fw-bold" style="color: #6B6C6F;">
                                <input type="radio" name="gender"
                                    value="female"{{ $user->gender === 'female' ? 'checked' : '' }}><span class="ps-2">
                                    Female</span>
                            </label></span>

                    </div>
                </div>
                <!-- country -->
                <div class="col-lg-6 p-lg-4">
                    <label for="exampleInputPassword1" class="form-label fw-bold" style="color: #6B6C6F;">Country</label>


                    <div class="mb-3 d-flex justify-content-between border border-1 rounded-2" style="height: 40px;">

                        <span class="fs-5 pt-1 ps-3"><i class="bi bi-globe-asia-australia"
                                style="color: #C8C8C8; "></i></span>
                        <select name="country" class="form-select form-select-sm rounded-2 border-0  fs-6"
                            aria-label=".form-select-sm example" style="background: #F9F9F9; ">
                            <option value="India" {{ $countryName === 'India' ? 'selected' : '' }}>India</option>
                            <option value="United States" {{ $countryName === 'UK' ? 'selected' : '' }}>UK</option>
                            <option value="United Kingdom" {{$countryName === 'US' ? 'selected' : '' }}>
                                US</option>
                                <option value="United Kingdom" {{$countryName === 'China' ? 'selected' : '' }}>
                                    China</option>


                        </select>
                    </div>
                </div>

               
                
            </div>

            {{-- <!-- state -->
            <div class="col-lg-6 p-lg-4 " id="state">
                <label for="exampleInputPassword1" class="form-label fw-bold" style="color: #6B6C6F;">State</label>


                <div class="mb-3 d-flex justify-content-between border border-1 rounded-2" style="height: 40px;">
                    <span class="fs-5 pt-1 ps-3"><i class="bi bi-globe-asia-australia" style="color: #C8C8C8;"></i></span>
                    <select id="state-select" name="state" class="form-select form-select-sm rounded-2 border-0  fs-6"
                        aria-label=".form-select-sm example" style="background: #F9F9F9; ">

                    </select>
                </div>
            </div> --}}


            <!-- Hobbies -->
            <div class="col-lg-6 p-2">
                            <label class="form-label" style="padding-top: 10px">Hobbies</label>
                            <div class="mb-3">
                                <div class="align-items-center justify-content-center">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]"
                                                    @if (is_array(json_decode(auth()->user()->hobbies)) &&
                                                            in_array('Listening to music', json_decode(auth()->user()->hobbies))) checked @endif id="hobby1"
                                                    value="Listening to music">
                                                <label class="form-check-label">
                                                    Listening to music
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]"
                                                    @if (is_array(json_decode(auth()->user()->hobbies)) && in_array('writing', json_decode(auth()->user()->hobbies))) checked @endif id="hobby2"
                                                    value="writing">
                                                <label class="form-check-label">
                                                    Writing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]"
                                                    @if (is_array(json_decode(auth()->user()->hobbies)) && in_array('Reading Books', json_decode(auth()->user()->hobbies))) checked @endif id="hobby3"
                                                    value="Reading Books">
                                                <label class="form-check-label">
                                                    Reading Books
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]"
                                                    @if (is_array(json_decode(auth()->user()->hobbies)) && in_array('Dancing', json_decode(auth()->user()->hobbies))) checked @endif id="hobby4"
                                                    value="Dancing">
                                                <label class="form-check-label">
                                                   Dancing
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @error('hobbies')
                                <span class="invalid-feedback d-block pb-1 ps-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
            {{-- <div class="col-lg-6 p-lg-4">
                <label for="exampleInputPassword1" class="form-label fw-bold" style="color: #6B6C6F;">Hobbies</label>
                <div class="d-flex">
                    @foreach ($hobbiesList as $hobby)
                        <label style="color: #6B6C6F;">
                            <input type="checkbox" name="hobbies[]" value="{{ $hobby }}"
                                {{ in_array($hobby, $user->hobbies) ? 'checked' : '' }}>
                            <span class="fw-bold ps-2">{{ $hobby }}</span>
                        </label>
                    @endforeach
                </div>
            </div> --}}


        </form>

        <div class="mt-lg-4">
            <span class="fs-6  fw-bold">My email Address</span>

            <div class="pt-4">
                <div class="row">

                    <div class="col-lg col-12 d-flex align-items-center">
                        <span class=".usereditproimgdwn d-flex justify-content-center "
                            style="width: 70px; height: 70px; background: #E8E8E8; border-radius: 50%; display: flex;"><i
                                class="bi bi-image  fs-5 rounded-2" style=" padding-top: 25px;"></i></span>
                        <div class="userinfo">


                            <span>1 month ago</span>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>

    @include('layout.footer')
@endsection
