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
        return request()->all();
    }




    public function profile(){
        return view('profile');
    }

    public function home(){
        return view('home');
    }
}