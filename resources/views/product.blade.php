<?php
$array=config('pasta');
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
<h3>{{$array[$id]['titolo']}}</h3>
<img src="{{$array[$id]['src-h']}}" alt="">
<img src="{{$array[$id]['src-p']}}" alt="">
<p>{{$array[$id]['descrizione']}}</p>
<div class="footer">
    @include('header')
  </div> 
</body>
</html>
