@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('filtro.index')}}"><img src="https://images.cooltext.com/5506399.png" style="margin-left: 8rem; heigth: 90px; width:80px;" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8); width: 90%; margin-left:5rem;" >
<lin rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png" style="position:absolute; top:50px; left:80px; visibility:visible z-index:1; width: 25%; margin-left:45rem;  align: center;">
    br
<br>
<br>

<center>


<div class="page-header">
    <br>
      <h3>Editor de registro de postulados</h3>
      <br>
</div>
</center>
        </body>
<form action="{{ url('/filtro/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')
<div class="form-group">
    <div class="form-row">
   <div class="col-3">
       <label for="fregistro">Registro</label>
        <input type="date" class="form-control-lg-new9"
        id="fregistro"
        placeholder="Fregistro"
        name="fregistro"

        value="{{ old('fregistro', $filtro->fregistro)}}"disabled>
    </div>
    <div class="col-3">
        <label for="cedula">Cedula;</label>
         <input type="number" class="form-control-lg-new9"
         id="cedula"
         placeholder="cedula"
         name="cedula"
         value="{{ old('cedula', $filtro->cedula)}}"disabled>
        </div>
    <div class="col-3">
        <label for="cedula">Nombre&nbsp;&nbsp</label>
         <input type="text" class="form-control-lg-new9"
         id="nombre"
         placeholder="cedula"
         name="nombre"
         value="{{ old('nombre', $filtro->nombre)}}"disabled>
        </div>
    <div class="col-3">
        <label for="telefono">Telefono</label>
           <input type="number"
           class="form-control-lg-new9"
           id="telefono"
           placeholder="telefono"
           name="telefono"
           value="{{ old('telefono' , $filtro->telefono)}}"disabled>
        </div>
    <div class="col-3">
        <br>
        <label for="correo">Correo&nbsp;&nbsp</label>
           <input type="mail"
           class="form-control-lg-new9"
           id="correo"
           placeholder="correo"
           name="correo"
           value="{{ old('correo' , $filtro->correo)}}"disabled>
        </div>

    <div class="col-3">
        <br>
        <label for="perfil">Perfil&nbsp;&nbsp&nbsp;</label>
           <input type="text"
           class="form-control-lg-new9"
           id="cargo"
           placeholder="cargo"
           name="cargo"
           value="{{ old('cargo' , $filtro->cargo)}}"disabled>
        </div>

    <div class="col-3">
        <br>
        <label for="campaña">Campaña</label>
           <input type="text"
           class="form-control-lg-new9"
           id="campaña"
           placeholder="campaña"
           name="campaña"
           value="{{ old('campaña' , $filtro->campaña)}}" disabled>
        </div>

    <div class="col-3">
        <br>
        <label for="fuente">Fuente&nbsp;&nbsp;&nbsp;</label>
           <input type="text"
           class="form-control-lg-new9"
           id="fuente"
           placeholder="fuente"
           name="fuente"
           value="{{ old('fuente' , $filtro->fuente)}}" disabled>
        </div>
    </div>
    <br>
    <p>
        @if (empty($filtro->citadoE))
        @else
        Citado entrevista                   <e style="color: blue; font-weight: bold;">{{$filtro->citadoE}}</e>
        @endif
        @if (empty($filtro->noAplica))
        @else
        No aplica                           <e style="color: blue; font-weight: bold;">{{$filtro->noAplica}}</e>
        @endif
        @if (empty($filtro->noInteresado))
        @else
        No interesado                       <e style="color: blue; font-weight: bold;">{{$filtro->noInteresado}}</e>
        @endif
        @if (empty($filtro->enviadoExm))
        @else
        Enviado examenes                        <e style="color: blue; font-weight: bold;">{{$filtro->enviadoExm}}</e>
        @endif
        @if (empty($filtro->PruebasE))
        @else
        Pruebas enviadas                    <e style="color: blue; font-weight: bold;">{{$filtro->PruebasE}}</e>
        @endif
        @if (empty($filtro->yaTrabaja))
        @else
        Ya trabaja                          <e style="color: blue; font-weight: bold;">{{$filtro->yaTrabaja}}</e>
        @endif
        @if (empty($filtro->numeroEqu))
        @else
        Numero equivocado                   <e style="color: blue; font-weight: bold;">{{$filtro->numeroEqu}}</e>
        @endif
        @if (empty($filtro->noAsiste))
        @else
        No asiste                           <e style="color: blue; font-weight: bold;">{{$filtro->noAsiste}}</e>
        @endif
        @if (empty($filtro->NoResponde2))
        @else
        No responde segundo llamado         <e style="color: blue; font-weight: bold;">{{$filtro->NoResponde2}}</e>
        @endif
        @if (empty($filtro->YaNoInt))
        @else
        Ya no esta interesado               <e style="color: blue; font-weight: bold;">{{$filtro->YaNoInt}}</e>
        @endif
        @if (empty($filtro->estudiante))
        @else
        Es estudiante                       <e style="color: blue; font-weight: bold;">{{$filtro->estudiante}}</e>
        @endif
        @if (empty($filtro->noAsisteEnt))
        @else
        No asiste a entrevista              <e style="color: blue; font-weight: bold;">{{$filtro->noAsisteEnt}}</e>
        @endif
        @if (empty($filtro->entrevistaJefeInm))
        @else
        Remitido entrevista jefe inmediato  <e style="color: blue; font-weight: bold;">{{$filtro->entrevistaJefeInm}}</e>
        @endif
        @if (empty($filtro->resultadoJefe))
        @else
        Resultado Jefe                      <e style="color: blue; font-weight: bold;">{{$filtro->resultadoJefe}}</e>
        @endif
        @if (empty($filtro->entrevistaGerencia))
        @else
        Remitido entrevista Gerencia        <e style="color: blue; font-weight: bold;">{{$filtro->entrevistaGerencia}}</e>
        @endif
        @if (empty($filtro->resultadoGer))
        @else
        Resultado Gerencia                  <e style="color: blue; font-weight: bold;">{{$filtro->resultadoGer}}</e>
        @endif
        @if (empty($filtro->resultadoRRHH))
        @else
        Resultado RRHH                      <e style="color: blue; font-weight: bold;">{{$filtro->resultadoRRHH}}</e>
        @endif
        @if (empty($filtro->enviadoCapa))
        @else
        Enviado a capacitacion              <e style="color: blue; font-weight: bold;">{{$filtro->enviadoCapa}}</e>
        @endif
        @if (empty($filtro->resultadoFormacion))
        @else
        Resultado Formacion                 <e style="color: blue; font-weight: bold;">{{$filtro->resultadoFormacion}}</e>
        @endif
        @if (empty($filtro->enviadocontratacion))
        @else
        Enviado a contratacion              <e style="color: blue; font-weight: bold;">{{$filtro->enviadocontratacion}}</e></p>
        @endif




    </div>

    <div class="col-14">
        <label for="obsgenerales">Observaciones</label>
           <input type="text"
           class="form-control"
           id="obsgenerales"
           placeholder="Observaciones"
           name="obsgenerales"
           value="{{ old('obsgenerales' , $filtro->obsgenerales)}}">
        </div>

    </div>

    <div class="col-sm-12"  style=" width: 90%; margin-left:5rem;">
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
                        <input type="checkbox" id="enviadoCapa" name="enviadoCapa" value="X">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Capacitacion</label>
            </div>
             </td>
              </tr>
               </div>

        <div style="width:200px">
          <tr valign="bottom">
            <td>
              <div style="float:left; width:100%; display:flex;">
                  <input type="checkbox" id="noAsiste" name="noAsiste" value="X">
                  <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No Asiste a Capacitación</label>
              </div>
            </td>
          </tr>
        </div>

            <div style="width:250px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="NoResponde2" name="NoResponde2" value="X">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No Responde Segundo Llamado</label>
                    </div>
                  </td>
                </tr>
              </div>

              <div style="width:200px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="YaNoInt" name="YaNoInt" value="X">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Ya No esta Interesado</label>
                    </div>
                  </td>
                </tr>
              </div>

               <div style="width:200px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="entrevistaJefeInm" name="entrevistaJefeInm" value="X">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Entrevista jefe inmediato</label>
                    </div>
                  </td>
                </tr>
              </div>
              <div style="width:200px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="entrevistaGerencia" name="entrevistaGerencia" value="X">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Entrevista Gerencia</label>
                    </div>
                  </td>
                </tr>
              </div>
              <div style="width:250px">
                <tr valign="bottom">
                  <td>
                    <div style="float:left; width:100%; display:flex;">
                        <input type="checkbox" id="enviadoExm" name="enviadoExm" value="X">
                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Examenes</label>
                    </div>
                  </td>
                </tr>
              </div>
              <div style="width:300px">
                <tr valign="bottom">
                 <td>
                   <div style="float:left; width:100%; display:flex;">
                       <input type="checkbox" id="PruebasE" name="PruebasE" value="X">
                       <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Pruebas Enviadas</label>
                   </div>
                 </td>

               </tr>
             </div>
             <div style="width:300px">
               <tr valign="bottom">
                        <td>
                          <div style="float:left; width:100%; display:flex;">
                              <input type="checkbox" id="yaTrabaja" name="yaTrabaja" value="X">
                              <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Ya Trabaja</label>
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
                            <div style="width:200px">
                                <tr valign="bottom">
                                              <td>
                                            <div style="float:left; width:100%; display:flex;">
                                                  <input type="checkbox" id="citadoE" name="citadoE" value="X">
                                                  <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Citado Entrevista</label>
                                                 </div>
                                             </td>
                                           </tr>
                                         </div>

                            <div style="width:200px">
                                <tr valign="bottom">
                                  <td>
                                    <div style="float:left; width:100%; display:flex;">
                                        <input type="checkbox" id="enviadoCapa" name="enviadoCapa" value="X">
                                        <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Capacitacion</label>
                            </div>
                             </td>
                              </tr>
                               </div>


                                    <div style="width:200px">
                                        <tr valign="bottom">
                                                      <td>
                                                    <div style="float:left; width:100%; display:flex;">
                                                          <input type="checkbox" id="noAsisteEnt" name="noAsisteEnt" value="X">
                                                          <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;No Asiste a Entrevista</label>
                                                         </div>
                                                     </td>
                                                   </tr>
                                                 </div>

                                     <div style="width:200px">
                                        <tr valign="bottom">
                                          <td>
                                            <div style="float:left; width:100%; display:flex;">
                                                <input type="checkbox" id="enviadocontratacion" name="enviadocontratacion" value="X">
                                                <label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(102, 102, 102); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Enviado a Contratación</label>

                                            </div>
                                        </td>
                                    </tr>
                                  </div>
                                  <div style="width:200px">
                                    <tr valign="bottom">
                                      <td>
                                        <div style="float:left; width:100%; display:flex;">
                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="fechaCont">Fecha de Contratacion</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="fechaCont" name="fechaCont" class="form-control-lg-new13"></p>
                                        </div>
                                    </td>
                                    </tr>
                                  </div>
                                  <div style="width:250px">
                                    <tr valign="bottom">
                                      <td>
                                        <div style="float:left; width:100%; display:flex;">

                                            <p>&nbsp;<input type="checkbox" id="estado" name="estado" value="activo"><label style="word-wrap:normal; font-family: Verdana, Geneva, sans-serif; font-size: 16px; color: rgb(0, 0, 0); font-weight: bold; font-style: normal; padding-top: 0px; cursor: pointer;">&nbsp;Persona activa en BD</label></p>
                                        </div>
                                        </td>
                                        </tr>
                                      </div>


                                </div>
                                </div>
                                </div>

                                <div >
                    <label for="obsgenerales">Observaciones</label>
                    <textarea class="form-control-lg-new16" id="obsgenerales" name="obsgenerales" rows="3"></textarea>
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
