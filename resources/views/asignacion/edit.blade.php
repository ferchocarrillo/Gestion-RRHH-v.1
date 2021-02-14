@extends('adminlte::page')
@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
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



            <center><p>
                <div class="card-header" id ="nombres" name="nombres">
                  <h3> {{ $contatacion->nombre}}</h3>
                </div>
            </p></center>




            <form name="f1" action="{{ url('/asignacion')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('POST')

                <div class="container">
                    <div class="row">
<input type="hidden" id="id_filtro" name="id_filtro" value="{{$contatacion->id_filtro}}">
<input type="hidden" id="cedula" name="cedula" value="{{ old('cedula', $contatacion->cedula)}}">
<input type="hidden" id="nombre" name="nombre" value="{{ old('nombre', $contatacion->nombre)}}">
<input type="hidden" id="ingreso" name="ingreso" value="{{ old('ingreso', $newEmployes->ingreso)}}">
<input type="hidden" id="campaña" name="campaña" value="{{ old('campaña', $newEmployes->campana)}}">
<input type="hidden" id="estado" name="estado" value="{{ old('estado', $newEmployes->estado)}}">



        <div class="col-6 col-md-3"><strong><p>Cedula:</p></strong>{{ old('cedula', $contatacion->cedula)}}</div><br>
        <div class="col-6 col-md-3"><strong><p>Nombre:</p></strong>{{ old('cedula', $contatacion->nombre)}}</div><br>
        <div id="perfil" name="perfil" class="col-6 col-md-3"><strong><p>Perfil:</p></strong>{{ old('perfil', $contatacion->perfil)}}</div><br>
        <div class="col-6 col-md-3"><strong><p>Campaña:</p></strong>{{ old('campaña', $newEmployes->campana)}}</div>
    </div>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
    <!-- Force next columns to break to new line -->

    <div class="col">
    <span><strong>Foco</strong></span>
    <input list="foco" class="col-6 col-md-3" placeholder="Foco" required>
    <datalist id="foco" name="foco"  >
        <option value="">Foco</option>
    @foreach ($focos as $foco)
    <option value="{{ $foco->foco }}">{{ $foco->foco }}</option>
    @endforeach
    </datalist>

    <span><strong>Jefe inmediato</strong></span>
    <input list="jinmedato" class="col-6 col-md-3" placeholder="Jefe inmediato" required>
    <datalist id="jinmedato" name="jinmedato"  >
        <option value="">Coordinador</option>
        <option value="">Coordinador</option>
        @foreach ($cordinadores as $coordinador)
        <option value="{{$coordinador->supervisor}}">{{$coordinador->supervisor}}</option>

        @endforeach
    </datalist>

    <span><strong>Cargo</strong></span>
    <input list="cargo" class="col-6 col-md-3"  placeholder="Cargo" required>
    <datalist id="cargo" name="cargo"  >
        <option value="">Seleccione un cargo</option>
        @foreach ($cargos as $cargo)
        <option value="{{ $cargo->cargo}}">{{ $cargo->cargo }}</option>
    @endforeach
    </datalist>
</div>
<br>
<br>
<div class="row">

    <span><strong>Dependencia</strong></span>
    <select  style="height:30px, width:250px;" name="dependencia" id="dependencia"  required>
    <datalist id="dependencia" name="dependencia"  >
        <option value="" >Dependencias</option>
                        @foreach ($dependencias as $dependencia)
                        <option value="{{ $dependencia->dependencia}}">{{ $dependencia->dependencia }}</option>
                        @endforeach
                    </select>
    </datalist>


                <div> <strong><p>Area:</p></strong>
                    <select name="id_area" id="id_area" class="col-6 col-md"  placeholder="Area" required> </select>
                </div>

            </div>





    <div class="row">
    <textarea name="observaciones" id="observaciones" class="form-control" rows="3" placeholder="Observaciones de ingreso"></textarea>
</div>
<br>
    <div class="row">
                <input class="btn btn-primary btn-lg active" type="submit" value="Asignar">
                &nbsp;&nbsp;&nbsp;
               <a href="{{route('asignacion.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>
            </div>
        </div>
</div>
</div>
</div>
<br><br><br><br>
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
                    'ASIGNACIONES',
                    'Aqui podra asignar varias de las instancias del asesor dentro de la operacion, esta operacion no tiene limite de cambios.',
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
