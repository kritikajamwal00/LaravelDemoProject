@extends('layout.header')

@section('title')
View Blog
@endsection
@section('content')

<div class="managebackblue pt-lg-5">
    <div class="container">
        <div class="manageback">
            <div class="row ps-lg-4 pt-lg-5">
                <div class="col-lg col-md-6 col-12 pt-lg-0 pt-md-0 pt-4">
                    <div class=" text-center">
                        <h1 class=""> {{$post->title}}</h1>
                    </div>

                    
                        <div class="text-center pt-4">
                            <p>{!! $post->body !!}</p>

                        </div>
                    
                </div>
                <div class="col-lg col-md-6 col-12 text-lg-start text-center">
                    <div class="mb-4">
                        <img src="{{ asset('blogimages/'. $post->image)}}" class="img-fluid"  width="400" height="400" style="position: relative; ">
                        {{-- <img src="{{ asset('blogimages/'. $user->image)}}" class="img-fluid" width="50" height="50"/> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@endsection
