<?php

namespace App\Http\Controllers;

use App\AboutRhema;
use App\Author;
use App\Banner;
use App\Reason;
use App\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['banners'] = Banner::latest()->limit(1)->get();
        $data['authors'] = Author::latest()->limit(1)->get();
        $data['rhemas'] = AboutRhema::latest()->limit(1)->get();
        $data['reasons'] = Reason::latest()->limit(1)->get();
        $data['testimonials'] = Testimonial::all();
        return view('home2', $data);
    }
}
