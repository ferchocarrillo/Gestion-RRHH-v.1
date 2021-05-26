@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">


                <style>
                    .inputDoc{
                        height: calc(1.5em + 3rem + 0);
                        width: 160px;
                        /* width: calc(1.5em + 6.5rem + 18px); */
                        padding: 0.5rem;
                        font-size: 16px;
                        color:#cedae4 ;
                        border-radius: 0.9rem;
                        background-color: rgba(240, 70, 70, 0.972);
                        outline-offset: 3px;
                        text-align: center;
                    }
                    .lg-new17 {
    height: calc(1.5em + 3rem + 0);
    width: 160px;
    /* width: calc(1em + 6.5rem + 18px); */
    padding: 0.5rem;
    font-size: 16px;
    color:#113049 ;
    border-radius: 0.9rem;
    background-color: rgba(255, 255, 255, 0.972);
    outline-offset: 3px;
    text-align: center;

  }
  .lg-new18 {
    height: calc(1.5em + 3rem + 0);
    width: 160px;
    /* width: calc(1em + 6.5rem + 18px); */
    padding: 0.5rem;
    font-size: 16px;
    color:#113049 ;
    border-radius: 0.9rem;
    background-color: rgba(255, 255, 255, 0.972);
    outline-offset: 3px;
    text-align: center;

  }
  .lg-new7{
    height: calc(1.5em + 3rem + 0);
    width: 510px;
    /* width: calc(1em + 6.5rem + 18px); */
    padding: 0.5rem;
    font-size: 16px;
    color:#113049 ;
    border-radius: 0.9rem;
    background-color: rgba(255, 255, 255, 0.972);
    outline-offset: 3px;
    text-align: center;

  }
  p{
font-size: 15px;
font-weight: bold;
text-transform: capitalize;
font-family: Arial, Helvetica, sans-serif;
  }
  .labelNew{
      font-size: 13px;
      font-weight: bold;
      text-transform: capitalize;
      width: 165px;

  }
  table{
    width:1000px;
    font:normal 13px Arial;
    text-align:center;
    border-collapse:collapse;
    border: rgb(11, 69, 77) 5px solid;
    margin: 16px;
  padding: 0px;


  }
  table th {
    font:bold 18px Arial;
    background-color:rgb(108, 161, 179);
}
td{
    font:normal 17px Arial;
    border: rgb(6, 82, 95) 5px solid;
    background-color: #ffffff;
}

                                </style>

            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
                <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <h3 aline="center">Datos Generales</h3>
            </center>



            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->
            <form action="{{ url('/documento/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')

             <div class="card-header">
<center><h3 id="nombre" name="nombre">

    {{ old('nombre', $filtro->nombre)}}
</h3></center>

             </div>
            <div class="container">
                <table >
                    <thead>
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Campaña</th>
                        <th scope="col">Fuente</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Barrio y Localidad</th>
                        </tr>
                </thead>
                <tbody>
                        <tr>
                        <td>{{$filtro->cedula}}</td>
                        <td>{{$filtro->correo}}</td>
                        <td>{{$filtro->telefono}}</td>
                        <td>{{$filtro->cargo}}</td>
                        <td>{{$filtro->campaña}}</td>
                        <td>{{$filtro->fuente}}</td>
                        <td>{{ $filtro->TipoVia}} {{ $filtro->dr1}} {{ $filtro->Prefijo1}} # {{ $filtro->dr2}} {{ $filtro->Prefijo2}} {{ $filtro->dr3}} {{ $filtro->orientacion}} {{ $filtro->adicional}} {{ $filtro->ad1}} {{ $filtro->adicional2}} {{ $filtro->ad2}} {{ $filtro->adicional3}} {{ $filtro->ad3}}</td>
                        <td>{{old('barrio',$filtro->barrio)}} | {{ old('localidad', $filtro->id_localidad)}}</td>
                    </td>
                </tr>
                  </tbody>
                </table>
   </div>
           <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->

<center><h3>Documentos Recibidos y/o Pendientes</h3></center>
<hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
<!-- Force next columns to break to new line -->


<div class="row">
<div class="col-lg-4" >
    @if ($filtro->hv == "Pendiente")
    <label class="labelNew" for="hv">Hoja de vida</label>
    <input class="inputDoc" type="text" name="hv" id="hv" value="{{ old('hv', $filtro->hv)}}">
    @else
    <label class="labelNew" for="hv">Hoja de vida</label>
    <input class="lg-new17" type="text" name="hv" id="hv" value="{{ old('hv', $filtro->hv)}}">
    @endif
</div>
<div class="col-lg-4" >
    @if ($filtro->serv_publico == "Pendiente")
    <label class="labelNew" for="serv_publico">Recibo de servicio publico</label>
    <input class="inputDoc" type="text" id="serv_publico" name="serv_publico" value="{{ old('serv_publico', $filtro->serv_publico)}}">
    @else
    <label class="labelNew" for="serv_publico">Recibo de servicio publico</label>
    <input class="lg-new17" type="text" id="serv_publico" name="serv_publico" value="{{ old('serv_publico', $filtro->serv_publico)}}">
    @endif
</div>

<div class="col-lg-4" >
    @if ($filtro->cert_bancaria == "Pendiente")
    <label class="labelNew" for="cert_bancaria">Certificacion Bancaria</label>
    <input type="text" class="inputDoc" id="cert_bancaria" name="cert_bancaria"  value="{{ old('cert_bancaria', $filtro->cert_bancaria)}}">
    @else
    <label class="labelNew" for="cert_bancaria">Certificacion Bancaria</label>
    <input type="text" class="lg-new17" id="cert_bancaria" name="cert_bancaria"  value="{{ old('cert_bancaria', $filtro->cert_bancaria)}}">
    @endif
</div>
  </div>
  <br>

    <div class="row">
        <div class="col-lg-4" >
            @if (empty($filtro->bancos))
            <label class="labelNew" for="bancos">Banco donde abrio la cuenta:</label>
            <input type="text" class="inputDoc" id="bancos" name="bancos"  value="{{ old('bancos', $filtro->bancos)}}">
            @else
            <label class="labelNew" for="bancos">Banco donde abrio la cuenta:</label>
            <input type="text" class="lg-new18" id="bancos" name="bancos"  value="{{ old('bancos', $filtro->bancos)}}">
            @endif
         </div>
        <div class="col-lg-4" >
            @if ($filtro->ex_medico == "Pendiente")
            <label class="labelNew" for="ex_medico">Examenes Medicos</label>
            <input type="text" class="inputDoc" id="ex_medico" name="ex_medico"  value="{{ old('bancos', $filtro->ex_medico)}}">
            @else
            <label class="labelNew" for="ex_medico">Examenes Medicos</label>
            <input type="text" class="lg-new17" id="ex_medico" name="ex_medico"  value="{{ old('bancos', $filtro->ex_medico)}}">
            @endif
        </div>

    <div class="col-lg-4" >
        @if ($filtro->ant_procuraduria == "Pendiente")
        <label class="labelNew" for="ant_procuraduria">Antecendentes Procuraduria</label>
        <input type="text" class="inputDoc" id="ant_procuraduria" name="ant_procuraduria"  value="{{ old('ant_procuraduria', $filtro->ant_procuraduria)}}">
        @else
        <label class="labelNew" for="ant_procuraduria">Antecendentes Procuraduria</label>
        <input type="text" class="lg-new17" id="ant_procuraduria" name="ant_procuraduria"  value="{{ old('ant_procuraduria', $filtro->ant_procuraduria)}}">
        @endif
    </div>
</div>
<br>


<div class="row">
    <div class="col-lg-4" >
        @if ($filtro->ant_ponal == "Pendiente")
        <label class="labelNew" for="ant_ponal">Certificacion Policia Nacional</label>
        <input type="text" class="inputDoc" id="ant_ponal" name="ant_ponal"  value="{{ old('ant_ponal', $filtro->ant_ponal)}}">
        @else
        <label class="labelNew" for="ant_ponal">Certificacion Policia Nacional</label>
        <input type="text" class="lg-new17" id="ant_ponal" name="ant_ponal"  value="{{ old('ant_ponal', $filtro->ant_ponal)}}">
        @endif
    </div>
    <div class="col-lg-4" >
        @if ($filtro->libreta_militar == "No")
        <label class="labelNew" for="libreta_militar">Libreta Militar</label>
        <input type="text" class="inputDoc" id="libreta_militar" name="libreta_militar"  value="{{ old('libreta_militar', $filtro->libreta_militar)}}">
        @else
        <label class="labelNew" for="libreta_militar">Libreta Militar</label>
        <input type="text" class="lg-new17" id="libreta_militar" name="libreta_militar"  value="{{ old('libreta_militar', $filtro->libreta_militar)}}">
        @endif
    </div>
    <div class="col-lg-4" >
        @if ($filtro->copia_cedula == "Pendiente")
        <label class="labelNew" for="copia_cedula">Copias Cedula</label>
        <input type="text" class="inputDoc" id="libreta_militar" name="copia_cedula"  value="{{ old('copia_cedula', $filtro->copia_cedula)}}">
        @else
        <label class="labelNew" for="copia_cedula">Copias Cedula</label>
        <input type="text" class="lg-new17" id="copia_cedula" name="copia_cedula"  value="{{ old('copia_cedula', $filtro->copia_cedula)}}">
        @endif
    </div>
 </div>

 <br>
    <div class="row">
        <div class="col-lg-4" >
            @if ($filtro->cantidadcedula < 1)
            <label class="labelNew" for="cantidadcedula">Cantidad de copias</label>
            <input type="text" class="inputDoc" id="cantidadcedula" name="cantidadcedula"  value="{{ old('cantidadcedula', $filtro->cantidadcedula)}}">
            @else
            <label class="labelNew" for="cantidadcedula">Cantidad de copias</label>
            <input type="text" class="lg-new17" id="cantidadcedula" name="cantidadcedula"  value="{{ old('cantidadcedula', $filtro->cantidadcedula)}}">
            @endif
        </div>
        <div class="col-lg-4" >
            @if ($filtro->cert_bachiller == "Pendiente")
            <label class="labelNew" for="cert_bachiller">Certificado Bachiller</label>
            <input type="text" class="inputDoc" id="cert_bachiller" name="cert_bachiller"  value="{{ old('cert_bachiller', $filtro->cert_bachiller)}}">
            @else
            <label class="labelNew" for="cert_bachiller">Certificado Bachiller</label>
            <input type="text" class="lg-new17" id="cert_bachiller" name="cert_bachiller"  value="{{ old('cert_bachiller', $filtro->cert_bachiller)}}">
            @endif
        </div>
        <div class="col-lg-4" >
            @if ($filtro->cert_otros == "Pendiente")
            <label class="labelNew" for="cert_otros">Otras Certificaciones</label>
            <input type="text" class="inputDoc" id="cert_otros" name="cert_otros"  value="{{ old('cert_otros', $filtro->cert_otros)}}">
            @else
            <label class="labelNew" for="cert_otros">Otras Certificaciones</label>
            <input type="text" class="lg-new17" id="cert_otros" name="cert_otros"  value="{{ old('cert_otros', $filtro->cert_otros)}}">
            @endif
        </div>
</div>

<br>
<div class="row">
    <div class="col-lg-4" >
        @if ($filtro->cantidadcert <> NULL)
        <label class="labelNew" for="cantidadcert">Cantidad Cert.</label>
        <input type="text" class="inputDoc" id="cantidadcert" name="cantidadcert"  value="{{ old('cantidadcert', $filtro->cantidadcert)}}">
        @else
        <label class="labelNew" for="cantidadcert">Cantidad Cert.</label>
        <input type="text" class="lg-new17" id="cantidadcert" name="cantidadcert"  value="{{ old('cantidadcert', $filtro->cantidadcert)}}">
        @endif
    </div>
    <div class="col-lg-4" >
        @if ($filtro->ref_laborales == "Pendiente")
        <label class="labelNew" for="ref_laborales">Referencias Lab.</label>
        <input type="text" class="inputDoc" id="ref_laborales" name="ref_laborales"  value="{{ old('ref_laborales', $filtro->ref_laborales)}}">
        @else
        <label class="labelNew" for="ref_laborales">Referencias Lab.</label>
        <input type="text" class="lg-new17" id="ref_laborales" name="ref_laborales"  value="{{ old('ref_laborales', $filtro->ref_laborales)}}">
        @endif
    </div>
    <div class="col-lg-4" >
        @if ($filtro->cantidadlab < 2)
        <label class="labelNew" for="cantidadlab">Cantidad Ref.</label>
        <input type="text" class="inputDoc" id="cantidadlab" name="cantidadlab"  value="{{ old('cantidadlab', $filtro->cantidadlab)}}">
        @else
        <label class="labelNew" for="cantidadlab">Cantidad Ref.</label>
        <input type="text" class="lg-new17" id="cantidadlab" name="cantidadlab"  value="{{ old('cantidadlab', $filtro->cantidadlab)}}">
        @endif
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4" >
        @if ($filtro->ref_personales == "Pendiente")
        <label class="labelNew" for="ref_personales">Referencias Personales</label>
        <input type="text" class="inputDoc" id="ref_personales" name="ref_personales"  value="{{ old('ref_personales', $filtro->ref_personales)}}">
        @else
        <label class="labelNew" for="ref_personales">Referencias Personales</label>
        <input type="text" class="lg-new17" id="ref_personales" name="ref_personales"  value="{{ old('ref_personales', $filtro->ref_personales)}}">
        @endif
    </div>

    <div class="col-lg-4" >
        @if ($filtro->cantidadper < 2)
        <label class="labelNew" for="cantidadper">Cantidad Ref.</label>
        <input type="text" class="inputDoc" id="cantidadper" name="cantidadper"  value="{{ old('cantidadper', $filtro->cantidadper)}}">
        @else
        <label class="labelNew" for="cantidadper">Cantidad Ref.</label>
        <input type="text" class="lg-new17" id="cantidadper" name="cantidadper"  value="{{ old('cantidadper', $filtro->cantidadper)}}">
        @endif

    </div>
    <div class="col-lg-4" >
        @if ($filtro->cert_eps == "Pendiente")
        <label class="labelNew" for="cert_eps">Referencias Personales</label>
        <input type="text" class="inputDoc" id="cert_eps" name="cert_eps"  value="{{ old('cert_eps', $filtro->cert_eps)}}">
        @else
        <label class="labelNew" for="cert_eps">Referencias Personales</label>
        <input type="text" class="lg-new17" id="cert_eps" name="cert_eps"  value="{{ old('cert_eps', $filtro->cert_eps)}}">
        @endif
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4" >
        @if ($filtro->cert_pensiones == "Pendiente")
        <label class="labelNew" for="cert_pensiones">Certificado Pensiones</label>
        <input type="text" class="inputDoc" id="cert_pensiones" name="cert_pensiones"  value="{{ old('cert_pensiones', $filtro->cert_pensiones)}}">
        @else
        <label class="labelNew" for="cert_pensiones">Certificado Pensiones</label>
        <input type="text" class="lg-new17" id="cert_pensiones" name="cert_pensiones"  value="{{ old('cert_pensiones', $filtro->cert_pensiones)}}">
        @endif
    </div>

    <div class="col-lg-4" >
        @if ($filtro->cert_cesantias == "Pendiente")
        <label class="labelNew" for="cert_cesantias">Certificado Cesantias</label>
        <input type="text" class="inputDoc" id="cert_cesantias" name="cert_cesantias"  value="{{ old('cert_cesantias', $filtro->cert_cesantias)}}">
        @else
        <label class="labelNew" for="cert_cesantias">Certificado Cesantias</label>
        <input type="text" class="lg-new17" id="cert_cesantias" name="cert_cesantias"  value="{{ old('cert_cesantias', $filtro->cert_cesantias)}}">
        @endif
    </div>

    <div class="col-lg-4">
        <label class="labelNew" for="nucleo_familiar">Nucleo Familiar</label>

        <input id="nucleo_familiar" class="lg-new17" name="nucleo_familiar"  type="text" value={{ old('nucleo_familiar', $filtro->nucleo_familiar)}}>
    </div>
</div>
<br>
<div class="row">
       <div class="col-lg-6">
        <label class="labelNew" for="documentos">Documentos&nbsp;&nbsp;</label>

        <input id="documentos" class="lg-new7" name="documentos"  type="text" value={{ old('documentos', $filtro->documentos)}}>
    </div>

       <div class="col-lg-6">
        <label class="labelNew" for="obscont">Observaciones</label>

        <input id="obscont" class="lg-new7" name="obscont"  type="text" value={{ old('obscont', $filtro->obscont)}}>
    </div>

</div>
<br><br>
<div class="row">
    <div class="col-lg-6">
    <input class="form-control-lg-new7" type="radio" value="activo" id="estado" name="estado" required>
            <strong> <label for="estado">
                        El usuario quedara Registrado como Activo
     </label></strong>
    </div>
    <div class="col-lg-6">
    <input class="form-control-lg-new7" type="radio" value="inactivo" id="estado" name="estado" required>
            <strong> <label for="estado">
                          No continua con el proceso
            </label></strong>
</div>
<div class="row">
    &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-lg-3">
<input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-lg-3">

<a href="{{route('documento.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>
</div>
</form>
</div>
</div>
</div>
</div>





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

