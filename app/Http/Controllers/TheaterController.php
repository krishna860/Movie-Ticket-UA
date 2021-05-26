<?php

namespace App\Http\Controllers;

use App\Models\Theater;
use Illuminate\Http\Request;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $theaters = Theater::latest()->paginate(3);
        return view('theater')->with('theaters',$theaters); 
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
        //

        $validateData = $request->validate([
            'name'=>'required|max:255'
        ]);
        $theater = Theater::create([
            'name'=>$request->name,
            'city' => $request->city,
            'capacity' => $request->capacity,

        ]);
        // event(new NewuserregisteredEvent($movie));
        
        return redirect(route('theater.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function show(Theater $theater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function edit(Theater $theater)
    {
        //
        return view('movie.theateredit')->with('theater',$theater);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theater $theater)
    {
        //
        $theater->update($request->all());
        return redirect(route('theater.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theater $theater)
    {
        //
        $theater->delete();
        return redirect(route('theater.index'));
    }

    public function show1()
    {
        $data= Member::pagination(3);
        dd($data);
        return view('/',['members'=>$data]);
    }
}
