<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function mikrokontroler()
    {
        return view('mikrokontroler');
    }

    public function mikrotik()
    {
        return view('mikrotik');
    }

    public function isp()
    {
        return view('isp');
    }

    
}
