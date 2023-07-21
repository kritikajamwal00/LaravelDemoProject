<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function showAlbum(){
        return view('album/album');
    }
    
    public function showAddalbum(){
        return view('album/addalbum');
    }

    public function showAlbumimage(){
        return view('album/albumimage');
    }

    public function showAddimage(){
        return view('album/addimage');
    }

}
