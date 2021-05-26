
@extends('layouts.app')
@section('content')
  <div class="div.w-100 h-100 d-flex justify-content-center align-items-center">
      <div class="text-center" style="width: 40%">
      <h1 style="color: black"><center>Edit your Details called {{$cast->name}}</center></h1>
        
          <form action="{{ route('cast.update', $cast->id) }}" method="POST">
          
            @csrf
            @method('PUT')
        
            <input type="text" class="form-control form-control-lg" name="name" placeholder="name here.." value="{{$cast->name}}">
            <input type="text" class="form-control form-control-lg" name="gender" placeholder="gender here.." value="{{$cast->gender}}">
            <input type="text" class="form-control form-control-lg" name="bio" placeholder="bio here" value="{{$cast->bio}}">
            <input type="text" class="form-control form-control-lg" name="birthdate" placeholder="birthdate here.." value="{{$cast->birthdate}}">
            <input type="text" class="form-control form-control-lg" name="list" placeholder="list here" value="{{$cast->list}}">
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
#button-addon2{
    margin-left:45%;
}
</style>