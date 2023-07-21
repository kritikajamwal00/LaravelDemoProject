<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('index');
    }
    public function showAbout(){
        return view('pages/aboutus');
    } 
    
}  
    // pass the value as a parameter with a help of route
//     public function Showabout(string $id){
// dd($id);
//         return view('about',['id' => $id]);
//         return view('about',compact('id'));
//     }

//

   

