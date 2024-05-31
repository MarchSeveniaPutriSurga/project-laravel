<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('layouts.private.home', [
            'homes' => home::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(home $home)
    {
        return view('layouts.homes.show', ['home' => $home]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home $home)
    {
        return view('layouts.homes.edit', [
            'home' => $home,
            'users' => user::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
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
