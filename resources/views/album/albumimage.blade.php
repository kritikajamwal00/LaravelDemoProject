@extends('layout.header')

@section('title')
    Album
@endsection

@section('content')
    @include('layout.userprofilenav')


    <div class="container mt-lg-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div class="mt-lg-5 mt-4 text-end">
            <span class="pe-lg-3 ">
                <a href="addimage"> <button class="btn btn-lg rounded-0 carpagebtn ps-lg-3 carpagebtn2"
                        style="background: #015FEB; color:#FFFFFF; ">Add Images</button></a>
            </span>

        </div>

        <div class="row ">
            @foreach ($image as $images)
                <div class="col-lg-4 pt-5 ps-5 ">

                    <div class="image-container">
                        <a href="albumimages/{{ $images->image }}" data-lightbox="image-gallery" data-title="{{ $images->caption }}">
                            <img src="albumimages/{{ $images->image }}" class="img-fluid image-slide">
                        </a>
                        {{-- <img src="albumimages/{{ $images->image }} "class="img-fluid "> --}}
                    </div>
                 
                    <form class="d-inline" method="POST" action="albumimage/{{$images->id}}/deleteimg">
                        @csrf
                        @method('DELETE')
                    <div class="text-center">
                        <button type="submit" name="submit" class="loginbtn btn btn-lg rounded-0 mt-3" onclick="return confirm('Are you sure you want to delete this Image?')">Delete</button>
                    </div>
                </form>

                </div>
            @endforeach
        </div>
    </div>



    </div>


    @include('layout.footer')
@endsection


<script>
    function confirmDelete(imageId) {
        if (confirm("Are you sure you want to delete this image?")) {
            return true;
        } else {

            return false;
        }
    }
</script>



<!-- js link  -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
</script>


{{-- @extends('layout.header')

@section('title')
    Album
@endsection

@section('content')
    @include('layout.userprofilenav')

    <div class="container mt-lg-5">
        <!-- Existing code -->
        <!-- ... -->

        <div class="row">
            @foreach ($image as $images)
                <div class="col-lg-4 pt-5 ps-5">
                    <div class="image-container">
                        <a href="albumimages/{{ $images->image }}" data-lightbox="image-gallery" data-title="{{ $images->caption }}">
                            <img src="albumimages/{{ $images->image }}" class="img-fluid image-slide">
                        </a>
                    </div>

                    <!-- Existing code -->
                    <!-- ... -->

                </div>
            @endforeach
        </div>
    </div>

    <!-- Rest of the layout -->
    <!-- ... -->

    @include('layout.footer')
@endsection --}}




























{{-- @extends('layout.header')

@section('title')
    Album
@endsection

@section('content')
    @include('layout.userprofilenav')

    <div class="container mt-lg-5">
        <!-- Existing code -->
        <!-- ... -->

        <div class="row">
            @foreach ($image as $images)
                <div class="col-lg-4 pt-5 ps-5">
                    <div class="image-container">
                        <img src="albumimages/{{ $images->image }}" class="img-fluid image-slide" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ asset('albumimages/' . $images->image) }}">
                    </div>

                    <!-- Existing code -->
                    <!-- ... -->

                </div>
            @endforeach
        </div>
    </div>

    <!-- Rest of the layout -->
    <!-- ... -->

    @include('layout.footer')
@endsection --}}


 






