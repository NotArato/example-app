<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::get();
        return view('contact-table', compact('contact'));
    }

    public function create()
    {
        $users = User::inRandomOrder()->take(10)->get();
        return view('contact', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect('/contact')
            ->with('success', 'Your message has been sent successfully!');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact-edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect('/contact-table')
            ->with('success', 'Contact updated successfully');
    }

    public function destroy($id) 
    {
        $contact = Contact::find($id);

        $contact->delete();

        return redirect('/contact-table')
            ->with('success', 'Contact updated successfully');
    }
}   