@extends('layout.header')

@section('title')
Album
@endsection

@section('content')

@include('layout.userprofilenav')



<div class="container mt-lg-5">
    <div class="mt-lg-5 mt-4 text-end">
        <span class="pe-lg-3 ">
            <a href="addalbum"> <button class="btn btn-lg rounded-0 carpagebtn ps-lg-3 carpagebtn2"
                    style="background: #015FEB; color:#FFFFFF; ">Add Album</button></a>
        </span>
    </div>

    <div class="row">
        <div class="col-lg-4 pt-5 ps-5">
            <a href="albumimage">
                <img src="images/car2.png" class="img-fluid">
            </a>
            <p class="text-center fs-3 fw-bold pt-3">
                Ego Tripen
            </p>
        </div>
   

    
        <div class="col-lg-4 pt-5 ps-5">
            <a href="albumimage">
                <img src="images/car2.png" class="img-fluid">
            </a>
            <p class="text-center fs-3 fw-bold pt-3">
                Ego Tripen
            </p>
        </div>

       
            <div class="col-lg-4 pt-5 ps-5">
                <a href="albumimage">
                    <img src="images/car2.png" class="img-fluid">
                </a>
                <p class="text-center fs-3 fw-bold pt-3">
                    Ego Tripen
                </p>
            </div>
        </div>
    

</div>

@include('layout.footer')
@endsection




<!-- js link  -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>