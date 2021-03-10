@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('entrevista1.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png" style="position:absolute; top:50px; left:800px; visibility:visible z-index:1" align= "auto" height="80" width="200">
<br>
<br>
<div class="page-header">

    <br>
      <h3>Datos Iniciales</h3>
</div>
</center>





<div class="conteiner">

    <center><p>
        <div class="card-header">
           <h3>{{( $filtros->nombre)}}</h3>
        </div>
    </p></center>





    </body>

    <div class="container">
    <form action="{{ url('/entrevista1/')}}"
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
<div class="col-auto"><label for="cedula">Cedula</label><input type="number" class="form-control" style="width: 240px" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtros->cedula)}}"></div>
</p>

<p>
<div class="col-auto"> <label for="nombres">Nombre</label><input type="text" class="form-control" style="width: 240px" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtros->nombre)}}"></div>
</p>
<p>
<div class="col-auto"> <label for="telefono">Telefono</label> <input type="number" class="form-control" style="width: 240px" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono' , $filtros->telefono)}}"></div>
</p>
<p>
<div class="col-auto"> <label for="correo">Correo</label> <input type="mail" class="form-control" style="width: 200px" id="correo" placeholder="correo" name="correo" value="{{ old('correo' , $filtros->correo)}}"></div>
</p>
<p>
<div class="col-auto"><label for="id_filtro"></label><input type="hidden" class="form-control" style="width: 240px" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id', $filtros->id)}}"></div>
<div class="col-auto"><label for="perfil"></label><input type="hidden" class="form-control" style="width: 240px" id="perfil" placeholder="perfil" name="perfil" value="{{ old('perfil', $filtros->perfil)}}"></div>
<div class="col-auto"><label for="campana"></label><input type="hidden" class="form-control" style="width: 240px" id="campana" placeholder="campana" name="campana" value="{{ old('campana', $filtros->campaña)}}"></div>
<div class="col-auto"><label for="fuente"></label><input type="hidden" class="form-control" style="width: 240px" id="fuente" placeholder="fuente" name="fuente" value="{{ old('fuente', $filtros->fuente)}}"></div>
{{-- <p><input type="hidden"  id="fregistro" name="fregistro" value="{{ $filtros->fregistro }}"></p> --}}
<p><input type="hidden"  id="nombre" name="nombre" value="{{ $filtros->nombre }}"></p>
<p><input type="hidden"  id="cedula" name="cedula" value="{{ $filtros->cedula }}"></p>
<p><input type="hidden"  id="telefono" name="telefono" value="{{ $filtros->telefono }}"></p>
<p><input type="hidden"  id="correo" name="correo" value="{{ $filtros->correo }}"></p>

<p><input type="hidden"  id="fuente" name="fuente" value="{{ $filtros->fuente }}"></p>
<p><input type="hidden"  id="citadoE" name="citadoE" value="{{ $filtros->citadoE }}"></p>
<p><input type="hidden"  id="noAplica" name="noAplica" value="{{ $filtros->noAplica }}"></p>
<p><input type="hidden"  id="noInteresado" name="noInteresado" value="{{ $filtros->noInteresado }}"></p>
<p><input type="hidden"  id="enviadoCapa" name="enviadoCapa" value="{{ $filtros->enviadoCapa }}"></p>
<p><input type="hidden"  id="entrevistaJefeInm" name="entrevistaJefeInm" value="{{ $filtros->entrevistaJefeInm }}"></p>
<p><input type="hidden"  id="entrevistaGerencia" name="entrevistaGerencia" value="{{ $filtros->entrevistaGerencia }}"></p>
<p><input type="hidden"  id="enviadocontratacion" name="enviadocontratacion" value="{{ $filtros->enviadocontratacion }}"></p>
<p><input type="hidden"  id="enviadoExm" name="enviadoExm" value="{{ $filtros->enviadoExm }}"></p>
<p><input type="hidden"  id="PruebasE" name="PruebasE" value="{{ $filtros->PruebasE }}"></p>
<p><input type="hidden"  id="yaTrabaja" name="yaTrabaja" value="{{ $filtros->yaTrabaja }}"></p>
<p><input type="hidden"  id="numeroEqu" name="numeroEqu" value="{{ $filtros->numeroEqu }}"></p>
<p><input type="hidden"  id="observacion" name="observacion" value="{{ $filtros->observacion }}"></p>
<p><input type="hidden"  id="noAsiste" name="noAsiste" value="{{ $filtros->noAsiste }}"></p>
<p><input type="hidden"  id="NoResponde2" name="NoResponde2" value="{{ $filtros->NoResponde2 }}"></p>
<p><input type="hidden"  id="YaNoInt" name="YaNoInt" value="{{ $filtros->YaNoInt }}"></p>
<p><input type="hidden"  id="Estudiante" name="Estudiante" value="{{ $filtros->Estudiante }}"></p>
<p><input type="hidden"  id="observacion2" name="observacion2" value="{{ $filtros->observacion2 }}"></p>
<p><input type="hidden"  id="noAsisteEnt" name="noAsisteEnt" value="{{ $filtros->noAsisteEnt }}"></p>
<p><input type="hidden"  id="entvOK" name="entvOK" value="{{ $filtros->entvOK }}"></p>



</p>
</div>
</div>
</div>
</fieldset>

<div class="col-sm-12"><center><p><div class="card-header">Datos Generales</div></p></center></div>

<fieldset class="form-group">
    <div class="container">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">

                <p>
                    <input list="cargo" type="text" name="cargo"  style="width:510px"class="form-control" placeholder="Seleccione un cargo">

                    <datalist name="cargo" id="cargo" >
                      <option value="">Campañas</option>
                      @foreach($cargos as $cargo)<option value="{{ $cargo->cargo}}">
                          {{ $cargo->cargo }}</option>
                        @endforeach
                    </datalist>
                    </p>



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
     <div class="card-header">Datos Residencia</div>
    </p></center>
</div>

<div class="col-sm-14 col-form-label">
    <div class="input-group input-group-sm">
        <span class="input-group-text" style="height:38px" >Direccion</span>

        <p>
            <input list="TipoVia" type="text" name="TipoVia"  class="form-control" style="width: 240px"  placeholder="Tipo via">

            <datalist name="TipoVia" id="TipoVia" >
                <option value="">Tipo Via</option>
                @foreach($TipoVias as $TipoVia)<option value="{{ $TipoVia->tipo_vias}}">
                    {{ $TipoVia->tipo_vias }}</option>
                @endforeach
            </datalist>
        </p>


<p>
<input type="text" name="dr1" id="dr1" class="form-control"  style="width:70px" required>
</p>

<p>
    <input list="prefijo1" type="text" name="prefijo1"  class="form-control" style="width: 120px"  placeholder="Prefijo">

    <datalist name="prefijo1" id="prefijo1" >
        <option value="">Prefijo</option>
        @foreach($prefijos as $prefijo)<option value="{{ $prefijo->prefijo}}">
            {{ $prefijo->prefijo }}</option>
        @endforeach
    </datalist>
</p>


                        <span>&nbsp; # &nbsp; </span>
<p><input type="number" name="dr2" id="dr2" class="form-control"  style="width:70px" required></p>

<p>
    <input list="prefijo2" type="text" name="prefijo2"  class="form-control" style="width: 120px"  placeholder="Prefijo">

    <datalist name="prefijo2" id="prefijo2" >
        <option value="">Prefijo</option>
        @foreach($prefijos as $prefijo)<option value="{{ $prefijo->prefijo}}">
            {{ $prefijo->prefijo }}</option>
        @endforeach
    </datalist>
</p>


                <span>&nbsp; - &nbsp; </span>
                <p><input type="number" name="dr3" id="dr3" class="form-control"  style="width:70px" required></p>

                <p>
                    <input list="orientacion" type="text" name="orientacion"  class="form-control" style="width: 220px"  placeholder="Orientacion">

                    <datalist name="orientacion" id="orientacion" >
                        <option value="">Orientacion</option>
                        @foreach($orientaciones as $orientacion)<option value="{{ $orientacion->orientacion}}">
                          {{ $orientacion->orientacion }}</option>
                        @endforeach
                    </datalist>
                </p>

    </div>
</div>

<div class="col-sm-14 col-form-label">
    <div class="input-group input-group-sm">
        <span class="input-group-text" style="height:38px">Complementos</span>

        <p>
            <input list="adicional" type="text" name="adicional"  class="form-control" style="width: 220px"  placeholder="Adicional">

            <datalist name="adicional" id="adicional" >
                <option value="">Adicionales</option>
                @foreach($adicionales as $adicional)<option value="{{ $adicional->adicional}}">
                  {{ $adicional->adicional }}</option>
                @endforeach
            </datalist>
        </p>


<p><input type="text" name="ad1" id="ad1" class="form-control"  style="width:70px"></p>
        <span>&nbsp; - &nbsp; </span>
        <p>
            <input list="adicional2" type="text" name="adicional2"  class="form-control" style="width: 220px"  placeholder="Adicional">

            <datalist name="adicional2" id="adicional2" >
                <option value="">Adicionales</option>
                @foreach($adicionales as $adicional)<option value="{{ $adicional->adicional}}">
                  {{ $adicional->adicional }}</option>
                @endforeach
            </datalist>
        </p>

<p><input type="text" name="ad2" id="ad2" class="form-control"  style="width:70px"></p>

                    <span>&nbsp; - &nbsp; </span>
        <p>
            <input list="adicional3" type="text" name="adicional3"  class="form-control" style="width: 220px"  placeholder="Adicional">

            <datalist name="adicional3" id="adicional3" >
                <option value="">Adicionales</option>
                @foreach($adicional2es as $adicional2)<option value="{{ $adicional2->adicional}}">
                     {{ $adicional2->adicional }}</option>
                @endforeach
            </datalist>
        </p>
<p><input type="text" name="ad3" id="ad3" class="form-control"  style="width:70px"></p>

    </div>
</div>

<div class="input-group input-group-sm">
    <p><input type="text" name="barrio" id="barrio" class="form-control"  style="width:200px" placeholder="Barrio" ></p>

                    <span>&nbsp;</span>
                    <p><select name="residencia" id="residencia" class="form-control" style="width: 200px" required><label for="residencia"></label>
                <option value="">Ciudad de residencia</option>
                @foreach($residencia as $residencias)<option value="{{ $residencias->residencia}}">
                  {{ $residencias->residencia }}</option>
                @endforeach
</select></p>

<p><select name="id_localidad" id="id_localidad" class="form-control" style="width: 200px" placeholder="localidad"required> </select></p>
<p><input type="number" name="tFijo" id="tFijo" class="form-control" style="width: 150px" placeholder="Telefono fijo"></p>
<p><input type="number" name="tCelular" id="tCelular" class="form-control" style="width: 150px" placeholder="Celular principal" required></p>
<p><input type="number" name="tCelular2" id="tCelular2" class="form-control" style="width: 150px" placeholder="Celular secundario" ></p>

            </div>
        </div>
    </div>
</fieldset>

<div class="col-sm-12">
    <center><p>


        <div class="card-header">
            Informacion Adicional
        </div>
    </p></center>
</div>
<fieldset class="form-group">
    <div class="container">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">

                {{--  --}}





                   <p>
                        <input list="tVivienda" type="text" name="tVivienda"  style="width:200px"class="form-control" placeholder="Tipo de vivienda">

                        <datalist name="tVivienda" id="tVivienda" >
                          <option value="">Tipo de vivienda</option>
                          @foreach($tViviendas as $tVivienda)<option value="{{ $tVivienda->tvivienda}}">
                              {{ $tVivienda->tvivienda }}</option>
                            @endforeach
                        </datalist>
                        </p>

                <span>&nbsp;</span>
<div style="width:210px"><p>
<input type="number"name="valor"id="valor"class="form-control" placeholder="&#36; Valor del arriendo"></p>
</div>
                <span>&nbsp;</span>
<div style="width:270px"><p><input type="text"id ="arrendador"name="arrendador"class="form-control"placeholder="Nombre del arrendador"></p></div>
                <span>&nbsp;</span>
<div style="width:340px"><p><input type="mail" id ="correoArr" name="correoArr" class="form-control" placeholder="Correo Electronico arrendador"></p></div>
                <span>&nbsp;</span>

                <p>
                    <input list="sMilitar" type="text" name="sMilitar"  style="width:220px"class="form-control" placeholder="¿Presto servicio militar?">

                    <datalist name="sMilitar" id="sMilitar" >
                      <option value="">Tipo de vivienda</option>
                      @foreach($sMilitars as $sMilitar)<option value="{{ $sMilitar->sMilitar}}">
                          {{ $sMilitar->sMilitar }}</option>
                        @endforeach
                    </datalist>
                    </p>


                <span>&nbsp;</span>
<div style="width:200px"><p><input type="text" id ="donde" name="donde" class="form-control" placeholder="Donde"></p></div>
                <span>&nbsp;</span>

                <p>
                    <input list="eCivil" type="text" name="eCivil"  style="width:170px"class="form-control" placeholder="Estado Civil">

                    <datalist name="eCivil" id="eCivil" >
                      <option value="">Estado Civil</option>
                      @foreach($eCivils as $eCivil)<option value="{{ $eCivil->e_civil}}">
                          {{ $eCivil->e_civil }}</option>
                        @endforeach
                    </datalist>
                    </p>

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

<input type="hidden" name="entvOK" id="entvOK" value="entrevista 1 ok">

<div class="d-grid gap-2">
    <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    <a href="{{route('entrevista2.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continuar</a>
</div>
<br>
<br>
<br>


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
                     $('#id_localidad').append("<option value=''>seleccion una localidad</option>");
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
