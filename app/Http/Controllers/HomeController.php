<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Article;
use App\Models\Product;
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
        $about = AboutUs::first();
        $products = Product::all();
        $articles = Article::take(5)->get();

        return view('pages.home', compact(['testimonials', 'about', 'products', 'articles']));
    }

    public function about()
    {
        $about = AboutUs::first();
        return view('pages.about', compact('about'));
    }

    public function blog()
    {
        $blogs = Article::select('title', 'thumbnail', 'slug', 'excerpt')->paginate(10);
        return view('pages.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $slug = $slug;
        $blog = Article::where('slug', $slug)->first();
        return view('pages.blog-detail', compact('blog'));
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
        $products = Product::all();
        return view('pages.services', compact('products'));
    }

    public function servicesDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('pages.service-detail', compact('product'));
    }
}
