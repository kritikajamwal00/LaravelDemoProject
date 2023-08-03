@extends('layout.header')

@section('title')
    Album
@endsection

@section('content')
    @include('layout.userprofilenav')



    <div class="container mt-lg-5">
        {{-- success msg --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="mt-lg-5 mt-4 text-end">
            <span class="pe-lg-3 ">
                <a href="addalbum"> <button class="btn btn-lg rounded-0 carpagebtn ps-lg-3 carpagebtn2"
                        style="background: #015FEB; color:#FFFFFF; ">Add Album</button></a>
            </span>
        </div>

        {{-- search Bar --}}
        <div class="mt-3 mb-3">
            <input type="text" name="search" id="search" placeholder="Search by Album Name">

        </div>
        <div id="Result" class="row">
        </div>

        {{-- <div class="row"> --}}
        {{-- getting the album from database and print them --}}
        {{-- @foreach ($albums as $album)
                <div class="col-lg-4 pt-5 ps-5">
                    <a href="albumimage">
                        <img src="albumimages/{{ $album->image }}" class="img-fluid">
                    </a>
                    <p class="text-center fs-3 fw-bold pt-3">
                        {{-- table colname use to get the item from table --}}
        {{-- {{ $album->album_name }}
                    </p> --}}

        {{-- <span><a href="album/{{ $album->id }}/editalbum"><button type="button"
                        class="btn btn-primary btn-sm">UPDATE ALBUM</button></a></span> --}}
        {{-- 
                    <form class="d-inline" method="POST" action="album/{{ $album->id }}/deletealbum">
                        @csrf
                        @method('DELETE')
                        <div class="text-center">
                            <button type="submit" name="submit" class="loginbtn btn btn-lg rounded-0 mt-3"
                                onclick="return confirm('Are you sure you want to delete this Image?')">Delete</button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div> --}}
    </div>

    @include('layout.footer')
    <script>
        $(document).ready(function() {
            fetch_album_data();

            function fetch_album_data(query = '') {
                // alert('load data ='+ query);
                $.ajax({
                    url: "{{ route('albumsSearch') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    dataType: 'json',
                    success: function(data) {
                        var output = '';
                        var total_row = data.data.length;
                        if (total_row > 0) {
                            data.data.forEach(function(albums) {
                                output += '<div class="col-lg-4 col-md-6 col-sm-12 pb-4">';
                                output += '<div class="album-card">';
                                output += '<a href="{{ url('albumimage') }}/' + albums.id +
                                    '" style="text-decoration: none; color: inherit;">';
                                output += '<img src="{{ asset('albumimages') }}/' + albums
                                    .image + '" class="img-fluid" alt="Album Image">';
                                output += '<h4 class="text-center pt-3">' + albums.album_name +
                                    '</h4>';
                                output += '</a>';
                                output += '<div class="row justify-content-start mt-2">';
                                output += '<div class="col-12 text-center">';
                                output += '<form action="{{ url('album') }}/' + albums.id +
                                    '" method="POST" class="deleteForm">';
                                output += '@csrf';
                                output += '@method('delete')';
                                output +=
                                    '<button type="submit" class="btn btn-danger" onclick="return confirmDelete(event)">Delete</button>';
                                output += '</form>';
                                output += '</div>';
                                output += '</div>';
                                output += '</div>';
                                output += '</div>';
                            })
                        } else {
                            output = '<div class="alert alert-primary">No Data Found</div>'
                        }
                        $('#Result').html(output);

                    }
                })
            }

            $(document).on('keyup', '#search', function() {
                var query = $(this).val();
                fetch_album_data(query);
            })

        })
    </script>
@endsection


{{-- <script>
    $(document).ready(function() {
        fetch_album();
        function fetch_album(query = '') {
            $.ajax({
                url: "{{ route('searchAlbum') }}",
                method: 'GET',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function(data) {
                    var output = '';
                    var total_row = data.data.length;
                    if (total_row > 0) {
                        data.data.forEach(function(album) {
                            output += '<div class="col-lg-4 col-md-6 col-sm-12 pb-4">';
                            output += '<div class="album-card">';
                            output += '<a href="{{ url('AlbumImages') }}/' + album.id +
                                '" style="text-decoration: none; color: inherit;">';
                            output += '<img src="{{ asset('album-images') }}/' + album
                                .image_path + '" class="img-fluid" alt="Album Image">';
                            output += '<h4 class="text-center pt-3">' + album.title +
                                '</h4>';
                            output += '</a>';
                            output += '<div class="row justify-content-start mt-2">';
                            output += '<div class="col-12 text-center">';
                            output += '<form action="{{ url('album') }}/' + album.id +
                                '" method="POST" class="deleteForm">';
                            output += '@csrf';
                            output += '@method('delete')';
                            output +=
                                '<button type="submit" class="btn btn-danger" onclick="return confirmDelete(event)">Delete</button>';
                            output += '</form>';
                            output += '</div>';
                            output += '</div>';
                            output += '</div>';
                            output += '</div>';
                        });
                    } else {
                        output = '<div class="alert alert-primary">No Data Found</div>'
                    }
                    $('#Result').html(output);
                }
            })
        }
        $(document).on('keyup', '#search', function() {
            var query = $(this).val();
            fetch_album(query);
        })
    })
</script> --}}
