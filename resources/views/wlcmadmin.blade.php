<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>

<style>
	.body {
		 background-image: url("m2.jpg");
		margin: 0;
		font-family: Open-sans, sans-serif;
	}

  	 

	.table {
		border-collapse: collapse;
		background-color: #43a6c79a;
	}

	.padded {
		padding: 100px 0;
	}

	.wrapper-grey {
		background: #F4F4F4;
	}

 


	.card {
		box-shadow: 10px 10px 5px grey;
		height: 250px;
        width: 450px;
		text-shadow: 0 1px 3px rgba(0, 0, 0, 0.6);
		background-size: cover !important;
		color: white;
		position: relative;
		border-radius: 5px;
		margin-bottom: 20px;

	}

	.firstcard {
        margin-left:30%;
		background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgba(232, 243, 73, 0.596))
	}

	.secoundcard {
        margin-left:30%;
		background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(77, 20, 116))
	}

	.theredcard {
        margin-left:30%;
		background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgba(15, 104, 12, 0.753))
	}

 

	.card-link:hover {
		opacity: 0.1;
	}

  

	#tblgridInfoData {

		background-image: linear-gradient(to right, rgba(255, 0, 0, 0.644), rgba(232, 243, 73, 0.795));
		/*border-top: 1px solid #000000;
		border-bottom: 1px solid #000000;
		border-right: 1px solid #000000;
		border-left: 1px solid #000000;
		border-collapse: collapse; */

	}


	#bindDatatable {
		border-collapse: collapse;
		background-color: rgb(163, 23, 23);
	}
    .car-1{
        margin-left:40%; 
    }

    .car-2{
        margin-left:40%; 
    }

    .car-3{
        margin-left:40%; 
    }

	/* .container{
  		background-image: url("m2.jpg");
} */
#grad {
  /* background-image: linear-gradient(to right, red , yellow); */
  background-image: url("m2.jpg");
}

</style>

<body>
       

     
	<div id="grad" class="container" >
		<h2 class="text-center"> </h2>
		<div class="col-xs-12 col-sm-4">
			<div class="card firstcard"
				style="background-color: rgba(253, 0, 0, 0.589); background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)),">				 
               <a class="car-1" href="{{ route('movie.index') }}">Movie</a><br>
			</div>
	 
		<div class="col-xs-12 col-sm-4">
			<div class="card secoundcard"
				style="background-color: rgba(0, 472, 255, 0.589); background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)),">
                <a class="car-2" href="{{ route('theater.index') }}">Theater</a><br>


			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="card theredcard"
				style="background-color: rgba(94, 255, 0, 0.589); background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)),">
                <a class="car-3" href="{{ route('cast.index') }}">Cast</a><br>
			</div>
		</div>
	 
	</div>
</div>

</body>
</html>