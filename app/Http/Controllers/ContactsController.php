<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function init() {
        $contacts = Contact::all();
        // return $contacts;
        return view('contacts', ['contacts' =>  $contacts]);
    }
}