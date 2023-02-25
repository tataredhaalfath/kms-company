<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Event;
use App\Models\Image;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $article = Article::count();
        $image = Image::count();
        $testimoni = Testimonial::count();
        $event = Event::count();
        return view('pages.admin.dashboard', compact(['article','image','testimoni','event']));
    }
}
