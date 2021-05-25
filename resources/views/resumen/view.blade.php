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
      <h3>Resumen de la informacion</h3>
</div>
</center>
<br>

<form action="{{ url('/resumen/')}}"
method="POST"
enctype="multipart/form-data"
class="form-horizontal"
style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
{{csrf_field()}}

<div class="col-sm-12">
    <div class="col-2"><label  for="id_filtro"></label><input  type="hidden" class="form-control" id="id_filtro" placeholder="id" name="id_filtro"   value="{{ old('id', $filtro->id)}}"></div>
    <center><p>
        <div class="p-3 mb-2 bg-info text-white" id ="nombres" name="nombres">
          <h3> {{ $filtro->nombres}}</h3>
        </div>
    </p></center>
    </div>
    </body>


          <center><h3>Datos Generales</h3></center>
          <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

          <div class="container">
            <div class="row">

              <div id="cedula" name="cedula" class="col"><p class="h6">Cedula:</p>  {{ $filtro->cedula}}</div>
              <div class="col"><p class="h6">Teléfono:</p>  {{ $filtro->telefono}}</div>
              <div class="col"><p class="h6">Correo:</p> {{ $filtro->correo}}</div>
              <div class="col"><p class="h6">Cargo:</p>  {{ $filtro->cargo}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

              <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Persona que lo referencia:</p> {{ $filtro->referencia}}</div>
               <div class="col"><p class="h6">Edad:</p>{{ $edad}}</div>
               <div class="col"><p class="h6">Fecha de nacimiento:</p> {{ $filtro->fnacimiento}}</div>
               <div class="col"><p class="h6">Departamento y ciudad de nacimiento:</p> {{ $filtro->departamento}} | {{ $filtro->id_ciudad}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

              <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Dirección:</p> {{ $filtro->TipoVia}} {{ $filtro->dr1}} {{ $filtro->Prefijo1}} # {{ $filtro->dr2}} {{ $filtro->Prefijo2}} {{ $filtro->dr3}} {{ $filtro->orientacion}} {{ $filtro->adicional}} {{ $filtro->ad1}} {{ $filtro->adicional2}} {{ $filtro->ad2}} {{ $filtro->adicional3}} {{ $filtro->ad3}}</div>
               <div class="col"><p class="h6">Barrio:</p> {{ $filtro->barrio}}</div>
               <div class="col"><p class="h6">Localidad:</p>{{ $filtro->id_localidad}}</div>

               <div class="col"><p class="h6">Lugar de residencia:</p> {{ $filtro->residencia}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Tel fijo:</p>{{ $filtro->tFijo}}</div>
               <div class="col"><p class="h6">Tel celular:</p> {{ $filtro->tCelular}}</div>
               <div class="col"><p class="h6">Tel celular 2:</p> {{ $filtro->tCelular2}}</div>
               <div class="col"><p class="h6"></p> {{ $filtro->xxxxx}}</div>

                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">


               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Tipo de Vivienda:</p>{{ $filtro->tVivienda}}</div>
               <div class="col"><p class="h6">Valor:</p> {{ $filtro->valor}}</div>
               <div class="col"><p class="h6">Nombre del Arrendador:</p> {{ $filtro->arrendador}}</div>
               <div class="col"><p class="h6">Correo del Arrendador:</p> {{ $filtro->correoArr}}</div>

                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Servicio militar, donde?:</p>{{ $filtro->sMilitar}}  {{ $filtro->donde}}</div>
               <div class="col"><p class="h6">Estado Civil:</p> {{ $filtro->eCivil}}</div>
               <div class="col"><p class="h6">Hace Cuanto:</p> {{ $filtro->cuanto}}</div>
               <div class="col"><p class="h6">Con Quien Vive:</p> {{ $filtro->quien}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Que conoce de Mentius:</p>{{ $filtro->conoce}}  {{ $filtro->donde}}</div>


                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">




            </div>
          </div>
          <center><h3>Datos de los Familiares</h3></center>

          <div class="container">
            <div class="row">


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col"><p class="h6">Nombre</p></div>
                <div class="col"><p class="h6">Parentesco</p></div>
                <div class="col"><p class="h6">Edad</p> </div>
                <div class="col"><p class="h6">Ocupación</p></div>
                <div class="col"><p class="h6">Teléfono</p> </div>
                <hr width=100% align="center"  size=3  style="border:1px outset ; noshade="noshade">

                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->familiarp1}}</div>
                <div class="col">{{ $filtro->parentescop1}}</div>
                <div class="col">{{ $filtro->edadp1}}</div>
                <div class="col">{{ $filtro->ocupacionp1}}</div>
                <div class="col">{{ $filtro->telefonop1}}</div>

                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->familiarp2}}</div>
                <div class="col">{{ $filtro->parentescop2}}</div>
                <div class="col">{{ $filtro->edadp2}}</div>
                <div class="col">{{ $filtro->ocupacionp2}}</div>
                <div class="col">{{ $filtro->telefonop2}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->familiarp3}}</div>
                <div class="col">{{ $filtro->parentescop3}}</div>
                <div class="col">{{ $filtro->edadp3}}</div>
                <div class="col">{{ $filtro->ocupacionp3}}</div>
                <div class="col">{{ $filtro->telefonop3}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->familiarp4}}</div>
                <div class="col">{{ $filtro->parentescop4}}</div>
                <div class="col">{{ $filtro->edadp4}}</div>
                <div class="col">{{ $filtro->ocupacionp4}}</div>
                <div class="col">{{ $filtro->telefonop4}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->familiarp5}}</div>
                <div class="col">{{ $filtro->parentescop5}}</div>
                <div class="col">{{ $filtro->edadp5}}</div>
                <div class="col">{{ $filtro->ocupacionp5}}</div>
                <div class="col">{{ $filtro->telefonop5}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->familiarp6}}</div>
                <div class="col">{{ $filtro->parentescop6}}</div>
                <div class="col">{{ $filtro->edadp6}}</div>
                <div class="col">{{ $filtro->ocupacionp6}}</div>
                <div class="col">{{ $filtro->telefonop6}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->familiarp7}}</div>
                <div class="col">{{ $filtro->parentescop7}}</div>
                <div class="col">{{ $filtro->edadp7}}</div>
                <div class="col">{{ $filtro->ocupacionp7}}</div>
                <div class="col">{{ $filtro->telefonop7}}</div>
                <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

            </div>
        </div>


<center><h3>Historial Academico</h3></center>
<div class="container">
    <div class="row">
 <!-- Force next columns to break to new line -->



 <div class="w-100 d-none d-md-block"></div>
 <div class="col"><p class="h6">Grado</p></div>
 <div class="col"><p class="h6">Institución</p> </div>
 <div class="col"><p class="h6">Duración en años</p></div>
 <div class="col"><p class="h6">Fecha</p></div>

 <div class="col"><p class="h6">Titulo</p></div>
 <div class="col"><p class="h6">Estado</p> </div>

 <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->Grado1}}</div>
                <div class="col">{{ $filtro->institucion1}} </div>
                <div class="col">{{ $filtro->años1}}</div>
                <div class="col">{{ $filtro->fecha1}}</div>
                <div class="col">{{ $filtro->titulo1}}</div>
                <div class="col">{{ $filtro->estado1}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->Grado2}}</div>
                <div class="col">{{ $filtro->institucion2}} </div>
                <div class="col">{{ $filtro->años2}}</div>
                <div class="col">{{ $filtro->fecha2}}</div>
                <div class="col">{{ $filtro->titulo2}}</div>
                <div class="col">{{ $filtro->estado2}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->Grado3}}</div>
                <div class="col">{{ $filtro->institucion3}} </div>
                <div class="col">{{ $filtro->años3}}</div>
                <div class="col">{{ $filtro->fecha3}}</div>
                <div class="col">{{ $filtro->titulo3}}</div>
                <div class="col">{{ $filtro->estado3}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->Grado4}}</div>
                <div class="col">{{ $filtro->institucion4}} </div>
                <div class="col">{{ $filtro->años4}}</div>
                <div class="col">{{ $filtro->fecha4}}</div>
                <div class="col">{{ $filtro->titulo4}}</div>
                <div class="col">{{ $filtro->estado4}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->Grado5}}</div>
                <div class="col">{{ $filtro->institucion5}} </div>
                <div class="col">{{ $filtro->años5}}</div>
                <div class="col">{{ $filtro->fecha5}}</div>
                <div class="col">{{ $filtro->titulo5}}</div>
                <div class="col">{{ $filtro->estado5}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $filtro->Grado6}}</div>
                <div class="col">{{ $filtro->institucion6}} </div>
                <div class="col">{{ $filtro->años6}}</div>
                <div class="col">{{ $filtro->fecha6}}</div>
                <div class="col">{{ $filtro->titulo6}}</div>
                <div class="col">{{ $filtro->estado6}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            </div>
        </div>

        <center><h3>Historial Laboral</h3></center>
        <div class="container">
            <div class="row">
         <!-- Force next columns to break to new line -->



         <div class="w-100 d-none d-md-block"></div>
         <div class="col"><p class="h6">Empresa</p></div>
         <div class="col"><p class="h6">Fecha de inicio</p> </div>
         <div class="col"><p class="h6">Fecha de retiro</p></div>
         <div class="col"><p class="h6">Duracion en dias</p></div>
         <div class="col"><p class="h6">Cargo</p></div>
         <div class="col"><p class="h6">Jefe Inmediato</p></div>
         <div class="col"><p class="h6">Teléfono</p> </div>
         <div class="col"><p class="h6">Salario</p> </div>
         <div class="col"><p class="h6">Motivo de retiro</p> </div>
         <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $filtro->empresa1}}</div>
         <div class="col">{{ $filtro->fechain1}} </div>
         <div class="col">{{ $filtro->fechart1}}</div>
         <div class="col">{{ $filtro->tiempo1}}</div>

         <div class="col">{{ $filtro->hlcargo1}}</div>
         <div class="col">{{ $filtro->jefeinm1}}</div>
         <div class="col">{{ $filtro->teleinf1}}</div>
         <div class="col">{{ $filtro->salarioh1}}</div>
         <div class="col">{{ $filtro->motivor1}}</div>
         <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $filtro->empresa2}}</div>
         <div class="col">{{ $filtro->fechain2}} </div>
         <div class="col">{{ $filtro->fechart2}}</div>
         <div class="col">{{ $filtro->tiempo2}}</div>
         <div class="col">{{ $filtro->hlcargo2}}</div>
         <div class="col">{{ $filtro->jefeinm2}}</div>
         <div class="col">{{ $filtro->teleinf2}}</div>
        <div class="col">{{ $filtro->salarioh2}}</div>
         <div class="col">{{ $filtro->motivor2}}</div>
         <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $filtro->empresa3}}</div>
         <div class="col">{{ $filtro->fechain3}} </div>
         <div class="col">{{ $filtro->fechart3}}</div>
         <div class="col">{{ $filtro->tiempo3}}</div>
         <div class="col">{{ $filtro->hlcargo3}}</div>
         <div class="col">{{ $filtro->jefeinm3}}</div>
         <div class="col">{{ $filtro->teleinf3}}</div>
        <div class="col">{{ $filtro->salarioh3}}</div>
         <div class="col">{{ $filtro->motivor3}}</div>

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $filtro->empresa4}}</div>
         <div class="col">{{ $filtro->fechain4}} </div>
         <div class="col">{{ $filtro->fechart4}}</div>
         <div class="col">{{ $filtro->tiempo4}}</div>
         <div class="col">{{ $filtro->hlcargo4}}</div>
         <div class="col">{{ $filtro->jefeinm4}}</div>
         <div class="col">{{ $filtro->teleinf4}}</div>
        <div class="col">{{ $filtro->salarioh4}}</div>
         <div class="col">{{ $filtro->motivor4}}</div>

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $filtro->empresa5}}</div>
         <div class="col">{{ $filtro->fechain5}} </div>
         <div class="col">{{ $filtro->fechart5}}</div>
         <div class="col">{{ $filtro->tiempo5}}</div>
         <div class="col">{{ $filtro->hlcargo5}}</div>
         <div class="col">{{ $filtro->jefeinm5}}</div>
         <div class="col">{{ $filtro->teleinf5}}</div>
        <div class="col">{{ $filtro->salarioh5}}</div>
         <div class="col">{{ $filtro->motivor5}}</div>

        </div>
    </div>


<center><h3>Generalidades</h3></center>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
    <div class="row">

        <div class="col"><p class="h6">Aspiración salarial</p>  {{ $filtro->aspiracion}} </div>
        <div class="col"><p class="h6">Ha tenido personas a cargo</p>  {{ $filtro->personasC}} </div>
        <div class="col"><p class="h6">Actividades realizadas</p> {{ $filtro->acCambio}}</div>
        <div class="col"><p class="h6">Cuanto tiempo estuvo desempleado</p>  {{ $filtro->tiempoDes}}</div>
        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">Que hizo en ese tiempo</p>  {{ $filtro->queHizo}} </div>
        <div class="col"><p class="h6">Esta en otro proceso de selección</p>  {{ $filtro->otroProceso}} </div>
        <div class="col"><p class="h6">Cual otra</p> {{ $filtro->CualOtra}}</div>
        <div class="col"><p class="h6">Mencione sus fortalezas</p>  {{ $filtro->fortalezas}} </div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col"><p class="h6">Mencione sus debilidades</p>  {{ $filtro->debilidades}} </div>
        <div class="col"><p class="h6">Que valores le inculco su familia</p> {{ $filtro->valores}}</div>
        <div class="col"><p class="h6">Aspectos que le generan satisfacción</p>  {{ $filtro->satisfaccion}}</div>
        <div class="col"><p class="h6">Aspectos traumáticos</p>  {{ $filtro->traumaticos}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">¿Le han cancelado contrato? </p>  {{ $filtro->cancelado}} </div>
        <div class="col"><p class="h6">Cual fue el motivo</p>  {{ $filtro->motivoC}} </div>
        <div class="col"><p class="h6">Ha tenido problemas judiciales</p> {{ $filtro->problemas}}</div>
        <div class="col"><p class="h6">Cual fue la razón</p>{{ $filtro->motivoJ}}</div>



        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col"><p class="h6">¿Fuma? con qué frecuencia</p>  {{ $filtro->fuma}} , {{ $filtro->frecuencia}} </div>
        <div class="col"><p class="h6">¿Tiene deudas? </p> {{ $filtro->deudas}}</div>
        <div class="col"><p class="h6">A quien le debe</p>{{ $filtro->debeA}}</div>
        <div class="col"><p class="h6">Cuanto y a qué plazo </p>{{$filtro->cuantoDebe}} {{ $filtro->plazo}}</div>


        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">¿Pertenece a algún grupo social? hace cuanto </p>  {{ $filtro->grupoSoc}} {{ $filtro->cuantoTiempo}}</div>
        <div class="col"><p class="h6">Que hace en su tiempo libre</p> {{ $filtro->tiempoLibre}}</div>
        <div class="col"><p class="h6">¿Cuál es su estado de salud? </p>{{ $filtro->estadoSalud}}</div>
        <div class="col"><p class="h6">¿Sigue algún tratamiento? </p>{{ $filtro->tratamiento}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">¿Ha sufrido accidentes? </p>  {{ $filtro->acceidentes}} {{ $filtro->cuantoTiempo}}</div>
        <div class="col"><p class="h6">Que accidente tuvo</p> {{ $filtro->cualAc}}</div>
        <div class="col"><p class="h6">Ha tenido procesos anteriores en Mentius?</p>{{ $filtro->procesosAnt}}</div>
        <div class="col"><p class="h6">¿Tiene familiares en la compañía? </p>{{ $filtro->familiaresMent}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->

        <div class="col"><p class="h6">Resultado Primera Entrevista</p>{{ $filtro->resultadoRrhh}}</div>
        <div class="col"><p class="h6">Fecha</p>{{ $filtro->fechaRrhh}}</div>
        <div class="col"><p class="h6">Observaciones RRHH</p>{{ $filtro->obsRrhh}}</div>
        <div class="col"><p class="h6">Resultado Entrevista Gerencia</p>{{ $filtro->resultadoGer}}</div>
        <div class="col"><p class="h6">Fecha</p>{{ $filtro->fechaGerencia}}</div>
        <div class="col"><p class="h6">Observaciones Gerencia</p>{{ $filtro->obsGerencia}}</div>
        <div class="col"><p class="h6">Resultado EntrevistaJefe Inmediato</p>{{ $filtro->resultadoJefe}}</div>
        <div class="col"><p class="h6">Fecha</p>{{ $filtro->fechaJefe}}</div>
        <div class="col"><p class="h6">Observaciones Jefe Inmediato</p>{{ $filtro->obsJefe}}</div>




{{--<div class="col"><p class="h6">Observaciones entrevista jefe</p> {{$filtro->obsjefe}} </div>--}}




      </div>
</div>




{{--<input class="btn btn-primary btn-lg active" type="submit" value="Registrar">--}}

<a href="{{route('home')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>
</form>

      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')
      <script>
      Swal.fire(
        'ENTREVISTA',
        'Registre el resultado de la entrevista con la Gerencia',
        'success'
      )
      </script>




 @stop


      @endsection
