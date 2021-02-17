@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="80" width="200">


<div class="page-header">
    <br>
      <h3>Registro de Entrevistas</h3>
</div>
</center>
<br>

<form action="{{ url('/capacitacion/')}}"
method="POST"
enctype="multipart/form-data"
class="form-horizontal"
style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
{{csrf_field()}}

<div class="col-sm-12">
    <div  class="col-2"><label for="id_filtro"></label><input type="hidden" class="form-control" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id', $filtro->id)}}"></div>
    <center><p>
        <div class="card-header" id ="nombres" name="nombres">
          <h3> {{ $entrevista1s->nombres}}</h3>
        </div>
    </p></center>
    </div>
    </body>
<div class="row">



    <div class="col-sm-12">
      <div class="card">
      <div class="card-body">

          <center><h3>Datos Generales</h3></center>
          <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

          <div class="container">
            <div class="row">

              <div id="cedula" name="cedula" class="col"><p class="h6">Cedula:</p>  {{ $entrevista1s->cedula}}</div>
              <div class="col"><p class="h6">Teléfono:</p>  {{ $entrevista1s->telefono}}</div>
              <div class="col"><p class="h6">Correo:</p> {{ $entrevista1s->correo}}</div>
              <div class="col"><p class="h6">Cargo:</p>  {{ $entrevista1s->cargo}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">



        <div class="col-sm-12">
          <div class="card">
          <div class="card-body">
   <fieldset>

<p>
        <input list="estado" type="text" name="estado" class="form-control" style="width:500px" placeholder="Resultado de la capacitacion" required>
    
        <datalist name="estado" id="estado" >
          <option value="">Resultado de la capacitacion</option>
      
          @foreach($aprobacions as $estado)<option value="{{ $estado->aprobacion}}">
            {{ $estado->aprobacion }}</option>
          @endforeach
        </datalist>
      </p>

    </fieldset>

    <i>Observaciones</i><textarea type="text" class="form-control" id="observaciones" rows="3"  col="20" name="observaciones" > </textarea>
  </div>  
</div>
</div>



</div>
<div class="card-body">

  <span style=”text-align: justify;>* Este modulo es exculusivo del area de formación y debera ser utilizado con el fin de dar la calificacion final de sus procesos. sin el APROBADO, el postulado no quedara ACTIVO en la base de datos</span>
  <br> 
  <span style=”text-align: justify;>* si por alguna razoon la informacion se consigno erradamente se debera comunicar con el area de desarrollo para modificar la nota final</span>
</div>

</div>

</div>
</div>
</div>


</div>

<input class="btn btn-primary btn-lg active" type="submit" value="Registrar">

<a href="{{route('home')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>
</form>

</div>
</div>
</div>
<div class="col-2"><input type="hidden" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>






      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')
      <script>
      Swal.fire(
        'ENTREVISTA',
        'Registre el resultado de la entrevista con la Gerencia',
        'success'
      )
      </script>




 @stop


      @endsection
