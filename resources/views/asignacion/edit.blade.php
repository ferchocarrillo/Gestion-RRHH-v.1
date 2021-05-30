@extends('adminlte::page')
@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>


.inputclass{
width: 180px;
border-radius: 0.75rem;
height: calc(1.5em + 0.5rem + 5px);
background-color: #EAF2F8;
margin-left: 1rem;

    }

    .new15 {
        height: calc(1.5em + 0.5rem + 5px);
        width: calc(1.5em + 11rem + 10px);
        padding-top:6rem;
        padding: 0.5rem;
        font-size: 16px;
        color:#113049 ;
        border-radius: 0.9rem;
        background-color: #EAF2F8;
        outline-offset: 3px;
        text-align: left;
    
      }


</style>
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
                  <h3> {{ $filtro->nombre}}</h3>
                </div>
            </p></center>


            <form action="{{ url('/asignacion/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')



                <div class="container">
                    <div class="row">
        <div class="col-6 col-md-2"><strong><p>Cedula:</p></strong><input class="inputclass" type="text" value="{{ old('cedula', $filtro->cedula)}}" disabled ></div>&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-6 col-md-2"><strong><p>Estado:</p></strong><input class="inputclass" type="text" value="{{ old('estado', $filtro->estado)}}" disabled ></div>&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-6 col-md-2"><strong><p>Cargo:</p></strong><p><input list="cargos" type="text" name="cargo" class="inputclass" placeholder="Cargo">

            <datalist name="cargo" id="cargos">
              <option value="{{ old('cargo', $filtro->cargo)}}">Cargo</option>
              @foreach($cargos as $cargo)<option value="{{ $cargo->cargo}}">
                  {{ $cargo->cargo }}</option>
                @endforeach
            </datalist>
            </p>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="col-6 col-md-2"><strong><p>Campaña:</p></strong>
                <p><input list="campaña" type="text" name="campaña" class="inputclass" placeholder="Campaña" >

                  <datalist name="campaña" id="campaña">
                    <option value="{{ old('campaña', $filtro->campaña)}}">Campaña</option>
                    @foreach($campañas as $campaña)<option value="{{ $campaña->campaña}}">
                        {{ $campaña->campaña }}</option>
                      @endforeach
                  </datalist>
                  </p>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;


                <div class="col-6 col-md-2"><strong><p>Foco:</p></strong>

                    <p><input list="foco" type="text" name="foco"   class="inputclass" required>
                               <datalist name="foco" id="foco" >
                                <option  value="{{ old('foco', $filtro->foco)}}">Seleccion un foco</option>
                                @foreach($focos as $foco)<option value="{{ $foco->foco}}">
                                  {{ $foco->foco }}</option>
                                @endforeach
                                </datalist>
                            </p>
                </div>






    </div>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
    <!-- Force next columns to break to new line -->
    <div class="row">

<div class="col-6 col-md-3">
    <span><strong>Supervisor</strong></span>
    <p><input list="supervisor" type="text" name="supervisor"   class="new15" required>
        <datalist name="supervisor" id="supervisor" >
         <option value=" {{ old('supervisor', $filtro->supervisor)}}">Asigne uno</option>
         @foreach($supervisores as $supervisor)
     <option value="{{ $supervisor->supervisor}}">{{ $supervisor->supervisor }}</option>
         @endforeach
         </datalist>
         </p>
</div>

<div class="col-6 col-md-3">
    <span><strong>Sede</strong></span>

    <input list="sede" type="text" name="sede"   class="new15" required>
    <datalist name="sede" id="sede" >
     <option value="{{ old('sede', $filtro->sede)}}">Asigne una</option>
     @foreach($sedes as $sede)
    <option value="{{ $sede->sede}}">{{ $sede->sede }}</option>
     @endforeach
     </datalist>




</div>
<div class="col-6 col-md-3">
    <span><strong>Modadidad</strong></span>
<input list="modalidad" type="text" name="modalidad"   class="new15" required>
               <datalist name="modalidad" id="modalidad" >
                <option value="{{ old('modalidad', $filtro->modalidad)}}">Asigne una</option>
                @foreach($modalidades as $modalidad)
            <option value="{{ $modalidad->modalidad}}">{{ $modalidad->modalidad }}</option>
                @endforeach
                </datalist>
</div>
<div class="col-6 col-md-3">
    <span><strong>Tipo de Modadidad</strong></span>
    <input list="tipoModalidad" type="text" name="tipoModalidad"   class="new15" required>
                   <datalist name="tipoModalidad" id="tipoModalidad" >
                    <option value="{{ old('tipoModalidad', $filtro->tipoModalidad)}}">Asigne una</option>
                    @foreach($tipoModalidades as $tipoModalidad)
                <option value="{{ $tipoModalidad->tipoModalidad}}">{{ $tipoModalidad->tipoModalidad }}</option>
                    @endforeach
                    </datalist>
</div>


    </div>
<br>


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
