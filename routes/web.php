<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserprofileController;
use Illuminate\Support\Facades\Route;





// ------------Static Page Controller
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'showHome');
    Route::get('/aboutus', 'showAbout')->name('aboutus');


});

// ----------authcontroller
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin');
    Route::get('/signup', 'showSignup');
    Route::get('/forgetpassword', 'showForgetpassword');

});
// -----------Blog
Route::get('/blog', [BlogController::class, 'showBlog'])->name('blog');
Route::get('/blog/{slug}/view', [BlogController::class, 'viewBlog'])->name('blog.view');
Route::get('/blog/search', [BlogController::class, 'search'])->name('blog.search');


Route::post('api/fetch-state', [RegisteredUserController::class, 'fetchStates'])->name('fetch-state');

// Auth Middleware

Auth::routes(['verify' => true]);
Route::middleware(['auth'])->group(function () {

    // -------Emailverification
    Route::get('/email/verify', function () {
        return view('auth.verify');
    })->middleware('auth')->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        session()->flash('status', 'Email verification successful! Please logIn.');
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('login');
    })->middleware(['auth', 'signed'])->name('verification.verify');


    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    //----------blogcontroller
    Route::get('/post', [BlogController::class, 'showPost'])->name('post');
    Route::get('/post/search', [BlogController::class, 'postSearch'])->name('post.search');
    Route::get('/createpost', [BlogController::class, 'showCreate']);
    Route::post('/storeform', [BlogController::class, 'store']);
    Route::get('blog/{slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{slug}/update', [BlogController::class, 'update']);
    Route::delete('blog/{slug}/delete', [BlogController::class, 'destroy']);
    Route::get('/post/{slug}/view', [BlogController::class, 'viewPost'])->name('blog.view');

    // ------albumcontroller
    Route::get('/album', [AlbumController::class, 'showAlbum']);
    Route::get('/search', [AlbumController::class, 'search'])->name('albumsSearch');
    Route::get('/addalbum', [AlbumController::class, 'showAddalbum']);
    Route::post('/storealbum', [AlbumController::class, 'store']);
    Route::get('album/{id}/editalbum', [AlbumController::class, 'edit'])->name('album.edit');
    Route::put('album/{id}/updatealbum', [AlbumController::class, 'update']);
    Route::delete('album/{id}/deletealbum', [AlbumController::class, 'destroy'])->name('album');
    Route::get('/albumimage', [AlbumController::class, 'showAlbumimage']);
    Route::post('/storeimage', [AlbumController::class, 'create']);
    Route::delete('albumimage/{id}/deleteimg', [AlbumController::class, 'delete']);
    Route::get('/addimage', [AlbumController::class, 'showAddimage']);

    //---------------userprofilecontroller
    Route::get('/userprofile', [UserprofileController::class, 'showUserprofile'])->name('userprofile.show');
    Route::get('/edituserprofile', [UserprofileController::class, 'showEdituserprofile'])->name('userprofile.edit');
    Route::post('/update', [UserprofileController::class, 'updateUserprofile']);

    Route::get('/changepassword', [AuthController::class, 'showChangePassword'])->name('change-password');
    Route::post('/update', [AuthController::class, 'updatePassword'])->name('update.password');
});