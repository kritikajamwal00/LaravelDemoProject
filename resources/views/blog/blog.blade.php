@extends('layout.header')

@section('title')
    Blog
@endsection
@section('content')
    <div class="container mt-3">
        {{-- search Bar --}}
        <div class="mt-3 mb-3">
            <input type="text" name="search" id="search" placeholder="Search by Blog Title" style="width: 1000px">

        </div>
        <div id="data-wrapper">
            <div class="managebackblue pt-lg-5">
                <div class="container">
                    <div class="manageback">
                        <div class="row ps-lg-4 pt-lg-5">
                            @include('blog/blogloadmore')

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row text-center" style="padding=20px;">
            <button type="button" class="btn btn-success load-more-data btn-sm">Load More Blogs...</button>
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
    <script src="http://benalman.com/code/projects/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"></script>
    <script>
        var ENDPOINT = "{{ route('blog') }}";
        var searchEndpoint = "{{ route('blog.search') }}";
        var page = 1;
        var currentRequest = null;

        // Load more button click event
        $(".load-more-data").click(function() {
            page++;
            LoadMore(page);
        });


        function LoadMore(page) {
            var searchQuery = $("#search").val(); // Get the search bar input value

           $.ajax({
                    url: searchQuery ? searchEndpoint : ENDPOINT, // Use search endpoint if searchQuery is not empty
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

          // Search bar input event
          $("#search").on('keyup',$.debounce(1500, function() {
            page = 1;
            SearchBlogs(page);
        }));
        function SearchBlogs(page) {
            var searchQuery = $("#search").val(); // Get the search bar input value

            $.ajax({
                    url: searchEndpoint,
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

    











