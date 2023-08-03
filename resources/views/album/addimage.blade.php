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
            <form action="{{url('storeimage')}}" name="createimage" id="createimage" method="POST" enctype="multipart/form-data">
                @csrf 
                

                <div class="rounded-2 mt-4" style="max-width: 40%;">
            
                        <input class="form-control" type="file" id="formFileMultiple" value="{{old('image')}}"name="image[]" multiple>
                        @if($errors->has('image'))
                        <span class ="text-danger">{{$errors->first('image')}}</span>
                            @endif
                </div>

                <div class="mt-3"><a href="albumimage"><button 
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