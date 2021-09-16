@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>

    .new15{
        width: 900px;
    margin: 35px;
    border-radius: 0.75rem;
    outline-offset: 3px;
    background-color: rgba(255, 255, 255, 0.972);
    border-color: #497579;

    }

    </style>
<a href="{{route('filtro.index')}}"><img src="https://images.cooltext.com/5506399.png" style="margin-left: 8rem; heigth: 50px; width:40px;" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <img src="\theme\images\isotipo-slogan.png" float="left" height="100" width="300">

<div class="card-header">
      <h3>Cambio de Estado de Personal Activo a Inactivo</h3>
</div>
</center>
        </body>
        <form action="{{ url('/retiros/'.$filtros->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('PATCH')

{{--  <input type="hidden" name="tiempoTotal" value="{{ $tiempoTotal}}">  --}}

<div class="card">



    <div class="row">
   <div class="col-3">
       <label for="ingreso">Activo Desde</label>
        <input type="text" class="form-control-lg-new9"
        id="ingreso"
        placeholder=""
        name="ingreso"
        readonly
        value="{{ old('ingreso', $filtros->ingreso)}}">
    </div>
    <div class="col-3">
        <label for="cedula">Cedula</label>
         <input type="number" class="form-control-lg-new9"
         id="cedula"
         placeholder="cedula"
         name="cedula"
         value="{{ old('cedula', $filtros->cedula)}}"
         readonly>

        </div>
        <div class="col-3">
            <label for="cedula">Nombre</label>
             <input type="text" class="form-control-lg-new9"
             id="nombre"
             placeholder="Nombres"
             name="nombre"
             value="{{ old('nombre', $filtros->nombre)}}"
             readonly>
            </div>
    <div class="col-3">
        <label for="telefono">Celular</label>
           <input type="number"
           class="form-control-lg-new9"
           id="telefono"
           placeholder="telefono"
           name="telefono"
           value="{{ old('telefono' , $filtros->telefono)}}"
           readonly>
        </div></div>
<br><br>
        <div class="row">

    <div class="col-3">
        <label for="correo">Correo</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="mail"
           class="form-control-lg-new9"
           id="correo"
           placeholder="correo"
           name="correo"
           value="{{ old('correo' , $filtros->correo)}}"
           readonly>
        </div>
    <div class="col-3">
        <label for="cargo">Cargo</label>
           <input type="text"
           class="form-control-lg-new9"
           id="cargo"
           placeholder="cargo"
           name="cargo"
           value="{{ old('cargo' , $filtros->cargo)}}"
           readonly>
        </div>
    <div class="col-3">
        <label for="campaña">Campaña</label>
           <input type="text"
           class="form-control-lg-new9"
           id="campaña"
           placeholder="campaña"
           name="campaña"
           value="{{ old('campaña' , $filtros->campaña)}}"
           readonly>

        </div>
    <div class="col-3">
        <label for="fuente">Fuente</label>
           <input type="text"
           class="form-control-lg-new9"
           id="fuente"
           placeholder="fuente"
           name="fuente"
           value="{{ old('fuente' , $filtros->fuente)}}"
           readonly>


        </div>
    </div>
<br>
<div class= "card_retiros">
<div class= "row">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="row">
    <div class="col-4">
   <label for="causalesR">Seleccione Causal</label><br>
    <input list="causalesR" type="text" name="causalesR"   class="form-control-lg-new9" placeholder="Seleccione una casusal" required>

    <datalist name="causalesR" id="causalesR" >
      <option value="">Causales Retiro</option>
      @foreach($causas as $causa)<option value="{{ $causa->causalesR}}">
          {{ $causa->causalesR }}</option>
        @endforeach
    </datalist>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="col-4">
    <label for="iDesde">Inactivo desde</label>
    <input type="date"
    class="form-control-lg-new9"
    id="iDesde"
    placeholder="iDesde"
    name="iDesde"
    value="" required>
</div>
</div>


<div class="row">
    <div class="col-4">
       <label for="apretencion">¿Aplica para retención?</label><br><br><br>
    <input type="checkbox" id="apretencion" name="apretencion"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" >
</div>
<div class="col-4">
    <label for="retejefe">¿Se realizo rentención<br>por parte del jefe inmediato?</label>
        <input type="checkbox" id="retejefe" name="retejefe"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" >
    </div>
    <div class="col-4">
        <label for="reterrhh">¿Se realizo rentención<br> por parte RRHH?</label><br><br>
        <input type="checkbox" id="reterrhh" name="reterrhh"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" >
    </div>


</div>

    <input type="hidden" id="estado" name="estado" value="inactivo">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="row">

    <label for="obsRetiro" style="margin-left:5rem;" >Observaciones</label>

    <textarea name="obsRetiro" id="obsRetiro" cols="40" rows="3" class="new15" required></textarea>
 </div>





    </div>


<div class="row">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary" type="submit" value="EDITAR">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="{{route('filtro.index')}}" class="btn btn-success" role="button" aria-pressed="true">VOLVER</a>
    </div>

    </div>
    </div>
    </form>



    <script>
        $(function() {
          $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
          });
        })
      </script>



      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')



      <script>
      Swal.fire(
        'RETIROS',
        'En esta sección usted podra inactivar de la base de datos a una persona',
        'success'
      )
      </script>
      @stop

      @endsection
