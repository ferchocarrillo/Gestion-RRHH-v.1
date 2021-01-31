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
                <h3 aline="center">Formulario de Ingreso</h3>
            </center>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->
            <form name="f1" action="{{ url('/nuevoempleado/'.$nuevo->id_filtro)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')
                <div class="col-sm-12">
                    <center><p>
                        <div class="p-3 mb-2 bg-info text-white">
                       <h3>{{ old('nombre', $nuevo->nombres)}}</h3>
                        </div>
                    </p></center>
                    </div>
                    </body>

                <div><input type="hidden" id="fuente" name="fuente" class="col-6 col-md-9" value="{{old('fuente', $filtro->fuente)}}" ></div><br>
            <div class="container">
    <div class="row">
            <div id="cedula" name="cedula" class="col-6 col-md-2"><strong><p>Cedula:</p></strong>{{ old('cedula', $nuevo->cedula)}}</div>
            <div id="fexpe" name="fexpe" class="col-6 col-md-3"><strong><p>Fecha de Expedicion:</p></strong><input type="date"id="fexpe" name="fexpe" class="col-6 col-md-10" value=""></div>
            <div id="depNac" name="depNac" class="col-6 col-md-3"><strong><p>Departamento de Expedicion:</p></strong>
                <select name="departamento" id="departamento" class="col-6 col-md-8" required> <label for="departamento"></label>
                    <option value="">Escoja uno</option>
                        @foreach($departamento as $departamentos)
                    <option value="{{ $departamentos->Nombre}}">{{ $departamentos->Nombre }}</option>
                        @endforeach
                </select>
            </div>
            <div id="depNac" name="depNac" class="col-6 col-md-4"><strong><p>Municipio o ciudad de Expedicion:</p></strong>

                <select name="id_ciudad" id="id_ciudad" "col-6 col-md-10" placeholder="Ciudad de Expedicion" required> </select>
            </div>

    </div>


    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

    <div class="row">


<div id="correo" name="correo" class="col-6 col-md-4"><strong><p>Correo:</p></strong>{{ old('correo', $nuevo->correo)}}</div>
</div>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

            <div class="row">

                <div id="cargo" name="cargo" class="col-6 col-md-4"><strong><p>Cargo:</p></strong>{{ old('cargo', $nuevo->cargo)}}</div><br>
                <div id="tCelular" name="tCelular" class="col-6 col-md-4"><strong><p>Celular:</p></strong><input type="number"id="tCelular" name="tCelular" class="col-6 col-md-4" value="{{ old('tCelular', $nuevo->tCelular)}}"></div><br>
                <div id="tFijo" name="tFijo" class="col-6 col-md-4"><strong><p>Tel Fijo:</p></strong><input type="number"id="tFijo" name="tFijo" class="col-6 col-md-4" value="{{ old('tFijo', $nuevo->tFijo)}}"></div><br>

            </div>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

            <div class="row">
                <div id="direccion" name="direccion" class="col-6 col-md-4"><strong><p>Direccion:</p></strong> {{old ('TipoVia',$nuevo->TipoVia)}} {{ $nuevo->dr1}} {{ $nuevo->Prefijo1}} # {{ $nuevo->dr2}} {{ $nuevo->Prefijo2}} - {{ $nuevo->dr3}} {{ $nuevo->orientacion}} {{ $nuevo->adicional}} {{ $nuevo->ad1}} {{ $nuevo->adicional2}} {{ $nuevo->ad2}} {{ $nuevo->adicional3}} {{ $nuevo->ad3}}</div><br><br><br>
                <div id="residencia" name="residencia" class="col-6 col-md-4"><strong><p>Ciudad de Residencia:</p></strong>{{ old('residencia', $nuevo->residencia)}}</div><br><br>
                <div id="localidad" name="localidad" class="col-6 col-md-4"><strong><p>Localidad:</p></strong>{{ old('localidad', $nuevo->id_localidad)}}</div><br><br>
            </div>

            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <div class="row">

                <div id="lugarNac" name="lugarNac" class="col-6 col-md-4"><strong><p>Lugar de nacimiento:</p></strong>{{ old('departamento', $nuevo->departamento)}} | {{old('id_ciudad', $nuevo->id_ciudad) }}</div><br>
                <div id="fnacimiento" name="fnacimiento" class="col-6 col-md-4" ><strong><p>Fecha de nacimiento:</p></strong>{{ old('fnacimiento', $nuevo->fnacimiento)}}</div><br><br>
                <div id="edad" name="edad" class="col-6 col-md-4"><strong><p>Edad:</p></strong>{{ old('edad', $nuevo->edad)}}</div>
            </div>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <div class="row">

                <div id="genero" name="genero" class="col-6 col-md-4"><strong><p>Genero:</p></strong>
                    <select type="text" name="genero" id="genero" class="col-6 col-md-5" placeholder="Genero"required>
                                            <option value="0">Escoja uno</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="otro">Otro</option>

                    </select>
                </div><br>
                <div id="rh" name="rh" class="col-6 col-md-4"><strong><p>RH:</p></strong>
                    <select type="text" name="rh" id="rh" class="col-6 col-md-5" placeholder="RH"required>
                                            <option value="0">Escoja uno</option>
                                            <option value="O-">O negativo</option>
                                            <option value="O+">O posiivo</option>
                                            <option value="A-">A negativo</option>
                                            <option value="A+">A positivo</option>
                                            <option value="B-">B negativo</option>
                                            <option value="B+">B positivo</option>
                                            <option value="AB-">AB negativo</option>
                                            <option value="AB+">AB positivo</option>
                    </select>
                </div>
                <div id="campaña" name="campaña" class="col-6 col-md-4"><strong><p>Campaña:</p></strong>{{ old('campaña', $filtro->campaña)}}</div>
            </div>
    </div>
    <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
    <div class="container">
        <div class="row">
            <div id="personaContacto" name="personaContacto" class="col-6 col-md-3"><strong><p>Persona de contacto:</p></strong><input type="text"id="personaContacto" name="personaContacto" class="col-6 col-md-10" required></div><br>
            <div id="parentezco" name="parentezco" class="col-6 col-md-3"><strong><p>Parentezco:</p></strong><input type="text"id="parentezco" name="parentezco" class="col-6 col-md-10" required></div><br>
            <div id="contactof" name="contactof" class="col-6 col-md-3"><strong><p>Telefono fijo contacto:</p></strong><input type="text"id="contactof" name="contactof" class="col-6 col-md-10" ></div><br>
            <div id="contactoCelular" name="contactoCelular" class="col-6 col-md-3"><strong><p>Celular de contacto:</p></strong><input type="text"id="contactoCelular" name="contactoCelular" class="col-6 col-md-10"required ></div><br>
    </div>
</div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<center><h3>Asignacion Inicial</h3></center>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
    <div class="row">

        <div id="foco" name="foco" class="col-6 col-md-4"><strong><p>Foco:</p></strong>
            <select type="text" name="foco" id="foco" class="col-8 col-md-12" placeholder="foco"required>
    <option  value="">Seleccion un foco</option>
    @foreach($focos as $foco)<option value="{{ $foco->foco}}">
      {{ $foco->foco }}</option>
    @endforeach
</select>
</div>

<div id="campana" name="campana" class="col-6 col-md-4"><strong><p>Campaña:</p></strong>
    <select type="text" name="campana" id="campana" class="col-8 col-md-12" placeholder="campana"required>
<option  value="">Seleccion un foco</option>
@foreach($campanas as $campana)<option value="{{ $campana->campana}}">
{{ $campana->campana }}</option>
@endforeach
</select>
</div>




</div>
</div>
<div class="form-group">
    @csrf
    @method('PUT')


                  <input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
                  &nbsp;&nbsp;&nbsp;
                 <a href="{{route('nuevoempleado.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>

                </div>



</div>




</form>

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

