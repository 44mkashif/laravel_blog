<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $title = 'Welcome to Laravel Blog!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);;
    }

    function services(){
        $title = 'Our Services';
        return view('pages.services')->with('title', $title);
    }
}
