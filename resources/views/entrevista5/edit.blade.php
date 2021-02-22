@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('entrevista5.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos adicionales" /></a>
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
           <h3>{{( $filtro->nombre)}}</h3>
        </div>
    </p></center>

    

  
 
    </body>

    <div class="container">
    <form action="{{ url('/entrevista5/')}}"
          method="POST"
          enctype="multipart/form-data"
          class="form-horizontal"
          style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          {{csrf_field()}}



          <fieldset class="form-group">
            <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="row">

                        <input type="hidden" name="entvOK" id="entvOK" value="entrevista 5 ok">
<p>
<div class="col-auto"><label for="cedula">Cedula</label><input type="number" class="form-control" style="width: 240px" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>
</p>

<p>
<div class="col-auto"> <label for="nombres">Nombre</label><input type="text" class="form-control" style="width: 240px" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>
</p>
<p>
<div class="col-auto"> <label for="telefono">Telefono</label> <input type="number" class="form-control" style="width: 240px" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono' , $filtro->telefono)}}"></div>
</p>
<p>
<div class="col-auto"> <label for="correo">Correo</label> <input type="mail" class="form-control" style="width: 200px" id="correo" placeholder="correo" name="correo" value="{{ old('correo' , $filtro->correo)}}"></div>
</p>
<p>
<div class="col-auto"><label for="id_filtro"></label><input type="hidden" class="form-control" style="width: 240px" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id', $filtro->id)}}"></div>
</p>
</div>
</div>
</div>
</fieldset>


<fieldset class="form-group">
    <div class="container">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">
                
            <div style="width:560px">
                <p><input type="text" id ="aspiracion" name="aspiracion" class="form-control" placeholder="&#36; Aspiracion Salarial" required></p>
            </div>
            <div style="width:455px">
                <p><select type="text" id ="personasC" name="personasC" class="form-control" placeholder="Ha tenido personas a cargo?" required>
                      <option value="0">Ha tenido personas a cargo?</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:1015px">
                <p><input type="text" id ="acCambio" name="acCambio" class="form-control" placeholder="Actividades realizadas en los lapsos de cambio ocupación" required></p>
            </div>

            <div style="width:310px">
                <p><input type="text" id ="tiempoDes" name="tiempoDes" class="form-control" placeholder="Hace cuanto esta desmpleado" required></p>
            </div>
            <div style="width:705px">
                <p><input type="text" id ="queHizo" name="queHizo" class="form-control" placeholder="Que ha realizado en ese tiempo" required></p>
            </div>

            <div style="width:400px">
                <p><select type="text" id ="otroProceso" name="otroProceso" class="form-control" placeholder="Esta en proceso de seleccion en otra empresa?" required>
                  <option value="0"> Esta en proceso de seleccion en otra empresa?</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:615px">
                <p><input type="text" id ="CualOtra" name="CualOtra" class="form-control" placeholder="Cual?"></p>
            </div>

            <div style="width:1015px">
                <p><input type="text" id ="fortalezas" name="fortalezas" class="form-control" placeholder="Cuales son sus fortalezas" required></p>
            </div>

            <div style="width:1015px">
                <p><input type="text" id ="debilidades" name="debilidades" class="form-control" placeholder="Cuales son sus debilidades" required></p>
            </div>

            <div style="width:1015px">
                <p><input type="text" id ="valores" name="valores" class="form-control" placeholder="Cuales valores le inculco su familia" required></p>
            </div>

            <div style="width:1015px">
                <p><input type="text" id ="satisfaccion" name="satisfaccion" class="form-control" placeholder="Que aspectos de su vida le han generado satisfaccion" required></p>
            </div>

            <div style="width:1015px">
                <p><input type="text" id ="traumaticos" name="traumaticos" class="form-control" placeholder="Que aspectos de su vida han sido traumaticos" required></p>
            </div>

            <div style="width:400px">
                <p><select type="text" id ="cancelado" name="cancelado" class="form-control" placeholder="Le han cancelado contrato en otra empresa?" required>
                    <option value="0">Le han cancelado contrato en otra empresa?</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:615px">
                <p><input type="text" id ="motivoC" name="motivoC" class="form-control" placeholder="Motivo"></p>
            </div>

            <div style="width:400px">
                <p><select type="text" id ="problemas" name="problemas" class="form-control" placeholder="Tiene problemas judiciales?" required>
                    <option value="0">Tiene problemas judiciales?</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:615px">
                <p><input type="text" id ="motivoJ" name="motivoJ" class="form-control" placeholder="Motivo"></p>
            </div>

            <div style="width:400px">
                <p><select type="text" id ="fuma" name="fuma" class="form-control" placeholder="Fuma?" required>
                    <option value="0">Fuma?</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:615px">
                <p><input type="text" id ="frecuencia" name="frecuencia" class="form-control" placeholder="Con que frecuencia"></p>
            </div>
            <div style="width:150px">
                <p><select type="text" id ="deudas" name="deudas" class="form-control" placeholder="posee deudas?" required>
                  <option value="0">Posee deudas?</option>
                  <option value="si">Si</option>
                  <option value="no">No</option>
                </select></p>
            </div>
            <div style="width:289px">
                <p><input type="text" id ="debeA" name="debeA" class="form-control" placeholder="Con quien"></p>
            </div>

            <div style="width:289px">
                <p><input type="text" id ="cuantoDebe" name="cuantoDebe" class="form-control" placeholder="Cuanto"></p>
            </div>

            <div style="width:289px">
                <p><input type="text" id ="plazo" name="plazo" class="form-control" placeholder="A que plazo"></p>
            </div>

            <div style="width:350px">
                <p><select type="text" id ="grupoSoc" name="grupoSoc" class="form-control" placeholder="Pertenece a algun grupo social?" required>
                <option value="0">Pertenece a algun grupo social?</option>
                <option value="si">Si</option>
                <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:333px">
                <p><input type="text"id ="cualGr"name="cualGr"class="form-control"placeholder="Cual"></p>
            </div>

            <div style="width:333px">
                <p><input type="text" id ="cuantoTiempo" name="cuantoTiempo" class="form-control" placeholder="Cuanto Tiempo"></p>
            </div>

            <div style="width:1015px">
                <p><input type="text" id ="tiempoLibre" name="tiempoLibre" class="form-control" placeholder="Que hace en su tiempo libre?" required></p>
            </div>

            <div style="width:507px">
                <p><input type="text" id ="estadoSalud" name="estadoSalud" class="form-control" placeholder="Cual es su estado de salud?" required></p>
            </div>

            <div style="width:507px">
                <p><input type="text" id ="tratamiento" name="tratamiento" class="form-control" placeholder="Tratamientos medicos" required></p>
            </div>

            <div style="width:350px">
                <p><select type="text" id ="accidentes" name="accidentes" class="form-control" placeholder="Ha sufrido accidentes?" required>
                <option value="0">Ha sufrido accidentes?</option>
                <option value="si">Si</option>
                <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:665px">
                <p><input type="text" id ="cualAc" name="cualAc" class="form-control" placeholder="Que tipo de Accidente"></p>
            </div>

            <div style="width:507px">
                <p><select type="text" id ="procesosAnt" name="procesosAnt" class="form-control" placeholder="Anteriormente ha realiazado procesos en Mentius?" required>
                <option value="0"> Anteriormente ha realiazado procesos en Mentius?</option>
                <option value="si">Si</option>
                <option value="no">No</option>
                </select></p>
            </div>

            <div style="width:507px">
                <p><select type="text" id ="familiaresMent" name="familiaresMent" class="form-control" placeholder="Tiene familiares trabajando en Mentius?" required>
                <option value="0">Tiene familiares trabajando en Mentius?</option>
                <option value="si">Si</option>
                <option value="no">No</option>
                </select></p>
            </div>
            <div class="d-grid gap-2">
                <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
                <a href="{{route('entFinalizacion.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Revision</a>
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
        'Aqui podras registrar algunas generalidades',
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
