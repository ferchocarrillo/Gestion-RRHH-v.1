@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('filtro.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png" style="position:absolute; top:50px; left:800px; visibility:visible z-index:1" align= "auto" height="80" width="200">
<br>
<br>

<center>


<div class="page-header">
      <h3>Cambio de Estado de personal Activo</h3>
</div>
</center>
        </body>
<form action="{{ url('/filtro/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')

<div class="form-group">

    <div class="form-row">
   <div class="col-2">
       <label for="activoDesde">Activo desde</label>
        <input type="text" class="form-control-lg-new9"
        id="activoDesde"
        placeholder="activoDesde"
        name="activoDesde"
        readonly
        value="{{ old('created_at', $filtro->created_at)}}">
    </div>
    <div class="col-2">
        <label for="cedula">Cedula</label>
         <input type="number" class="form-control-lg-new9"
         id="cedula"
         placeholder="cedula"
         name="cedula"
         value="{{ old('cedula', $filtro->cedula)}}"
         readonly>

        </div>
        <div class="col-2">
            <label for="cedula">Nombre</label>
             <input type="text" class="form-control-lg-new9"
             id="nombre"
             placeholder="Nombres"
             name="nombre"
             value="{{ old('nombres', $filtro->nombres)}}"
             readonly>
            </div>
    <div class="col-2">
        <label for="tcelular">Celular</label>
           <input type="number"
           class="form-control-lg-new9"
           id="tcelular"
           placeholder="telefono"
           name="tcelular"
           value="{{ old('tCelular' , $filtro->tCelular)}}"
           readonly>
        </div>
    <div class="col-2">
        <label for="correo">Correo</label>
           <input type="mail"
           class="form-control-lg-new9"
           id="correo"
           placeholder="correo"
           name="correo"
           value="{{ old('correo' , $filtro->correo)}}"
           readonly>
        </div>
    <div class="col-2">
        <label for="perfil">Perfil</label>
           <input type="text"
           class="form-control-lg-new9"
           id="perfil"
           placeholder="perfil"
           name="perfil"
           value="{{ old('cargos' , $filtro->cargos)}}"
           readonly>
        </div>
    <div class="col-2">
        <label for="campaña">Campaña</label>
           <input type="text"
           class="form-control-lg-new9"
           id="campaña"
           placeholder="campaña"
           name="campaña"
           value="{{ old('campaña' , $filtro->campaña)}}"
           readonly>

        </div>
    <div class="col-2">
        <label for="fuente">Fuente</label>
           <input type="text"
           class="form-control-lg-new9"
           id="fuente"
           placeholder="fuente"
           name="fuente"
           value="{{ old('fuente' , $filtro->fuente)}}"
           readonly>

        </div>

    </div>
<p id="eliminar">* En esta seccion usted podra inactivar de la base de datos a una persona</p>
<div class= "card_retiros">
<div class= "row">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p>
    <label for="iDesde">Seleccione una Causal</label><br>
    <input list="causalesR" type="text" name="causalesR"   class="form-control-lg-new9" placeholder="Seleccione una casusal" required>

    <datalist name="causalesR" id="causalesR" >
      <option value="">Causales Retiro</option>
      @foreach($causas as $causa)<option value="{{ $causa->causalesR}}">
          {{ $causa->causalesR }}</option>
        @endforeach
    </datalist>
    </p>
    &nbsp;&nbsp;&nbsp;
<p>
        <label for="iDesde">Inactivo desde</label><br>
           <input type="date"
           class="form-control-lg-new9"
           id="iDesde"
           placeholder="iDesde"
           name="iDesde"
           value="" required>
        </p>

        &nbsp;&nbsp;&nbsp;

        <p>
            <label for="obsRetiro">Observaciones</label><br>
            <textarea name="obsRetiro" id="obsRetiro" cols="60" rows="3" class="form-control-lg-new15" required></textarea>
            </p>

        </div>
    </div>





            </div>

<p>

    <input class="btn btn-lg btn-primary" type="submit" value="EDITAR">

    <a href="{{route('filtro.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a>
</p>
    </form>







      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')



      <script>
      Swal.fire(
        'REGISTRO',
        'Actualiza los datos de los postulados',
        'success'
      )
      </script>
      @stop

      @endsection
