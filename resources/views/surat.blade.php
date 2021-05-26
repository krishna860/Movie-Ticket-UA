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
  <center>
    <h2 style="background-color: #7DF9FF;">Select theater for Movie Booking</h2>
  </center>

  <div class="row">
    <div class="column">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img
              src="https://content.jdmagicbox.com/comp/surat/e3/0261px261.x261.111228154939.c1e3/catalogue/cinepolis-cinemas-imperial-square-mall--pal-bhatha-surat-cinema-halls-zqxwyf-250.jpg"
              alt="Avatar" style="width:400px; height:300px; margin-right: 10px;">
          </div>
          <div class="flip-card-back">
            <h1>Cinepolis</h1>
            <p>Cinépolis is a Mexican movie theater chain. Its name means City of Cinema and its slogan is La Capital
              del Cine. Cinépolis is the biggest cineplex chain in Mexico with 427 theaters in 97 cities</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img
              src="https://content.jdmagicbox.com/comp/surat/x3/0261px261.x261.110823114939.x8x3/catalogue/pvr-cinemas-rahul-raj-mall--dumas-road-surat-cinema-halls-14dbt22.jpg"
              alt="Avatar" style="width:400px;height:300px;">
          </div>
          <div class="flip-card-back">
            <h1>PVR</h1>
            <p>PVR Cinemas is a film entertainment company in India. The company started as a joint venture agreement
              between Priya Exhibitors Private Limited and Village Roadshow Limited in 1995 with 60:40 ratio. It began
              its commercial operations in June</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://i.pinimg.com/originals/e9/75/8a/e9758abe78520d2d36284ae7ca16b6bf.jpg" alt="Avatar"
              style="width:400px;height:300px;">
          </div>
          
          <div class="flip-card-back">
            <h1>Rajhans</h1>
            <p>Rajhans Cinemas: Kamrej is a popular theatre located at Signet Mall, Kamrej Bardoli Road, Near Shantivan
              Society, Kamrej, North, Surat. Rajhans Cinemas: Kamrej has 1 screens. Movies now showing at Rajhans
              Cinemas: Kamrej are NON</p>
            <a class="btn btn-primary mt-5" href="/booking">Book the Seat</a>
          </div>
        </div>
      </div>
    </div>


  </div>
</body>

</html>