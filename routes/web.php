<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\PasswordController;
// use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserprofileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/summer', function () {
    return view('summer');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// ------------static page controller
Route ::controller(PageController::class)->group(function(){
Route::get('/','showHome');

// Route::get('/about/{id}','Showabout')->name('about');
Route::get('/aboutus','showAbout')->name('aboutus');


});

// ----------authcontroller
Route ::controller(AuthController::class)->group(function(){
    Route::get('/login','showLogin');
    Route::get('/signup','showSignup');
    // Route::get('/changepassword','showChangepassword');
    Route::get('/forgetpassword','showForgetpassword');
    // Route::get('/get-states', 'getStates')->name('get-states');
});

//     Route::get('/signup', [RegisterController::class, 'showSignup'])->name('signup.form');
//     Route::post('/storeform', [RegisterController::class, 'create'])->name('signup.register');
   
// Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup.form');
// Route::post('/storeform', [RegisteredUserController::class, 'store'])->name('signup.store');


// Route::get('/changepassword', [PasswordController::class,'showChangepassword'])->name('password.change');
// Route::post('/updatepassword', [PasswordController::class,'update'])->name('password.update');



// ------albumcontroller
Route ::controller(AlbumController::class)->group(function(){
    Route::get('/album','showAlbum');
    Route::get('/addalbum','showAddalbum');
    Route::get('/albumimage','showAlbumimage');
    Route::get('/addimage','showAddimage');
});

// Route ::controller(UserprofileController::class)->group(function(){
//     Route::get('/userprofile','showUserprofile');
//     Route::get('/edituserprofile','showEdituserprofile');

// });
// Assuming you have imported the UserprofileController at the top of your routes file




    Route::get('/userprofile', [UserprofileController::class, 'showUserprofile'])->name('userprofile.show');
    Route::get('/edituserprofile', [UserprofileController::class, 'showEdituserprofile'])->name('userprofile.edit');
    Route::post('/update', [UserprofileController::class, 'updateUserprofile'])->name('userprofile.update');



Route::get('/blog', [BlogController::class, 'showBlog'])->name('blog');
Route::get('/createpost', [BlogController::class, 'showCreate']);
Route::post('/storeform', [BlogController::class, 'store']);
Route::get('blog/{slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('blog/{slug}/update', [BlogController::class, 'update']);
Route::delete('blog/{slug}/delete', [BlogController::class, 'destroy']);
Route::get('/blog/{slug}/view', [BlogController::class, 'viewBlog'])->name('blog.view');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







// php artisan make:migration add_columns_to_blogs_table --table=blogs 




























// parameter route
// Route::get('/id/{id?}/comment/{commentid?}',function(string $id = null, string $commentid = null){
//     if($id){
//     return "<h3>user id:".$id."</h3><h3> comment id :".$commentid."</h3>";
//     }else{
//         return "<h4> with out is pass</h4>";
//     }
// } );

//to validate route (methods)
//  WhereNumber('id')
//  whereAlpha('name')
//  WhereAlphaNumeric('name')
//  WhereIn('category',['movie','song'])
//  Where('id','[@0-9]'+)

//route constraint 
// Route::get('/method/{id?}/comment/{comid?}',function(string $id , string $comid){
//     if($id){
//     return "<h3>user id:".$id."& comment :".$comid."</h3>";
//     }else{
//         return "<h4> with out is pass</h4>";
//     }
// } )->where('id','[0-9]+')->whereAlpha('comid');


// // name route

// Route::get('/first',function(){
//     return view('first');
// });

// Route::get('/test', function(){
//     return view('second');
// })->name('mysecond');

//     Route::redirect('/second' , '/test',301);

    // group route

    // fallback

    // Route::fallback(function(){
    //     return "<h3>Page not Found </h3>";
    // });



    // -------------------------------------------------------------------include


    


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
