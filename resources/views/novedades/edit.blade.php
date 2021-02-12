@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
                <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <h3 aline="center">Formulario de creacion de novedades</h3>
            </center>

        <div class="row">
            <div class="col-2"> <label for="nombres">Nombre</label><input type="text" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $asignacion->nombres)}}"></div>
            <div class="col-2"> <label for="cedula">Cedula</label><input type="text" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $asignacion->cedula)}}"></div>
            <div class="col-2"> <label for="campaña">Campaña</label><input type="text" class="form-control" id="campaña" style="width:80%" placeholder="campaña" name="campaña" value="{{ old('campaña', $asignacion->campaña)}}"></div>
            <div class="col-2"> <label for="foco">Foco</label><input type="text" class="form-control" id="foco" placeholder="foco" name="foco" value="{{ old('foco', $asignacion->foco)}}"></div>
            <div class="col-2"> <label for="jinmedato">Jefe Inmediato</label><input type="text" class="form-control" id="jinmedato" placeholder="jinmedato" name="jinmedato" value="{{ old('jinmedato', $asignacion->jinmedato)}}"></div>
            <div class="col-2"> <label for="estado">Estado</label><input type="text" class="form-control" id="estado" style="width:50%" placeholder="estado" name="estado" value="{{ old('estado', $asignacion->estado)}}"></div>
        </div>
        <br><br>
        <div class="row">
<div id="novedad" name="novedad" class="col-4 col-md"><strong><p>Tipo de Novedad:</p></strong>
<select name="novedad" id="novedad" class="form-control-lg" >
    <option value="">Seleccione una novedad</option>
@foreach ($tipoNovedades as $tipoNovedad)
<option value="{{ $tipoNovedad->TipoNovedad}}">{{ $tipoNovedad->TipoNovedad }}</option>
    
@endforeach
</select>
        </div>
       <p> <div id="desde" name="desde" class="col-4 col-md"><strong><p>Inicio de la novedad:</p></strong>
        <input type="date" id="desde" name="desde" class="form-control-lg">
    </div>
    </p>
    <p>
        <div id="hasta" name="hasta" class="col-4 col-md"><strong><p>Fin de la novedad:</p></strong>
            <input type="date" id="hasta" name="hasta" class="form-control-lg">
        </div>
        </p>
    </div>
    <br><br>
    <div class="row">
        <div id="observaciones" name="observaciones" class="col-4 col-md"><strong><p>Observaciones:</p></strong>
    <textarea name="observaciones" id="observaciones"  style="width:100%" rows="3"></textarea>
    </div>


            <script src="{{asset('js/app.js')}}"></script>
        </body>
        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop
        @section('js')
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
            $(function() {
              $('#toggle-two').bootstrapToggle({
                on: 'Enabled',
                off: 'Disabled'
              });
            })
          </script>
        
        <script>
        Swal.fire(
        'Activacion de empleados',
        'Registra los datos de los empleados cuidadosamente',
        'success'
        )
        </script>
        @stop
        <!-- Bootstrap CSS-->
        <link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <!-- Bootstrap JS-->
        <script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!--<script src="{{asset('js/Portabilidad.js')}}"></script>-->
        
        @endsection
        
        