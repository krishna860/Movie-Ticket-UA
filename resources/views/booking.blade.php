<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Movie Seat Booking</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
    .transparent-text-box {
      width: 50px;
      background: transparent;
      color: white;
      font-weight: bold;
      border: none;
      font-size: 18px;
    }
  </style>
</head>

<body>
    <div class="row">
        <div class="col">
            <div class="movie-container">
                <form action="{{ url('/insertBookData') }}" method="POST">
                    @csrf
                    <center>
                        <h2 style="margin-top:80px;">Ticket Booking</h2>
                    </center>
                    <label> Select a movie:</label>
                    <input type="hidden" name="txtMovie">
                    <select id="movie" name="selMoviename" onchange="setMovieName()">
                        <option value="0">Select movie</option>
                        @foreach($movies as $movie)
                        <option value="220">{{$movie->title}}</option>
                        @endforeach
                    </select>
            </div>

            <ul class="showcase">
                <li>
                    <div class="seat"></div>
                    <small>Available</small>
                </li>
                <li>
                    <div class="seat" style="background-color: green;"></div>
                    <small>Selected</small>
                </li>
                <li>
                    <div class="seat sold"></div>
                    <small>Sold</small>
                </li>
            </ul>
            <div class="container">
                <div class="screen"></div>

                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>

                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
            </div>

            <h3 class="text">
                You have selected &nbsp; <input type="text" readonly class="transparent-text-box" value="0" id="count" name="totalSeat"><br/>
                seat for a price of &nbsp; RS.<input type="text" readonly class="transparent-text-box" value="0" id="total" name="totalAmt">
            </h3>

            <button class="btn btn-dangour" type="submit" id="book-movie-btn"
                style="width:350px; height: 30px;">Book</button>
            </form>
            
       

        </div>

        <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="https://wallpapercave.com/wp/AumErL9.jpg" style="width:100%;height:85%;">
            <img class="mySlides"
                src="https://c4.wallpaperflare.com/wallpaper/779/697/77/action-adventure-drama-film-wallpaper-preview.jpg"
                style="width:100%;height:85%;">
            <img class="mySlides" src="https://i.ytimg.com/vi/wgWh7qyEB0g/maxresdefault.jpg"
                style="width:100%;height:85%;">
        </div>


        <script src="js/script.js"></script>
        <script>
          function setMovieName() {
            var movie_name = $("[name=selMoviename] option:selected")?.html() || '';
            $("[name=txtMovie]").val(movie_name);
          }
          setMovieName();
        </script>
    </div>
</body>

</html>