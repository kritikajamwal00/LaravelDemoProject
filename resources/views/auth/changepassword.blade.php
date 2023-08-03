 @extends('layout.header')

@section('title')
Change password
@endsection

@section('content')

@include('layout.userprofilenav')

<div class="container mt-lg-3 mt-4 signcolwid2">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="row rowheight pt-lg-5">
        <div class="col-lg-6 col-md-6 col-12">
            <span class="loginimage"><img src="../images/signup1.png" class="img-fluid"></span>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-3 justify-content-center backlogin signupbox1">
            <div class="signupbox">
                <h3 class="fw-bold pb-lg-4 fs-3">Change your password?</h3>
                <form method="POST" id="myForm" enctype="multipart/form-data" action="{{ route('update.password') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="old_password" class="form-label fw-bold">Old Password</label>
                        <input type="password" name="old_password"  class="form-control" id="old_password">
                    </div>
                    @error('old_password')
                    <span class="invalid-feedback d-block pb-1 ps-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    
                    <div class="mb-3">
                        <label for="new_password" class="form-label fw-bold">New Password</label>
                        <input type="password" name="new_password" class="form-control" id="new_password">
                    </div>
                    @error('new_password')
                    <span class="invalid-feedback d-block pb-1 ps-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="mb-3">
                    <label for="new_password_confirmation" class="form-label fw-bold">Confirm Password</label>
                    <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation">
                </div>
                   
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection 



