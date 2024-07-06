<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class DashboardFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.private.footer', [
            'footers' => Footer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.footer.create', [
            'footers' => footer::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url'
        ]);

        Footer::create($validatedData);

        return redirect('/dashboard/footer')->with('success', 'New Recipe has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\View\View
    {
        $footer = Footer::findOrFail($id);
        return view('layouts.footer.show', ['footer' => $footer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(footer $footer)
    {
        return view('layouts.footer.edit', [
            'footer' => $footer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footer $footer)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url'
        ]);

        $footer->update($validatedData);

        return redirect('/dashboard/footer')->with('success', 'Footer has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();

        return redirect('/dashboard/footer')->with('success', 'Contact has been deleted!');
    }
}
