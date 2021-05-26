<style>

  body{
      width: 100vw;
      height: 100vh;
      background: rgb(34,193,195);
      background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
  }

.src{
    width: 50vw;
    height: 50vh;
}
  </style>
@extends('layouts.app')
@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width: 65%">
            <h2 class="ml-5 display-5" style="color:red; margin-top:165%">Theater Booking System</h2>
            <h3 class="text-white pt-4"> What Next? Add something to list</h3>
            <form action="{{route('theater.store')}}" method="POST">
                @csrf
                
                <div class="input-group mb-5 w-100" >
                <table style="width:100%">
                    <tr>
                            <th><input type="text" class="ml-5 form-control form-control-lg" name="name" placeholder="name here.."></th><br><br>
                    </tr>         

                    <tr>
                          <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="city" placeholder="city here.."></th><br><br>
                          
                    </tr>
                    <tr>     
                         <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="capacity" placeholder="capacity here.."></th><br><br>
                    </tr>
                   
                    <div class="input-group-append">
                        <th><center><button style="margin-left=25%" class="mt-2 btn btn-danger form-control form-control-lg ml-5" type="submit" id="button-addon2">Add to the Movie details</button></center></th>
                 
                    </div> 
                    
                
              </table>
              </div>
            </form>

            <h2 class="text-white pt-5 ml-5" style=" text-shadow: 2px 2px #ff0000;"> My theater List Details : </h2>
            <div class="bg-white w-100">
            @forelse($theaters as $theater)
                    <div class="w-100 d-flex align-items-center justify-content-between">
                        <div class="p-4">
                            @if($theater->completed == 0)
                            

                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check"
                                     width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c14638"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 12l5 5l10 -10"/>
                                </svg>
                            @endif
                        <!-- image card start -->
                             <div class="card movie_card">
                            <img src="https://media.gettyimages.com/photos/cinemas-launched-its-first-multiplex-in-chennai-on-thursday-april-8-picture-id98348689?s=2048x2048" class="card-img-top" alt="...">
                            <div class="card-body">
                                <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
                                </i>
                                
                        <!-- image card end -->

                            <p style="background-color:#b3ccff; "><lable style="color:red">theater Name: {{$theater->name}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">theater city: {{$theater->city}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">theater capacity: {{$theater->capacity}}</p>
                            
                        </div>

                        <div class="mr-4 d-flex align-items-center">
                            @if($theater->completed ==0)
                                <form action="{{route('theater.update' , $theater->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="completed" value="1" hidden>
                                    <button class="btn btn-success"> Mark it as Completed</button>
                                </form>
                            @else
                                <form action="{{route('theater.update' , $theater->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="completed" value="0" hidden>
                                    <button class="btn btn-warning"> Mark it as UnCompleted</button>
                                </form>
                            @endif

                            <a class="inline-block" href="{{route('theater.edit',$theater->id)}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil ml-4"
                                     width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c14638"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"/>
                                    <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"/>
                                </svg>
                            </a>

                            <form action="{{route('theater.destroy',$theater->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="border-0 bg-transparent ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-trash ml-2" width="44" height="44"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="#c14638" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="4" y1="7" x2="20" y2="7"/>
                                        <line x1="10" y1="11" x2="10" y2="17"/>
                                        <line x1="14" y1="11" x2="14" y2="17"/>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>
                                    </svg>
                                </button>
                            </form>

                        </div>
                    </div>
                @empty
                    <p class="orm-control form-control-lg"> Sorry , nothing to do right now</p>
                @endforelse
            </div>


         </div>
    </div>
@endsection

