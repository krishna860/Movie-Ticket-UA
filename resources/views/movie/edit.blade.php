
@extends('layouts.app')
@section('content')
  <div class="div.w-100 h-100 d-flex justify-content-center align-items-center">
      <div class="text-center" style="width: 40%">
      <h1 style="color: black"><center>Edit your Details called {{$movie->title}}</center></h1>
        
          <form action="{{ route('movie.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group mb-3 w-100">
            <input type="text" class="form-control form-control-lg" name="title" vaiue="{{$movie->title}}" aria-label="username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button type="submit" class="btn btn-success" id="button-addon2">Save</button>
            </div>
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
</style>