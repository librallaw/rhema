<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function single(){

        return view('singleview');

    }

    public function rhemaspeaks(){

        return view('speaks');

    }
}
