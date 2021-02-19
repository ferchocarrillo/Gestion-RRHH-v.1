@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('entrevista2.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos familiares" /></a>

<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="80" width="200">
<div class="page-header">
    <br>
      <h3>Datos Iniciales</h3>
</div>
</center>
<br>
<div class="conteiner">

    <center><p>
        <div class="card-header">
           <h3>{{( $filtro->nombres)}}</h3>
        </div>
    </p></center>

    

  
 
    </body>

    <div class="container">
    <form action="{{ url('/entrevista2/')}}"
          method="POST"
          enctype="multipart/form-data"
          class="form-horizontal"
          style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          {{csrf_field()}}



          <fieldset class="form-group">
            <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="row">


<p>
<div class="col-auto"><label for="cedula">Cedula</label><input type="number" class="form-control" style="width: 240px" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>
</p>

<p>
<div class="col-auto"> <label for="nombres">Nombre</label><input type="text" class="form-control" style="width: 240px" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombres)}}"></div>
</p>
<p>
<div class="col-auto"> <label for="telefono">Telefono</label> <input type="number" class="form-control" style="width: 240px" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono' , $filtro->telefono)}}"></div>
</p>
<p>
<div class="col-auto"> <label for="correo">Correo</label> <input type="mail" class="form-control" style="width: 200px" id="correo" placeholder="correo" name="correo" value="{{ old('correo' , $filtro->correo)}}"></div>
</p>
<p>
<div class="col-auto"><label for="id_filtro"></label><input type="hidden" class="form-control" style="width: 240px" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id_filtro', $filtro->id_filtro)}}"></div>
</p>
</div>
</div>
</div>
</fieldset>



<fieldset class="form-group">
    <div class="container">

        <p>
            <input type="checkbox" name="sinfamilia" id="sinfamilia"  value="No registran" ><label for="sinfamilia">&nbsp;&nbsp;&nbsp;&nbsp;Sin Familiares </label>&nbsp;&nbsp;<i>*solo se debera señalar esta opcion en caso de que el postulado no cuente con ningun familiar conocido</i>
        </p>
        
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">
                <div style="width:270px"><p>
                    <input type="text" id ="familiarp1" name="familiarp1" class="form-control" placeholder="Nombre">
                    </p>
                    </div>
<div style="width:200px"><p>
                    <input type="text" id ="parentescop1" name="parentescop1" class="form-control" placeholder="Parentesco">
                    </p>
                    </div>
<div style="width:150px"><p>
                    <input type="text" id ="edadp1" name="edadp1" class="form-control" placeholder="Edad">
                    </p>
                    </div>
<div style="width:220px"><p>
                    <input type="text" id ="ocupacionp1" name="ocupacionp1" class="form-control" placeholder="Ocupacion">
                    </p>
                    </div>
<div style="width:180px"><p>
                    <input type="text" id ="telefonop1" name="telefonop1" class="form-control" placeholder="Telefono">
                    </p>
                    </div>
<div style="width:270px"><p>
                    <input type="text" id ="familiarp2" name="familiarp2" class="form-control" placeholder="Nombre">
                    </p>
                    </div>
<div style="width:200px"><p>
                    <input type="text" id ="parentescop2" name="parentescop2" class="form-control" placeholder="Parentesco">
                    </p>
                    </div>
<div style="width:150px"><p>
                    <input type="text" id ="edadp2" name="edadp2" class="form-control" placeholder="Edad">
                    </p>
                    </div>
<div style="width:220px"><p>
                    <input type="text" id ="ocupacionp2" name="ocupacionp2" class="form-control" placeholder="Ocupacion">
                    </p>
                    </div>
<div style="width:180px"><p> <input type="text" id ="telefonop2" name="telefonop2" class="form-control" placeholder="Telefono">
                    </p>
                    </div>
<div style="width:270px"><p>
                    <input type="text" id ="familiarp3" name="familiarp3" class="form-control" placeholder="Nombre">
                    </p>
                    </div>
<div style="width:200px"><p>
                    <input type="text" id ="parentescop3" name="parentescop3" class="form-control" placeholder="Parentesco">
                    </p>
                    </div>
<div style="width:150px"><p>
                    <input type="text" id ="edadp3" name="edadp3" class="form-control" placeholder="Edad">
                    </p>
                    </div>
<div style="width:220px"><p>
                    <input type="text" id ="ocupacionp3" name="ocupacionp3" class="form-control" placeholder="Ocupacion">
                    </p>
                    </div>
<div style="width:180px"><p>
                    <input type="text" id ="telefonop3" name="telefonop3" class="form-control" placeholder="Telefono">
                    </p>
                    </div>
<div style="width:270px"><p>
                    <input type="text" id ="familiarp4" name="familiarp4" class="form-control" placeholder="Nombre">
                    </p>
                    </div>
<div style="width:200px"><p>
                    <input type="text" id ="parentescop4" name="parentescop4" class="form-control" placeholder="Parentesco">
                    </p>
                    </div>
<div style="width:150px"><p>
                    <input type="text" id ="edadp4" name="edadp4" class="form-control" placeholder="Edad">
                    </p>
                    </div>
<div style="width:220px"><p>
                    <input type="text" id ="ocupacionp4" name="ocupacionp4" class="form-control" placeholder="Ocupacion">
                    </p>
                    </div>
<div style="width:180px"><p>
                    <input type="text" id ="telefonop4" name="telefonop4" class="form-control" placeholder="Telefono">
                    </p>
                    </div>
<div style="width:270px"><p>
                    <input type="text" id ="familiarp5" name="familiarp5" class="form-control" placeholder="Nombre">
                    </p>
                    </div>
<div style="width:200px"><p>
                    <input type="text" id ="parentescop5" name="parentescop5" class="form-control" placeholder="Parentesco">
                    </p>
                    </div>
<div style="width:150px"><p>
                    <input type="text" id ="edadp5" name="edadp5" class="form-control" placeholder="Edad">
                    </p>
                    </div>
<div style="width:220px"><p>
                    <input type="text" id ="ocupacionp5" name="ocupacionp5" class="form-control" placeholder="Ocupacion">
                    </p>
                    </div>
<div style="width:180px"><p>
                    <input type="text" id ="telefonop5" name="telefonop5" class="form-control" placeholder="Telefono">
                    </p>
                    </div>
<div style="width:270px"><p>
                    <input type="text" id ="familiarp6" name="familiarp6" class="form-control" placeholder="Nombre">
                    </p>
                    </div>
<div style="width:200px"><p>
                    <input type="text" id ="parentescop6" name="parentescop6" class="form-control" placeholder="Parentesco">
                    </p>
                    </div>
<div style="width:150px"><p>
                    <input type="text" id ="edadp6" name="edadp6" class="form-control" placeholder="Edad">
                    </p>
                    </div>
<div style="width:220px"><p>
                    <input type="text" id ="ocupacionp6" name="ocupacionp6" class="form-control" placeholder="Ocupacion">
                    </p>
                    </div>
<div style="width:180px"><p>
                    <input type="text" id ="telefonop6" name="telefonop6" class="form-control" placeholder="Telefono">
                    </p>
                    </div>
<div style="width:270px"><p>
                    <input type="text" id ="familiarp7" name="familiarp7" class="form-control" placeholder="Nombre">
                    </p>
                    </div>
<div style="width:200px"><p>
                    <input type="text" id ="parentescop7" name="parentescop7" class="form-control" placeholder="Parentesco">
                    </p>
                    </div>
<div style="width:150px"><p>
                    <input type="text" id ="edadp7" name="edadp7" class="form-control" placeholder="Edad">
                    </p>
                    </div>
<div style="width:220px"><p>
                    <input type="text" id ="ocupacionp7" name="ocupacionp7" class="form-control" placeholder="Ocupacion">
                    </p>
                    </div>
<div style="width:180px"><p>
                    <input type="text" id ="telefonop7" name="telefonop7" class="form-control" placeholder="Telefono">
                    </p>
                    </div>
                    <input type="hidden" name="entvOK" id="entvOK" value="entrevista 2 ok">

<div class="d-grid gap-2">
    <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    <a href="{{route('entrevista3.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continuar</a>
</div>
            </div>
        </div>
    </div>
</div>
</div>
</fieldset>
</form>
</div>

      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')
      <script>
      Swal.fire(
        'ENTREVISTA',
        'Aqui se registran los datos de los famliares del postulado',
        'success'
      )
      </script>
<script>
    $(document).ready(function() {
         $('#departamento').on('change', function(e) {
             var id = $('#departamento').val();
             $.ajax({
                 url: "{{ route('Ciudad')}}",
                 data: "id="+id+"&_token={{ csrf_token()}}",
                 dataType: "json",
                 method: "POST",
                 success: function(result)
                 {

                     $('#id_ciudad').empty();
                     $('#id_ciudad').append("<option value=''>Ingrese Ciudad o Municipio</option>");
                     $.each(result, function(index,value){

                         $('#id_ciudad').append("<option value='"+value.Municipio+"'>"+value.Municipio+"</option>");
                     });
                 }
             });
         });
     });
 </script>

 <script>
    $(document).ready(function() {
         $('#residencia').on('change', function(e) {
             var id = $('#residencia').val();
             $.ajax({
                 url: "{{ route('Ciudad2')}}",
                 data: "id="+id+"&_token={{ csrf_token()}}",
                 dataType: "json",
                 method: "POST",
                 success: function(result)
                 {

                     $('#id_localidad').empty();
                     $('#id_localidad').append("<option value=''>localidad</option>");
                     $.each(result, function(index,value){

                         $('#id_localidad').append("<option value='"+value.localidad+"'>"+value.localidad+"</option>");
                     });
                 }
             });
         });
     });
 </script>

 @stop


      @endsection
