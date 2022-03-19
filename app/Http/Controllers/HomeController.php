<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome' , [
            "title" => "Home"
        ]);
    }

    public function shop()
    {
        return view('shop' , [
            "title" => "Shop"
        ]);
    }

    public function contact()
    {
        return view('contact' , [
            "title" => "Contact"
        ]);
    }

    public function item()
    {
        return view('item' , [
            "title" => "Item"
        ]);
    }
}