@extends('layout.header')

@section('title')
Createblog
@endsection
@section('content')




<div class="container mt-lg-5">
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{$message}}</strong>
        </div>
        @endif
    <div class="row border border-1 rounded-4">
        <div class="col ps-lg-4">
        <h1>Create a Blog Post</h1>
        <form action="{{url('storeform')}}" name="createpost" id="createpost" method="POST" enctype="multipart/form-data">
               
@csrf 
                <p class="pt-lg-4 addimg  fw-bold">Post Title</p>
               
                <span class="place">
                    <input type="text" class="form-control border border-1 addimg mt-2 p-3 album_name"
                        name="title" placeholder="Enter Your Album Name" style="max-width: 40%; background: #F9F9F9;"
                        value="{{old('title')}}">
                        @if($errors->has('title'))
                        <span class ="text-danger">{{$errors->first('title')}}</span>
                            @endif
                </span>


                <p class="pt-lg-4 addimg  fw-bold">Image</p>
                <div class=" rounded-2 mt-4" style="max-width: 40%; ">
                    <input type="file" class="form-control p-3 addimg addimg1 border boreder-0 cover_image"
                        name="image" value="{{old('image')}}" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                        aria-label="Upload" style="background: #F9F9F9;">
                        @if($errors->has('image'))
                        <span class ="text-danger">{{$errors->first('image')}}</span>
                            @endif
                </div>

                <p class="pt-lg-4 addimg  fw-bold">Description:</p>
                <div class=" rounded-2 mt-4" style="max-width: 40%; ">
                  <textarea id="description"class="addimg addimg1 border boreder-0 cover_image" name="body" >{{old('body')}} </textarea>
                 
                </div>
                @if($errors->has('body'))
                <span class ="text-danger">{{$errors->first('body')}}</span>
                    @endif

                    <div class="form-check pt-4 fw-bold">
                      <input class="form-check-input" type="checkbox" value="" name="publish" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                       Publish
                      </label>
                    </div>
                <div class="mt-3"><a href="#"><button 
                        class="loginbtn btn btn-lg rounded-0 "name="submit"type="submit">Create</button></a></div>
           
        </form>
        </div></div></div>
    





@include('layout.footer')
@endsection

@section('script')
{{-- <script>
    $('#description').summernote({
      placeholder: 'Hello Bootstrap 5',
      tabsize: 2,
      height: 100
    }); --}}

    <script>
        $('#description').summernote({
          placeholder: 'Hello stand alone ui',
          tabsize: 2,
          height: 120,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
          ]
        });
      </script>
    

    composer require mews/purifier


@endsection