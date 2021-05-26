

@extends('layouts.app')
@section('content')
  <div class="div.w-100 h-100 d-flex justify-content-center align-items-center">
      <div class="text-center" style="width: 40%">
      <h1 style="color: black"><center>Edit your Details called As</center></h1>
        
          <form action="{{ route('movie.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')  
      
            <input type="text" class="form-control form-control-lg" name="title" placeholder="title here.." value="{{$movie->title}}">
            <input type="text" class="form-control form-control-lg" name="overview" placeholder="overview" value="{{$movie->overview}}">
            <input type="text" class="form-control form-control-lg" name="release_year" placeholder="release_year" value="{{$movie->release_year}}">
            <input type="text" class="form-control form-control-lg" name="runtime" placeholder="runtime" value="{{$movie->runtime}}">
            <input type="text" class="form-control form-control-lg" name="cast_mem" placeholder="cast_mem" value="{{$movie->cast_mem}}">
            <input type="text" class="form-control form-control-lg" name="popular_movie" placeholder="popular_movie" value="{{$movie->popular_movie}}">
            <input type="text" class="form-control form-control-lg" name="trending_movie" placeholder="trending_movie" value="{{$movie->trending_movie}}">

                <div class="input-group-append">
                <button type="submit" class="btn btn-success" id="button-addon2">Save</button>
            </div>
            
          </form>
          </div>
      
  </div>
@endsection



<style>
body{
    width: 100vw;
    height: 100vh;
    background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
}
#button-addon2{
    margin-left:45%;
}
</style>