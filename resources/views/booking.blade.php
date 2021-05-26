<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Movie Seat Booking</title>


  </head>
  <body>

  <div class="row">
    <div class="col">
    <div class="movie-container">
      <center><h2 style="margin-top:80px;">Ticket Booking</h2></center>
      <label> Select a movie:</label>
      <select id="movie">
        <option value="220">\The Hobbit (RS.220)</option>
        <option value="320">Baghban (RS.320)</option>
        <option value="250">helipoter(RS.250)</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
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
      You have selected <span id="count">0</span> seat for a price of RS.<span id="total">0</span>
    </h3>
    </div>
    <div class="w3-content w3-section" style="max-width:500px">
      <img class="mySlides" src="https://wallpapercave.com/wp/AumErL9.jpg" style="width:100%;height:85%;">
      <img class="mySlides" src="https://c4.wallpaperflare.com/wallpaper/779/697/77/action-adventure-drama-film-wallpaper-preview.jpg" style="width:100%;height:85%;">
      <img class="mySlides" src="https://i.ytimg.com/vi/wgWh7qyEB0g/maxresdefault.jpg" style="width:100%;height:85%;">
    </div>


    <script src="js/script.js"></script>

</div>
  </body>
</html>
