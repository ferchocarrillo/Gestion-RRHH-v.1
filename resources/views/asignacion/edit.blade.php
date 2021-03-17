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


            <form action="{{ url('/asignacion/'.$contatacion->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')



                <div class="container">
                    <div class="row">
<input type="hidden" id="id_filtro" name="id_filtro" value="{{$contatacion->id_filtro}}">
<input type="hidden" id="cedula" name="cedula" value="{{ old('cedula', $contatacion->cedula)}}">
<input type="hidden" id="nombres" name="nombres" value="{{ old('nombres', $contatacion->nombres)}}">
<input type="hidden" id="ingreso" name="ingreso" value="{{ old('ingreso', $contatacion->ingreso)}}">

<input type="hidden" id="estado" name="estado" value="{{ old('estado', $contatacion->estado)}}">
<input type="hidden" id="tipoDoc" name="tipoDoc" value="{{ old('tipoDoc', $contatacion->tipoDoc)}}">
<input type="hidden" id="fexpe" name="fexpe" value="{{ old('fexpe', $contatacion->fexpe)}}">
<input type="hidden" id="depNac" name="depNac" value="{{ old('depNac', $contatacion->depNac)}}">
<input type="hidden" id="id_ciudad" name="id_ciudad" value="{{ old('id_ciudad', $contatacion->id_ciudad)}}">
<input type="hidden" id="correo" name="correo" value="{{ old('correo', $contatacion->correo)}}">
<input type="hidden" id="tCelular" name="tCelular" value="{{ old('tCelular', $contatacion->tCelular)}}">
<input type="hidden" id="tFijo" name="tFijo" value="{{ old('tFijo', $contatacion->tFijo)}}">
<input type="hidden" id="eCivil" name="eCivil" value="{{ old('eCivil', $contatacion->eCivil)}}">
<input type="hidden" id="direccion" name="direccion" value="{{ old('direccion', $contatacion->direccion)}}">
<input type="hidden" id="residencia" name="residencia" value="{{ old('residencia', $contatacion->residencia)}}">
<input type="hidden" id="lugarNac" name="lugarNac" value="{{ old('lugarNac', $contatacion->lugarNac)}}">
<input type="hidden" id="edad" name="edad" value="{{ old('edad', $contatacion->edad)}}">
<input type="hidden" id="genero" name="genero" value="{{ old('genero', $contatacion->genero)}}">
<input type="hidden" id="rh" name="rh" value="{{ old('rh', $contatacion->rh)}}">
<input type="hidden" id="nivelEdu" name="nivelEdu" value="{{ old('nivelEdu', $contatacion->nivelEdu)}}">

<input type="hidden" id="corporativo" name="corporativo" value="{{ old('corporativo', $contatacion->corporativo)}}">
<input type="hidden" id="personaContacto" name="personaContacto" value="{{ old('personaContacto', $contatacion->personaContacto)}}">
<input type="hidden" id="parentesco" name="parentesco" value="{{ old('parentesco', $contatacion->parentesco)}}">
<input type="hidden" id="personaDireccion" name="personaDireccion" value="{{ old('personaDireccion', $contatacion->personaDireccion)}}">
<input type="hidden" id="contactof" name="contactof" value="{{ old('contactof', $contatacion->contactof)}}">
<input type="hidden" id="contactoCelular" name="contactoCelular" value="{{ old('contactoCelular', $contatacion->contactoCelular)}}">
<input type="hidden" id="numHijos" name="numHijos" value="{{ old('numHijos', $contatacion->numHijos)}}">
<input type="hidden" id="hijosMAs" name="hijosMAs" value="{{ old('hijosMAs', $contatacion->hijosMAs)}}">
<input type="hidden" id="hijosFem" name="hijosFem" value="{{ old('hijosFem', $contatacion->hijosFem)}}">
<input type="hidden" id="Preexistencia" name="Preexistencia" value="{{ old('Preexistencia', $contatacion->Preexistencia)}}">
<input type="hidden" id="alergias" name="alergias" value="{{ old('alergias', $contatacion->alergias)}}">
<input type="hidden" id="familiarp1" name="familiarp1" value="{{ old('familiarp1', $contatacion->familiarp1)}}">
<input type="hidden" id="familiarp2" name="familiarp2" value="{{ old('familiarp2', $contatacion->familiarp2)}}">
<input type="hidden" id="familiarp3" name="familiarp3" value="{{ old('familiarp3', $contatacion->familiarp3)}}">
<input type="hidden" id="familiarp4" name="familiarp4" value="{{ old('familiarp4', $contatacion->familiarp4)}}">
<input type="hidden" id="tipo_contratos" name="tipo_contratos" value="{{ old('tipo_contratos', $contatacion->tipo_contratos)}}">
<input type="hidden" id="cesantias" name="cesantias" value="{{ old('cesantias', $contatacion->cesantias)}}">
<input type="hidden" id="pensiones" name="pensiones" value="{{ old('pensiones', $contatacion->pensiones)}}">
<input type="hidden" id="eps" name="eps" value="{{ old('eps', $contatacion->eps)}}">
<input type="hidden" id="cajaComp" name="cajaComp" value="{{ old('cajaComp', $contatacion->cajaComp)}}">
<input type="hidden" id="ips" name="ips" value="{{ old('ips', $contatacion->ips)}}">
<input type="hidden" id="arl" name="arl" value="{{ old('arl', $contatacion->arl)}}">
<input type="hidden" id="Tcuenta" name="Tcuenta" value="{{ old('Tcuenta', $contatacion->Tcuenta)}}">
<input type="hidden" id="nCuenta" name="nCuenta" value="{{ old('nCuenta', $contatacion->nCuenta)}}">
<input type="hidden" id="bancos" name="bancos" value="{{ old('bancos', $contatacion->bancos)}}">
<input type="hidden" id="fuente" name="fuente" value="{{ old('fuente', $contatacion->fuente)}}">









        <div class="col-6 col-md-1"><strong><p>Cedula:</p></strong>{{ old('cedula', $contatacion->cedula)}}</div><br>
        <div class="col-6 col-md-1"><strong><p>Estado:</p></strong>{{ old('estado', $contatacion->estado)}}</div>
        <div class="col-6 col-md-3"><strong><p>Perfil:</p></strong>
          <p><input list="cargos" type="text" name="cargos" class="form-control-lg-new18" placeholder="Perfiles" >

            <datalist name="cargos" id="cargos">
              <option value="{{ old('perfil', $contatacion->perfil)}}">Perfiles</option>
              @foreach($cargos as $perfil)<option value="{{ $perfil->perfil}}">
                  {{ $perfil->perfil }}</option>
                @endforeach
            </datalist>
            </p>
        </div>

            <div class="col-6 col-md-3"><strong><p>Campaña:</p></strong>
                <p><input list="campaña" type="text" name="campaña" class="form-control-lg-new18" placeholder="Campaña" >

                  <datalist name="campaña" id="campaña">
                    <option value="{{ old('campaña', $contatacion->campaña)}}">Campaña</option>
                    @foreach($campañas as $campaña)<option value="{{ $campaña->campaña}}">
                        {{ $campaña->campaña }}</option>
                      @endforeach
                  </datalist>
                  </p>
                </div>


                <div class="col-6 col-md-3"><strong><p>Foco:</p></strong>

                    <p><input list="foco" type="text" name="foco"   class="form-control-lg-new18" required>
                               <datalist name="foco" id="foco" >
                                <option  value="{{ old('foco', $contatacion->foco)}}">Seleccion un foco</option>
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
    <p><input list="supervisor" type="text" name="supervisor"   class="form-control-lg-new18" required>
        <datalist name="supervisor" id="supervisor" >
         <option value=" {{ old('supervisor', $contatacion->supervisor)}}">Asigne uno</option>
         @foreach($supervisores as $supervisor)
     <option value="{{ $supervisor->supervisor}}">{{ $supervisor->supervisor }}</option>
         @endforeach
         </datalist>
         </p>
</div>

<div class="col-6 col-md-3">
    <span><strong>Sede</strong></span>

    <input list="sede" type="text" name="sede"   class="form-control-lg-new18" required>
    <datalist name="sede" id="sede" >
     <option value="{{ old('sede', $contatacion->sede)}}">Asigne una</option>
     @foreach($sedes as $sede)
    <option value="{{ $sede->sede}}">{{ $sede->sede }}</option>
     @endforeach
     </datalist>




</div>
<div class="col-6 col-md-3">
    <span><strong>Modadidad</strong></span>
<input list="modalidad" type="text" name="modalidad"   class="form-control-lg-new18" required>
               <datalist name="modalidad" id="modalidad" >
                <option value="{{ old('modalidad', $contatacion->modalidad)}}">Asigne una</option>
                @foreach($modalidades as $modalidad)
            <option value="{{ $modalidad->modalidad}}">{{ $modalidad->modalidad }}</option>
                @endforeach
                </datalist>
</div>
<div class="col-6 col-md-3">
    <span><strong>Tipo de Modadidad</strong></span>
    <input list="tipoModalidad" type="text" name="tipoModalidad"   class="form-control-lg-new18" required>
                   <datalist name="tipoModalidad" id="tipoModalidad" >
                    <option value="{{ old('tipoModalidad', $contatacion->tipoModalidad)}}">Asigne una</option>
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
