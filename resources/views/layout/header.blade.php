<html lang="en">

<body>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel - @yield('title','website')</title>
        <!-- css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

        <!-- icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
       


    
        <link rel="icon" type="image/x-icon" href="../images/car2.png" >
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
   


{{-- summernote --}}
{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>



    </head>

    <div class="container-fluid  " style="background-color: #16222D;">

        <div class="row ">
            <div class="col-lg-4 col-md-12 col-12 justify-content-start pt-lg-3 pt-4 pb-lg-4 logopad ">
                <a href="../pages/index.php"><img class="img-fluid  logo" src="{{asset('images/logo.png')}}"></a>
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
                                    <a class="nav-link textcolo ps-lg-3" aria-current="page"
                                        href="/">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link textcolo ps-lg-3" href="{{route('aboutus')}}">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link textcolo ps-lg-3" href="{{route('blog')}}">Blog</a>
                               {{-- <a class="nav-link" href="{{route('home')}}">Home</a> --}}
                                </li>

                            </ul>
                        </div>
                        
                        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav  mb-2 mb-lg-0 ">
                                @guest
                                {{-- <li class="nav-item">
                                    <a class="nav-link textcolo pe-lg-3 pb-lg-3"
                                        href="userprofile">
                                        <i class="bi bi-person-fill fs-6 "></i>Profile</a>
                                </li> --}}
                                <li>
                                    <a class="btn btn-info button1 text-white me-md-2 rounded-0 "
                                        href="login" type="button">Login</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary button1  rounded-0" href="register"
                                        type="button">Signup</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link textcolo pe-lg-3 pb-lg-3"
                                        href="userprofile">
                                        <i class="bi bi-person-fill fs-6 "></i>Profile</a>
                                </li>
                                @endguest
                            </ul>
                        </div>
                       
    
                </nav>
            </div>

        </div>

    </div>


    @hasSection('content')
    @yield('content')
    @else
    <h2>No Content Found</h2>
    @endif

    @yield('script')