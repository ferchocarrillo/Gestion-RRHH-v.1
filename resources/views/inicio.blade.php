<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,user-scalable=1">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="inicio/styles.css">
<link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
<script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,500;1,200&display=swap" rel="stylesheet">
<body>
<title>Mentius - Recursos Humanos</title>
</head>
<body>
<header class="hero">
        <div class="textos-hero">
            <h1>Bienvenido a Mentius Recursos Humanos</h1>
            <p>Hacemos de la excelencia nuestra mejor hoja de presentacion</p>
    <!--<a href="#contacto">contactame</a>--> <!--boton para hacer escrol-->
        </div>
      <div class="svg-hero">
          <svg viewBox="0 0 1320 280" >
             <path fill-opacity="0.5" d="M0,192 C220,100,440,100,660,192 C880,290,1100,290,1320,192 L1110 500 L0 500" fill=" #fff "/>
             <path fill-opacity="0.5" d="M0,192 C220,100,440,100,660,192 C880,290,1100,290,1320,192 L1320 500 L0 500" fill=" #fff "/>
             <path fill-opacity="0.5" d="M0,192 C220,100,440,100,660,192 C880,290,1100,290,1320,192 L1320 500 L0 500" fill=" #fff "/>
             <path fill-opacity="0.5" d="M0,192 C220,100,440,100,660,192 C880,290,1100,290,1320,192 L1320 500 L0 500" fill=" #fff "/>
          </svg>
      </div>
</header>
























































































































































@extends('plantilla')
@section('contenedor')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('theme\images\AA.png') }}" class="d-block w-100" alt="100px">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('theme\images\BB.png') }}" class="d-block w-100" alt="100px">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('theme\images\CC.png') }}" class="d-block w-100" alt="100px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="theme\images\trabaja2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Trabaja con nosotros</h5>
          <p class="card-text">En esta seccion podras ubicar algunas de las ofertas laborales o un link para poder conocer la totalidad de las ofertas.</p>
          <!-- Force next columns to break to new line -->
          <div class="w-100 d-none d-md-block"></div>
          <center><a href="#" class="btn btn-primary">Conocelas!!</a></center>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="theme\images\trabaja.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Quienes Somos</h5>
          <p class="card-text">Aqui encontraras nuestra filosofia empresarial, la misión y la visión</p>
         <br>
          &nbsp;
          &nbsp;
          <!-- Force next columns to break to new line -->
          <div class="w-100 d-none d-md-block"></div>
          <center><a href="#" class="btn btn-primary">Conocelas!!</a></center>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="theme\images\trabaja3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Premiamos tu Compromiso</h5>
          <p class="card-text">Aqui encontraras a los mejores en cada una de sus labores.</p>
          <br>
          &nbsp;
          &nbsp;
          <!-- Force next columns to break to new line -->
          <div class="w-100 d-none d-md-block"></div>
          <center><a href="#" class="btn btn-primary">Conocelas!!</a></center>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="theme\images\trabaja4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Estamos atentos a tus comentarios</h5>
          <p class="card-text">Dinos que propones para mejorar y lo haremos en conjunto.</p>
          <br>
          <!-- Force next columns to break to new line -->
          <div class="w-100 d-none d-md-block"></div>
          <center><a href="#" class="btn btn-primary">Sugerencias</a></center>
        </div>
      </div>
    </div>
  </div>

@endsection
