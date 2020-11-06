<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Payment;
use App\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        $data['payments'] = Payment::all();
        $data['sPayments'] = Payment::where('status','success')->get();
        $data['pPayments'] = Payment::where('status','pending')->get();
        $data['fPayments'] = Payment::where('status','failed')->get();
        $data['rPayments'] = Payment::latest()->limit(7)->get();
        $data['contacts'] = Contact::all();
        $data['tests'] = Testimonial::all();
        return view('admin.index', $data);
    }
}
