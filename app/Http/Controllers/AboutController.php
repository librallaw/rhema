<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

        return view('v2.about');

    }


    public function author(){

        return view('v2.author');

    }


    public function speaks(){

        return view('v2.speaks');

    }

    public function download(){

        return view('v2.download');

    }
}
