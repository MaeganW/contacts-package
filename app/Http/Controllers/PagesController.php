<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function form(){
        return view('form');
    }
    public function contacts(){
        return view('contacts');
    }
    public function profile(){
        return view('profile');
    }
}