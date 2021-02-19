@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('entrevista4.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista laborales" /></a>

<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="80" width="200">
<div class="page-header">
    <br>
      <h3>Datos Laborales</h3>
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
    <form action="{{ url('/entrevista4/')}}"
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
<div class="col-auto"> <label for="nombres">Nombre</label><input type="text" class="form-control" style="width: 240px" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombres', $filtro->nombres)}}"></div>
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

<p><input type="hidden" class="form-control" style="width: 240px" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id_filtro', $filtro->id_filtro)}}"></div></p>





    <fieldset class="form-group">
        <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);"">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
               
               
                <p><center>
                    <div class="card-header">Informacion Laboral</div>
                </center></p>
                 <div class="row">
                    <input type="hidden" name="entvOK" id="entvOK" value="entrevista 4 ok">
                   
&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sinExp" id="sinExp"  value="Sin Experiencia" ><label for="">&nbsp;&nbsp;&nbsp;&nbsp;Sin experiencia previa</label> &nbsp;&nbsp;<i>*esta opcion solo se debera seleccionar si el postulado no tiene ninguna experiencia laboral</i>

<table class="table">
<thead><tr align="center">
    <th>Nombre de la Empresa</th>
    <th>Fecha Ingreso</th>
    <th>Fecha Retiro</th>
    <th>Cargo</th>
    <th>Jefe Inmediato</th>
    <th>Telefono</th>
    <th>Salario</th>
    <th>Motivo Retiro</th>
</tr></thead>
<tbody><tr>
<td>
    <p><input type="text" id ="empresa1" name="empresa1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="empresa2" name="empresa2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="empresa3" name="empresa3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="empresa4" name="empresa4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="empresa5" name="empresa5" class="form-control" placeholder=""></p>
</td>
<td>
    <p><input style="width:170px" type="date" id ="fechain1" name="fechain1" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechain2" name="fechain2" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechain3" name="fechain3" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechain4" name="fechain4" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechain5" name="fechain5" class="form-control" placeholder=""></p>
</td>
<td>
    <p><input style="width:170px" type="date" id ="fechart1" name="fechart1" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechart2" name="fechart2" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechart3" name="fechart3" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechart4" name="fechart4" class="form-control" placeholder=""></p>
    <p><input style="width:170px" type="date" id ="fechart5" name="fechart5" class="form-control" placeholder=""></p>
</td>

<td>
    <p><input type="text" id ="hlcargo1" name="hlcargo1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="hlcargo2" name="hlcargo2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="hlcargo3" name="hlcargo3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="hlcargo4" name="hlcargo4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="hlcargo5" name="hlcargo5" class="form-control" placeholder=""></p>
</td>
<td>
    <p><input type="text" id ="jefeinm1" name="jefeinm1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="jefeinm2" name="jefeinm2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="jefeinm3" name="jefeinm3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="jefeinm4" name="jefeinm4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="jefeinm5" name="jefeinm5" class="form-control" placeholder=""></p>
</td>
<td>
    <p><input type="number" id ="teleinf1" name="teleinf1" class="form-control" placeholder=""></p>
    <p><input type="number" id ="teleinf2" name="teleinf2" class="form-control" placeholder=""></p>
    <p><input type="number" id ="teleinf3" name="teleinf3" class="form-control" placeholder=""></p>
    <p><input type="number" id ="teleinf4" name="teleinf4" class="form-control" placeholder=""></p>
    <p><input type="number" id ="teleinf5" name="teleinf5" class="form-control" placeholder=""></p>
</td>
<td>
    <p><input type="text" id ="salarioh1" name="salarioh1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="salarioh2" name="salarioh2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="salarioh3" name="salarioh3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="salarioh4" name="salarioh4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="salarioh5" name="salarioh5" class="form-control" placeholder=""></p>
</td>
<td>
    <p><input type="text" id ="motivor1" name="motivor1" class="form-control" placeholder=""></p>
    <p><input type="text" id ="motivor2" name="motivor2" class="form-control" placeholder=""></p>
    <p><input type="text" id ="motivor3" name="motivor3" class="form-control" placeholder=""></p>
    <p><input type="text" id ="motivor4" name="motivor4" class="form-control" placeholder=""></p>
    <p><input type="text" id ="motivor5" name="motivor5" class="form-control" placeholder=""></p>
</td>
<td><p>
</tbody>
</table>

<div class="d-grid gap-2">
    <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    <a href="{{route('entrevista5.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continuar</a>
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
        'Aqui se registra el historial laboral del postulado',
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
