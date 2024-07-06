<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Footer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $footers = Footer::all();
        $contacts = contact::first();
        return view('layouts.public.contact', compact('contacts','footers'));
    }

    public function store(Request $request)
    {
        if (empty($request->name) || empty($request->email) || empty($request->phonenumber) || empty($request->message_user)) {
            return redirect()->route('contact')->with('error', 'Tidak boleh ada inputan kosong. Semua wajib diisi!');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'message_user' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phonenumber = $request->phonenumber;
            $contact->message = $request->message_user;
            $contact->save();
    
            $this->sendEmail($request->all());
            DB::commit();
            return redirect()->route('contact')->with('success', 'Terima kasih atas pesan Anda');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('contact')->with('error', 'Gagal mengirim pesan');
        }
    }
    
    private function sendEmail($data)
    {
        Mail::send('email.contact', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])
                    ->subject('Email dari Buku Tamu');
        });
    }
}
