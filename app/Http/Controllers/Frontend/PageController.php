<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function about(){
        return view('frontend.about.index');

    }

    public function car(){
        return view('frontend.booking.index');
    }

    public function carDetails(){
        return view('frontend.booking.car-single');
    }

    public function bookCar(){
        return view('frontend.booking.book_a_car');
    }

    public function contact (){
        return view('frontend.contact.index');
    }


}