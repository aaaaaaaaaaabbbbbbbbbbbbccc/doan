<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function order() 
    {
        return view('order');
    }
    public function createuser() 
    {
        return view('createuser');
    }
    public function tech() 
    {
        return view('tech');
    }
    public function skin() 
    {
        return view('skin');
    }
}