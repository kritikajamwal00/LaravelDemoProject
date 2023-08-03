@foreach ($blogs as $blog)
      
            <div class="col-lg-4 pt-5 ps-5 pb-5">
                <h2 class="text-uppercase">{{ $blog->title }}</h2>
                <div>
                    <img src="blogimages/{{ $blog->image }}" class="img-fluid" width="300" height="100" />
                    {{-- <img class="float-left" src={{asset('Images/logo.png')}} alt="Logo" /> --}}
                </div>
               
                <p class="text-center fs-3 fw-bold pt-3">
                    {!! Illuminate\Support\Str::limit($blog->body, 10, '...') !!}


                </p>
                <p> <a href="post/{{ $blog->slug }}/view"><button type="button"
                    class="btn btn-secondary btn-sm">Keep Reading</button></a> </p>

                {{-- <span class="span-manage">{{ Str::limit($post->description, 150, '...') }}</span> --}}
                <span><a href="blog/{{ $blog->slug }}/edit"><button type="button"
                            class="btn btn-primary btn-sm">UPDATE BLOG</button></a></span>
                <form class="d-inline" method="POST" action="blog/{{ $blog->slug }}/delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you sure you want to delete this blog?')">DELETE BLOG</button>
                </form>
                {{-- <span> <a href="blog/{{$items->slug}}/delete"><button type="button" class="btn btn-danger btn-sm">DELETE BLOG</button></a> </span> --}}
              
            </div>
       
            @endforeach

           
      