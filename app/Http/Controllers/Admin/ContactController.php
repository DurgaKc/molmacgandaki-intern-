<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        toast('deleted Sucessfully','success');
        return Redirect(route('admin.contact.index'));
    }
}
