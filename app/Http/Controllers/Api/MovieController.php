<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  function of the search
    public function index(Request $request) 
    {
        $movieObj = new Movie;
        if(!empty($request->search)) {
            $search = $request->search;
            $movieObj = $movieObj->where(function($query) use($search){
                            $query->where('title','LIKE',"%$search%")
                                ->orWhere('overview','LIKE',"%$search%")
                                ->orWhere('release_year','LIKE',"%$search%")
                                ->orWhere('runtime','LIKE',"%$search%")
                                ->orWhere('cast_mem','LIKE',"%$search%")
                                ->orWhere('popular_movie','LIKE',"%$search%")
                                ->orWhere('trending_movie','LIKE',"%$search%");
                            });
        }
        return $movieObj->latest()->get();
    }
}
