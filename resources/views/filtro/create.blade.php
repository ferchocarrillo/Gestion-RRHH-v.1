@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
               {{-- <h3 aline="center" style="color:#DDE8EA">Formulario de Requisiciones</h3>--}}
            </center>


<form name="f1" action="{{ url('/filtro')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                    <form>


                      <div class="panel panel-default" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                        <div class="card text-center">
                            <div class="card-header">
                                <h2 aline="center" style="color:#EAF2F8"> Registro Inicial de Hojas de Vida</h2>
                              </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                                <div class="card-body">
            <p>
                <input type="date" id ="fregistro" name="fregistro" class="form-control" placeholder="fecha de registro" required>
            </p>
            <p>
                <input type="text" id ="nombre" name="nombre" class="form-control" placeholder="Nombre del postulado" required>
            </p>
            <p>
                <input type="number" id ="cedula" name="cedula" class="form-control" placeholder="Cedula del postulado" required>
            </p>
            <p>
                <input type="text" id ="telefono" name="telefono" class="form-control" placeholder="Telefono del postulado" required>
            </p>
            <p>
                <input type="mail" id ="correo" name="correo" class="form-control" placeholder="Correo del postulado" required>
            </p>


            <p>
                
                <select type="text" class="form-control" name="perfil" id="perfil" placeholder="Perfil">
                    <option value=>Perfiles</option>
                    @foreach($cargos as $cargo)<option value="{{ $cargo->cargo}}">
                        {{ $cargo->cargo }}</option>
                      @endforeach
                </select>
         </p>
            <p>
        <select name="campaña"  class="form-control" required>
                <option value="0" selected>Campaña
                    <option value="Vanti SAC (VTS)"> Vanti SAC (VTS)
                        <option value="Vanti seguros (VS)" >Vanti seguros (VS)
                            <option value="Movistar (MO)" >Movistar (MO)
                        <option value="ETB (E)" >ETB (E)
                    <option value="Cobranzas (CB)" >Cobranzas (CB)
                <option value="Administrativo (ADM)" >Administrativo (ADM)
            <option value="Staff (STA)" >Staff (STA)
        </select>
            </p>
            <p>
        <select name="fuente" id="fuente" class="form-control" required>
                <option value="0">Por donde conocio la Oferta</option>
                   <option value="Vincuventas">Vincuventas</option>
                       <option value="Computrabajo">Computrabajo</option>
                           <option value="SNE">SNE</option>
                               <option value="Compensar">Compensar</option>
                                   <option value="rt">Referidos Trabajadores</option>
                                <option value="rj">Referidos Jefes</option>
                            <option value="rc">Referidos Clientes</option>
                        <option value="univ">Universidades</option>
                    <option value="redes">Redes Sociales</option>
                <option value="hv">Hv Presenciales</option>
            <option value="funda">Fundaciones</option>
        </select>
           </p>
        </div>
     </div>
</div>
<div class="col-sm-6">
<div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<div class="card-body">

    <div class="card-header">
      <p><i><span style="font-family:Verdana;font-size:7mm;color:#EAF2F8;"><strong >  PRIMER FILTRO</strong></span></i></p>
    </div>
</p>
<fieldset class="form-group">
    <div class="row">
        <div class="col-sm-12">
          <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="card-body">

      <div style="width:200px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="citadoE" name="citadoE" value="Citado Entrevista">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Citado entrevista</label>
            </div>
          </td>
        </tr>
      </div>

    <div style="width:200px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="noAplica" name="noAplica" value="No Aplica">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No aplica</label>
            </div>
          </td>
        </tr>
      </div>

      <div style="width:200px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="noInteresado" name="noInteresado" value="no interesado">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No Interesado</label>
            </div>
          </td>
        </tr>
      </div>

      <div style="width:200px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="enviadoCapa" name="enviadoCapa" value="enviado capa">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Capacitacion</label>
            </div>
          </td>
        </tr>
      </div>

      <div style="width:200px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="enviadoExm" name="enviadoExm" value="enviado a exam">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Examenes</label>
            </div>
          </td>
        </tr>
      </div>
      <div style="width:300px">
        <tr valign="bottom">
         <td>
           <div style="float:left; width:100%; display:flex;">
               <input type="checkbox" id="PruebasE" name="PruebasE" value="Pruebas Eviadas">
               <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Pruebas Enviadas</label>
           </div>
         </td>

       </tr>
     </div>
     <div style="width:300px">
       <tr valign="bottom">
                     <td>
                       <div style="float:left; width:100%; display:flex;">
                           <input type="checkbox" id="yaTrabaja" name="yaTrabaja" value="Ya trabaja">
                           <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Ya Trabaja</label>
                       </div>
                     </td>

                   </tr>
                 </div>

                 <div style="width:300px">
                   <tr valign="bottom">
                                 <td>
                               <div style="float:left; width:100%; display:flex;">
                                     <input type="checkbox" id="numeroEqu" name="numeroEqu" value="Numero Equivocado">
                                     <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Numero Equivocado</label>
                               </div>
                               </td>
                               </tr>
                               </div>
                           <div>
                       </div>
                   </div>
               <div  class="card-header" style="font-size: 8mm" >
                                    <label for="observacion">Observaciones</label>
                                     <textarea class="form-control" id="observacion" name="observacion" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>
</div>
</fieldset>

<div class="form-row">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-primary btn-lg">
        <i class="fa fa-dot-circle-o"></i>REGISTRAR
    </button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{route('filtro.index')}}" class="btn btn-danger btn-lg" role="button" aria-pressed="true">Volver</a>

</div>
</form>


<!-- Bootstrap CSS-->
    <link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
<!-- Bootstrap JS-->
    <script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!--<script src="{{asset('js/Portabilidad.js')}}"></script>--            <script src="{{asset('js/app.js')}}"></script>
        </body>
        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop
        @section('js')
<script>
Swal.fire(
  'REGISTRO DE HV',
  'Registro de Hojas de Vida',
  'success'
)
</script>
@stop
@endsection
