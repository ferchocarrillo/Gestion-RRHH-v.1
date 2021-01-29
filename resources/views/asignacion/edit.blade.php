@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
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
                <h3 aline="center">Datos Iniciales Colaborador</h3>
            </center>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->
            <form name="f1" action="{{ url('/asignacion/'.$asignacion->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')

                <div class="container">
                    <div class="row">
                    <div id="cedula" name="cedula" class="col-6 col-md-3"><strong><p>Cedula:</p></strong>{{ old('cedula', $asignacion->cedula)}}</div><br>
                    <div id="nombre" name="nombre" class="col-6 col-md-3"><strong><p>Nombre:</p></strong>{{ old('cedula', $asignacion->nombre)}}</div><br>
                    <div id="perfil" name="perfil" class="col-6 col-md-3"><strong><p>Perfil:</p></strong>{{ old('perfil', $asignacion->perfil)}}</div><br>
                    <div id="campaña" name="campaña" class="col-6 col-md-3"><strong><p>Campaña:</p></strong>{{ old('campaña', $asignacion->campaña)}}</div>
                </div>
                <br><br>
                <div class="row">
                
                
            
                <div id="cargo" name="cargo"  class="col-6 col-md-4"><strong><p>Cargo:</p></strong><select name="cargo" id="cargo">
                    <option value=""> Seleccione un cargo</option>
                    @foreach ($cargos as $cargo)
                    <option value="{{ $cargo->cargo}}">{{ $cargo->cargo }}</option>        
                @endforeach
            </select></div>

            <div class="col">
                <label for="dependencia"><strong><p>Dependencia:</p></strong></label>
                <select name="dependencia"  id="dependencia" class="col-6 col-md-12" required>

                    <option value="">Dependencias</option>
                    @foreach ($dependencias as $dependencia)
                    <option value="{{ $dependencia->dependencia}}">{{ $dependencia->dependencia }}</option>
                    @endforeach

                </select>
                </div>

<div class="col">
    <label for="id_area"><strong><p>Area:</p></strong></label>
<select name="id_area" id="id_area" class="col-6 col-md-12" placeholder="Area" required> </select>
</select>
</div>
            
        
            <br>
            <br>
            <br>
            <br>

        
    </div>


           {{--     <div class="row">

                
                <input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
                &nbsp;&nbsp;&nbsp;
               <a href="{{route('documento.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>
            </div>
              --}}
    
        </div>

</div>
</div>
</div>
<br>
            <br>
            <br>
            <br>

</div>

</form>

                  <!-- Bootstrap CSS-->
                  <link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
                  <!-- Bootstrap JS-->
                      <script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
                      <script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
                      <!--<script src="{{asset('js/Portabilidad.js')}}"></script>-->
                  
                              <script src="{{asset('js/app.js')}}"></script>
                          </body>
                          @section('css')
                          <link rel="stylesheet" href="/css/admin_custom.css">
                          @stop
                          @section('js')
                  <script>
                  Swal.fire(
                    'REQUISICIONES',
                    'Recuerden realizar sus requisiciónes de personal con MINIMO 5 DIAS DE ANTICIPACIÓN,  a la fecha de inicio de labores solicitada',
                    'success'
                  )
                  </script>
                  
                  
                  <script>
                      $(document).ready(function() {
                           $('#dependencia').on('change', function(e) {
                               var id = $('#dependencia').val();
                               $.ajax({
                                   url: "{{ route('Area')}}",
                                   data: "id="+id+"&_token={{ csrf_token()}}",
                                   dataType: "json",
                                   method: "POST",
                                   success: function(result)
                                   {
                  
                                       $('#id_area').empty();
                                       $('#id_area').append("<option value=''>Escoja un area</option>");
                                       $.each(result, function(index,value){
                  
                                           $('#id_area').append("<option value='"+value.Area+"'>"+value.Area+"</option>");
                                       });
                                   }
                               });
                           });
                       });
                   </script>
                  
                  @stop
                  @endsection
                  