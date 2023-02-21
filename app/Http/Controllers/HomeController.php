<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('pages.home', compact(['testimonials']));
    }

    public function about()
    {
        $about = AboutUs::first();
        return view('pages.about', compact('about'));
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function services()
    {
        return view('pages.services');
    }
}
