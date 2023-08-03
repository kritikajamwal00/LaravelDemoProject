  @foreach ($posts as $post)
  <div class="col-lg-6 col-md-6 col-12 pt-lg-3 pt-md-0 pt-4">
    <div class=" text-center">
        <h1 class=""> {{$post->title}}</h1>
    </div>

    <div class="text-center pt-4 ps-4" style="width: 500px;">
        {!! Illuminate\Support\Str::limit($post->body, 150, '...') !!}
    </div>
    <div class="text-center"> <a href="blog/{{ $post->slug }}/view"><button type="button"
        class="btn btn-secondary btn-sm">Keep Reading</button></a> </div>

</div>
<div class="col-lg-6 col-md-6 col-12 pt-lg-3 text-lg-start text-center">
    <div class="mb-4">
        <img src="blogimages/{{ $post->image }}" class="img-fluid" width="400" height="100" />
        
    </div>
</div>
@endforeach


      {{-- <div class="col-lg-8 pt-5 ps-5 pb-5">
        <div>
            <img src="blogimages/{{ $post->image }}" class="img-fluid" width="300" height="100" />

        </div>
    </div>
    <div class="col-lg-8 pt-5 ps-5 pb-5">
          <h2 class="text-uppercase">{{ $post->title }}</h2>
         

          <p class="text-center fs-3 fw-bold pt-3">
              {!! Illuminate\Support\Str::limit($post->body, 50, '...') !!}

          </p>
          <p> <a href="blog/{{ $post->slug }}/view"><button type="button"
                    class="btn btn-secondary btn-sm">Keep Reading</button></a> </p>


      </div> --}}
  




{{-- 
      <script>
        var ENDPOINT = "{{ route('blog') }}";
        var searchEndpoint = "{{ route('blog.search') }}";
        var page = 1;

        // Load more button click event
        $(".load-more-data").click(function() {
            page++;
            LoadMore(page);
        });

        // Search bar input event
        $("#search").on('keyup', function() {
            page = 1;
            LoadMore(page);
        });

        function LoadMore(page) {
            var searchQuery = $("#search").val();

            $.ajax({
                    url: searchQuery ? searchEndpoint : ENDPOINT,
                    data: {
                        search: searchQuery,
                        page: page
                    },
                    datatype: "json",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    console.log(response);
                    var html = response.html;

                    if (html == '') {
                        $('.auto-load').html("No More Blogs Available :(");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#data-wrapper").html("<div class='row'>" + html + "</div>");
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occurred');
                });
        }
    </script> --}}











     {{-- <script>
        var ENDPOINT = "{{ route('blog') }}";
        var page = 1;

        $(".load-more-data").click(function() {
            page++;
            LoadMore(page);
        });

        function LoadMore(page) {
            $.ajax({
                    url: ENDPOINT + "?page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    console.log(response);
                    if (response.html == '') {
                        $('.auto-load').html("No More Blogs Available :(");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#data-wrapper").append("<div class='row'>" + response.html + "</div>");
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script> --}}