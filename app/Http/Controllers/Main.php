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
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home-page');
    }

    public function aboutus()
    {
        return view('about-us');
    }

    public function contactus()
    {
        return view('contact-us');
    }

    public function homepage()
    {
        return view('home-page');
    }

    public function howwework()
    {
        return view('how-we-work');
    }

    public function ourprojects()
    {
        return view('our-projects');
    }

    public function ourservices()
    {
        return view('our-services');
    }

    public function projectsearchresult()
    {
        return view('project-search-result');
    }

    public function quote()
    {
        return view('quote');
    }
}
