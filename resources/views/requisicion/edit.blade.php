@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">

</center>


<center>


<div class="card-header">
      <h3>Editor de Gestion Requisicion</h3>
</div>
</center>
        </body>
<form action="{{ url('/requisicion/'.$requisicion->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')



<div class="container">
    <div class="card">

    <div class="form-row">
   <div class="col-3">
       <label for="cargo">Cargo</label>
        <input type="text" class="form-control-lg-new18"
        id="cargo"
        placeholder="Cargo"
        name="cargo"
        value="{{ old('cargo', $requisicion->cargo)}}">
    </div>
    <div class="col-3">
        <label for="cantidad">Cantidad</label>
         <input type="number" class="form-control-lg-new18"
         id="cantidad"
         placeholder="cantidad"
         name="cantidad"
         value="{{ old('cantidad', $requisicion->cantidad)}}">
        </div>
         <div class="col-3">
            <label for="sede">Sede</label>
               <input type="text"
               class="form-control-lg-new18"
               id="sede"
               placeholder="sede"
               name="sede"
               value="{{ old('sede' , $requisicion->sede)}}">
            </div>

         <div class="col-3">
              <label for="dependencias">Dependencia</label>
              <input type="text" class="form-control-lg-new18"
              id="dependencias"
              placeholder="Dependencias"
              name="dependencias"
              value="{{ old('dependencias', $requisicion->dependencias)}}">
            </div>
         <div class="col-3">
              <label for="area">Area</label>
              <input type="text" class="form-control-lg-new18"
              id="area"
              placeholder="Area"
              name="area"
              value="{{ old('area', $requisicion->area)}}">
            </div>

        <div class="col-3">
              <label for="motivos">Motivos</label>
              <input type="text" class="form-control-lg-new18"
              id="motivos"
              placeholder="Motivos"
              name="motivos"
              value="{{ old('motivos', $requisicion->motivos)}}">
            </div>

        <div class="col-3">
              <label for="reemplaza">Reemplaza</label>
              <input type="text" class="form-control-lg-new18"
              id="reemplaza"
              placeholder="sin datos"
              name="reemplaza"
              value="{{ old('reemplaza', $requisicion->reemplaza)}}">
           </div>

        <div class="col-3">
              <label for="cual">Cual</label>
              <input type="text" class="form-control-lg-new18"
              id="cual"
              placeholder="Cual"
              name="cual"
              value="{{ old('cual', $requisicion->cual)}}">
           </div>

        <div class="col-3">
              <label for="tiempo">Tiempo</label>
              <input type="text" class="form-control-lg-new18"
              id="tiempo"
              placeholder="numero de grabacion"
              name="tiempo"
              value="{{ old('tiempo', $requisicion->tiempo)}}">
           </div>

        <div class="col-3">
              <label for="dias">Dias</label>
              <input type="text" class="form-control-lg-new18"
              id="dias"
              placeholder="dias"
              name="dias"
              value="{{ old('dias', $requisicion->dias)}}">
           </div>

           <div class="col-3">
            <label for="jornada">Jornada</label>
            <input type="text" class="form-control-lg-new18"
            id="jornada"
            placeholder="jornada"
            name="jornada"
            value="{{ old('jornada', $requisicion->jornada)}}">
         </div>

         <div class="col-3">
            <label for="finicio">Fecha de inicio</label>
            <input type="text" class="form-control-lg-new18"
            id="finicio"
            placeholder="fecha inicio"
            name="finicio"
            value="{{ old('finicio', $requisicion->finicio)}}">
         </div>
         <div class="col-3">
            <label for="solicita">Solicita</label>
            <input type="text" class="form-control-lg-new18"
            id="solicita"
            placeholder="solicita"
            name="solicita"
            value="{{ old('solicita', $requisicion->solicita)}}">
         </div>
        </div>
<div class="card" >
    <div class="card-header" >
    <center> <h4 for="revisado">Exclusivo Area RR.HH</h4></center>
    </div>
        <select name=revisado onchange="cambia_estadorevisado()" class="form-control-lg-new8">

        <option value="0" selected>Seleccione...
        <option value="Aprobado">Aprobado
        <option value="Rechazado">Rechazado
        <option value="Pendiente">Pendiente

        </select>
       </div>
    <div>
        <div>
        <textarea class="form-control"  id ="observaciones" name="observaciones" rows="3" placeholder="Observaciones Area RR.HH"></textarea>
        </div>
    </div>
</div>

<div class="card-header">
<center><h4>Perfil Oculto</h4></center>
</div>
<div class="card-body">
    <div class="form-row">
 <div class="col-6">
        <div class="input-group-prepend">
        <span class="input-group-text" >Edad</span>
        <input type="text" class="form-control" name="edad" id="edad">
        </div>
  </div>
<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Profesion</span>
    <input type="text" class="form-control" name="profesion" id="profesion">
    </div>
</div>
<br>

<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Orientacion Sexual</span>
    <input type="text" class="form-control" name="orientacion" id="orientacion">
    </div>
</div>

<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Raza</span>
    <input type="text" class="form-control" name="raza" id="raza">
    </div>
</div>
<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Culto o religion</span>
    <input type="text" class="form-control" name="culto" id="culto">
    </div>
</div>


<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Empresa Imposibilitada</span>
    <input type="text" class="form-control" name="imposibilita" id="imposibilita">
    </div>
</div>
<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Sexo</span>
    <input type="text" class="form-control" name="sexo" id="sexo">
    </div>
</div>
<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Discapacidad Fisica</span>
    <input type="text" class="form-control" name="disfisica" id="disfisica">
    </div>
</div>
<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Discapacidad Mental</span>
    <input type="text" class="form-control" name="dismental" id="dismental">
    </div>
</div>


<br>
<div class="col-6">
    <div class="input-group-prepend">
    <span class="input-group-text" >Nacionalidad o Region del Pais</span>
    <input type="text" class="form-control" name="nacionalidad" id="nacionalidad">
    </div>
</div>
<br><br>
<input class="btn btn-lg btn-primary btn-lg" type="submit" value="EDITAR">
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{route('requisicion.index')}}" class="btn btn-danger btn-lg" role="button" aria-pressed="true">VOLVER</a>


</div>
</div>

</div>
</div>
<br>



    </form>







      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')



      <script>
      Swal.fire(
        'REQUISICION',
        'Aqui podras Aprobar las solicitudes',
        'success'
      )
      </script>
      @stop

      @endsection
