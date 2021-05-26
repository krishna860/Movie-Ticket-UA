
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
</head>
<body>
    <center><h2 style="background-color: #7DF9FF;">Select theater for Movie Booking</h2></center>

  <div class="row">
  <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img src="https://img1.nbstatic.in/la1-m/577df5c8dc0e82000eb034be.jpg" alt="Avatar"  style="width:400px;height:300px;">
            </div>
            <div class="flip-card-back">
            <h1>INOX</h1>
            <p>INOX Leisure Limited is amongst India’s largest multiplex chains with 153 multiplexes and 648 screens in 69 cities. INOX is known for redefining movie experiences in India, each INOX property is unique with its own distinct architecture and aesthetics.

</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>
            </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img src="https://static-news.moneycontrol.com/static-mcnews/2017/10/PVR-DC-Audi-770x433.jpg" alt="Avatar" style="width:400px;height:300px;">
            </div>
            <div class="flip-card-back">
            <h1>Cinemax</h1>
            <p>Cinemax is an American premium cable and satellite television network owned by the Home Box Office, Inc. subsidiary of WarnerMedia Studios & Networks Group. Developed as a companion "maxi-pay"</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>  
          </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img src="https://www.fercoseating.com/assets/resized/_900x506_6.jpg" alt="Avatar"  style="width:400px;height:300px;">
            </div>
            <div class="flip-card-back">
            <h1>Sterling</h1>
            <p>Sterling Cineplex is a multiplex cinema hall in Mumbai. Opened in 2007, Sterling has three screens and was the first cinema in India to be THX certified. It is considered a landmark in South Mumbai.

</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>
            </div>
        </div>
    </div>
    </div>

    
</div>
</body>
</html>

