<?php

namespace App\Http\Controllers;

use App\AboutRhema;
use App\Author;
use App\RhemaSpeak;
use App\Testimonial;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $data['testimonials'] = Testimonial::all();
        return view('v2.about', $data);

    }


    public function author(){

        $data['authors'] = Author::latest()->limit(1)->get();
        $data['testimonials'] = Testimonial::all();
        return view('v2.author', $data);

    }


    public function speaks(){
        $data['speaks'] = RhemaSpeak::latest()->limit(1)->get();
        $data['testimonials'] = Testimonial::all();

        return view('v2.speaks', $data);

    }

    public function download(){

        return view('v2.download');

    }
}
