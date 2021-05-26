<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');
 * {
	 box-sizing: border-box;
	 margin: 0;
}
 html, body {
	 margin: 0;
	 font-family: 'Montserrat', helvetica, arial, sans-serif;
	 font-size: 14px;
	 font-weight: 400;
}
 .movie_card {
	 position: relative;
	 display: block;
	 width: 850px;
	 height: 400px;
	 margin: 100px auto;
	 overflow: hidden;
	 border-radius: 10px;
	 transition: all 0.4s;
}
 .movie_card:hover {
	 transform: scale(1.02);
	 transition: all 0.4s;
}
 .movie_card .info_section {
	 position: relative;
	 width: 100%;
	 height: 100%;
	 background-blend-mode: multiply;
	 z-index: 2;
	 border-radius: 10px;
}
 .movie_card .info_section .movie_header {
	 position: relative;
	 padding: 25px;
	 height: 40%;
}
 .movie_card .info_section .movie_header h1 {
	 color: #fff;
	 font-weight: 400;
}
 .movie_card .info_section .movie_header h4 {
	 color: #9ac7fa;
	 font-weight: 400;
}
 .movie_card .info_section .movie_header .minutes {
	 display: inline-block;
	 margin-top: 10px;
	 color: #fff;
	 padding: 5px;
	 border-radius: 5px;
	 border: 1px solid rgba(255, 255, 255, 0.13);
}
 .movie_card .info_section .movie_header .type {
	 display: inline-block;
	 color: #cee4fd;
	 margin-left: 10px;
}
 .movie_card .info_section .movie_header .locandina {
	 position: relative;
	 float: left;
	 margin-right: 20px;
	 height: 120px;
	 box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.5);
}
 .movie_card .info_section .movie_desc {
	 padding: 25px;
	 height: 50%;
}
 .movie_card .info_section .movie_desc .text {
	 color: #cfd6e1;
}
 .movie_card .info_section .movie_social {
	 height: 10%;
	 padding-left: 15px;
	 padding-bottom: 20px;
}
 .movie_card .info_section .movie_social ul {
	 list-style: none;
	 padding: 0;
}
 .movie_card .info_section .movie_social ul li {
	 display: inline-block;
	 color: rgba(255, 255, 255, 0.4);
	 transition: color 0.3s;
	 transition-delay: 0.15s;
	 margin: 0 10px;
}
 .movie_card .info_section .movie_social ul li:hover {
	 transition: color 0.3s;
	 color: rgba(255, 255, 255, 0.8);
}
 .movie_card .info_section .movie_social ul li i {
	 font-size: 19px;
	 cursor: pointer;
}
 .movie_card .blur_back {
	 position: absolute;
	 top: 0;
	 z-index: 1;
	 height: 100%;
	 right: 0;
	 background-size: cover;
	 border-radius: 11px;
}
 @media screen and (min-width: 768px) {
	 .movie_header {
		 width: 60%;
	}
	 .movie_desc {
		 width: 50%;
	}
	 .info_section {
		 background: linear-gradient(to right, #0d0d0c 50%, transparent 100%);
	}
	 .blur_back {
		 width: 80%;
		 background-position: -100% 10% !important;
	}
}
 @media screen and (max-width: 768px) {
	 .movie_card {
		 width: 95%;
		 margin: 70px auto;
		 min-height: 350px;
		 height: auto;
	}
	 .blur_back {
		 width: 100%;
		 background-position: 50% 50% !important;
	}
	 .movie_header {
		 width: 100%;
		 margin-top: 85px;
	}
	 .movie_desc {
		 width: 100%;
	}
	 .info_section {
		 background: linear-gradient(to top, #141413 50%, transparent 100%);
		 display: inline-grid;
	}
}
 #bright {
	 box-shadow: 0px 0px 150px -45px rgba(255, 51, 0, 0.5);
}
 #bright:hover {
	 box-shadow: 0px 0px 120px -55px rgba(255, 51, 0, 0.5);
}
 .bright_back {
	 background: url("https://images.indiawords.com/wp-content/uploads/2017/11/akshay-kumar-black-and-white-image.jpg");
}

 
</style>
@extends('layouts.app')
@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width: 65%" >
            <h2 class="ml-5 display-5" style="color:red; margin-top:173%">Cast details</h2>
            <h3 class="text-white pt-4"> What Next? Add something to list</h3>
            <form action="{{route('cast.store')}}" method="POST">
                @csrf
                
                <div class="input-group mb-5 w-100" >
                <table style="width:100%">
                    <tr>
                            <th><input type="text" class="ml-5 form-control form-control-lg" name="gender" placeholder="name here.."></th><br><br>
                    </tr>         

                    <tr>
                          <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="name" placeholder="city here.."></th><br><br>
                          
                    </tr>
                    <tr>     
                         <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="bio" placeholder="bio here.."></th><br><br>
                    </tr>
                    <tr>     
                         <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="birthdate" placeholder="birthdate here.."></th><br><br>
                    </tr>
                    <tr>     
                         <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="list" placeholder="list here.."></th><br><br>
                    </tr>
                   
                    <div class="input-group-append">
                        <th><center><button style="margin-left=25%" class="mt-2 btn btn-danger form-control form-control-lg ml-5" type="submit" id="button-addon2">Add to the Cast details</button></center></th>
                 
                    </div> 
                    
                
              </table>
              </div>
            </form>

            <h2 class="text-white pt-5 ml-5" style=" text-shadow: 2px 2px #ff0000;"> My cast List Details : </h2>
            <div class="bg-white w-100">
            @forelse($casts as $cast)
                    <div class="w-100 d-flex align-items-center justify-content-between">
                        <div class="p-4">
                            @if($cast->completed == 0)
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check"
                                     width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c14638"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 12l5 5l10 -10"/>
                                </svg>
                            @endif

                              <!-- image card start -->
                             <!-- <div class="card movie_card">
                                
                             <div class="card-body">
                                <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
                                </i> -->
                        <!-- image card end -->


                        <!-- start image card -->
                        <div class="movie_card" id="bright">
  <div class="info_section">
    <div class="movie_header">
      <img class="locandina" src="https://i.pinimg.com/236x/9f/9c/8e/9f9c8e3e0e26b17692b6af95c6b4daf9.jpg"/>
      <h1>Akshay Kumar</h1>
      <h4>1967, David Dhawan</h4>
      <span class="minutes">1.5 hours</span>
      <p class="type">Action, Crime, Fantasy</p>
    </div>
    <div class="movie_desc">
      <p class="text">
      Khiladi is an Indian media franchise created by Akshay Kumar and Abbas–Mustan, consisting of a Bollywood action film series and an Indian stunt television series starring Akshay Kumar. 
      </p>
    </div>
    <div class="movie_social">
    </div>
  </div>
  <div class="blur_back bright_back"></div>
  
</div>

                        <!-- end image card -->



                           <p style="background-color:#b3ccff; "><lable style="color:red">Cast gender: {{$cast->gender}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Cast name: {{$cast->name}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Cast Bio: {{$cast->bio}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Cast Birthdate: {{$cast->birthdate}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Cast list: {{$cast->list}}</p>
   

   
                            <div class="mr-4 d-flex align-items-center">
                            @if($cast->completed ==0)
                                <form action="{{route('cast.update' , $cast->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="completed" value="1" hidden>
                                    <button class="btn btn-success"> Mark it as Completed</button>
                                </form>
                            @else
                                <form action="{{route('cast.update' , $cast->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="completed" value="0" hidden>
                                    <button class="btn btn-warning"> Mark it as UnCompleted</button>
                                </form>
                            @endif

                            
                        </div>


                            <a class="inline-block" href="{{route('cast.edit',$cast->id)}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil ml-4"
                                     width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c14638"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"/>
                                    <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"/>
                                </svg>
                            </a>


                            <form action="{{route('cast.destroy',$cast->id)}}" method="POST">
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



