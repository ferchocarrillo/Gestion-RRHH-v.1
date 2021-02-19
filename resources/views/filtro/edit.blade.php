@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('filtro.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png" style="position:absolute; top:50px; left:800px; visibility:visible z-index:1" align= "auto" height="80" width="200">
<br>
<br>

<center>


<div class="page-header">
      <h3>Editor de registro de postulados</h3>
</div>
</center>
        </body>
<form action="{{ url('/filtro/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')

<div class="form-group">

    <div class="form-row">
   <div class="col-3">
       <label for="fregistro">Fecha de registro incial</label>
        <input type="date" class="form-control"
        id="fregistro"
        placeholder="Fregistro"
        name="fregistro"
        disabled
        value="{{ old('fregistro', $filtro->fregistro)}}">
    </div>
    <div class="col-3">
        <label for="cedula">Cedula</label>
         <input type="number" class="form-control"
         id="cedula"
         placeholder="cedula"
         name="cedula"
         value="{{ old('cedula', $filtro->cedula)}}">
        </div>
        <div class="col-3">
            <label for="cedula">Nombre</label>
             <input type="text" class="form-control"
             id="nombre"
             placeholder="cedula"
             name="nombre"
             value="{{ old('nombre', $filtro->nombre)}}">
            </div>
    <div class="col-3">
        <label for="telefono">Telefono</label>
           <input type="number"
           class="form-control"
           id="telefono"
           placeholder="telefono"
           name="telefono"
           value="{{ old('telefono' , $filtro->telefono)}}">
        </div>
    <div class="col-3">
        <label for="correo">Correo</label>
           <input type="mail"
           class="form-control"
           id="correo"
           placeholder="correo"
           name="correo"
           value="{{ old('correo' , $filtro->correo)}}">
        </div>
    <div class="col-3">
        <label for="perfil">Perfil</label>
           <input type="text"
           class="form-control"
           id="perfil"
           placeholder="perfil"
           name="perfil"
           value="{{ old('perfil' , $filtro->perfil)}}">
        </div>
    <div class="col-3">
        <label for="campaña">Campaña</label>
           <input type="text"
           class="form-control"
           id="campaña"
           placeholder="campaña"
           name="campaña"
           value="{{ old('campaña' , $filtro->campaña)}}">
        </div>
    <div class="col-3">
        <label for="fuente">Fuente</label>
           <input type="text"
           class="form-control"
           id="fuente"
           placeholder="fuente"
           name="fuente"
           value="{{ old('fuente' , $filtro->fuente)}}">
        </div>

    </div>
    <div class="col-14">
        <label for="dato inicial">Dato inicial</label>
        <textarea name="dato inicial" id="dato inicial" cols="150" rows="3"
                  disabled
           value="">{{$filtro->citadoE}} {{$filtro->noAplica}} {{$filtro->noInteresado}} {{$filtro->enviadoCapa}} {{$filtro->enviadoExm}} {{$filtro->PruebasE}} {{$filtro->yaTrabaja}} {{$filtro->numeroEqu}} {{$filtro->noAsiste}} {{$filtro->NoResponde2}} {{$filtro->YaNoInt}} {{$filtro->Estudiante}}  {{$filtro->noAsisteEnt}} {{$filtro->entrevistaJefeInm}} {{$filtro->entrevistaGerencia}} {{$filtro->enviadocontratacion}}</textarea>
        </div>
    </div>
    <div class="col-14">
        <label for="observacion">Observaciones</label>
           <input type="text"
           class="form-control"
           id="observacion"
           placeholder="observacion"
           name="observacion"
           value="{{ old('observacion' , $filtro->observacion)}}">
        </div>

    </div>

    <div class="col-sm-12">
        <div class="card">
        <div class="card-body">
        <center>            <p>
            <div class="card-header">
                Adicion al filtro inicial
            </div>
        </p></center>

        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">

              <div style="width:200px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="enviadoCapa" name="enviadoCapa" value="enviadoCapa">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Capacitacion</label>
            </div>
             </td>
              </tr>
               </div>

        <div style="width:200px">
          <tr valign="bottom">
            <td>
              <div style="float:left; width:100%; display:flex;">
                  <input type="checkbox" id="noAsiste" name="noAsiste" value="No Asiste capa">
                  <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No Asiste a Capacitación</label>
              </div>
            </td>
          </tr>
        </div>

            <div style="width:250px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="NoResponde2" name="NoResponde2" value="NoResponde2">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No Responde Segundo Llamado</label>
                    </div>
                  </td>
                </tr>
              </div>

              <div style="width:200px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="YaNoInt" name="YaNoInt" value="YaNoInt">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Ya No esta Interesado</label>
                    </div>
                  </td>
                </tr>
              </div>

               <div style="width:200px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="entrevistaJefeInm" name="entrevistaJefeInm" value="entrevistaJefeInm">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Entrevista jefe inmediato</label>
                    </div>
                  </td>
                </tr>
              </div>
              <div style="width:200px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="entrevistaGerencia" name="entrevistaGerencia" value="entrevistaGerencia">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Entrevista Gerencia</label>
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

              <div style="width:250px">
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

                         <div style="width:200px">
                           <tr valign="bottom">
                                         <td>
                                       <div style="float:left; width:100%; display:flex;">
                                             <input type="checkbox" id="Estudiante" name="Estudiante" value="Estudiante">
                                             <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Estudiante</label>
                                            </div>
                                        </td>
                                      </tr>
                                    </div>

                                    <div style="width:200px">
                                        <tr valign="bottom">
                                                      <td>
                                                    <div style="float:left; width:100%; display:flex;">
                                                          <input type="checkbox" id="noAsisteEnt" name="noAsisteEnt" value="noAsisteEnt">
                                                          <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No Asiste a Entrevista</label>
                                                         </div>
                                                     </td>
                                                   </tr>
                                                 </div>

                                     <div style="width:200px">
                                        <tr valign="bottom">
                                          <td>
                                            <div style="float:left; width:100%; display:flex;">
                                                <input type="checkbox" id="enviadocontratacion" name="enviadocontratacion" value="enviadocontratacion">
                                                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Contratación</label>
                                            </div>
                                          </td>
                                        </tr>
                                      </div>


                                </div>
                                </div>
                                </div>

                                <div class="col-sm-12">
                    <label for="observacion2">Observaciones</label>
                    <textarea class="form-control" id="observacion2" name="observacion2" rows="3"></textarea>
                </div>
            </div>
        </div>
<p>

    <input class="btn btn-lg btn-primary" type="submit" value="EDITAR">

    <a href="{{route('filtro.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a>
</p>
    </form>







      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')



      <script>
      Swal.fire(
        'REGISTRO',
        'Actualiza los datos de los postulados',
        'success'
      )
      </script>
      @stop

      @endsection
