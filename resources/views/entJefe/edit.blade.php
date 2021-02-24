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
      <h3>REGISTRO DE RESULTADO ENTREVISTA JEFE INMEDIATO</h3>
</div>
</center>
        </body>
<form action="{{ url('/entJefe/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')


<h3>DATOS GENERALES</h3>

<fieldset class="form-group">
  <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
      <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <div class="row">




<div class="col-3"><strong><span>Nombres</strong></span><p class="form-control">{{ old('nombre', $filtro->nombre)}}</p></div>&nbsp;
<div class="col"><strong><span>Cedula</strong></span><p class="form-control">{{ old('cedula', $filtro->cedula)}}</p></div>&nbsp;
<div class="col"><strong><span>Telefono</strong></span><p class="form-control">{{ old('telefono', $filtro->telefono)}}</p></div>&nbsp;
<div class="col-3"><strong><span>Correo</strong></span><p class="form-control">{{ old('correo', $filtro->correo)}}</p></div>&nbsp;
<div class="col-3"><strong><span>Perfil</strong></span><p class="form-control">{{ old('perfil', $filtro->perfil)}}</p></div>&nbsp;
<div class="col-3"><strong><span>Campaña</strong></span><p class="form-control">{{ old('campaña', $filtro->campaña)}}</p></div>&nbsp;
<div class="col-3"><strong><span>Fuente</strong></span><p class="form-control">{{ old('fuente', $filtro->fuente)}}</p></div>&nbsp;
<div class="col"><strong><span>Fecha de registro</strong></span><p class="form-control">{{ old('fregistro', $filtro->fregistro)}}</p></div>&nbsp;

</div>
</div>
</div>
</div>
</fieldset>

<div>  <input type="hidden" id="fechaJefe"  name="fechaJefe" value="{{ $date }}" ></div>

<fieldset class="form-group">
  <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
      <div class="card-group" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <div class="row">

 <p class="col-3">

  <input list="resultadoJefe" type="text" name="resultadoJefe" class="form-control" placeholder="Registre aqui el resultado" >

  <datalist name="resultadoJefe" id="resultadoJefe">
    <option value="">Resultado</option>
    @foreach($aprobaciones as $aprobacions)<option value="{{ $aprobacions->aprobacion}}">
        {{ $aprobacions->aprobacion }}</option>
      @endforeach
  </datalist>
  </p>


  <strong><span>Observaciones Jefe inmediato</strong></span>
  <textarea  class="col-3" name="obsJefe" id="obsJefe" cols="165" rows="3"></textarea>

  <a href="{{route('resumen.index')}}" class="btn btn-primary  role="button" aria-pressed="true">ver hoja completa</a></p> 

  
</div>

</div> 
<p><input class="btn btn-lg btn-primary" type="submit" value="REGISTRAR">

  <a href="{{route('home')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a></p> 
   </div>  
  </fieldset> 






    </form>







      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')



      <script>
      Swal.fire(
        'RESULTADO ENTREVISTA RRHH',
        'Actualiza los datos de los postulados',
        'success'
      )
      </script>
      @stop

      @endsection
