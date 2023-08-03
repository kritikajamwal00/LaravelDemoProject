@extends('layout.header')

@section('title')
Edit Album
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
            <form action="/album/{{$albumuser->id}}/updatealbum" name="createalbum" id="createalbum" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <p class="pt-lg-4 addimg">Album Name</p>
               
                <span class="place">
                    <input type="text" class="form-control border border-1 addimg mt-2 p-3 album_name"
                        name="albumname" placeholder="Enter Your Album Name" style="max-width: 40%; background: #F9F9F9;"
                        value="{{old('albumname', $albumuser->album_name)}}">
                        @if($errors->has('albumname'))
                        <span class ="text-danger">{{$errors->first('albumname')}}</span>
                            @endif
                </span>


                
                <div class=" rounded-2 mt-4" style="max-width: 40%; ">
                    <input type="file" class="form-control p-3 addimg addimg1 border boreder-0 cover_image"
                        name="coverimage" value="{{old('coverimage')}}" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                        aria-label="Upload" style="background: #F9F9F9;">
                        <img src="{{ asset('albumimages/'. $albumuser->image)}}" class="img-fluid" width="50" height="50"/>
                        @if($errors->has('coverimage'))
                        <span class ="text-danger">{{$errors->first('coverimage')}}</span>
                            @endif
                </div>

                <div class="mt-3"><a href="#"><button 
                        class="loginbtn btn btn-lg rounded-0 ">Update</button></a></div>
            </form>
            <h6 class="mt-4 addimg p-0 lh-0">Upload image will be resized to fit within:</h6>
            <p class="addimg pb-4 lh-0">Width of 500 pixels and Height of 500 Pixels</p>
        </div>
    </div>
</div>


@include('layout.footer')
@endsection
