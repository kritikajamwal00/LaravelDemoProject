@extends('layout.header')

@section('title')
UserProfile
@endsection

@section('content')

<div class="container mt-lg-3 mt-4 signcolwid2">
    <div class="row rowheight pt-lg-5">

        <div class="col-lg-6  col-md-6 col-12  ">
            <span class="loginimage"><img src="../images/signup1.png" class="img-fluid"></span>
        </div>

        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-3 justify-content-center backlogin signupbox1">
            <div class="pt-lg-5 signupbox">
                <h3 class="fw-bold pb-lg-4 fs-3">Forget your password? </h3>

                <p class="lh-lg text-center p-0 " style="font-size: 18px;">Please enter the email you use to sign into acme.</p>

                <form>
                    <label for="exampleInputEmail1" class="form-label fw-bold"
                        style="color: #6B6C6F;">E-mail</label>
                    <div class="mb-3 d-flex justify-content-between border border-1">

                        <span class="py-lg-2 ps-lg-3 py-2 ps-2"> <svg width="25" height="20" viewBox="0 0 25 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.0516 19.6488H3.08256C1.77844 19.6488 0.711426 18.5817 0.711426 17.2776V3.05082C0.711426 1.7467 1.77844 0.679688 3.08256 0.679688H22.0516C23.3558 0.679688 24.4228 1.7467 24.4228 3.05082V17.2776C24.4228 18.5817 23.3558 19.6488 22.0516 19.6488ZM3.08256 5.89618V17.2776H22.0516V5.89618L12.5671 11.824L3.08256 5.89618ZM3.08256 3.05082L12.5671 8.97866L22.0516 3.05082H3.08256Z"
                                    fill="#C8C8C8" />
                            </svg>
                        </span>
                        <input type="email" class="form-control border border-0 fw-bold" style="color: #C8C8C8;"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Your e-mail">
                      
                    </div>
                </form>

                <div class="d-grid gap-6  mx-auto pt-lg-3"><button
                        class="loginbtn btn btn-lg rounded-0  fw-bold ">Request
                        Password Reset</button>
                </div>

            </div>
        </div>
    </div>
</div>


@include('layout.footer')
@endsection




