<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showBlog()
    {
        return view('blog/blog', ['data' => Blog::get()]);
    }
    public function showCreate()
    {
        return view('blog/createpost');
    }
    // public function showEdit(){
    //     return view('blog/edit');
    // }


    
    public function create(Request $request)
    {

    }

    
    public function store(CreateUserRequest $request)
{
    $validated = $request->validated();

    if (!$validated) {
        return redirect()->back()->withErrors($request->errors())->withInput();
    }

    $imageName = time() . '.' . $validated['image']->extension();
    $validated['image']->move(public_path('blogimages'), $imageName);

    $slug = Str::slug($validated['title']);
    $count = 1;
    $originalSlug = $slug;

    while (Blog::where('slug', $slug)->exists()) {
        $slug = '@' . $originalSlug . '-' . $count;
        $count++;
    }

    $post = new Blog;
    $post->image = $imageName;
    $post->title = $validated['title'];
    $post->body = $validated['body'];
    $post->slug = $slug;

    if ($request->has('publish')) {
        $post->publish = true;
    } else {
        $post->publish = false;
    }

    $post->save();

    return redirect('blog')->withSuccess('Blog Created successfully');
}



    public function viewblog($slug)
    {
        $post = Blog::where('slug', $slug)->first();
    //    dd($post);
    
        return view('blog/viewblog', compact('post'));
    }
    
    public function edit(Request $request, $slug)
    {
        $post = Blog::where('slug', $slug)->first();
        // dd($post);

        return view('blog/edit', ['user' => $post]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif|max:10000'
        ]);
    
        $post = Blog::where('slug', $slug)->first();
        $oldImagePath = public_path('blogimages') . '/' . $post->image;
    
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogimages'), $imageName);
    
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            $post->image = $imageName;
        }
    
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
    
        // return back()->withSuccess('Blog Updated successfully');
        return redirect('blog')->withSuccess('Blog Updated successfully');
    }
    

    public function destroy(Request $request, $slug)
    {
             $post = Blog::where('slug', $slug)->first();
        $imagePath = public_path('blogimages') . '/' . $post->image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $post->delete();
        return back()->withSuccess('Blog deleted successfully');
         
    }

//     public function destroy(Request $request, $slug)
// {
//     $post = Post::where('slug', $slug)->first();
    
//     // Display confirmation message using JavaScript
//     if (confirm('Are you sure you want to delete this blog?')) {
//         $imagePath = public_path('blogimages') . '/' . $post->image;
//         if (file_exists($imagePath)) {
//             unlink($imagePath);
//         }
//         $post->delete();
//         return back()->withSuccess('Blog deleted successfully');
//     } else {
//         return back();
//     }
// }

}