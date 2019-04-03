<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ListController extends Controller
{
    public function init() {
        $contacts = Contact::all();
        // return $contacts;
        return view('list', ['contacts' =>  $contacts]);
    }
}