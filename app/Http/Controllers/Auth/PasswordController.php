<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    /**
     * Update the user's password.

     */
    public function showChangepassword(){
        return view('auth/changepassword');
        
    }

    public function __construct()
    {
        $this->middleware('csrf')->only('update');
    }
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        // $request->validate([
        //     'current_password' => ['required', 'password'],
        //     'password' => ['required', Password::defaults(), 'confirmed'],
        // ]);
        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);
        // $request->user()->update([
        //     'password' => Hash::make($request->password),
        // ]);

        return back()->with('status', 'password-updated');
    }
//     public function update(Request $request): RedirectResponse
// {
//     $request->validate([
//         'old_password' => ['required', 'current_password'],
//         'new_password' => ['required', Password::defaults(), 'confirmed'],
//     ]);
//     if (!Hash::check($request->old_password, $request->user()->password)) {
//         throw ValidationException::withMessages(['old_password' => 'Incorrect old password.']);
//     }

//     $request->user()->update([
//         'password' => Hash::make($request->new_password),
//     // $user = $request->user();
//     // $user->update([
//     //     'password' => Hash::make($request->new_password),
//     ]);

//     return back()->with('status', 'Password updated successfully.');
// }

}
