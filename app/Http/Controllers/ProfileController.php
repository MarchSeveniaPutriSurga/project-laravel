<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('layouts.public.profiles', compact('profiles'),[
            "title" => "All Recipe",
            // "active" => 'profiles',
            "profiles" => profile::latest()->get()
        ]);
    }

    public function show(Profile $profile)
    {
        return view('layouts.public.profile', [
            "profile" => $profile
        ]);
    }
}
