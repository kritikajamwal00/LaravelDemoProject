@extends('layout.header')

@section('title')
    Signup
@endsection

@section('content')
    <div class="container mt-lg-5 mt-4 signcolwid">
        <div class="row pt-lg-5">

            <div class="col-lg-6 col-md-6 col-12 ">
                <span class="signup1img"><img src="../images/login1.png" class="img-fluid "></span>
            </div>

            <div class="col-lg-6 col-md-6 col-12 mt-lg-0 pt-5 mt-3 ">
                <div class="p-lg-5 pt-lg-0 signup1box" style="width: 70%; margin-left: 30px;">
                    <h3 class="fw-bold pb-lg-4">{{ __('Signup to your account ') }}</h3>
                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}


                    <form method="POST" action="{{ url('register') }}">
                        @csrf
                        <!-- ---firstname -->
                        <span for="name"
                            class="col-md-4 col-form-label text-md-end text-start">{{ __('Name') }}</span>
                        <div class="mb-3 d-flex justify-content-between border border-1 mt-lg-2">

                            <span class="py-lg-2 ps-lg-3 py-2 ps-2" style="color: #C8C8C8;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg></span>

                            <input id="name" type="text" class="form-control border border-0 fw-bold "
                                name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                        </div>
                        @error('name')
                            <span class="invalid-feedback d-block pb-1 ps-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <!-- -------lastname -->
                        <span for="name" class="col-md-4 col-form-label text-md-end">{{ __('Lastname') }}<span>
                                <div class="mb-3 d-flex justify-content-between border border-1 mt-lg-2">

                                    <span class="py-lg-2 ps-lg-3 py-2 ps-2" style="color: #C8C8C8;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20"
                                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg>
                                    </span>

                                    <input id="name" type="text" class="form-control border border-0 fw-bold "
                                        name="lastname" value="{{ old('lastname') }}" autocomplete="name" autofocus>

                                </div>
                                @error('lastname')
                                    <span class="invalid-feedback text-start d-block pb-1 ps-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!-- ------email -->
                                <span for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</span>
                                <div class="mb-3 d-flex justify-content-between border border-1">

                                    <span class="py-lg-2 ps-lg-3 py-2 ps-2"> <svg width="25" height="20"
                                            viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M22.0516 19.6488H3.08256C1.77844 19.6488 0.711426 18.5817 0.711426 17.2776V3.05082C0.711426 1.7467 1.77844 0.679688 3.08256 0.679688H22.0516C23.3558 0.679688 24.4228 1.7467 24.4228 3.05082V17.2776C24.4228 18.5817 23.3558 19.6488 22.0516 19.6488ZM3.08256 5.89618V17.2776H22.0516V5.89618L12.5671 11.824L3.08256 5.89618ZM3.08256 3.05082L12.5671 8.97866L22.0516 3.05082H3.08256Z"
                                                fill="#C8C8C8" />
                                        </svg>
                                    </span>
                                    <input id="email" type="email" class="form-control border border-0 fw-bold "
                                        name="email" value="{{ old('email') }}" autocomplete="email">

                                </div>
                                @error('email')
                                    <span class="invalid-feedback text-start d-block pb-1 ps-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <span for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</span>

                                <div class="mb-3 d-flex justify-content-between border border-1">

                                    <span class="py-lg-2 ps-lg-3 py-2 ps-2"> <svg width="27" height="15"
                                            viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M21.6763 14.2268C20.3722 14.2268 19.3052 13.1598 19.3052 11.8557V9.48454H14.0887C13.1402 12.3299 10.4134 14.2268 7.44949 14.2268C5.31547 14.2268 3.30001 13.2783 1.87733 11.6185C0.573208 9.95875 0.0989849 7.7062 0.454655 5.57218C1.04744 2.84538 3.30001 0.711347 6.02682 0.118564C6.50104 0.0395261 6.97527 0 7.44949 0C10.4134 0 13.1402 1.89691 14.0887 4.74227H24.0474C25.3516 4.74227 26.4186 5.80928 26.4186 7.1134C26.4186 8.41753 25.3516 9.48454 24.0474 9.48454V11.8557C24.0474 13.1598 22.9804 14.2268 21.6763 14.2268ZM7.44949 4.74227C6.14537 4.74227 5.07836 5.80928 5.07836 7.1134C5.07836 8.41753 6.14537 9.48454 7.44949 9.48454C8.75362 9.48454 9.82063 8.41753 9.82063 7.1134C9.82063 5.80928 8.75362 4.74227 7.44949 4.74227Z"
                                                fill="#C8C8C8" />
                                        </svg>
                                    </span>
                                    <input id="password" type="password" class="form-control border border-0 fw-bold"
                                        name="password" autocomplete="new-password">


                                    <span class="py-lg-2 pe-lg-3 py-2 pe-2"><svg width="20" height="14"
                                            viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.86571 13.7637C7.73169 13.7637 5.59767 13.1709 3.93787 11.8668C2.15952 10.6812 0.855383 9.02144 0.144043 7.12453C0.855383 5.22763 2.15952 3.56783 3.93787 2.38227C5.59767 1.07814 7.73169 0.485352 9.86571 0.485352C11.9997 0.485352 14.1337 1.07814 15.7935 2.38227C17.5719 3.56783 18.876 5.22763 19.5874 7.12453C18.876 9.02144 17.5719 10.6812 15.7935 11.8668C14.1337 13.1709 11.9997 13.7637 9.86571 13.7637ZM9.86571 2.61939C7.37602 2.61939 5.47909 4.63484 5.47909 7.12453C5.47909 9.61422 7.37602 11.6297 9.86571 11.6297C12.3554 11.6297 14.2523 9.61422 14.2523 7.12453C14.2523 4.63484 12.3554 2.61939 9.86571 2.61939ZM9.86571 9.7328C8.44303 9.7328 7.25745 8.54721 7.25745 7.12453C7.25745 5.70185 8.44303 4.39774 9.86571 4.39774C11.2884 4.39774 12.5925 5.70185 12.5925 7.12453C12.5925 8.54721 11.2884 9.7328 9.86571 9.7328Z"
                                                fill="#C8C8C8" />
                                        </svg>
                                    </span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block pb-1 text-start ps-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <span for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}<span>

                                        <div class="mb-3 d-flex justify-content-between border border-1">

                                            <span class="py-lg-2 ps-lg-3 py-2 ps-2"> <svg width="27" height="15"
                                                    viewBox="0 0 27 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M21.6763 14.2268C20.3722 14.2268 19.3052 13.1598 19.3052 11.8557V9.48454H14.0887C13.1402 12.3299 10.4134 14.2268 7.44949 14.2268C5.31547 14.2268 3.30001 13.2783 1.87733 11.6185C0.573208 9.95875 0.0989849 7.7062 0.454655 5.57218C1.04744 2.84538 3.30001 0.711347 6.02682 0.118564C6.50104 0.0395261 6.97527 0 7.44949 0C10.4134 0 13.1402 1.89691 14.0887 4.74227H24.0474C25.3516 4.74227 26.4186 5.80928 26.4186 7.1134C26.4186 8.41753 25.3516 9.48454 24.0474 9.48454V11.8557C24.0474 13.1598 22.9804 14.2268 21.6763 14.2268ZM7.44949 4.74227C6.14537 4.74227 5.07836 5.80928 5.07836 7.1134C5.07836 8.41753 6.14537 9.48454 7.44949 9.48454C8.75362 9.48454 9.82063 8.41753 9.82063 7.1134C9.82063 5.80928 8.75362 4.74227 7.44949 4.74227Z"
                                                        fill="#C8C8C8" />
                                                </svg>
                                            </span>
                                            <input id="password-confirm" type="password"
                                                class="form-control border border-0 fw-bold" name="password_confirmation"
                                                autocomplete="new-password">
                                            <span class="py-lg-2 pe-lg-3 py-2 pe-2"><svg width="20" height="14"
                                                    viewBox="0 0 20 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.86571 13.7637C7.73169 13.7637 5.59767 13.1709 3.93787 11.8668C2.15952 10.6812 0.855383 9.02144 0.144043 7.12453C0.855383 5.22763 2.15952 3.56783 3.93787 2.38227C5.59767 1.07814 7.73169 0.485352 9.86571 0.485352C11.9997 0.485352 14.1337 1.07814 15.7935 2.38227C17.5719 3.56783 18.876 5.22763 19.5874 7.12453C18.876 9.02144 17.5719 10.6812 15.7935 11.8668C14.1337 13.1709 11.9997 13.7637 9.86571 13.7637ZM9.86571 2.61939C7.37602 2.61939 5.47909 4.63484 5.47909 7.12453C5.47909 9.61422 7.37602 11.6297 9.86571 11.6297C12.3554 11.6297 14.2523 9.61422 14.2523 7.12453C14.2523 4.63484 12.3554 2.61939 9.86571 2.61939ZM9.86571 9.7328C8.44303 9.7328 7.25745 8.54721 7.25745 7.12453C7.25745 5.70185 8.44303 4.39774 9.86571 4.39774C11.2884 4.39774 12.5925 5.70185 12.5925 7.12453C12.5925 8.54721 11.2884 9.7328 9.86571 9.7328Z"
                                                        fill="#C8C8C8" />
                                                </svg>
                                            </span>
                                        </div>
                                        @error('confirm password')
                                            <span class="invalid-feedback d-block text-start pb-1 ps-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <!--  country            -->
                                        @php
                                            use App\Models\Country;
                                        @endphp
                                        <span for="country"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Country') }}<span>
                                                <div class="mb-3 d-flex justify-content-between border border-1"
                                                    style="height: 40px;">
                                                    <span class="fs-5 pt-1 ps-3"><i class="bi bi-globe-asia-australia"
                                                            style="color: #C8C8C8;"></i></span>
                                                    <select id="country" class="form-control  border border-0"
                                                        name="country" autocomplete="country" autofocus>
                                                        <option value="" selected disabled>Select your country
                                                        </option>
                                                        @foreach (Country::all() as $country)
                                                            <option value="{{ $country->id }}"
                                                                @if (old('country') == $country->id) selected @endif>
                                                                {{ $country->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('country')
                                                    <span class="invalid-feedback d-block text-start pb-1 ps-2"
                                                        role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                {{-- States --}}
                                                {{-- <div class="form-group" id="stateGroup" style="display: none;">
                                                    <label for="state">State</label>
                                                    <select id="state" name="state">
                                                    </select>
                                                </div> --}}
                                              
                                                        <div id="stateFieldContainer" style="display:none">
                                                            <div class="text-start">State</div>
                                                            <div class="mb-3 d-flex justify-content-between border border-1"
                                                                style="height: 40px;">
                                                                <span class="fs-5 pt-1 ps-3"><i
                                                                        class="bi bi-globe-asia-australia"
                                                                        style="color: #C8C8C8;"></i></span>
                                                                <select id="state"
                                                                    class="form-control  border border-0" name="state"
                                                                    autocomplete="state" autofocus>
                                                                   

                                                                </select>
                                                            </div>
                                                        </div>
                                                            @error('state')
                                                                <span class="invalid-feedback d-block text-start pb-1 ps-2"
                                                                    role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror


                                                            {{-- gender --}}
                                                            <span
                                                                class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</span>

                                                            <div class=" text-start ">

                                                                <label class="fw-bold " style="color: #6B6C6F;">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender"autocomplete="gender" autofocus
                                                                        id="male" value="male"
                                                                        @if (old('gender') == 'male') checked @endif>
                                                                    <span class="ps-2">
                                                                        Male
                                                                    </span>

                                                                </label>
                                                                <label class="ps-3 fw-bold" style="color: #6B6C6F;">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" autocomplete="gender" autofocus
                                                                        id="female" value="female"
                                                                        @if (old('gender') == 'female') checked @endif>
                                                                    <span class="ps-2">
                                                                        Female
                                                                    </span>
                                                                </label>

                                                            </div>
                                                            @error('gender')
                                                                <span class="invalid-feedback text-start d-block pb-1 ps-2"
                                                                    role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror


                                                            <span for="exampleInputPassword1"
                                                                class="form-label fw-bold  pt-2"
                                                                style="color: #6B6C6F;">{{ __('Hobbies') }}</span>

                                                            <div class="d-flex justify-content-between mb-2">


                                                                <span class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="hobbies[]" id="male"
                                                                        value="listning music"
                                                                        @if (is_array(old('hobbies')) && in_array('listening music', old('hobbies'))) checked @endif>
                                                                    <label class="form-check-label" for="listning music">
                                                                        Listning Music
                                                                    </label>
                                                                </span>
                                                                <span class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="hobbies[]" id="female" value="writing "
                                                                        @if (is_array(old('hobbies')) && in_array('writing', old('hobbies'))) checked @endif>
                                                                    <label class="form-check-label pe-2" for="writing ">
                                                                        Writing
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex  justify-content-between">
                                                                <span class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="hobbies[]" id="female"
                                                                        value="reading books "
                                                                        @if (is_array(old('hobbies')) && in_array('reading books', old('hobbies'))) checked @endif>
                                                                    <label class="form-check-label" for="reading books ">
                                                                        Reading Books
                                                                    </label>
                                                                </span>
                                                                <span class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="hobbies[]" id="female" value="dancing "
                                                                        @if (is_array(old('hobbies')) && in_array('dancing', old('hobbies'))) checked @endif>
                                                                    <label class="form-check-label" for="dancing ">
                                                                        Dancing
                                                                    </label>
                                                                </span>

                                                            </div>

                                                            @error('hobbies')
                                                                <span class="invalid-feedback text-start d-block pb-1 ps-2"
                                                                    role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror


                                                            <div class="mb-3 form-check d-flex  ">
                                                                <div class="pt-3"><input type="checkbox"
                                                                        class="form-check-input rounded-1 border-2 checkboxsize  border-secondary"
                                                                        id="exampleCheck1">
                                                                    <label
                                                                        class="form-check-label lh-sm checkboxtext py-lg-1  ps-2 py-1  "
                                                                        for="exampleCheck1" style="color: #6B6C6F;">I have
                                                                        read the <u class="fw-bold"
                                                                            style="color: #6B6C6F;">Terms
                                                                            & Conditions</u></label>
                                                                </div>
                                                            </div>

                                                            <!-- sihnup button -->
                                                            <div class="d-grid gap-6  mx-auto"><button type="submit"
                                                                    name="submit" class="loginbtn btn btn-lg rounded-0 ">
                                                                    {{ __('Signup') }}</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layout.footer')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }   
        });
    
        $(document).ready(function() {
            $('#country').change(function(event) {
                var countryid = this.value;
    
                $('#state').html('');
                $.ajax({
                    url: "{{ route('fetch-state') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        country_id: countryid,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(response.states, function(index, val) {
                            $('#state').append('<option value="' + val.id + '">' + val.name + '</option>');
                        });
    
                        // Show the state select box when country is selected
                        $('#stateFieldContainer').show();
                    }
                });
            });
        });
    </script>
    

@endsection



