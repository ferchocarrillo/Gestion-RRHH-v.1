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
      <h3>Historial Academico</h3>
</div>
</center>
<br>
<div class="col-sm-12">
    <center><p>
        <div class="p-3 mb-2 bg-info text-white">
            Datos Personales
        </div>
    </p></center>
    </div>
    </body>
    <form action="{{ url('/entrevista3/')}}"
          method="POST"
          enctype="multipart/form-data"
          class="form-horizontal"
          style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          {{csrf_field()}}


<fieldset class="form-group">
    <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);>
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row">
                <div class="col-2"><label for="id_filtro">Id</label><input type="number" class="form-control" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id', $filtro->id)}}"></div>

                <div class="col-2"><label for="cedula">Cedula</label><input type="number" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>

                <div class="col-2"> <label for="nombres">Nombres</label><input type="text" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>

                <div class="col-2"> <label for="telefono">Telefono</label> <input type="number" class="form-control" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono' , $filtro->telefono)}}"></div>

                <div class="col-2"> <label for="correo">Correo</label> <input type="mail" class="form-control" id="correo" placeholder="correo" name="correo" value="{{ old('correo' , $filtro->correo)}}"></div>
            </div>
        </div>
    </div>
</fieldset>

<div class="col-sm-12">
    <center><p>
    <div class="card-header"> Informacion Academica</div>
    </p></center>
    </div>
<table class="table">
<thead>
    <tr align="center">
    <th>GRADO</th>
    <th>INSTITUCION</th>
    <th>AÑOS</th>
    <th>FECHA</th>
    <th>TITULO OBTENDO</th>
    <th>ESTADO</th>
    </tr>
</thead>
<tbody><tr>
    <td>
    <p><input type="text" id ="Grado1" name="Grado1" value="Primaria" class="form-control" placeholder="Primaria" onlyread></p>
    <p><input type="text" id ="Grado2" name="Grado2" value="Secundaria" class="form-control" placeholder="Secundaria" onlyread></p>
    <p><input type="text" id ="Grado3" name="Grado3" value="Técnico"class="form-control" placeholder="Especializacion" onlyread></p>
    <p><input type="text" id ="Grado4" name="Grado4" value="Tecnólogo"class="form-control" placeholder="Especializacion" onlyread></p>
    <p><input type="text" id ="Grado5" name="Grado5" value="Universitario"class="form-control" placeholder="Universitario" onlyread></p>
    <p><input type="text" id ="Grado6" name="Grado6" value="Especializacion"class="form-control" placeholder="Especializacion" onlyread></p>
    <p><input type="text" id ="Grado7" name="Grado7" value="Otros"class="form-control" placeholder="Otros"></p>
    <p><input type="text" id ="Grado8" name="Grado8" class="form-control" placeholder=""></p>
    </td>
    <td>
    <p><input type="text" id ="institucion1" name="institucion1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="institucion2" name="institucion2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="institucion3" name="institucion3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="institucion4" name="institucion4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="institucion5" name="institucion5" class="form-control" placeholder=""></p>
    <p><input type="text" id ="institucion6" name="institucion6" class="form-control" placeholder=""></p>
    <p><input type="text" id ="institucion7" name="institucion7" class="form-control" placeholder=""></p>
    <p><input type="text" id ="institucion8" name="institucion8" class="form-control" placeholder=""></p>
</td>
    <td>
    <p><input type="text" id ="años1" name="años1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="años2" name="años2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="años3" name="años3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="años4" name="años4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="años5" name="años5" class="form-control" placeholder=""></p>
    <p><input type="text" id ="años6" name="años6" class="form-control" placeholder=""></p>
    <p><input type="text" id ="años7" name="años7" class="form-control" placeholder=""></p>
    <p><input type="text" id ="años8" name="años8" class="form-control" placeholder=""></p>
    </td>
    <td>
    <p><input type="date" id ="fecha1" name="fecha1" class="form-control" placeholder=""></p>
    <p><input type="date" id ="fecha2" name="fecha2" class="form-control" placeholder=""></p>
    <p><input type="date" id ="fecha3" name="fecha3" class="form-control" placeholder=""></p>
    <p><input type="date" id ="fecha4" name="fecha4" class="form-control" placeholder=""></p>
    <p><input type="date" id ="fecha5" name="fecha5" class="form-control" placeholder=""></p>
    <p><input type="date" id ="fecha6" name="fecha6" class="form-control" placeholder=""></p>
    <p><input type="date" id ="fecha7" name="fecha7" class="form-control" placeholder=""></p>
    <p><input type="date" id ="fecha8" name="fecha8" class="form-control" placeholder=""></p>


    </td>
    <td>
    <p><input type="text" id ="titulo1" name="titulo1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="titulo2" name="titulo2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="titulo3" name="titulo3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="titulo4" name="titulo4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="titulo5" name="titulo5" class="form-control" placeholder=""></p>
    <p><input type="text" id ="titulo6" name="titulo6" class="form-control" placeholder=""></p>
    <p><input type="text" id ="titulo7" name="titulo7" class="form-control" placeholder=""></p>
    <p><input type="text" id ="titulo8" name="titulo8" class="form-control" placeholder=""></p>
    </td>
<td>

    <p><select name="estado1"  class="form-control" required>
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
            <option value="Veriicado">veriicado
    </select></p>
    <p><select name="estado2"  class="form-control" required>
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
        <option value="Veriicado">veriicado
    </select></p>
    <p><select name="estado3"  class="form-control" >
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
        <option value="Veriicado">veriicado
    </select></p>
    <p><select name="estado4"  class="form-control" >
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
        <option value="Veriicado">veriicado
    </select></p>
    <p><select name="estado5"  class="form-control">
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
        <option value="Veriicado">veriicado
    </select></p>
    <p><select name="estado6"  class="form-control">
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
        <option value="Veriicado">veriicado
    </select></p>
    <p><select name="estado7"  class="form-control">
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
        <option value="Veriicado">veriicado
    </select></p>
    <p><select name="estado8"  class="form-control">
        <option value="0" selected>Estado
        <option value="Aprobado">aprobado
        <option value="Aplazado">aplazado
        <option value="Retirado">retirado
        <option value="Veriicado">veriicado
    </select></p>



</td>
</tr></tbody>
</table>

<div class="d-grid gap-2">
    <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    <a href="{{route('entrevista4.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continuar</a>
</div>
            </div>
        </div>
    </div>
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
        'ENTREVISTA',
        'Aqui se registra el historial academico del postulado',
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
