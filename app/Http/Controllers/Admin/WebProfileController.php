<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebProfileController extends Controller
{
    public function listTestimonial()
    {
        $testimonial = Testimonial::all();
        return view('pages.admin.webprofile.testimonial', compact('testimonial'));
    }

    public function storeTestimonial(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        Testimonial::insert($data);
        return redirect(route('home'));
    }

    public function destroyTestimonial(Request $request)
    {
        Testimonial::destroy($request->id);
        return redirect(route('testimonial.list'))->with('status', 'Data berhasil dihapus');
    }

    public function aboutUs()
    {
        $about = AboutUs::first();
        return view('.pages.admin.webprofile.about-us', compact('about'));
    }
}
