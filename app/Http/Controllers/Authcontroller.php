<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function register()
    {
        return view('Client.register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Registration successful');
    }

    public function login()
    {
        return view('Client.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/eprofile')->with('success', 'Login successful');
        }

        return back()->with('error', 'Incorrect email or password');
    }

 

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function changePassword()
    {
        return view('Client.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old password doesn't match!");
        }
        auth()->user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }    


    public function profile(){
        return view('Client.profile');
    }

}