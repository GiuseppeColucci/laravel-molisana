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
  <div class="container-box">
   <h2>lunghe</h2>
    <div class="cards">
      @foreach ($array as $key =>$val)
      <div class="box-cards">
        @if ($val['tipo'] === 'lunga')
          <a href="/product/{{$key}}">
          <img src="{{$val['src']}}" alt="">
        </a>
        @endif
      </div>
        @endforeach
    </div>
  </div>
  <div class="container-box">
   <h2>le corte</h2>
    <div class="cards">
      @foreach ($array as $key =>$val)
      <div class="box-cards">
        @if ($val['tipo'] === 'corta')
          <a href="/product/{{$key}}">
          <img src="{{$val['src']}}" alt="">
        </a>
        @endif
      </div>
        @endforeach
    </div>
  </div>
  <div class="container-box">
   <h2>le cortissime</h2>
    <div class="cards">
      @foreach ($array as $key =>$val)
      <div class="box-cards">
        @if ($val['tipo'] === 'cortissima')
          <a href="/product/{{$key}}">
          <img src="{{$val['src']}}" alt="">
        </a>
        @endif
      </div>
        @endforeach
    </div>
  </div>


 
 
  </div> 
    <footer>
    @include('footer')

  </footer>
</body>
</html>