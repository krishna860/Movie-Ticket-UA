<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

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
        $movies = Movie::get();
        return view('booking', compact('movies'));
    }

     // functioon for book ticket==============
     public function insertBookData(Request $req){
         //return $req->all();
        $movie_title  = $req->input('txtMovie');
        $total_seat = $req->input('totalSeat');
        $final_amount = $req->input('totalAmt');
        $add=DB::table('booking_master')->insert(['movie_title'=>$movie_title, 'total_seat'=>$total_seat, 'final_amount'=>$final_amount]);
        if($add!=0){
            echo '<script>alert("Done Booking.")</script>';
           return redirect('/booking');
        }
        else{
            echo "error in insert courses";
        }
    }
}


