<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Useraccountdetails;


class UserController extends Controller
{
    public function profile()
    {
        $userDetails = Useraccountdetails::where('id', Auth::id())->first();
        return view('Client.profile', compact('userDetails'));
    }
}