<?php

namespace App\Http\Controllers;

use App\Models\Movie;
// use App\Events\NewuserregisteredEvent;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $movies = Movie::latest()->paginate(3);
        return view('welcome')->with('movies',$movies); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //print_r($request->all());exit;
        //
        // dd($request->all());
        $validateData = $request->validate([
            'title'=>'required|max:255'
        ]);
        $movie = Movie::create([
            'title'=>$request->title,
            'overview' => $request->overview,
            'release_year' => $request->release_year,
            'runtime' => $request->runtime,
            'cast_mem' => $request->cast_mem,
            'popular_movie' => $request->popular_movie,
            'trending_movie' =>$request->trending_movie

        ]);
        // event(new NewuserregisteredEvent($movie));
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
        return view('movie.edit')->with('movie',$movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
        $movie->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();
        return redirect('/');
    }
    public function show1()
    {
        $data= Member::pagination(3);
        dd($data);
        return view('/',['members'=>$data]);
    }
}
