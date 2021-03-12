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
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
                <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <h3 aline="center">Datos Generales</h3>
            </center>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->
            <form name="search-form" id="search-form" action="{{ url('/documento/'.$contratacions->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')

             <div class="card-header">
<center><h3 id="nombre" name="nombre">

    {{ old('nombre', $contratacions->nombre)}}
</h3></center>

             </div>

            <div class="container">
                <div class="row">
                  <div class="col">

            <div id="cedula" name="cedula" class="col-6 col-md-8"><strong><p>Cedula:</p></strong>{{ old('cedula', $contratacions->cedula)}}</div><br>
            <div id="correo" name="correo" class="col-6 col-md-8"><strong><p>Correo:</p></strong>{{ old('correo', $contratacions->correo)}}</div><br>
            <div id="fuente" name="fuente" class="col-6 col-md-8"><strong><p>Fuente:</p></strong>{{ old('fuente', $contratacions->fuente)}}</div><br>
            </div>

            <div class="col">
               
                <div id="cargos" name="cargos" class="col-6 col-md-8"><strong><p>Perfil:</p></strong>{{ old('cargos', $contratacions->cargos)}}</div><br>
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

<div class="row">

    &nbsp;&nbsp;&nbsp;&nbsp;  <div >
        <label for="hv">Hoja de<br>vida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input class="form-control-lg-new17" type="text" name="hv" id="hv" value="{{ old('hv', $contratacions->hv)}}">
    </div>
   
    <div >
        <label for="serv_publico">Recibo de servicio<br>publico</label>
       <input class="form-control-lg-new17" type="text" id="serv_publico" name="serv_publico" value="{{ old('serv_publico', $contratacions->serv_publico)}}">
    </div>
    
    <div >
        <label for="cert_bancaria">Certificacion<br>Bancaria</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" class="form-control-lg-new17" id="cert_bancaria" name="cert_bancaria"  value="{{ old('cert_bancaria', $contratacions->cert_bancaria)}}">
       </div>
      <div> <label for="bancos">Banco donde abrio<br>la cuenta:</label>
    
       <input list="bancos" type="text"  id="bancos" name="bancos" class="form-control-lg-new17" placeholder="Bancos" >

         <datalist name="bancos" id="bancos">
           <option value="{{ old('bancos', $contratacions->bancos)}}">Banco</option>
           @foreach($bancoses as $bancos)<option value="{{ $bancos->banco}}">
               {{ $bancos->banco }}</option>
             @endforeach
         </datalist>
        </div>
    </div>
       <br><br>
       <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp; <div >
                    <label for="ex_medico">Examenes<br>Medicos</label>
                    <input type="text" class="form-control-lg-new17" id="ex_medico" name="ex_medico"  value="{{ old('ex_medico', $contratacions->ex_medico)}}">
                </div>

                <div >
                    <label for="ant_procuraduria">Antecendentes<br>Procuraduria</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control-lg-new17" id="ant_procuraduria" name="ant_procuraduria"  value="{{ old('ant_procuraduria', $contratacions->ant_procuraduria)}}">
                </div>
                <div >
                    <label for="ant_ponal">Certificacion<br>Policia Nacional</label>
                    <input type="text" class="form-control-lg-new17" id="ant_ponal" name="ant_ponal"  value="{{ old('ant_ponal', $contratacions->ant_ponal)}}">
                </div>

                <div>
                    <label for="libreta_militar">Libreta Militar</label>
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                    <input type="text" class="form-control-lg-new17" id="libreta_militar" name="libreta_militar"  value="{{ old('libreta_militar', $contratacions->libreta_militar)}}">
                </div>
             

</div>
               
<br><br>     
                
     
  


            <div class="row">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div>
                    
                    <label for="copia_cedula">Copias<br>Cedula</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control-lg-new17" id="copia_cedula" name="copia_cedula"  value="{{ old('copia_cedula', $contratacions->copia_cedula)}}">
                </div>
                
                <div>
                    
                    &nbsp;<label for="cantidadcedula">Cantidad<br>de copias</label>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                <input id="cantidadcedula" name="cantidadcedula" class="form-control-lg-new17"  type="number" value={{ old('cantidadcedula', $contratacions->cantidadcedula)}}>

        </div>
   
        
        <div >
            <label for="cert_bachiller">Certificado<br>Bachiller</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="form-control-lg-new17" id="cert_bachiller" name="cert_bachiller"  value="{{ old('cert_bachiller', $contratacions->cert_bachiller)}}">
        </div>

        <div >
            <label for="cert_otros">Otras<br>Certificaciones</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="form-control-lg-new17" id="cert_otros" name="cert_otros"  value="{{ old('cert_otros', $contratacions->cert_otros)}}">
        </div>
       
    </div>
    <br><br> 
     
    <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div>
        <label for="cantidadcert">Cantidad<br>Cert.</label>
        &nbsp;
        <input id="cantidadcert" class="form-control-lg-new17" name="cantidadcert" class="col col-lg-4" type="text" value={{ old('cantidadcert', $contratacions->cantidadcert)}}>
    </div>

    <div>
        <label for="ref_laborales">Referencias<br>lab.</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;
        
        <input id="ref_laborales" class="form-control-lg-new17" name="ref_laborales" class="col col-lg-4" type="text" value={{ old('ref_laborales', $contratacions->ref_laborales)}}>
    </div>

    <div>
        <label for="cantidadlab">Cantidad&nbsp;&nbsp;&nbsp;&nbsp;<br>Ref.</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        <input id="cantidadlab" class="form-control-lg-new17" name="cantidadlab" class="col col-lg-4" type="text" value={{ old('cantidadlab', $contratacions->cantidadlab)}}>
    </div>
    <div>
        <label for="ref_personales">Referencias&nbsp;&nbsp;&nbsp;&nbsp;<br>Personales</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        <input id="ref_personales" class="form-control-lg-new17" name="ref_personales" class="col col-lg-4" type="text" value={{ old('ref_personales', $contratacions->ref_personales)}}>
    </div>


   
</div>
<br><br>
<div class="row">
    &nbsp;&nbsp;  &nbsp;&nbsp;
    <div>
        <label for="cantidadper">Cantidad<br>Ref.</label>
        &nbsp;      
        <input id="cantidadper" class="form-control-lg-new17" name="cantidadper" class="col col-lg-4" type="text" value={{ old('cantidadper', $contratacions->cantidadper)}}>
    </div>
    <div>
        <label for="cert_eps">Certificado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>EPS</label>
        &nbsp;      
        <input id="cert_eps" class="form-control-lg-new17" name="cert_eps" class="col col-lg-4" type="text" value={{ old('cert_eps', $contratacions->cert_eps)}}>
    </div>
    <div>
        <label for="cert_pensiones">Certificado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Pensiones</label>
        &nbsp;      
        <input id="cert_pensiones" class="form-control-lg-new17" name="cert_pensiones" class="col col-lg-4" type="text" value={{ old('cert_pensiones', $contratacions->cert_pensiones)}}>
    </div>
    <div>
        <label for="cert_cesantias">Certificado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Cesantias</label>
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;      
        <input id="cert_cesantias" class="form-control-lg-new17" name="cert_cesantias" class="col col-lg-4" type="text" value={{ old('cert_cesantias', $contratacions->cert_cesantias)}}>
    </div>
 
    

</div>

<br><br>
<div class="row">
    &nbsp;&nbsp;  &nbsp;&nbsp;
    <div>
        <label for="nucleo_familiar">Nucleo<br>Familiar</label>
        &nbsp;&nbsp; &nbsp;    
        <input id="nucleo_familiar" class="form-control-lg-new17" name="nucleo_familiar" class="col col-lg-4" type="text" value={{ old('nucleo_familiar', $contratacions->nucleo_familiar)}}>
    </div>

    <div>
        <label for="documentos">Documentos&nbsp;&nbsp;</label>
        &nbsp;&nbsp; &nbsp;    
        <input id="documentos" class="form-control-lg-new7" name="documentos" class="col col-lg-4" type="text" value={{ old('documentos', $contratacions->documentos)}}>
    </div>

</div>



<br><br>
<div class="row">
    &nbsp;&nbsp;  &nbsp;&nbsp;

    <div>
        <label for="observaciones">Observaciones</label>
        &nbsp;&nbsp; &nbsp;    
        <input id="observaciones" class="form-control-lg-new7" name="observaciones" class="col col-lg-4" type="text" value={{ old('observaciones', $contratacions->observaciones)}}>
    </div>
    <br><br>
</div>
<br><br>
  <div class="row">
    <div>&nbsp;&nbsp;&nbsp;
    <input class="form-control-lg-new7" type="radio" value="activo" id="estado" name="estado" required>
            <strong> <label for="estado">
                        El usuario quedara Registrado como Activo
                      </label></strong>
                    </div>
                      </div>

                      <div >
                        <input class="form-control-lg-new7" type="radio" value="inactivo" id="estado" name="estado" required>
              <strong> <label for="estado">
                          No continua con el proceso
                        </label></strong>
                      </div>
                   </div>
                </div>
<div class="form-group">
    @csrf
    @method('PUT')
                  <input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
                  &nbsp;&nbsp;&nbsp;
                 <a href="{{route('documento.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>

                </div>
</div>
<br><br>
</div>
<br><br>
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

