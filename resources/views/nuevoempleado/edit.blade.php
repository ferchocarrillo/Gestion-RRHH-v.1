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
                <h3 aline="center">Datos Generales</h3>
            </center>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->
            <form name="f1" action="{{ url('/nuevoempleado/'.$nuevo->id_filtro)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')



            <div class="container">
                <div class="row">
                  <div class="col">

            <div id="cedula" name="cedula" class="col-6 col-md-8"><strong><p>Cedula:</p></strong>{{ old('cedula', $nuevo->cedula)}}</div><br>
            <div id="correo" name="correo" class="col-6 col-md-8"><strong><p>Correo:</p></strong>{{ old('correo', $nuevo->correo)}}</div><br>
            <div id="fuente" name="fuente" class="col-6 col-md-8"><strong><p>Fuente:</p></strong>{{ old('fuente', $filtro->fuente)}}</div><br>
            </div>

            <div class="col">
                <div id="nombre" name="nombre" class="col-6 col-md-8"><strong><p>Nombre:</p></strong>{{ old('nombre', $nuevo->nombres)}}</div><br>
                <div id="cargo" name="cargo" class="col-6 col-md-8"><strong><p>Cargo:</p></strong>{{ old('cargo', $nuevo->cargo)}}</div><br>
                <div id="campaña" name="campaña" class="col-6 col-md-8"><strong><p>Campaña:</p></strong>{{ old('campaña', $filtro->campaña)}}</div>
            </div>

            <div class="col">
                <div id="direccion" name="direccion" class="col-6 col-md-8"><strong><p>Direccion:</p></strong> {{old ('TipoVia',$nuevo->TipoVia)}} {{ $nuevo->dr1}} {{ $nuevo->Prefijo1}} # {{ $nuevo->dr2}} {{ $nuevo->Prefijo2}} {{ $nuevo->dr3}} {{ $nuevo->orientacion}} {{ $nuevo->adicional}} {{ $nuevo->ad1}} {{ $nuevo->adicional2}} {{ $nuevo->ad2}} {{ $nuevo->adicional3}} {{ $nuevo->ad3}}</div>
                <div id="" name="" class="col-6 col-md-8"><strong><p></p></strong>{{ old('telefono', $nuevo->xxxxxx)}}</div><br>
                <strong><p>Telefono:</p></strong><input type="number"id="telefono" name="telefono" class="col-6 col-md-8" value="{{ old('telefono', $nuevo->telefono)}}"><br>

            </div>

            <div class="col">
                <div id="residencia" name="residencia" class="col-6 col-md-8"><strong><p>Ciudad de Residencia:</p></strong>{{ old('residencia', $nuevo->residencia)}}</div><br>
                <div id="localidad" name="localidad" class="col-6 col-md-8"><strong><p>Localidad:</p></strong>{{ old('localidad', $nuevo->id_localidad)}}</div>
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
Swal.fire(
'EDICION DE DOCUMENTOS RECIBIDOS',
'Completa la lista de los documentos si hay algun pendiente',
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

