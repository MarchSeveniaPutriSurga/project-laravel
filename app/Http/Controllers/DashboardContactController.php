<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('layouts.private.contact', [
            'contacts' => Contact::all()
        ]);
    }

    public function show(string $id): \Illuminate\View\View
    {
        $contact = Contact::findOrFail($id);
        return view('layouts.contacts.show', ['contact' => $contact]);
    }


    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/dashboard/contacts')->with('success', 'Contact has been deleted!');
    }
}
