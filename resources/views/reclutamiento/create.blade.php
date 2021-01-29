@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "center" height="70" width="150">
</body>
      <h1 align= "center" >Formulario de Publicaciones</h1>
      <form name="f1" action="{{ url('/reclutamiento')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
          {{csrf_field()}}
          <form>
              <div class="panel panel-default">
              <div class="card text-center">
                  <div class="card-header">
                      Datos de la Publicación
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">

<p>
            <input type="text" id ="titulo" name="titulo" class="form-control" placeholder="Titulo de la publicacion" required>
        </p>
        <p>
            <select name=foco  class="form-control" required>
               <option value="0" selected>Foco
               <option value="Ventas">Ventas
               <option value="Servicio al Cliente">Servicio al Cliente
               <option value="Cartera">Cartera
               <option value="Staff Administrativo">Staff Administrativo
               <option value="Staff Comercial">Staff Comercial
               <option value="Staff Operaciones">Staff Operaciones
               <option value="IT">IT
               <option value="Staff Datos y Metricas">Staff Datos y Metricas
               <option value="Staff Calidad">Staff Calidad
               <option value="Staff Formación">Staff Formación
               <option value="Staff Financiero">Staff Financiero
               <option value="Staff IT">Staff IT
               <option value="Staff RRHH">Staff RRHH
               <option value="Staff Validación">Staff Validación
               </select>
            </p>
            <p>
               <textarea class="form-control"  id ="informacion" name="informacion" rows="12" placeholder="Registre aqui la informacion que se publicara"></textarea>
            </p>
            </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
<p>
    <label for="finicio" class="text-left" >Fecha de inicio</label>
    <input type="date" id ="finicio" name="finicio" class="form-control" placeholder="Fecha de inicio" required>
</p>
            <p>
            <input type="text" id ="tiempo" name="tiempo" class="form-control" placeholder="Tiempo de Vigencia" required>
        </p>
        <label for="finicio" class="text-left" >Foto</label>
               <input type="file" class="form-control" name="Foto" id "Foto" value="">
            </div>
            <label for="publicacion" class="col-form-label col-sm-12 pt-0" >Fuentes de Publicacion</label>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">

      <div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="vv" name="vv" value="vincuventas">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Vincuventas</label>
            </div>
          </td>

        </tr>
      </div>

      <div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="ct" name="ct" value="computrabajo">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Computrabajo</label>
            </div>
          </td>

        </tr>
      </div>

      <div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:250%; display:flex;">
                <input type="checkbox" id="sne" name="sne" value="sne">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Servicio nacional de empleo</label>
            </div>
          </td>

        </tr>
      </div>

      <div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:100%; display:flex;">
                <input type="checkbox" id="ccc" name="ccc" value="compensar">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Compensar</label>
            </div>
          </td>

        </tr>
      </div>
          <div style="width:100px">
            <tr valign="bottom">
              <td>
                <div style="float:left; width:200%; display:flex;">
                    <input type="checkbox" id="rt" name="rt" value="rt">
                    <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Referidos Trabajadores</label>
                </div>
              </td>

            </tr>
          </div>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:200%; display:flex;">
                <input type="checkbox" id="rj" name="rj" value="rj">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Referidos Jefes</label>
            </div>
          </td>

        </tr>
      </div>
      <div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:200%; display:flex;">
                <input type="checkbox" id="rc" name="rc" value="rc">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Referidos Clientes</label>
            </div>
          </td>

        </tr>
      </div>
      <div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:200%; display:flex;">
                <input type="checkbox" id="univ" name="univ" value="univ">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Universidades</label>
            </div>
          </td>

        </tr>
      </div>
      <div style="width:100px">
        <tr valign="bottom">
          <td>
            <div style="float:left; width:200%; display:flex;">
                <input type="checkbox" id="redes" name="redes" value="redes">
                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Redes sociales</label>
            </div>
          </td>

        </tr>
      </div>
        <div style="width:100px">
          <tr valign="bottom">
            <td>
              <div style="float:left; width:200%; display:flex;">
                  <input type="checkbox" id="hv" name="hv" value="Hv">
                  <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Hv Presencial</label>
              </div>
            </td>
          </tr>
        </div>
        <div style="width:100px">
          <tr valign="bottom">
            <td>
              <div style="float:left; width:200%; display:flex;">
                  <input type="checkbox" id="fundaciones" name="fundaciones" value="fundaciones">
                  <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Fundaciones</label>
              </div>
            </td>
          </tr>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="form-row">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i>REGISTRAR
                </button>
                <a href=({{ route('reclutamiento.create')}})><button type="reset"  class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> VOLVER
                </button></a>
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
              'PUBLICACIONES',
              'Aqui podras registrar las ofertas laborales para luego publicarlas',
              'success'
            )
            </script>
            @stop
            @endsection
