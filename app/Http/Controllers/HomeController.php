<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function catalogue()
    {
        return view('home');
    }
    public function detailItem($slug='')
    {
        return view('home');
    }
    public function aboutUs()
    {
        return view('home');
    }
    public function contactUs()
    {
        return view('home');
    }
}
