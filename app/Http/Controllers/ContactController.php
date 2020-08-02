<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){

        return view('contact');

    }


    public function addContact( Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'email' => 'required',
            'comments' => 'required',

        ]);


        $contact =  new Contact();

        $contact -> name = $request -> name;
        $contact -> email = $request -> email;
        $contact -> phone = $request -> phone;
        $contact -> message = $request -> comments;

        $contact -> save();

        return "Your feedback was sent successfully, our rep would look into it ASAP";

    }
}
