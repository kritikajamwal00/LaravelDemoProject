@extends('layout.header')

@section('title')
Album
@endsection

@section('content')

@include('layout.userprofilenav')

<div class="container mt-lg-5">
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>
    @endif
    <div class="row border border-1 rounded-4">
        <div class="col ps-lg-4">
            <form action="{{url('storealbum')}}" name="createalbum" id="createalbum" method="POST" enctype="multipart/form-data">
                @csrf 
                <p class="pt-lg-4 addimg">Album Name</p>
               
                <span class="place">
                    <input type="text" class="form-control border border-1 addimg mt-2 p-3 album_name"
                        name="albumname" placeholder="Enter Your Album Name" style="max-width: 40%; background: #F9F9F9;"
                        value="{{old('albumname')}}">
                        @if($errors->has('albumname'))
                        <span class ="text-danger">{{$errors->first('albumname')}}</span>
                            @endif
                </span>

                <div class=" rounded-2 mt-4" style="max-width: 40%; ">
                    <input type="file" class="form-control p-3 addimg addimg1 border boreder-0 cover_image"
                        name="coverimage" value="{{old('coverimage')}}" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                        aria-label="Upload" style="background: #F9F9F9;">
                        @if($errors->has('coverimage'))
                        <span class ="text-danger">{{$errors->first('coverimage')}}</span>
                            @endif
                </div>

                <div class="mt-3"><a href="#"><button 
                        class="loginbtn btn btn-lg rounded-0 ">Upload</button></a></div>
            </form>
            <h6 class="mt-4 addimg p-0 lh-0">Upload image will be resized to fit within:</h6>
            <p class="addimg pb-4 lh-0">Width of 500 pixels and Height of 500 Pixels</p>
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