<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function addView(){
        return view('contacts.add');
    }

    public function addContact(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->address = $request->address;
        $contact->organisation = $request->organisation;
        $contact->description = $request->description;
        $contact->save();
        return redirect('/');
    }

    public function details($id){
        $contact = Contact::findOrFail($id);
        return view('contacts.contact', compact('contact'));
    }

    public function editView($id){
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function edit($id, Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->address = $request->address;
        $contact->organisation = $request->organisation;
        $contact->description = $request->description;
        $contact->save();
        return redirect(url('/contact/'.$id));
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/');
    }
}
