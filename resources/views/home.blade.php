<?php

$array=config('pasta');

$contatore=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('header')
    
@foreach($array as $key=>$val)
<a href="/product/{{$contatore}}">
<h1>{{$val['titolo']}}</h1>
<img src="{{$val['src']}}" alt="">
</a>
@php
$contatore++
@endphp
@endforeach
@include('header')
</body>
</html>