<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Footer;

class HomeController extends Controller
{
    public function index(){
        $footers = Footer::all();
        $homes = Home::all();
        return view('layouts.public.home', compact('homes', 'footers'));
    }
}
