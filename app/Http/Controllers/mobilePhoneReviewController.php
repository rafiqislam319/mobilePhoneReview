<?php

namespace App\Http\Controllers;

use App\Brand;
use App\logo;
use App\Mobile;
use Illuminate\Http\Request;

class mobilePhoneReviewController extends Controller
{
    public function index(){
        $brands = Brand::where('publication_status', 1)->get();
        $mobiles = Mobile::where('publication_status', 1)
                                    ->orderby('id', 'DESC')
                                    ->take(6)
                                    ->get();
        //return $mobiles;
        return view('front-end.home.home', [
            'brands'=>$brands,
            'mobiles'=>$mobiles
        ]);
    }
    public function newArrivalBrandPhone(){
        $brands = Brand::where('publication_status', 1)->get();
        return view('front-end.brand.newArrivalBrandPhone',['brands'=>$brands]);
    }
    public function contactUs(){
        return view('front-end.contact.contactUs');
    }
}
