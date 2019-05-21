<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function addForm($contact_id)
    {
        $contact = Contact::findOrFail($contact_id);
        return view('websites.add_website', ['contact' => $contact]);
    }

    public function add($contact_id, Request $request)
    {
        $contact = Contact::findOrFail($contact_id);

        // проверяем, что все обязательные поля на месте
        // https://laravel.com/docs/5.6/validation
        $request->validate([
            'website' => 'required',
        ]);
        $website = new Website();
        $website->website = $request->website;
        $website->contact_id = $contact_id;
        $website->save();
        return redirect(url('/contact/' . $contact_id));
    }

    public function delete($id)
    {
        $website = Website::findOrFail($id);
        $website->delete();
        return redirect(url('/contact/' . $website->contact_id));
    }
}
