<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProfileController extends Controller
{
    public function index()
    {
        return view ('layouts.private.profile', [
            'profiles' => profile::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('layouts.profiles.create', [
            'categories' => category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:profiles',
            'category_id' => 'required',
            'image'=> 'image|file|max:1024',
            'biografi' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('recipe-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->biografi), 200);

        Profile::create($validatedData);

        return redirect('/dashboard/profiles')->with('success', 'New Recipe has been added!');
    }

    public function show(profile $profile)
    {
        return view('layouts.profiles.show', ['profile' => $profile]);
    }

    public function edit(profile $profile)
    {
        return view('layouts.profiles.edit', [
            'profile' => $profile,
            'categories' => category::all()
        ]);
    }

    public function update(Request $request, profile $profile)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image'=> 'image|file|max:1024',
            'biografi' => 'required'
        ];

        if($request->slug != $profile->slug){
            $rules['slug'] = 'required|unique:profiles';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('recipe-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->biografi), 200);

        Profile::where('id', $profile->id)
                ->update($validatedData);

        return redirect('/dashboard/profiles')->with('success', 'Recipe has been updated!');
    }

    public function destroy(profile $profile)
    {
        if($profile->image){
            Storage::delete($profile->image);
        }
        Profile::destroy($profile->id);
        return redirect('/dashboard/profiles')->with('success', 'Recipe has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(profile::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
