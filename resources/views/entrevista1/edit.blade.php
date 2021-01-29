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
      <h3>Registro de Entrevista</h3>
</div>
</center>
<br>
<div class="col-sm-12">
    <center><p>
        <div class="p-3 mb-2 bg-info text-white">
       <h3>{{ old('nombre', $filtro->nombre)}}</h3>
        </div>
    </p></center>
    </div>
    </body>
    <form action="{{ url('/entrevista1/')}}"
          method="POST"
          enctype="multipart/form-data"
          class="form-horizontal"
          style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          {{csrf_field()}}


<fieldset class="form-group">
    <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);>
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row">


<div class="col-2"><label for="cedula">Cedula</label><input type="number" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>
&nbsp;&nbsp;&nbsp;

{{--<div class="col-2"> <label for="nombres">Nombre</label><input type="text" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>--}}

<div class="col-2"> <label for="telefono">Telefono</label> <input type="number" class="form-control" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono' , $filtro->telefono)}}"></div>

<div class="col-2"> <label for="correo">Correo</label> <input type="mail" class="form-control" id="correo" placeholder="correo" name="correo" value="{{ old('correo' , $filtro->correo)}}"></div>
<div class="col-2"><label for="id_filtro"></label><input type="hidden" class="form-control" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id', $filtro->id)}}"></div>
            </div>
        </div>
    </div>
</fieldset>

<div class="col-sm-12"><center><p><div class="card-header">Datos Generales</div></p></center></div>

<fieldset class="form-group">
    <div class="container">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">
                <select type="text" style="width:510px" id ="cargo" name="cargo" class="form-control" placeholder="Pertenece a algun grupo social?" required>
                    <option value="">Seleccione un cargo</option>
                    @foreach($cargoEnt as $cargoEnts)<option value="{{ $cargoEnts->cargo}}">
                      {{ $cargoEnts->cargo }}</option>
                    @endforeach
</select>


<div style="width:510px"><p> <input type="text" id ="referencia" name="referencia" class="form-control" placeholder="Quien lo Referencia" required></p></div>

<div class="col-sm-12 col-form-label">
    <div class="input-group input-group-sm"> <label for="fnacimiento">Fecha nacimiento</label> <input type="date" id ="fnacimiento" name="fnacimiento" class="form-control" placeholder="Fecha de venta" required>
                <span>&nbsp;</span>
        <select name="departamento" id="departamento" class="form-control" required> <label for="departamento"></label>
            <option value=""> Departamento de nacimiento </option>
                @foreach($departamento as $departamentos)
            <option value="{{ $departamentos->Nombre}}">{{ $departamentos->Nombre }}</option>
                @endforeach
        </select>

        <select name="id_ciudad" id="id_ciudad" class="form-control" placeholder="Ciudad de nacimiento" required> </select>
    </div>
</div>

<div class="col-sm-12">
    <center><p>
     <div class="p-3 mb-2 bg-info text-white">Datos Residencia</div>
    </p></center>
</div>

<div class="col-sm-14 col-form-label">
    <div class="input-group input-group-sm">
        <span class="input-group-text">Direccion</span>
            <select name="TipoVia" id="TipoVia"class="form-control" required>
            <label for="TipoVia"></label>
            <option value="0">Tipo Via</option>
                @foreach($TipoVias as $TipoVia)<option value="{{ $TipoVia->TipoVia}}">
                    {{ $TipoVia->TipoVia }}</option>
                @endforeach
            </select>

<input type="text" name="dr1" id="dr1" class="form-control" required>
            <select name="prefijo1" id="prefijo1"class="form-control">
            <label for="prefijo1"></label>
            <option value="">Prefijo</option>
                @foreach($prefijos as $prefijo)<option value="{{ $prefijo->prefijo}}">
                    {{ $prefijo->prefijo }}</option>
                @endforeach
            </select>
                        <span>&nbsp; # &nbsp; </span>
<input type="number" name="dr2" id="dr2" class="form-control" required>
             <select name="prefijo2" id="prefijo2"class="form-control">
             <label for="prefijo2"></label>
             <option value="">Prefijo</option>
                @foreach($prefijos as $prefijo)<option value="{{ $prefijo->prefijo}}">
                    {{ $prefijo->prefijo }}</option>
                @endforeach
             </select>
                <span>&nbsp; - &nbsp; </span>
             <input type="number" name="dr3" id="dr3" class="form-control" required>

             <select name="orientacion" id="orientacion"class="form-control">
             <label for="orientacion"></label>
             <option value="">Orientacion</option>
                @foreach($orientaciones as $orientacion)<option value="{{ $orientacion->orientacion}}">
                  {{ $orientacion->orientacion }}</option>
                @endforeach
             </select>
    </div>
</div>

<div class="col-sm-14 col-form-label">
    <div class="input-group input-group-sm">
        <span class="input-group-text">Complementos</span>
             <select name="adicional" id="adicional"class="form-control">
             <option value="">Adicionales</option>
                @foreach($adicionales as $adicional)<option value="{{ $adicional->adicional}}">
                  {{ $adicional->adicional }}</option>
                @endforeach
             </select>

<input type="text" name="ad1" id="ad1" class="form-control">
        <span>&nbsp; - &nbsp; </span>
             <select name="adicional2" id="adicional2"class="form-control">
             <label for="adicional2"></label>
             <option value="">Adicionales</option>
                @foreach($adicionales as $adicional)<option value="{{ $adicional->adicional}}">
                  {{ $adicional->adicional }}</option>
                @endforeach
            </select>

<input type="text" name="ad2" id="ad2" class="form-control" >
                    <span>&nbsp; - &nbsp; </span>
<select name="adicional3" id="adicional3"class="form-control">
             <label for="adicional3"></label>
             <option value="">Adicionales</option>
                @foreach($adicional2es as $adicional2)<option value="{{ $adicional2->adicional}}">
                     {{ $adicional2->adicional }}</option>
                @endforeach
</select>

<input type="text" name="ad3" id="ad3" class="form-control" >

    </div>
</div>

<div class="input-group input-group-sm">
<input type="text" name="barrio" id="barrio" class="form-control" placeholder="Barrio" >
                    <span>&nbsp;</span>
<select name="residencia" id="residencia"class="form-control" required><label for="residencia"></label>
                <option value="">Ciudad de residencia</option>
                @foreach($residencia as $residencias)<option value="{{ $residencias->id}}">
                  {{ $residencias->residencia }}</option>
                @endforeach
</select>
<select name="id_localidad" id="id_localidad" class="form-control" placeholder="localidad"required </select>

<input type="number" name="tFijo" id="tFijo" class="form-control" placeholder="Telefono fijo">
                   <span>&nbsp;</span>
<input type="number" name="tCelular" id="tCelular" class="form-control" placeholder="Celular principal" required>
                   <span>&nbsp;</span>
<input type="number" name="tCelular2" id="tCelular2" class="form-control" placeholder="Celular secundario" >
            </div>
        </div>
    </div>
</fieldset>

<div class="col-sm-12">
    <center><p>
        <div class="p-3 mb-2 bg-info text-white">
            Informacion Adicional
        </div>
    </p></center>
</div>
<fieldset class="form-group">
    <div class="container">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">
                <div style="width:200px">
                    <p>
<select type="text"name="tVivienda"id="tVivienda"class="form-control"placeholder="Tipo de Vivienda"required>
                        <option value="0"> Tipo Vivienda </option>
                        <option value="arrendada"> Arrendada</option>
                        <option value="propia">Propia</option>
                        <option value="familiar">Familiar</option>
</select>
                    </p>
                </div>
                <span>&nbsp;</span>
<div style="width:210px"><p>
<input type="number"name="valor"id="valor"class="form-control"placeholder="&#36; Valor del arriendo"></p>
</div>
                <span>&nbsp;</span>
<div style="width:270px"><p><input type="text"id ="arrendador"name="arrendador"class="form-control"placeholder="Nombre del arrendador"></p></div>
                <span>&nbsp;</span>
<div style="width:340px"><p><input type="mail" id ="correoArr" name="correoArr" class="form-control" placeholder="Correo Electronico arrendador"></p></div>
                <span>&nbsp;</span>
<div style="width:200px"><p>
    <select type="text" name="sMilitar" id="sMilitar" class="form-control" placeholder="Servicio Militar" required>
        <option value="0"> Servicio Militar</option>
            <option value="si">Si</option>
            <option value="no"> No</option>
    </select></p>
</div>
                <span>&nbsp;</span>
<div style="width:200px"><p><input type="text" id ="donde" name="donde" class="form-control" placeholder="Donde"></p></div>
                <span>&nbsp;</span>
        <div style="width:170px">
            <p>
                <select type="text" name="eCivil" id="eCivil" class="form-control" placeholder="Estado Civil" required>
                    <option value="0">Estado Civil </option>
                    <option value="soltero(a)">Soltero(a)</option>
                    <option value="casado(a)">Casado(a)</option>
                    <option value="separado(a)">Separado(a)</option>
                    <option value="UnionL"> Union Libre</option>
                    <option value="viudo(a)"> Viudo(a)</option>
                </select>
            </p>
        </div>
                                <span>&nbsp;</span>
<div style="width:180px"><p>
    <input type="text" id ="cuanto" name="cuanto" class="form-control" placeholder="Hace cuanto"></p>
</div>
                <span>&nbsp;</span>
<div style="width:270px"><p>
    <input type="text" id ="quien" name="quien" class="form-control" placeholder="Con Quien Vive"></p>
</div>

<div style="width:1040px">
    <label for="conoce">Que informacion conoce de la organizacion</label>
    <textarea class="form-control" id="conoce" name="conoce" rows="4"></textarea>
</div>

<div class="d-grid gap-2">
    <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    <a href="{{route('entrevista2.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continuar</a>
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
        'Aqui se registran los datos basicos',
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
