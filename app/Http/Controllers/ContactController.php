<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($data);

        return redirect('/contact')->with('success', 'Message sent successfully!');
    }

    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('dashboardpage.showcontacts', compact('contacts'));
    }
}