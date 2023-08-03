@extends('layout.header')

@section('title')
    login
@endsection

@section('content')
    <div class="container mt-lg-5 mt-4 ">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="row py-lg-5">

            <div class="col-lg-6 col-12 ">
                <span class="loginimage"><img src="../images/login1.png" class="img-fluid"></span>
            </div>
            <div class="col-lg-6 col-12 mt-lg-0 mt-3 backlogin">
                <div class="p-lg-5 loinbox">
                    <h3 class="fw-bold pb-lg-4">{{ __('Login to your account') }}</h3>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <label for="exampleInputEmail1" class="form-label fw-bold"
                            style="color: #6B6C6F;">{{ __('Email Address') }}</label>
                        <div class="mb-3 d-flex justify-content-between border border-1">

                            <span class="py-lg-2 ps-lg-3 py-2 ps-2"> <svg width="25" height="20" viewBox="0 0 25 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.0516 19.6488H3.08256C1.77844 19.6488 0.711426 18.5817 0.711426 17.2776V3.05082C0.711426 1.7467 1.77844 0.679688 3.08256 0.679688H22.0516C23.3558 0.679688 24.4228 1.7467 24.4228 3.05082V17.2776C24.4228 18.5817 23.3558 19.6488 22.0516 19.6488ZM3.08256 5.89618V17.2776H22.0516V5.89618L12.5671 11.824L3.08256 5.89618ZM3.08256 3.05082L12.5671 8.97866L22.0516 3.05082H3.08256Z"
                                        fill="#C8C8C8" />
                                </svg>
                            </span>

                            <input id="email" type="email"
                                class="form-control border border-0 fw-bold "
                                name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                        </div>
                        @error('email')
                        <span class="invalid-feedback d-block text-start pb-1 ps-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                        <span for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</span>
                        <div class="mb-3 d-flex justify-content-between border border-1">

                            <span class="py-lg-2 ps-lg-3 py-2 ps-2"> <svg width="27" height="15" viewBox="0 0 27 15"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.6763 14.2268C20.3722 14.2268 19.3052 13.1598 19.3052 11.8557V9.48454H14.0887C13.1402 12.3299 10.4134 14.2268 7.44949 14.2268C5.31547 14.2268 3.30001 13.2783 1.87733 11.6185C0.573208 9.95875 0.0989849 7.7062 0.454655 5.57218C1.04744 2.84538 3.30001 0.711347 6.02682 0.118564C6.50104 0.0395261 6.97527 0 7.44949 0C10.4134 0 13.1402 1.89691 14.0887 4.74227H24.0474C25.3516 4.74227 26.4186 5.80928 26.4186 7.1134C26.4186 8.41753 25.3516 9.48454 24.0474 9.48454V11.8557C24.0474 13.1598 22.9804 14.2268 21.6763 14.2268ZM7.44949 4.74227C6.14537 4.74227 5.07836 5.80928 5.07836 7.1134C5.07836 8.41753 6.14537 9.48454 7.44949 9.48454C8.75362 9.48454 9.82063 8.41753 9.82063 7.1134C9.82063 5.80928 8.75362 4.74227 7.44949 4.74227Z"
                                        fill="#C8C8C8" />
                                </svg>
                            </span>

                            <input id="password" type="password"
                                class="form-control  border border-0 fw-bold "
                                name="password"  autocomplete="current-password">

                        </div>
                        @error('password')
                                <span class="invalid-feedback d-block text-start pb-1 ps-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        <span class="loginsigntext mt-lg-4 mt-4 text-center">

                            <span><input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}></span>
                            <span class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </span>

                        </span>
                        {{-- <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="d-grid gap-6 pt-3 mx-auto"><button type="submit" name="submit"
                                class="loginbtn btn btn-lg rounded-0 ">{{ __('Login') }}</button></div>



                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>

    @include('layout.footer')
@endsection
