@extends('layout.header')

@section('title')
Blog
@endsection
@section('content')

<div class="container">
    <div class=" row text-center mb-4 mt-4">
        <div class="col ">
<a href="createpost" ><button type="button" class="btn btn-primary btn-lg">CREATE BLOG</button></a>
{{-- <a href="edit"><button type="button" class="btn btn-primary btn-lg">UPDATE BLOG</button></a> --}}
{{-- <a href="createpost"><button type="button" class="btn btn-primary btn-lg">DELETE BLOG</button></a>  --}}
        </div>
    </div>

</div>


<div class="container">
  @if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
</div>
@endif
      <div class="row text-center border border-primary-subtle border-top border-bottom">
        <hr >
        @foreach ($data as $items)
        
          <div class="col-lg-12 pt-5 ps-5 pb-5">
            <h2 class="text-uppercase">{{$items->title}}</h2>
              <div>
                <img src="blogimages/{{$items->image}}" class="img-fluid" width="300" height="100"/>
                  {{-- <img class="float-left" src={{asset('Images/logo.png')}} alt="Logo" /> --}}
              </div>
              {{-- <p class="text-center fs-3 fw-bold pt-3">
                {{str::limit($items->body,150,'...')}}
              </p> --}}
              <p class="text-center fs-3 fw-bold pt-3">
                {!! Illuminate\Support\Str::limit($items->body, 10, '...') !!}


            </p>
            
              {{-- <span class="span-manage">{{ Str::limit($post->description, 150, '...') }}</span> --}}
              <span><a href="blog/{{$items->slug}}/edit"><button type="button" class="btn btn-primary btn-sm">UPDATE BLOG</button></a></span>
              <form class="d-inline" method="POST" action="blog/{{$items->slug}}/delete" >
                @csrf
                @method('DELETE')
               <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')" >DELETE BLOG</button>
              </form>
             {{-- <span> <a href="blog/{{$items->slug}}/delete"><button type="button" class="btn btn-danger btn-sm">DELETE BLOG</button></a> </span> --}}
             <span> <a href="blog/{{$items->slug}}/view"><button type="button" class="btn btn-primary btn-sm">VIEW BLOG</button></a> </span>
          </div>
     
          
      @endforeach
      
   
</div>
</div>
</div>



@include('layout.footer')
@endsection