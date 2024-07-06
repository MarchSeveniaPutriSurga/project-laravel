<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardHomeController extends Controller
{
    public function index()
    {
        return view ('layouts.private.home', [
            'homes' => home::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // 
    }

    public function show(home $home)
    {
        return view('layouts.homes.show', ['home' => $home]);
    }

    public function edit(home $home)
    {
        return view('layouts.homes.edit', [
            'home' => $home,
            'users' => user::all()
        ]);
    }

    public function update(Request $request, home $home)
    {
        $rules = [
            'title' => 'required|max:255',
            'image'=> 'image|file|max:1024',
            'tagline' => 'required',
            'about' => 'required'
        ];

        if($request->slug != $home->slug){
            $rules['slug'] = 'required|unique:homes';
        }

        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('home-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Home::where('id', $home->id)->update($validatedData);

        return redirect('/dashboard/homes')->with('success', 'About has been updated!');
    }

    public function destroy(home $home)
    {
        if($home->image){
            Storage::delete($home->image);
        }
        Home::destroy($home->id);
        return redirect('/dashboard/homes')->with('success', 'Home has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Home::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
