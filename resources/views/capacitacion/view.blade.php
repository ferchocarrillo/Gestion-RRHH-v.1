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
        <div class="p-3 mb-2 bg-info text-white" id ="nombres" name="nombres">
          <h3> {{ $entrevista1s->nombres}}</h3>
        </div>
    </p></center>
    </div>
    </body>


          <center><h3>Datos Generales</h3></center>
          <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

          <div class="container">
            <div class="row">

              <div id="cedula" name="cedula" class="col"><p class="h6">Cedula:</p>  {{ $entrevista1s->cedula}}</div>
              <div class="col"><p class="h6">Teléfono:</p>  {{ $entrevista1s->telefono}}</div>
              <div class="col"><p class="h6">Correo:</p> {{ $entrevista1s->correo}}</div>
              <div class="col"><p class="h6">Cargo:</p>  {{ $entrevista1s->cargo}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">



        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->

        <label style="width:350px" for="estado">Resultado de la Capacitacion</label>
        &nbsp;&nbsp;

    <select  style="width:250px" name="estado" id="estado">Resultado de la Capacitacion

    <option value="0">Seleccione una opción</option>
    <option value="Aprobado">Aprobado</option>
    <option value="No aprobado">No aprobado</option>
    </select>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
    <label for="observaciones">Observaciones</label>
    <textarea class="form-control" name="observaciones" id="" cols="3" rows="3"></textarea>


    <div class="col-2"><input type="hidden" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>
    <div class="col-2"><input type="hidden" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>


      </div>
</div>




<input class="btn btn-primary btn-lg active" type="submit" value="Registrar">

<a href="{{route('home')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>
</form>

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
