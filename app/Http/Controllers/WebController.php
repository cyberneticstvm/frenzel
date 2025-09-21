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

    function products($category)
    {
        $title = "Frenzel Globe Trading W.L.L";
        $description = "";
        $keywords = "";
        $products = [];
        if ($category == 'general'):
            $products[0] = array('name' => 'METAL ENCLOSURE', 'img' => 'METAL ENCLOSURE.jpg');
            $products[1] = array('name' => 'CONNECTOR STRIPS', 'img' => 'CONNECTOR STRIPS.jpg');
            $products[2] = array('name' => 'FLEXIBLE PIPE', 'img' => 'FLEXIBLE PIPE.jpg');
            $products[3] = array('name' => 'PVC CONDUIT AND ACCESSORIES', 'img' => 'PVC CONDUIT AND ACCESSORIES.jpg');
            $products[3] = array('name' => 'PANEL WIRES', 'img' => 'pro1.svg');
        endif;
        if ($category == 'tools'):
            $products[0] = array('name' => 'POWER TOOLS', 'img' => 'POWER TOOLS.jpg');
            $products[1] = array('name' => 'HAND TOOLS', 'img' => 'HAND TOOLS.jpg');
            $products[2] = array('name' => 'ELECTRICAL TOOLS', 'img' => 'ELECTRICAL TOOLS.jpg');
            $products[3] = array('name' => 'WELDING & FABRICATION CONSUMABLES', 'img' => 'Welding & Fabrication Consumables.jpg');
            $products[4] = array('name' => 'LUBRICANT & ADHESIVES', 'img' => 'Lubricant & Adhesives.jpg');
        endif;
        if ($category == 'pands'):
            $products[0] = array('name' => 'CELLING AND TABLE FANS', 'img' => 'CELLING AND TABLE FANS.jpg');
            $products[1] = array('name' => 'INDUSTRIAL FLOOR FAN', 'img' => 'industriAL floor fan.jpg');
            $products[2] = array('name' => 'INDUSTRIAL FAN', 'img' => 'industrial fan.jpg');
            $products[3] = array('name' => 'INDUSTRIAL SOCKET AND PLUGS', 'img' => 'INDUSTRIAL SOCKET AND PLUGS.jpg');
        endif;
        if ($category == 'gi'):
            $products[0] = array('name' => 'GI ACCE', 'img' => 'GI ACCE.jpg');
        endif;
        if ($category == 'elcb'):
            $products[0] = array('name' => 'ELCB, MCCB, RCCB', 'img' => 'ELCB, MCCB, RCCB.jpg');
        endif;
        return view('products', compact('title', 'description', 'keywords', 'products'));
    }
}
