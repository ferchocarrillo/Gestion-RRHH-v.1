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
               <label for="foto">{{'Foto'}}</label>
               <input type="file" class="form-control" name="Foto" id "Foto" value="">


            </div>




<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-12 pt-0">Fuentes de Reclutamiento</legend>
      <div class="col-sm-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="vv" id="vv" value="vv">
          <label class="form-check-label" for="vv">
            Vincuventas
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="ct" id="ct" value="ct">
          <label class="form-check-label" for="ct">
            Computrabajo
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="checkbox" name="sne" id="sne" value="sne">
          <label class="form-check-label" for="sne">
            Servicio nacional de empleo
          </label>
        </div>
        <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="ccc" id="ccc" value="ccc">
            <label class="form-check-label" for="ccc">
                Compensar
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="rt" id="rt" value="rt">
            <label class="form-check-label" for="rt">
                Referidos Trabajadores
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="rj" id="rj" value="rj">
            <label class="form-check-label" for="rj">
                Referidos Jefes
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="rc" id="rc" value="rc">
            <label class="form-check-label" for="rc">
                Referidos Clientes
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="u" id="u" value="u">
            <label class="form-check-label" for="u">
                Universidades
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="rs" id="rs" value="rs">
            <label class="form-check-label" for="rs">
                Redes Sociales
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="checkbox" name="hv" id="hv" value="hv">
            <label class="form-check-label" for="hv">
                hv presencial
            </label>
          </div>
      </div>
    </div>
  </fieldset>



    </div>
</div>
</div>
</div>
</div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>REGISTRAR
            </button>
            <a href=({{ route('reclutamiento.create')}})><button type="reset"  class="btn btn-info btn-sm">
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
