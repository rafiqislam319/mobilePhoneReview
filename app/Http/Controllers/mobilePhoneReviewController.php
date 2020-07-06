<?php

namespace App\Http\Controllers;

use App\Brand;  //to use/import any class just press-> ctrl+shift+p and then find use and hit enter

use App\logo;
use App\Mobile;
use Illuminate\Http\Request;

class mobilePhoneReviewController extends Controller
{
    public function index(){
        //$brands = Brand::where('publication_status', 1)->get(); // this has been used in appServiceProvider class to overcome the issue of undefined variable in includes.header file
        $mobiles = Mobile::where('publication_status', 1)
                                    ->orderby('id', 'DESC')
                                    ->take(6)
                                    ->get();
        //return $mobiles;
        return view('front-end.home.home', [
            
            'mobiles'=>$mobiles
        ]);
    }
    public function newArrivalBrandPhone(){
        //$brands = Brand::where('publication_status', 1)->get();
        return view('front-end.brand.newArrivalBrandPhone',['brands'=>$brands]);
    }
    public function contactUs(){
        return view('front-end.contact.contactUs');
    }
    public function mobileAllDetails($id){
        $mobile = Mobile::where('id', $id)->first();
        //return $mobiles;
        return view('front-end.mobilePhone.mobileAllDetails',[
            'mobile' =>$mobile
        ]);
    }
    public function brandsMobile()
    {
        print_r('hello');
        //return view('front-end.brand.mobileByBrand');
    }
}
