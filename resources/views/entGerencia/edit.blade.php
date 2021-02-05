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
      <h3>Registro de Entrevista</h3>
</div>
</center>
<br>

<form action="{{ url('/entGerencia/')}}"
method="POST"
enctype="multipart/form-data"
class="form-horizontal"
style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
{{csrf_field()}}


<div class="col-sm-12">
    <div class="col-2"><label for="id_filtro"></label><input type="hidden" class="form-control" id="id_filtro" placeholder="id" name="id_filtro" value="{{ old('id', $filtro->id)}}"></div>
    <center><p>
        <div class="p-3 mb-2 bg-info text-white" id ="nombres" name="nombres">
          <h3> {{ $entrevista1s->nombres}}</h3>
        </div>
    </p></center>
    </div>
    </body>


          <center><h3>Datos Generales</h3></center>
          <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

          <div class="container">
            <div class="row">

              <div id="cedula" name="cedula" class="col" type="number"><p class="h6">Cedula:</p>  {{ $entrevista1s->cedula}}</div>
              <div class="col"><p class="h6">Teléfono:</p>  {{ $entrevista1s->telefono}}</div>
              <div class="col"><p class="h6">Correo:</p> {{ $entrevista1s->correo}}</div>
              <div class="col"><p class="h6">Cargo:</p>  {{ $entrevista1s->cargo}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

              <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Persona que lo referencia:</p> {{ $entrevista1s->referencia}}</div>
               <div class="col"><p class="h6">Edad:</p>{{ $entrevista1s->edad}}</div>
               <div class="col"><p class="h6">Fecha de nacimiento:</p> {{ $entrevista1s->fnacimiento}}</div>
               <div class="col"><p class="h6">Departamento y ciudad de nacimiento:</p> {{ $entrevista1s->departamento}} | {{ $entrevista1s->id_ciudad}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

              <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Dirección:</p> {{ $entrevista1s->TipoVia}} {{ $entrevista1s->dr1}} {{ $entrevista1s->Prefijo1}} # {{ $entrevista1s->dr2}} {{ $entrevista1s->Prefijo2}} {{ $entrevista1s->dr3}} {{ $entrevista1s->orientacion}} {{ $entrevista1s->adicional}} {{ $entrevista1s->ad1}} {{ $entrevista1s->adicional2}} {{ $entrevista1s->ad2}} {{ $entrevista1s->adicional3}} {{ $entrevista1s->ad3}}</div>
               <div class="col"><p class="h6">Barrio:</p> {{ $entrevista1s->barrio}}</div>
               <div class="col"><p class="h6">Localidad:</p>{{ $entrevista1s->id_localidad}}</div>

               <div class="col"><p class="h6">Lugar de residencia:</p> {{ $entrevista1s->residencia}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Tel fijo:</p>{{ $entrevista1s->tFijo}}</div>
               <div class="col"><p class="h6">Tel celular:</p> {{ $entrevista1s->tCelular}}</div>
               <div class="col"><p class="h6">Tel celular 2:</p> {{ $entrevista1s->tCelular2}}</div>
               <div class="col"><p class="h6"></p> {{ $entrevista1s->xxxxx}}</div>

                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">


               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Tipo de Vivienda:</p>{{ $entrevista1s->tVivienda}}</div>
               <div class="col"><p class="h6">Valor:</p> {{ $entrevista1s->valor}}</div>
               <div class="col"><p class="h6">Nombre del Arrendador:</p> {{ $entrevista1s->arrendador}}</div>
               <div class="col"><p class="h6">Correo del Arrendador:</p> {{ $entrevista1s->correoArr}}</div>

                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Servicio militar, donde?:</p>{{ $entrevista1s->sMilitar}}  {{ $entrevista1s->donde}}</div>
               <div class="col"><p class="h6">Estado Civil:</p> {{ $entrevista1s->eCivil}}</div>
               <div class="col"><p class="h6">Hace Cuanto:</p> {{ $entrevista1s->cuanto}}</div>
               <div class="col"><p class="h6">Con Quien Vive:</p> {{ $entrevista1s->quien}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Que conoce de Mentius:</p>{{ $entrevista1s->conoce}}  {{ $entrevista1s->donde}}</div>


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
                <div class="col">{{ $entrevista2s->familiarp1}}</div>
                <div class="col">{{ $entrevista2s->parentescop1}}</div>
                <div class="col">{{ $entrevista2s->edadp1}}</div>
                <div class="col">{{ $entrevista2s->ocupacionp1}}</div>
                <div class="col">{{ $entrevista2s->telefonop1}}</div>

                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista2s->familiarp2}}</div>
                <div class="col">{{ $entrevista2s->parentescop2}}</div>
                <div class="col">{{ $entrevista2s->edadp2}}</div>
                <div class="col">{{ $entrevista2s->ocupacionp2}}</div>
                <div class="col">{{ $entrevista2s->telefonop2}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista2s->familiarp3}}</div>
                <div class="col">{{ $entrevista2s->parentescop3}}</div>
                <div class="col">{{ $entrevista2s->edadp3}}</div>
                <div class="col">{{ $entrevista2s->ocupacionp3}}</div>
                <div class="col">{{ $entrevista2s->telefonop3}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista2s->familiarp4}}</div>
                <div class="col">{{ $entrevista2s->parentescop4}}</div>
                <div class="col">{{ $entrevista2s->edadp4}}</div>
                <div class="col">{{ $entrevista2s->ocupacionp4}}</div>
                <div class="col">{{ $entrevista2s->telefonop4}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista2s->familiarp5}}</div>
                <div class="col">{{ $entrevista2s->parentescop5}}</div>
                <div class="col">{{ $entrevista2s->edadp5}}</div>
                <div class="col">{{ $entrevista2s->ocupacionp5}}</div>
                <div class="col">{{ $entrevista2s->telefonop5}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista2s->familiarp6}}</div>
                <div class="col">{{ $entrevista2s->parentescop6}}</div>
                <div class="col">{{ $entrevista2s->edadp6}}</div>
                <div class="col">{{ $entrevista2s->ocupacionp6}}</div>
                <div class="col">{{ $entrevista2s->telefonop6}}</div>


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista2s->familiarp7}}</div>
                <div class="col">{{ $entrevista2s->parentescop7}}</div>
                <div class="col">{{ $entrevista2s->edadp7}}</div>
                <div class="col">{{ $entrevista2s->ocupacionp7}}</div>
                <div class="col">{{ $entrevista2s->telefonop7}}</div>
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
                <div class="col">{{ $entrevista3s->Grado1}}</div>
                <div class="col">{{ $entrevista3s->institucion1}} </div>
                <div class="col">{{ $entrevista3s->años1}}</div>
                <div class="col">{{ $entrevista3s->fecha1}}</div>
                <div class="col">{{ $entrevista3s->titulo1}}</div>
                <div class="col">{{ $entrevista3s->estado1}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista3s->Grado2}}</div>
                <div class="col">{{ $entrevista3s->institucion2}} </div>
                <div class="col">{{ $entrevista3s->años2}}</div>
                <div class="col">{{ $entrevista3s->fecha2}}</div>
                <div class="col">{{ $entrevista3s->titulo2}}</div>
                <div class="col">{{ $entrevista3s->estado2}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista3s->Grado3}}</div>
                <div class="col">{{ $entrevista3s->institucion3}} </div>
                <div class="col">{{ $entrevista3s->años3}}</div>
                <div class="col">{{ $entrevista3s->fecha3}}</div>
                <div class="col">{{ $entrevista3s->titulo3}}</div>
                <div class="col">{{ $entrevista3s->estado3}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista3s->Grado4}}</div>
                <div class="col">{{ $entrevista3s->institucion4}} </div>
                <div class="col">{{ $entrevista3s->años4}}</div>
                <div class="col">{{ $entrevista3s->fecha4}}</div>
                <div class="col">{{ $entrevista3s->titulo4}}</div>
                <div class="col">{{ $entrevista3s->estado4}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista3s->Grado5}}</div>
                <div class="col">{{ $entrevista3s->institucion5}} </div>
                <div class="col">{{ $entrevista3s->años5}}</div>
                <div class="col">{{ $entrevista3s->fecha5}}</div>
                <div class="col">{{ $entrevista3s->titulo5}}</div>
                <div class="col">{{ $entrevista3s->estado5}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col">{{ $entrevista3s->Grado6}}</div>
                <div class="col">{{ $entrevista3s->institucion6}} </div>
                <div class="col">{{ $entrevista3s->años6}}</div>
                <div class="col">{{ $entrevista3s->fecha6}}</div>
                <div class="col">{{ $entrevista3s->titulo6}}</div>
                <div class="col">{{ $entrevista3s->estado6}}</div>
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
         <div class="col"><p class="h6">Cargo</p></div>
         <div class="col"><p class="h6">Jefe Inmediato</p></div>
         <div class="col"><p class="h6">Teléfono</p> </div>
         <div class="col"><p class="h6">Salario</p> </div>
         <div class="col"><p class="h6">Motivo de retiro</p> </div>
         <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $entrevista4s->empresa1}}</div>
         <div class="col">{{ $entrevista4s->fechain1}} </div>
         <div class="col">{{ $entrevista4s->fechart1}}</div>

         <div class="col">{{ $entrevista4s->hlcargo1}}</div>
         <div class="col">{{ $entrevista4s->jefeinm1}}</div>
         <div class="col">{{ $entrevista4s->teleinf1}}</div>
         <div class="col">{{ $entrevista4s->salarioh1}}</div>
         <div class="col">{{ $entrevista4s->motivor1}}</div>
         <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $entrevista4s->empresa2}}</div>
         <div class="col">{{ $entrevista4s->fechain2}} </div>
         <div class="col">{{ $entrevista4s->fechart2}}</div>

         <div class="col">{{ $entrevista4s->hlcargo2}}</div>
         <div class="col">{{ $entrevista4s->jefeinm2}}</div>
         <div class="col">{{ $entrevista4s->teleinf2}}</div>
        <div class="col">{{ $entrevista4s->salarioh2}}</div>
         <div class="col">{{ $entrevista4s->motivor2}}</div>
         <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $entrevista4s->empresa3}}</div>
         <div class="col">{{ $entrevista4s->fechain3}} </div>
         <div class="col">{{ $entrevista4s->fechart3}}</div>

         <div class="col">{{ $entrevista4s->hlcargo3}}</div>
         <div class="col">{{ $entrevista4s->jefeinm3}}</div>
         <div class="col">{{ $entrevista4s->teleinf3}}</div>
        <div class="col">{{ $entrevista4s->salarioh3}}</div>
         <div class="col">{{ $entrevista4s->motivor3}}</div>

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $entrevista4s->empresa4}}</div>
         <div class="col">{{ $entrevista4s->fechain4}} </div>
         <div class="col">{{ $entrevista4s->fechart4}}</div>

         <div class="col">{{ $entrevista4s->hlcargo4}}</div>
         <div class="col">{{ $entrevista4s->jefeinm4}}</div>
         <div class="col">{{ $entrevista4s->teleinf4}}</div>
        <div class="col">{{ $entrevista4s->salarioh4}}</div>
         <div class="col">{{ $entrevista4s->motivor4}}</div>

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $entrevista4s->empresa5}}</div>
         <div class="col">{{ $entrevista4s->fechain5}} </div>
         <div class="col">{{ $entrevista4s->fechart5}}</div>

         <div class="col">{{ $entrevista4s->hlcargo5}}</div>
         <div class="col">{{ $entrevista4s->jefeinm5}}</div>
         <div class="col">{{ $entrevista4s->teleinf5}}</div>
        <div class="col">{{ $entrevista4s->salarioh5}}</div>
         <div class="col">{{ $entrevista4s->motivor5}}</div>

        </div>
    </div>


<center><h3>Generalidades</h3></center>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
    <div class="row">

        <div class="col"><p class="h6">Aspiración salarial</p>  {{ $entrevista5s->aspiracion}} </div>
        <div class="col"><p class="h6">Ha tenido personas a cargo</p>  {{ $entrevista5s->personasC}} </div>
        <div class="col"><p class="h6">Actividades realizadas</p> {{ $entrevista5s->acCambio}}</div>
        <div class="col"><p class="h6">Cuanto tiempo estuvo desempleado</p>  {{ $entrevista1s->tiempoDes}}</div>
        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">Que hizo en ese tiempo</p>  {{ $entrevista5s->queHizo}} </div>
        <div class="col"><p class="h6">Esta en otro proceso de selección</p>  {{ $entrevista5s->otroProceso}} </div>
        <div class="col"><p class="h6">Cual otra</p> {{ $entrevista5s->CualOtra}}</div>
        <div class="col"><p class="h6">Mencione sus fortalezas</p>  {{ $entrevista5s->fortalezas}} </div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col"><p class="h6">Mencione sus debilidades</p>  {{ $entrevista5s->debilidades}} </div>
        <div class="col"><p class="h6">Que valores le inculco su familia</p> {{ $entrevista5s->valores}}</div>
        <div class="col"><p class="h6">Aspectos que le generan satisfacción</p>  {{ $entrevista5s->satisfaccion}}</div>
        <div class="col"><p class="h6">Aspectos traumáticos</p>  {{ $entrevista5s->traumaticos}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">¿Le han cancelado contrato? </p>  {{ $entrevista5s->cancelado}} </div>
        <div class="col"><p class="h6">Cual fue el motivo</p>  {{ $entrevista5s->motivoC}} </div>
        <div class="col"><p class="h6">Ha tenido problemas judiciales</p> {{ $entrevista5s->problemas}}</div>
        <div class="col"><p class="h6">Cual fue la razón</p>{{ $entrevista5s->motivoJ}}</div>



        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col"><p class="h6">¿Fuma? con qué frecuencia</p>  {{ $entrevista5s->fuma}} , {{ $entrevista5s->frecuencia}} </div>
        <div class="col"><p class="h6">¿Tiene deudas? </p> {{ $entrevista5s->deudas}}</div>
        <div class="col"><p class="h6">A quien le debe</p>{{ $entrevista5s->debeA}}</div>
        <div class="col"><p class="h6">Cuanto y a qué plazo </p>{{$entrevista5s->cuantoDebe}} {{ $entrevista5s->plazo}}</div>


        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">¿Pertenece a algún grupo social? hace cuanto </p>  {{ $entrevista5s->grupoSoc}} {{ $entrevista5s->cuantoTiempo}}</div>
        <div class="col"><p class="h6">Que hace en su tiempo libre</p> {{ $entrevista5s->tiempoLibre}}</div>
        <div class="col"><p class="h6">¿Cuál es su estado de salud? </p>{{ $entrevista5s->estadoSalud}}</div>
        <div class="col"><p class="h6">¿Sigue algún tratamiento? </p>{{ $entrevista5s->tratamiento}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">¿Ha sufrido accidentes? </p>  {{ old('acceidentes', $entrevista5s->acceidentes) }} {{ old('cuantoTiempo', $entrevista5s->cuantoTiempo) }}</div>
        <div class="col"><p class="h6">Que accidente tuvo</p> {{ $entrevista5s->cualAc}}</div>
        <div class="col"><p class="h6">Ha tenido procesos anteriores en Mentius?</p>{{ $entrevista5s->procesosAnt}}</div>
        <div class="col"><p class="h6">¿Tiene familiares en la compañía? </p>{{ $entrevista5s->familiaresMent}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->

        <div class="col" ><p class="h6">Resultado Primera Entrevista</p>{{  old('resultado', $entFinalizacion->resultado)}}</div>
        <div class="col"><p class="h6" type="date">Fecha</p>{{ old('fechaCont', $entFinalizacion->fechaCont)}}</div>
        <div class="col"><p class="h6">Observaciones</p>{{ old('obsFinales', $entFinalizacion->obsFinales)}}</div>


        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->

        <label style="width:350px" for="resultadoGer">Resultado de la entrevista con gerencia:</label>
        &nbsp;&nbsp;

    
        <div class="form-group col-md-2">
            <label for="aprobacions">Entrevista con gerencia</label>
            <select type="text" style="width:250px" name="aprobacions" id="aprobacions" placeholder="Aprobacion Gerencia">
                <option value=>{{ old('resultadoGer', $entFinalizacion->resultadoGer)}}</option>
                @foreach($aprobaciones as $aprobacions)<option value="{{ $aprobacions->aprobacion}}">
                    {{ $aprobacions->aprobacion }}</option>
                  @endforeach
            </select>
        </div>
    
       
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
    <label for="obsGerencia">Observaciones</label>
    <textarea class="form-control" name="obsGerencia" id="" cols="3" rows="3"></textarea>


    <div class="col-2"><input type="hidden"  type="text" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>
    <div class="col-2"><input type="hidden"  type="number" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>
    <div class="col-2"><input type="hidden"  type="text" class="form-control" id="resultado" placeholder="resultado" name="resultado" value="{{ old('resultado', $entFinalizacion->resultado)}}"></div>
    <div class="col-2"><input type="hidden"  type="text" class="form-control" id="fechaCont" placeholder="fechaCont" name="fechaCont" value="{{ old('fechaCont', $entFinalizacion->fechaCont)}}"></div>
    <div class="col-2"><input type="hidden"  type="text" class="form-control" id="obsFinales" placeholder="obsFinales" name="obsFinales" value="{{ old('obsFinales', $entFinalizacion->obsFinales)}}"></div>
      </div>
</div>




<input class="btn btn-primary btn-lg active" type="submit" value="Registrar">

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
