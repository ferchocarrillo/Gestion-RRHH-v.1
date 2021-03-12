@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<a href="{{route('filtro.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png" style="position:absolute; top:50px; left:800px; visibility:visible z-index:1" align= "auto" height="80" width="200">
<br>
<br>

<center>


<div class="card-header">
      <h3>Cambio de Estado de Personal Activo a Inactivo</h3>
</div>
</center>
        </body>
        <form action="{{ url('/retiros/'.$nuevos->id_filtro)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('PATCH')



<div class="card">

<input type="hidden" name="" id="" value="{{ old('id_filtro', $nuevos->id_filtro)}}">

    <div class="row">
   <div class="col-3">
       <label for="fechaCont">Activo<br> Desde</label>
        <input type="text" class="form-control-lg-new9"
        id="fechaCont"
        placeholder=""
        name="fechaCont"
        readonly
        value="{{ old('fechaCont', $filtro->fechaCont)}}">
    </div>
    <div class="col-3">
        <label for="cedula">Cedula</label>
         <input type="number" class="form-control-lg-new9"
         id="cedula"
         placeholder="cedula"
         name="cedula"
         value="{{ old('cedula', $filtro->cedula)}}"
         readonly>

        </div>
        <div class="col-3">
            <label for="cedula">Nombre</label>
             <input type="text" class="form-control-lg-new9"
             id="nombre"
             placeholder="Nombres"
             name="nombre"
             value="{{ old('nombres', $nuevos->nombres)}}"
             readonly>
            </div>
    <div class="col-3">
        <label for="telefono">Celular</label>
           <input type="number"
           class="form-control-lg-new9"
           id=""
           placeholder="telefono"
           name=""
           value="{{ old('tCelular' , $nuevos->tCelular)}}"
           readonly>
        </div></div>
<br><br>
        <div class="row">

    <div class="col-3">
        <label for="correo">Correo</label>
           <input type="mail"
           class="form-control-lg-new9"
           id="correo"
           placeholder="correo"
           name="correo"
           value="{{ old('correo' , $filtro->correo)}}"
           readonly>
        </div>
    <div class="col-3">
        <label for="perfil">Perfil</label>
           <input type="text"
           class="form-control-lg-new9"
           id="perfil"
           placeholder="perfil"
           name="perfil"
           value="{{ old('cargos' , $nuevos->cargos)}}"
           readonly>
        </div>
    <div class="col-3">
        <label for="campaña">Campaña</label>
           <input type="text"
           class="form-control-lg-new9"
           id="campaña"
           placeholder="campaña"
           name="campaña"
           value="{{ old('campaña' , $filtro->campaña)}}"
           readonly>

        </div>
    <div class="col-3">
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
<BR><BR></BR></BR>
<div class= "card_retiros">
<div class= "row">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p>
    <label for="causalesR">Seleccione<br> una<br> Causal</label><br>
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
           <label for="iDesde">Inactivo <br>desde<br><br></label><br>
           <input type="date"
           class="form-control-lg-new9"
           id="iDesde"
           placeholder="iDesde"
           name="iDesde"
           value="" required>
        </p>

        &nbsp;&nbsp;


        <p>
            <label for="apretencion">¿Aplica para retención?<br><br><br></label><br>
        <input type="checkbox" id="apretencion" name="apretencion"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" >
    </p>
    &nbsp;&nbsp;
        <p>
            <label for="retejefe">¿Se realizo rentención<br> por parte del<br>jefe inmediato?</label><br>
        <input type="checkbox" id="retejefe" name="retejefe"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" >
    </p>
    &nbsp;&nbsp;
    <p>
        <label for="reterrhh">¿Se realizo rentención<br> por parte <br>RRHH?</label><br>
    <input type="checkbox" id="reterrhh" name="reterrhh"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="SI" data-off="NO" >
</p>
<p>
    <label for="obsRetiro">Observaciones</label><br><br>

    <textarea name="obsRetiro" id="obsRetiro" cols="40" rows="3" class="form-control-lg-new15" required></textarea>
</p>

<p>
    <input type="hidden" id="estado" name="estado" value="inactivo">
</p>
    </div>
    </div>





            </div>

<p>

    <input class="btn btn-lg btn-primary" type="submit" value="EDITAR">

    <a href="{{route('filtro.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a>
</p>
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
