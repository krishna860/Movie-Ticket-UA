<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
{{-- csrf-token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie-edge">

<script src="{{asset('js/app.js') }}" defer></script>
<link rel="dns-prefetch" href="fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="{{asset('css/app.css') }}" rel="stylesheet">

<title>Movie Booking Website</title>

</head>
<body>

    <div id="app">
        <router-view></router-view>
    </div>
 
</body>
</html>