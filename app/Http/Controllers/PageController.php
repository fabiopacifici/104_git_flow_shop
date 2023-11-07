<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function about()
    {
        return view('about');
    }
    function contacts()
    {
        return view('contacts');
    }
}
