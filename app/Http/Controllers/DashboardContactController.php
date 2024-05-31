<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('layouts.private.contact', [
            'contacts' => contact::where('user_id', auth()->user()->id)->get()
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
    public function show(contact $contact)
    {
        return view('layouts.contacts.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        return view('layouts.contacts.edit', [
            'contact' => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required',
            'phonenumber' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($contact->user_id != auth()->user()->id) {
            return redirect('/dashboard/contacts')->with('error', 'Unauthorized action.');
        }

        $contact->update($validatedData);

        return redirect('/dashboard/contacts')->with('success', 'Contact has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
