@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="80" width="200">
<div class="page-header">
    <br>
      <h3>Checklist de documentos</h3>
</div>
</center>
<br>
<div class="conteiner">

    <center><p>
        <div class="card-header">
           <h3>{{( $filtro->nombre)}}</h3>
        </div>
    </p></center>
    </body>
    <form action="{{ url('/contratacion/')}}"
          method="POST"
          enctype="multipart/form-data"
          class="form-horizontal"
          style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          {{csrf_field()}}

        <div class="container">
<div class="card">
          <div class="row">

            {{--<div ><strong> Id:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $filtro->id }}</div> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;--}}
            &nbsp;&nbsp;&nbsp;
            <div><strong> Cedula:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $filtro->cedula }}</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
            <div><strong> Telefono: </strong>&nbsp;{{ $filtro->telefono }}</div>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
          <div><strong> Correo:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $filtro->correo }}</div>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

        </div>
        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <div class="row">
          &nbsp;&nbsp;&nbsp;<div><strong> Perfil:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;{{ $filtro->perfil }}</div>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div> <strong>Campaña:</strong>&nbsp;{{ $filtro->campaña }}</div>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div> <strong>Fuente:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $filtro->fuente }}</div>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        </div>
      </div>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

<center><h3>DOCUMENTOS SOLICITADOS</h3></center>
<hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
<div class="container">

    <div class="card-body" style="background-image: linear-gradient(#FFFFFF, #FEFFF1);">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
<p>
  <fieldset>
    <legend style="width: 300em"><strong><a style="color: red">* </a></strong>Hoja de vida actualizada con foto</legend>
    <input type="radio" required name="hv" id="hv1" value="si"><label for="hv1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
    <input type="radio" required name="hv" id="hv2" value="no"><label for="hv2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
    <input type="radio" required name="hv" id="hv3" value="pendiente"><label for="hv3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
  </fieldset>
</p>
</div>
</div>
</div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
  <p>
    <fieldset>
      <legend><strong><a style="color:red">* </a></strong>Fotocopia de  servicio publico</legend>
      <input type="radio" required name="serv_publico" id="serv_publico1" value="si"><label for="hv1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
      <input type="radio" required name="serv_publico" id="serv_publico2" value="no"><label for="hv2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
      <input type="radio" required name="serv_publico" id="serv_publico3" value="pendiente"><label for="hv3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
    </fieldset>
  </p>
</div>
</div>
</div>
</div>

 <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
<p>
  <fieldset>
    <legend style="width: 300em"><strong><a style="color:red">* </a></strong>Apertura cuenta de nomina</legend>
    <input type="radio" required name="cert_bancaria" id="cert_bancaria1" value="si"><label for="cert_bancaria1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
    <input type="radio" required name="cert_bancaria" id="cert_bancaria2" value="no"><label for="cert_bancaria2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
    <input type="radio" required name="cert_bancaria" id="cert_bancaria3" value="pendiente"><label for="cert_bancaria3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
    &nbsp;&nbsp;
    <input list="bancos" type="text" name="bancos"  style="width:200px" placeholder="Seleccione el banco" required>
    
    <datalist name="bancos" id="bancos" >
      <option value="">Seleccione el banco</option>
  
      @foreach($bancoses as $bancos)<option value="{{ $bancos->banco}}">
          {{ $bancos->banco }}</option>
        @endforeach
    </datalist>
  
  </fieldset>
  
  
 
</p>

</div>
</div>
</div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
  <p>
    <fieldset>
      <legend><strong><a style="color:red">* </a></strong>Examen Medico</legend>
      <input type="radio" required name="ex_medico" id="ex_medico1" value="si"><label for="ex_medico1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
      <input type="radio" required name="ex_medico" id="ex_medico2" value="no"><label for="ex_medico2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
      <input type="radio" required name="ex_medico" id="ex_medico3" value="pendiente"><label for="ex_medico3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
    </fieldset>
  </p>
</div>
</div>
</div>
</div>
{{--  --}}


<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<p>
<fieldset>
<legend style="width: 300em"><strong><a style="color: red">* </a></strong>Antecedentes disciplinarios procuraduría</legend>
<input type="radio" required name="ant_procuraduria" id="ant_procuraduria1" value="si"><label for="ant_procuraduria1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="ant_procuraduria" id="ant_procuraduria2" value="no"><label for="ant_procuraduria2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="ant_procuraduria" id="ant_procuraduria3" value="pendiente"><label for="ant_procuraduria3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
</fieldset>
</p>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<p>
<fieldset>
<legend><strong><a style="color:red">* </a></strong>Pasado judicial Policía Nacional</legend>
<input type="radio" required name="ant_ponal" id="ant_ponal1" value="si"><label for="ant_ponal1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="ant_ponal" id="ant_ponal2" value="no"><label for="ant_ponal2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="ant_ponal" id="ant_ponal3" value="pendiente"><label for="ant_ponal3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
</fieldset>
</p>
</div>
</div>
</div>
</div>



<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<p>
<fieldset>
<legend style="width: 300em"><strong><a style="color: red">* </a></strong>5 fotocopias CC ampliada al 150%</legend>
<input type="radio" required name="copia_cedula" id="copia_cedula1" value="si"><label for="copia_cedula1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="copia_cedula" id="copia_cedula2" value="no"><label for="copia_cedula2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="copia_cedula" id="copia_cedula3" value="pendiente"><label for="copia_cedula3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
&nbsp;&nbsp;&nbsp;<input type="text" id="cantidadcedula" name="cantidadcedula" style="width:200px"  placeholder="Cantidad entregada" >
</fieldset>
</p>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<p>
<fieldset>
<legend><strong><a style="color:red">* </a></strong>Copia libreta militar</legend>
<input type="radio" required name="libreta_militar" id="libreta_militar1" value="si"><label for="libreta_militar1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="libreta_militar" id="libreta_militar2" value="no"><label for="libreta_militar2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="libreta_militar" id="libreta_militar3" value="no aplica"><label for="libreta_militar3"><i>&nbsp;&nbsp;&nbsp;</i>No aplica</label>

</fieldset>
</p>
</div>
</div>
</div>
</div>



<strong><center>CERTIFICADOS DE ESTUDIOS</center></strong>


<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<p>
<fieldset>
<legend style="width: 300em"><strong><a style="color: red">* </a></strong>Certificado de bachiller</legend>
<input type="radio" required name="cert_bachiller" id="cert_bachiller1" value="si"><label for="cert_bachiller1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="cert_bachiller" id="cert_bachiller2" value="no"><label for="cert_bachiller2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="cert_bachiller" id="cert_bachiller3" value="pendiente"><label for="cert_bachiller3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>

</fieldset>
</p>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<p>
<fieldset>
<legend><strong><a style="color:red">* </a></strong>Técnico, tecnólogo o profesional</legend>
<input type="radio" required name="cert_otros" id="cert_otros1" value="si"><label for="cert_otros1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="cert_otros" id="cert_otros2" value="no"><label for="cert_otros2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="cert_otros" id="cert_otros3" value="pendiente"><label for="cert_otros3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
&nbsp;&nbsp;&nbsp;<input type="number" id="cantidadcert"style="width:200px" name="cantidadcert" placeholder="Cantidad entregada" >
</fieldset>
</p>
</div>
</div>
</div>
</div>

<strong><center>REFERENCIAS</center></strong>



<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<p>
<fieldset>
<legend style="width: 300em"><strong><a style="color: red">* </a></strong>2 referencias laborales últimos empleos</legend>
<input type="radio" required name="ref_laborales" id="ref_laborales1" value="si"><label for="ref_laborales1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="ref_laborales" id="ref_laborales2" value="no"><label for="ref_laborales2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="ref_laborales" id="ref_laborales3" value="pendiente"><label for="ref_laborales3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
&nbsp;&nbsp;&nbsp;<input type="number" id="cantidadlab"style="width:200px" name="cantidadlab" placeholder="Cantidad entregada" >
</fieldset>
</p>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<p>
<fieldset>
<legend><strong><a style="color:red">* </a></strong>2 referencias personales en original</legend>
<input type="radio" required name="ref_personales" id="ref_personales1" value="si"><label for="ref_personales1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="ref_personales" id="ref_personales2" value="no"><label for="ref_personales2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="ref_personales" id="ref_personales3" value="pendiente"><label for="ref_personales3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
&nbsp;&nbsp;&nbsp;<input type="number" id="cantidadper"style="width:200px" name="cantidadper" placeholder="Cantidad entregada" >
</fieldset>
</p>
</div>
</div>
</div>
</div>

<strong><center>AFILIACION A EPS, CCF</center></strong>

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
<p>
<fieldset>
<legend style="width: 300em"><strong><a style="color: red">* </a></strong>Certificado EPS</legend>
<input type="radio" required name="cert_eps" id="cert_eps1" value="si"><label for="cert_eps1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="cert_eps" id="cert_eps2" value="no"><label for="cert_eps2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="cert_eps" id="cert_eps3" value="pendiente"><label for="cert_eps3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
</fieldset>
</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="card">
<div class="card-body">
<p>
<fieldset>
<legend><strong><a style="color:red">* </a></strong>Certificado Pensiones</legend>
<input type="radio" required name="cert_pensiones" id="cert_pensiones1" value="si"><label for="cert_pensiones1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="cert_pensiones" id="cert_pensiones2" value="no"><label for="cert_pensiones2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="cert_pensiones" id="cert_pensiones3" value="pendiente"><label for="cert_pensiones3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>

</fieldset>
</p>
</div>
</div>
</div>

<div class="col-sm-4">
  <div class="card">
  <div class="card-body">
  <p>
  <fieldset>
  <legend><strong><a style="color:red">* </a></strong>Certificado Cesantias</legend>
  <input type="radio" required name="cert_cesantias" id="cert_cesantias1" value="si"><label for="cert_cesantias1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
  <input type="radio" required name="cert_cesantias" id="cert_cesantias2" value="no"><label for="cert_cesantias2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
  <input type="radio" required name="cert_cesantias" id="cert_cesantias3" value="pendiente"><label for="cert_cesantias3"><i>&nbsp;&nbsp;&nbsp;</i>Pendiente</label>
  
  </fieldset>
  </p>
  </div>
  </div>
  </div>
</div>

<strong><center>OTROS DOCUMENTOS</center></strong>


<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<p>
<fieldset>
<legend style="width: 300em"><strong><a style="color: red">* </a></strong>Documentos nucleo familiar</legend>
<input type="radio" required name="nucleo_familiar" id="nucleo_familiar1" value="si"><label for="nucleo_familiar1"><i>&nbsp;&nbsp;&nbsp;</i>Sí</label>
<input type="radio" required name="nucleo_familiar" id="nucleo_familiar2" value="no"><label for="nucleo_familiar2"><i>&nbsp;&nbsp;&nbsp;</i>No</label>
<input type="radio" required name="nucleo_familiar" id="nucleo_familiar3" value="no aplica"><label for="nucleo_familiar3"><i>&nbsp;&nbsp;&nbsp;</i>No aplica</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i>Relacionelos Aqui</i><textarea type="text" class="form-control" id="documentos" rows="3"  col="20" name="documentos" > </textarea>

</fieldset>
</p>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<p>
<fieldset>
<legend><strong><a style="color:red"> </a></strong>Observaciones Generales</legend>
&nbsp;&nbsp;&nbsp;<textarea type="text" class="form-control" id="observaciones" rows="3"  col="20" name="observaciones" ></textarea>
</fieldset>
</p>
</div>
</div>
</div>
</div>

<div class="col-2"><input type="hidden" class="form-control" id="id_filtro"  name="id_filtro" value="{{ old('id_filtro', $filtro->id)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono', $filtro->telefono)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="correo" placeholder="correo" name="correo" value="{{ old('correo', $filtro->correo)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="perfil" placeholder="perfil" name="perfil" value="{{ old('perfil', $filtro->perfil)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="campaña" placeholder="campaña" name="campaña" value="{{ old('campaña', $filtro->campaña)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="fuente" placeholder="fuente" name="fuente" value="{{ old('fuente', $filtro->fuente)}}"></div>

<div class="col-2"><input type="hidden" class="form-control" id="residencia" placeholder="residencia" name="residencia" value="{{ old('residencia', $entrevista1ses->residencia)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="id_localidad" placeholder="id_localidad" name="id_localidad" value="{{ old('id_localidad', $entrevista1ses->id_localidad)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="estado" placeholder="estado" name="estado" value="activo"></div>



</div>


<input class="btn btn-lg btn-primary" type="submit" value="Registrar">
<a href="{{route('contratacion.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Volver</a>

</div>











          
    </div>
</div>
</fieldset>
</form>
</div>

      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')
      <script>
      Swal.fire(
        'ENTREVISTA',
        'Aqui podras registrar algunas generalidades',
        'success'
      )
      </script>
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
    $(document).ready(function() {
         $('#residencia').on('change', function(e) {
             var id = $('#residencia').val();
             $.ajax({
                 url: "{{ route('Ciudad2')}}",
                 data: "id="+id+"&_token={{ csrf_token()}}",
                 dataType: "json",
                 method: "POST",
                 success: function(result)
                 {

                     $('#id_localidad').empty();
                     $('#id_localidad').append("<option value=''>localidad</option>");
                     $.each(result, function(index,value){

                         $('#id_localidad').append("<option value='"+value.localidad+"'>"+value.localidad+"</option>");
                     });
                 }
             });
         });
     });
 </script>

 @stop

      @endsection
