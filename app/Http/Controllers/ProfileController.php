<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Category;
use App\Models\Footer;
use Illuminate\Support\Facades\Http;


class ProfileController extends Controller
{
    public function index(){
        $footers = Footer::all();
        $profiles = Profile::all();
        $categories = Category::all();
        foreach ($profiles as $profile) {
            if (!$profile->image) {
                $profile->image_url = $this->getPexelsImage($profile->category->name);
            }
        }
        return view('layouts.public.profiles', compact('profiles', 'categories', 'footers'),[
            "title" => "All Recipe",
            "profiles" => profile::latest()->get()
        ]);
    }

    public function show(Profile $profile)
    {
        $footers = Footer::all();
        
        return view('layouts.public.profile', [
            "profile" => $profile,
            "footers" => $footers
        ]);
    }

    private function getPexelsImage($category)
    {
        $apiKey = 'a3vgaWFQdbEvF9qUfJIalX4HkiW35Xj4X7uATXS5ZediRpoUHW2bIHzX';
        $response = Http::withHeaders([
            'Authorization' => $apiKey
        ])->get('https://api.pexels.com/v1/search', [
            'query' => $category,
            'per_page' => 1
        ]);

        if ($response->successful() && $response->json('photos')) {
            return $response->json('photos')[0]['src']['medium'];
        }

        return 'https://via.placeholder.com/500';
    }
}
