<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about() {
        $data['title']="About Us";
        return view('front_about',$data);
    }

    public function services() {
        $data['title']="Services";
        return view('front_services',$data);
    }

    public function packages() {
        $data['title']="Packages";
        return view('front_packages',$data);
    }

    public function destination() {
        $data['title']="Destination";
        return view('front_destination',$data);
    }

    public function booking() {
        $data['title']="Booking";
        return view('front_booking',$data);
    }

    public function travelguides() {
        $data['title']="Travel Guides";
        return view('front_travelguides',$data);
    }

    public function testimonial() {
        $data['title']="Testimonial";
        return view('front_testimonial',$data);
    }



    public function contact() {
        $data['title']="Contact";
        return view('front_contact',$data);
    }
}
