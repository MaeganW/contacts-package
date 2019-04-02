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
    public function list(){
        return view('list');
    }
    public function profile(){
        return view('profile');
    }
}