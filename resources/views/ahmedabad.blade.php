
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

<style>
    body {
      width: 100vw;
      height: 100vh;
      background: rgb(34, 193, 195);
      background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(253, 187, 45, 1) 100%);
    }
    .card1{
      margin-right: 50%;
    }

    .flip-card {
      background-color: transparent;
      width: 400px;
      height: 300px;
      margin-left: 35%;
      margin-top: 10%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      border: 4px solid #f1f1f1;
      perspective: 1000px;
      /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }


    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    /* Position the front and back side */
    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      /* Safari */
      backface-visibility: hidden;

    }

    /* Style the front side (fallback if image is missing) */
    .flip-card-front {
      background-color: #bbb;
      color: black;

    }

    /* Style the back side */
    .flip-card-back {
      background-color: black;
      color: white;
      transform: rotateY(180deg);
    }

    .column {
      float: left;
      width: 25%;
      padding: 0 10px;
    }

    .row {
      margin: 0 -5px;
    }
  </style>
</style>
</head>
<body>
    <center><h2 style="background-color: #7DF9FF;">Select theater for Movie Booking</h2></center>

  <div class="row">
  <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img src="https://www.agencyreporter.com/wp-content/uploads/2019/02/Carnival_Cinemas_Little_Monk_Digital.jpg" alt="Avatar" style="width:400px; height:300px; margin-right: 10px;">
            </div>
            <div class="flip-card-back">
            <h1>Carnival</h1>
            <p>Carnival Cinemas is a multiplex chain in India in 120 cities at 162 locations with over 470 operational screens. Carnival Cinemas caters to over 5 crore patrons annually and has a total seating capacity of over 1,50,000</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img src="https://static.toiimg.com/thumb/msid-67252529,width-1070,height-580,imgsize-97961,resizemode-75,overlay-toi_sw,pt-32,y_pad-40/photo.jpg" alt="Avatar"  style="width:400px;height:300px;">
            </div>
            <div class="flip-card-back">
            <h1>PVR</h1>
            <p>PVR Cinemas is a film entertainment company in India. The company started as a joint venture agreement between Priya Exhibitors Private Limited and Village Roadshow Limited in 1995 with 60:40 ratio. It began its commercial operations in June</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>  
          </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img src="https://s3.envato.com/files/308700966/LAD_1252.JPG" alt="Avatar"  style="width:400px;height:300px;">
            </div>
            <div class="flip-card-back">
            <h1>Acropolis</h1>
            <p>The Odeon of Herodes Atticus (also called Herodeion or Herodion) is a stone Roman theater structure located on the southwest slope of the Acropolis of Athens, Greece. The building was completed in 161 AD and then renovated in 1950.</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>
            </div>
        </div>
    </div>
    </div>

    
</div>
</body>
</html>

