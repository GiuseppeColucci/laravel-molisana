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
    <!-- è l'include che include i file -->
@foreach($array as $key=>$val)
<!-- <a href="{{route('product', $contatore)}}"> -->
<a href="/product/{{$contatore}}">
<!-- serve per avere un indice "automatizato in base al contatore" -->
<h1>{{$val['titolo']}}</h1>
</a>
@php
$contatore++
@endphp
@endforeach
@include('header')
</body>
</html>