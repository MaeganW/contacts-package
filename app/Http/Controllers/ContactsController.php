<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('contacts', ['contacts' =>  $contacts]);
    }

    public function create(){
        return view('form');
    }

    public function store(){
        $contact = new Contact();
        $contact->firstName = request('firstName');
        $contact->lastName = request('lastName');
        $contact->email = request('email');
        $contact->address = request('address');
        $contact->phone = request('phone');
        $contact->save();
        return redirect('/contacts');
        // return request()->all();
    }




    public function profile(){
        return view('profile');
    }

    public function home(){
        return view('home');
    }
}