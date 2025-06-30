<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "Frenzel Globe Trading W.L.L";
        $description = "";
        $keywords = "";
        return view('index', compact('title', 'description', 'keywords'));
    }

    function about()
    {
        $title = "Frenzel Globe Trading W.L.L";
        $description = "";
        $keywords = "";
        return view('about', compact('title', 'description', 'keywords'));
    }

    function contact()
    {
        $title = "Frenzel Globe Trading W.L.L";
        $description = "";
        $keywords = "";
        return view('contact', compact('title', 'description', 'keywords'));
    }

    function products()
    {
        $title = "Frenzel Globe Trading W.L.L";
        $description = "";
        $keywords = "";
        return view('products', compact('title', 'description', 'keywords'));
    }
}
