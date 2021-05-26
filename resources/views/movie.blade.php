<style>
@import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
*, *:before, *:after {
  box-sizing: border-box;
}

  body{
      width: 100vw;
      height: 100vh;
      background: rgb(34,193,195);
      background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
  }
}
a {
  text-decoration: none;
  color: #5C7FB8;
}
a:hover {
  text-decoration: underline;
}
.movie-card {
  font: 14px/22px "Lato", Arial, sans-serif;
  color: #A9A8A3;
  padding: 40px 0;
}
.container {
  margin: 0 auto;
  width: 780px;
  height: 640px;
  background: #F0F0ED;
  border-radius: 5px;
  position: relative;
}
.hero {
  height: 342px;
  margin: 0;
  position: relative;
  overflow: hidden;
  z-index: 1;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
.hero:before {
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background: red;
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_bg.jpg");
  z-index: -1;
  transform: skewY(-2.2deg);
  transform-origin: 0 0;
  -webkit-backface-visibility: hidden;
}
.cover {
  position: absolute;
  top: 160px;
  left: 40px;
  z-index: 2;
}
.details {
  padding: 190px 0 0 280px;
}
.details .title1 {
  color: white;
  font-size: 44px;
  margin-bottom: 13px;
  position: relative;
}
.details .title1 span {
  position: absolute;
  top: 3px;
  margin-left: 12px;
  background: #C4AF3D;
  border-radius: 5px;
  color: #544C21;
  font-size: 14px;
  padding: 0px 4px;
}
.details .title2 {
  color: #C7C1BA;
  font-size: 23px;
  font-weight: 300;
  margin-bottom: 15px;
}
.details .likes {
  margin-left: 24px;
}
.details .likes:before {
  content: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/icon_like.png");
  position: relative;
  top: 2px;
  padding-right: 7px;
}
.description {
  bottom: 0px;
  height: 200px;
  font-size: 16px;
  line-height: 26px;
  color: #B1B0AC;
}
.column1 {
  padding-left: 50px;
  padding-top: 120px;
  width: 220px;
  float: left;
  text-align: center;
}
.tag {
  background: white;
  border-radius: 10px;
  padding: 3px 8px;
  font-size: 14px;
  margin-right: 4px;
  line-height: 35px;
  cursor: pointer;
}
.tag:hover {
  background: #ddd;
}
.column2 {
  padding-left: 41px;
  padding-top: 30px;
  margin-left: 20px;
  width: 480px;
  float: left;
}
.avatars {
  margin-top: 23px;
}
.avatars img {
  cursor: pointer;
}
.avatars img:hover {
  opacity: 0.6;
}
.avatars a:hover {
  text-decoration: none;
}
fieldset, label {
  margin: 0;
  padding: 0;
}
/****** Style Star Rating Widget *****/
.rating {
  border: none;
  float: left;
}
.rating > input {
  display: none;
}
.rating > label:before {
  margin: 5px;
  margin-top: 0;
  font-size: 1em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}
.rating > .half:before {
  content: "\f089";
  position: absolute;
}
.rating > label {
  color: #ddd;
  float: right;
}
/***** CSS Magic to Highlight Stars on Hover *****/
.rating > input:checked ~ label, .rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
  /* show gold star when clicked */
  /* hover current star */
  color: #FFD700;
}
/* hover previous stars in list */
.rating > input:checked + label:hover, .rating > input:checked ~ label:hover, .rating > label:hover ~ input:checked ~ label, .rating > input:checked ~ label:hover ~ label {
  /* hover current star when changing rating */
  /* lighten current selection */
  color: #FFED85;
}
a[data-tooltip] {
  position: relative;
}
a[data-tooltip]::before, a[data-tooltip]::after {
  position: absolute;
  display: none;
  opacity: 0.85;
}
a[data-tooltip]::before {
  /*
   * using data-tooltip instead of title so we 
   * don't have the real tooltip overlapping
   */
  content: attr(data-tooltip);
  background: #000;
  color: #fff;
  font-size: 13px;
  padding: 5px;
  border-radius: 5px;
  /* we don't want the text to wrap */
  white-space: nowrap;
  text-decoration: none;
}
a[data-tooltip]::after {
  width: 0;
  height: 0;
  border: 6px solid transparent;
  content: '';
}
a[data-tooltip]:hover::before, a[data-tooltip]:hover::after {
  display: block;
}
/** positioning **/
/* top tooltip */
a[data-tooltip][data-placement="top"]::before {
  bottom: 100%;
  left: 0;
  margin-bottom: 40px;
}
a[data-tooltip][data-placement="top"]::after {
  border-top-color: #000;
  border-bottom: none;
  bottom: 50px;
  left: 20px;
  margin-bottom: 4px;
}

</style>
@extends('layouts.app')
@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width: 80%">
            <h2 class="ml-5 display-5" style="color:red; margin-top:235%">Movie Booking System</h2>
            <h3 class="text-white pt-4"> What Next? Add something to list</h3>
            <form action="{{route('movie.store')}}" method="POST">
                @csrf
                 
               
                <div class="input-group mb-5 w-100" >
                <table style="width:100%">
                    <tr>
                            <th><input type="text" class="ml-5 form-control form-control-lg" name="title" placeholder="title here.."></th><br><br>
                    </tr>         
                    <tr>
                          <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="overview" placeholder="overview here.."></th><br><br>
                    </tr>
                    <tr>     
                         <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="release_year" placeholder="release_year here.."></th><br><br>
                    </tr>
                    <tr>
                           <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="runtime" placeholder="runtime here in word.."></th><br><br>
                    </tr>
                    <tr>
                           <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="cast_mem" placeholder="cast_mem here.."></th><br><br>
                    </tr>
                    <tr>
                           <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="popular_movie" placeholder="popular_movie here.."></th><br><br>
                    </tr>
                    <tr>
                           <th><input type="text" class="ml-5 mt-2 form-control form-control-lg" name="trending_movie" placeholder="trending_movie here.."></th><br><br>
                    </tr>

                    
                   
                    <div class="input-group-append">
                        <th><center><button style="margin-left=25%" class="mt-2 btn btn-danger form-control form-control-lg ml-5" type="submit" id="button-addon2">Add to the Movie details</button></center></th>
                 
                    </div> 
                    
                
              </table>
              </div>
            </form>
 
 
            <h2 class="text-white pt-5 ml-5" style=" text-shadow: 2px 2px #ff0000;"> My Movie List Details : </h2>
            <div class="bg-white w-100">
            @forelse($movies as $movie)
                    <div class="w-100 d-flex align-items-center justify-content-between">
                        <div class="p-4">
                            @if($movie->completed == 0)                               
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check"
                                     width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c14638"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 12l5 5l10 -10"/>
                                </svg>
                            @endif

                       

                      
                        <div class="movie-card">
  
  <div class="container">
    
    <a href="#"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_cover.jpg" alt="cover" class="cover" /></a>
        
    <div class="hero">
            
      <div class="details">
      
        <div class="title1">The Hobbit <span>PG-13</span></div>

        <div class="title2">The Battle of the Five Armies</div>    
        
        <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" checked /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
  </fieldset>
        
        <span class="likes">109 likes</span>
        
      </div> <!-- end details -->
      
    </div> <!-- end hero -->
    
    <div class="description">
      
      <div class="column1">
        <span class=""> </span>
        <span class=""> </span>
        <span class=""> </span>
      </div> <!-- end column1 -->
      
      <div class="column2">
        
     
                            <p style="background-color:#b3ccff; "><lable style="color:red">Movie Name: {{$movie->title}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Movie Overview: {{$movie->overview}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Movie relese_year: {{$movie->release_year}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Movie runtime: {{$movie->runtime}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">Movie cast_mem: {{$movie->cast_mem}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">popular_movie: {{$movie->popular_movie}}</p>
                            <p style="background-color:#b3ccff; "><lable style="color:red">treding_movie: {{$movie->trending_movie}}</p>
        
      </div> <!-- end column2 -->
    </div> <!-- end description -->
    
   
  </div> <!-- end container -->
</div> <!-- end movie-card -->

</div>
</div>
                        <div class="mr-4 d-flex align-items-center">
                            @if($movie->completed ==0)
                                <form action="{{route('movie.update' , $movie->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="completed" value="1" hidden>
                                    <button class="btn btn-success"> Mark it as Completed</button>
                                </form>
                            @else
                                <form action="{{route('movie.update' , $movie->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="completed" value="0" hidden>
                                    <button class="btn btn-warning"> Mark it as UnCompleted</button>
                                </form>
                            @endif

                            <a class="inline-block" href="{{route('movie.edit',$movie->id)}}">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil ml-4"
                                     width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c14638"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"/>
                                    <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"/>
                                </svg>
                            </a>

                            <form action="{{route('movie.destroy',$movie->id)}}" method="POST">
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
                    
                @empty
                    <p class="orm-control form-control-lg"> Sorry , nothing to do right now</p>
                @endforelse
            </div>


         </div>
    </div>
@endsection
