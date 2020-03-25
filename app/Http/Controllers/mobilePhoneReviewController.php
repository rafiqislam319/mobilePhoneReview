<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mobilePhoneReviewController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function newArrivalBrandPhone(){
        return view('front-end.brand.newArrivalBrandPhone');
    }
    public function contactUs(){
        return view('front-end.contact.contactUs');
    }
}
