<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index() {

        return view('home'); 
    }

    public function index2(){
        return view('wlcmadmin');
    }
    public function viewseat(){
        return view('selectcity');
    }
    public function surat(){
        return view('surat');
    }
    public function mumbai(){
        return view('mumbai');
    }  
    public function ahmedabad(){
        return view('ahmedabad');
    }  
    public function book(){
        return view('booking');
    }   
}


