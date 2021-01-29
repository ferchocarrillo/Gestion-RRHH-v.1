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
