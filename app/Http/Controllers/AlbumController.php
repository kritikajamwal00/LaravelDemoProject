<?php

namespace App\Http\Controllers;

// use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAlbumRequest;
use App\Http\Requests\AlbumImageRequest;
use App\Models\Album;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use DB;

class AlbumController extends Controller
{
    public function showAlbum(Request $request)
    {
        // // $user = Auth::user();
        $albums = Album::all();
        // // return view('album/album', ['item' => Album::get()]);
        return view('album/album',compact('albums'));
       
    }

    public function search(Request $request)
         {
            if($request->ajax())
            {
               
                $query = $request->get('query');
                if($query !==''){
                    $data = Album::where('album_name', 'like', '%'.$query.'%')->get();
                }
                else{
                    $data = Album::all();
                }
                return response()->json(['data' => $data]);
            }  
       }
        //    public function index()
        //    {
        //         $albums = Album::all();
        //         return view('album', compact('albums'));
        //     }
        //      public function search(Request $request)
        //      {
        //          $query = $request->input('query');
        //         $albums = Album::where('album_name', 'like', "%$query%")->get();
        //          return view('album/album', compact('albums'));
        //    }
        

       

    public function showAddalbum()
    {
        return view('album/addalbum');
    }

    public function showAlbumimage()
    {
        return view('album/albumimage', ['image' => Image::get()]);
    }

    public function showAddimage()
    {
        return view('album/addimage');
    }

    // image create

    public function create(AlbumImageRequest $request)
{
    $validated = $request->validated();

    if (!$validated) {
        return redirect()->back()->withErrors($request->errors())->withInput();
    }

    $imagePaths = [];
    foreach ($validated['image'] as $image) {
        $aimageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('albumimages'), $aimageName); 
        $imagePaths[] = $aimageName;
    }

    // Save the image paths in the database
    foreach ($imagePaths as $path) {
        $imgpost = new Image;
        $imgpost->image = $path;
        $imgpost->save();
    }
    // $imagesslide = Image::all();

    return redirect('albumimage')->withSuccess('Images Added successfully');
}


    // image deleted

    public function delete(Request $request, $id)
    {
        $postimg = Image::where('id', $id)->first();
        $imagePath = public_path('albumimages') . '/' . $postimg->image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $postimg->delete();
        return back()->withSuccess('Image deleted successfully');

    }

    // album create
    public function store(CreateAlbumRequest $request)
    {
        $validated = $request->validated();

        if (!$validated) {
            return redirect()->back()->withErrors($request->errors())->withInput();
        }
        $imageName = time() . '.' . $validated['coverimage']->extension();
        $validated['coverimage']->move(public_path('albumimages'), $imageName);



        $post = new Album;
        $post->image = $imageName;
        $post->album_name = $validated['albumname'];
        $post->save();

        return redirect('album')->withSuccess('album Created successfully');
    }
    //album edit---
    public function edit(Request $request, $id)
    {
        $post = Album::where('id', $id)->first();
        // dd($post);

        return view('album/editalbum', ['albumuser' => $post]);
    }
   

    // delete album

    public function destroy(Request $request, $id)
    {
        $post = Album::where('id', $id)->first();
        $imagePath = public_path('albumimages') . '/' . $post->image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $post->delete();
        return back()->withSuccess('Album deleted successfully');

    }
}