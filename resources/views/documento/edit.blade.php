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
            <form name="f1" action="{{ url('/documento/'.$contratacions->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')



            <div class="container">
                <div class="row">
                  <div class="col">

            <div id="cedula" name="cedula" class="col-6 col-md-8"><strong><p>Cedula:</p></strong>{{ old('cedula', $contratacions->cedula)}}</div><br>
            <div id="correo" name="correo" class="col-6 col-md-8"><strong><p>Correo:</p></strong>{{ old('correo', $contratacions->correo)}}</div><br>
            <div id="fuente" name="fuente" class="col-6 col-md-8"><strong><p>Fuente:</p></strong>{{ old('fuente', $contratacions->fuente)}}</div><br>
            </div>

            <div class="col">
                <div id="nombre" name="nombre" class="col-6 col-md-8"><strong><p>Nombre:</p></strong>{{ old('nombre', $contratacions->nombre)}}</div><br>
                <div id="perfil" name="perfil" class="col-6 col-md-8"><strong><p>Perfil:</p></strong>{{ old('perfil', $contratacions->perfil)}}</div><br>
                <div id="campaña" name="campaña" class="col-6 col-md-8"><strong><p>Campaña:</p></strong>{{ old('campaña', $contratacions->campaña)}}</div>
            </div>

            <div class="col">
                <div id="telefono" name="telefono" class="col-6 col-md-8"><strong><p>Telefono:</p></strong>{{ old('telefono', $contratacions->telefono)}}</div><br>
                <div id="residencia" name="residencia" class="col-6 col-md-8"><strong><p>Residencia:</p></strong>{{ old('residencia', $contratacions->residencia)}}</div><br>
                <div id="localidad" name="localidad" class="col-6 col-md-8"><strong><p>Localidad:</p></strong>{{ old('localidad', $contratacions->id_localidad)}}</div>
            </div>
        </div>
    </div>

           <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->

<center><h3>Documentos Recibidos y/o Pendientes</h3></center>


<hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
<!-- Force next columns to break to new line -->

<div class="form-row">

    <div class="form-group col-md-1">
        <label for="hv">Hoja de vida</label>
        <input style="width:50px" type="text" name="hv" id="hv" value="{{ old('hv', $contratacions->hv)}}">
    </div>
    <div class="form-group col-md-2">
        <label for="serv_publico">Recibo de servicio publico</label>
       <input style="width:50px" type="text" id="serv_publico" name="serv_publico" value="{{ old('serv_publico', $contratacions->serv_publico)}}">
    </div>

    <div class="form-group col-md-1">
        <label for="cert_bancaria">Certificacion Bancaria</label>
        <input type="text" style="width:50px" id="cert_bancaria" name="cert_bancaria"  value="{{ old('cert_bancaria', $contratacions->cert_bancaria)}}">
       </div>
       &nbsp;&nbsp;  &nbsp;&nbsp;

       <div class="col-6 col-md-3"><strong><p>Banco donde abrio la cuenta:</p></strong>
        <p><input list="bancos" type="text" name="cargos" class="form-control" placeholder="Bancos" >

          <datalist name="bancos" id="bancos">
            <option value="{{ old('bancos', $contratacions->bancos)}}">Banco</option>
            @foreach($bancoses as $bancos)<option value="{{ $bancos->banco}}">
                {{ $bancos->banco }}</option>
              @endforeach
          </datalist>
          </p>
      </div>




                <div class="form-group col-md-1">
                    <label for="ex_medico">Examenes Medicos</label>
                    <input type="text" style="width:50px" id="ex_medico" name="ex_medico"  value="{{ old('ex_medico', $contratacions->ex_medico)}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="ant_procuraduria">Antecendentes Procuraduria</label>
                    <input type="text" style="width:50px" id="ant_procuraduria" name="ant_procuraduria"  value="{{ old('ant_procuraduria', $contratacions->ant_procuraduria)}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="ant_ponal">Certificacion Policia Nacional</label>
                    <input type="text" style="width:50px" id="ant_ponal" name="ant_ponal"  value="{{ old('ant_ponal', $contratacions->ant_ponal)}}">
                </div>
        </div>

<hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
<!-- Force next columns to break to new line -->
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="copia_cedula">Copias Cedula&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" style="width:50px" id="copia_cedula" name="copia_cedula"  value="{{ old('copia_cedula', $contratacions->copia_cedula)}}">

                <label for="cantidadcedula">Cantidad de copias&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input id="cantidadcedula" name="cantidadcedula" style="width:50px"  type="number" value={{ old('cantidadcedula', $contratacions->cantidadcedula)}}>

        </div>
        <div class="form-group col-auto">
            <label for="libreta_militar">Libreta Militar</label>
            <input type="text" style="width:60px" id="libreta_militar" name="libreta_militar"  value="{{ old('libreta_militar', $contratacions->libreta_militar)}}">
        </div>
        <div class="form-group col-auto">
            <label for="cert_bachiller">Certificado Bachiller</label>
            <input type="text" style="width:50px" id="cert_bachiller" name="cert_bachiller"  value="{{ old('cert_bachiller', $contratacions->cert_bachiller)}}">
        </div>

        <div class="form-group col-auto">
            <label for="cert_otros">Otras Certificaciones</label>
            <input type="text" style="width:50px" id="cert_otros" name="cert_otros"  value="{{ old('cert_otros', $contratacions->cert_otros)}}">
        </div>
        <div class="form-group col-auto">
            <label for="cantidadcert">Cantidad Certificados</label>
            <input id="cantidadcert" style="width:50px" name="cantidadcert" class="col col-lg-4" type="text" value={{ old('cantidadcert', $contratacions->cantidadcert)}}>

            </div>

    </div>


<hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
<!-- Force next columns to break to new line -->

<div class="form-row">

        <div class="form-group col-md-3">
            <label for="ref_laborales">Referencias Lab&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input id="ref_laborales" style="width:50px" name="ref_laborales" style="width:70px" type="text" value={{ old('ref_laborales', $contratacions->ref_laborales)}}>
            <label for="cantidadlab">Cantidad Referencias</label>
            <input id="cantidadlab" style="width:50px" name="cantidadlab" style="width:70px" type="text" value={{ old('cantidadlab', $contratacions->cantidadlab)}}>
            </div>


        <div class="form-group col-md-3">
            <label for="ref_personales">Referencias Personales&nbsp;&nbsp;</label>
            <input id="ref_personales" style="width:50px" name="ref_personales" style="width:70px" type="text" value={{ old('ref_personales', $contratacions->ref_personales)}}>
            <label for="cantidadper">Cantidad Referencias&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input id="cantidadper" style="width:50px" name="cantidadper" style="width:70px" type="text" value={{ old('cantidadper', $contratacions->cantidadper)}}>
        </div>

        <div class="form-group col-md-2">
            <label for="cert_eps">Certificado EPS</label>
            <input type="text" style="width:60px" id="cert_eps" name="cert_eps"  value="{{ old('cert_eps', $contratacions->cert_eps)}}">
        </div>

        <div class="form-group col-md-2">
            <label for="cert_pensiones">Certificado Pensiones</label>
            <input type="text" style="width:60px" id="cert_pensiones" name="cert_pensiones"  value="{{ old('cert_pensiones', $contratacions->cert_eps)}}">
        </div>
        <div class="form-group col-md-2">
            <label for="cert_cesantias">Certificado Cesantias</label>
            <input type="text" style="width:60px" id="cert_cesantias" name="cert_cesantias"  value="{{ old('cert_cesantias', $contratacions->cert_cesantias)}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="nucleo_familiar">Nucleo Familiar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" style="width:50px" id="nucleo_familiar" name="nucleo_familiar"  value="{{ old('nucleo_familiar', $contratacions->nucleo_familiar)}}">
        </div>

        <div class="input-group">
            <div class="input-group input-group-lg">
            <span class="input-group-text">Documentos&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <textarea class="form-control" id="documentos" name="documentos" aria-label="With textarea"> {{ old('documentos', $contratacions->documentos)}}</textarea>
        </div>
    </div>


</div>




                 <div class="input-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-text">Observaciones</span>

                    <textarea id="observaciones" name="observaciones" class="form-control" aria-label="With textarea">{{ old('observaciones', $contratacions->observaciones)}}</textarea>



                </div>




                </div>
            </div>


                  <hr width=90%  align="center"  size=3  style="border:1px inset ; noshade="noshade">





                 <!-- Force next columns to break to new line -->

                 <div class="row">


                  <div class="form-group">
                         <div class="form-group">
                    <div class="form-check">&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" value="activo" id="estado" name="estado" required>
            <strong> <label class="form-check-label" for="estado">
                        El usuario quedara Registrado como Activo
                      </label></strong>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="form-check">&nbsp;&nbsp;&nbsp;
                      <input class="form-check-input" type="radio" value="inactivo" id="estado" name="estado" required>
            <strong> <label class="form-check-label" for="estado">
                        No continua con el proceso
                      </label></strong>
                    </div>
                  </div>


                </div>

                 <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                 <!-- Force next columns to break to new line -->
<div class="form-group">
    @csrf
    @method('PUT')


                  <input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
                  &nbsp;&nbsp;&nbsp;
                 <a href="{{route('documento.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>

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

