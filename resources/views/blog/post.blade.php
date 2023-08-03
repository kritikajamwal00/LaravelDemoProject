@extends('layout.header')

@section('title')
    User Blog
@endsection
@section('content')
    <div class="container">
        <div class=" row text-center mb-4 mt-4">
            <div class="col ">
                <a href="createpost"><button type="button" class="btn btn-primary btn-lg">CREATE BLOG</button></a>
                {{-- <a href="edit"><button type="button" class="btn btn-primary btn-lg">UPDATE BLOG</button></a> --}}
                {{-- <a href="createpost"><button type="button" class="btn btn-primary btn-lg">DELETE BLOG</button></a>  --}}
            </div>
        </div>

    </div>


    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        {{-- search Bar --}}
        <div class="mt-3 mb-3">
            <input type="text" name="search" id="search" placeholder="Search by blog Title" style="width: 1000px">

        </div>

        <div id="data-wrapper">
            <div class="row text-center " id="blog-posts-container">
               

                @include('blog/postpagination')

            </div>
        </div>

        <div class="row text-center" style="padding=20px;">
            <button type="button" class="btn btn-success load-more-data btn-sm">Load More Blogs..</button>
        </div>

        <div class="auto-load text-center" style="display:none;">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span> Loading...</span>
                </div>
            </div>
        </div>
    </div>
    </div>



    @include('layout.footer')

    <script>
        var ENDPOINT = "{{ route('post') }}";
        var searchEndpoint = "{{ route('post.search') }}"; 
        var page = 1;
    
        // Load more button click event
        $(".load-more-data").click(function() {
            page++;
            LoadMore(page);
        });
    
        // Search bar input event
        $("#search").on('keyup', function() {
            page = 1;
            SearchBlogs(page);
        });
    
        function LoadMore(page) {
            var searchQuery = $("#search").val(); // Get the search bar input value
    
            $.ajax({
                url: searchQuery ? searchEndpoint : ENDPOINT, // Use search endpoint if searchQuery is not empty
                data: { search: searchQuery, page: page },
                datatype: "json",
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
                // Append the new data to the existing content
                $("#data-wrapper .row").append(response.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occurred');
            });
        }
    
        function SearchBlogs(page) {
            var searchQuery = $("#search").val(); // Get the search bar input value
    
            $.ajax({
                url: searchEndpoint,
                data: { search: searchQuery, page: page },
                datatype: "json",
                type: "get",
                beforeSend: function() {
                    $('.auto-load').show();
                }
            })
            .done(function(response) {
                console.log(response);
    
                if (response.html == '') {
                    $('.auto-load').html("No Blogs Found :(");
                    $("#data-wrapper .row").empty(); // Clear the existing content on search
                    return;
                }
                
                $('.auto-load').hide();
                $("#data-wrapper .row").html(response.html); // Replace with new search results
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occurred');
            });
        }
    </script>
   
@endsection




 {{-- <script>
        var ENDPOINT = "{{ route('post') }}";
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
                        $('.auto-load').html("End :(");
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