<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="header">
    @include('header')
</div>
<div class="product">
    <h3>{{$array[$id]['titolo']}}</h3>
    <img src="{{$array[$id]['src-h']}}" alt="">
    <img src="{{$array[$id]['src-p']}}" alt="">
    <div class="box-text">
        <p>{{$array[$id]['descrizione']}}</p>

    </div>

</div>
<div class="footer">
    @include('footer')
  </div> 
</body>
</html>
