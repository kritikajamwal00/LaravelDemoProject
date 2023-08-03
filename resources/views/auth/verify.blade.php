@section('title')
    EmailVarification
@endsection

<html lang="en">

<body>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel - @yield('title', 'website')</title>
        <!-- css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <!-- icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="icon" type="image/x-icon" href="{{ asset('images/car2.png') }}">


        <!-- Lightbox2 CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

        <!-- Rest of the layout -->


        <link rel="icon" type="image/x-icon" href="../images/car2.png">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
        </script>



        {{-- summernote --}}
        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>



    </head>

    <div class="container-fluid  " style="background-color: #16222D;">

        <div class="row ">
            <div class="col-lg-4 col-md-12 col-12 justify-content-start pt-lg-3 pt-4 pb-lg-4 logopad ">
                <a href="../pages/index.php"><img class="img-fluid  logo" src="{{ asset('images/logo.png') }}"></a>
                {{-- <img class="float-left" src={{asset('Images/logo.png')}} alt="Logo" /> --}}
            </div>
            <div class="col-lg-8  align-self-center  padright">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">

                        <button class="navbar-toggler mt-lg-0 mt-3 col-12 col-md-12 " type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5">
                                <li class="nav-item ps-4">
                                    <a class="nav-link textcolo ps-lg-3" aria-current="page" href="/">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link textcolo ps-lg-3" href="{{ route('aboutus') }}">About Us</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link textcolo ps-lg-3" href="{{ route('blog') }}">Blog</a>
                                    {{-- <a class="nav-link" href="{{route('home')}}">Home</a> --}}
                                </li>

                            </ul>
                        </div>

                    </div>

            </div>

        </div>

    </div>


    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card fw-bold "style="height: 400px;  background-color:lightgreen">
                    <div class="card-header fs-3" style="height: 100px">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body pt-4 fw-bold fs-3">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layout.footer')
