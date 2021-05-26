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
          <h3> {{ $filtro->nombre}}</h3>
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
               <div class="col"><p class="h6">Celular 2:</p> {{ $filtro->tCelular2}}</div>
               <div class="col"><p class="h6">Tipo de Vivienda:</p>{{ $filtro->tvivienda}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">


               <!-- Force next columns to break to new line -->
               <div class="w-100 d-none d-md-block"></div>
               <div class="col"><p class="h6">Servicio militar:</p>{{ $filtro->sMilitar}}</div>
               <div class="col"><p class="h6">Estado Civil:</p> {{ $filtro->eCivil}}</div>
               <div class="col"><p class="h6">Con Quien Vive:</p> {{ $filtro->quien}}</div>
                <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

            </div>
          </div>
          <center><h3>Datos de los Familiares</h3></center>

          <div class="container">
            <div class="row">


                <!-- Force next columns to break to new line -->
                <div class="w-100 d-none d-md-block"></div>
                <div class="col"><p class="h6">Parentesco , Edad, Ocupación</p></div>
                 <hr width=100% align="center"  size=3  style="border:1px outset ; noshade="noshade">

                <div class="col">{{ $filtro->parentescop1}} {{$filtro->edadp1}} {{ $filtro->ocupacionp1}}</div>


                <div class="col">{{ $filtro->parentescop2}} {{ $filtro->edadp2}} {{ $filtro->ocupacionp2}}</div>


                <div class="col">{{ $filtro->parentescop3}} {{ $filtro->edadp3}} {{ $filtro->ocupacionp3}}</div>


                <div class="col">{{ $filtro->parentescop4}} {{ $filtro->edadp4}} {{ $filtro->ocupacionp4}}</div>


                <div class="col">{{ $filtro->parentescop5}} {{ $filtro->edadp5}} {{ $filtro->ocupacionp5}}</div>
            </div>
        </div>
        <br><br>


<center><h3>Historial Academico</h3></center>
<div class="container">
    <div class="row">
 <div class="col"><p class="h6">Institución , Año de Grado, Titulo, Estado</p> </div>
 <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
                <div class="col">{{ $filtro->institucion1}} {{ $filtro->fecha1}} {{ $filtro->titulo1}} {{ $filtro->estado1}}</div>
                <div class="col">{{ $filtro->institucion2}} {{ $filtro->fecha2}} {{ $filtro->titulo2}} {{ $filtro->estado2}}</div>
                <div class="col">{{ $filtro->institucion3}} {{ $filtro->fecha3}} {{ $filtro->titulo3}} {{ $filtro->estado3}}</div>
                <div class="col">{{ $filtro->institucion4}} {{ $filtro->fecha4}} {{ $filtro->titulo4}} {{ $filtro->estado4}}</div>
                <div class="col">{{ $filtro->institucion5}} {{ $filtro->fecha5}} {{ $filtro->titulo5}} {{ $filtro->estado5}}</div>
                <div class="col">{{ $filtro->institucion6}} {{ $filtro->fecha6}} {{ $filtro->titulo6}} {{ $filtro->estado6}}</div>
                <div class="col">{{ $filtro->institucion7}} {{ $filtro->fecha7}} {{ $filtro->titulo7}} {{ $filtro->estado7}}</div>
            </div>
        </div>
        <br>
        <br>



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
         @if (empty($filtro->fechart1))
         <div class="col"> </div>
         @else
         <div class="col">{{ $tiempo1}} meses</div>
         @endif
         <div class="col">{{ $filtro->hlcargo1}}</div>
         <div class="col">{{ $filtro->jefeinm1}}</div>
         <div class="col">{{ $filtro->teleinf1}}</div>
         <div class="col">{{ $filtro->salarioh1}}</div>
         <div class="col">{{ $filtro->motivor1}}</div>

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $filtro->empresa2}}</div>
         <div class="col">{{ $filtro->fechain2}} </div>
         <div class="col">{{ $filtro->fechart2}}</div>

          @if (empty($filtro->fechart2))
         <div class="col"> </div>
         @else
         <div class="col">{{ $tiempo2}} meses</div>
         @endif
         <div class="col">{{ $filtro->hlcargo2}}</div>
         <div class="col">{{ $filtro->jefeinm2}}</div>
         <div class="col">{{ $filtro->teleinf2}}</div>
         <div class="col">{{ $filtro->salarioh2}}</div>
         <div class="col">{{ $filtro->motivor2}}</div>

         <!-- Force next columns to break to new line -->
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $filtro->empresa3}}</div>
         <div class="col">{{ $filtro->fechain3}} </div>
         <div class="col">{{ $filtro->fechart3}}</div>
         @if (empty($filtro->fechart3))
         <div class="col"> </div>
         @else
         <div class="col">{{ $tiempo3}} meses</div>
         @endif
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
         @if (empty($filtro->fechart4))
         <div class="col"> </div>
         @else
         <div class="col">{{ $tiempo4}} meses</div>
         @endif
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
         @if (empty($filtro->fechart5))
         <div class="col"> </div>
         @else
         <div class="col">{{ $tiempo5}} meses</div>
         @endif
         <div class="col">{{ $filtro->hlcargo5}}</div>
         <div class="col">{{ $filtro->jefeinm5}}</div>
         <div class="col">{{ $filtro->teleinf5}}</div>
        <div class="col">{{ $filtro->salarioh5}}</div>
         <div class="col">{{ $filtro->motivor5}}</div>

        </div>
    </div>
<br><br>

<center><h3>Generalidades</h3></center>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
    <div class="row">

        <div class="col"><p class="h6">Aspiración salarial</p>  {{ $filtro->aspiracion}} </div>
        <div class="col"><p class="h6">Ha tenido personas a cargo</p>  {{ $filtro->personasC}} </div>
        <div class="col"><p class="h6">Actividades realizadas</p> {{ $filtro->acCambio}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">Esta en otro proceso de selección</p>  {{ $filtro->otroProceso}} </div>
        <div class="col"><p class="h6">Cual otra</p> {{ $filtro->CualOtra}}</div>
        <div class="col"><p class="h6">Mencione sus fortalezas</p>  {{ $filtro->fortalezas}} </div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col"><p class="h6">Mencione sus debilidades</p>  {{ $filtro->debilidades}} </div>
        <div class="col"><p class="h6">Que valores le inculco su familia</p> {{ $filtro->valores}}</div>
        <div class="col"><p class="h6">¿Le han cancelado contrato? </p>  {{ $filtro->cancelado}} </div>
        <div class="col"><p class="h6">Cual fue el motivo</p>  {{ $filtro->motivoC}} </div>
        <div class="col"><p class="h6">Ha tenido problemas judiciales</p> {{ $filtro->problemas}}</div>
        <div class="col"><p class="h6">Cual fue la razón</p>{{ $filtro->motivoJ}}</div>



        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col"><p class="h6">¿Fuma? con qué frecuencia</p>  {{ $filtro->fuma}} , {{ $filtro->frecuencia}} </div>
        <div class="col"><p class="h6">¿Cuál es su estado de salud? </p>{{ $filtro->estadoSalud}}</div>
        <div class="col"><p class="h6">¿Sigue algún tratamiento? </p>{{ $filtro->tratamiento}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->
        <div class="w-100 d-none d-md-block"></div>
        <div class="col"><p class="h6">¿Ha sufrido accidentes? </p>  {{ $filtro->accidentes}} {{ $filtro->cualAc}}</div>
        <div class="col"><p class="h6">Ha tenido procesos anteriores en Mentius?</p>{{ $filtro->procesosAnt}}</div>
        <div class="col"><p class="h6">¿Tiene familiares en la compañía? </p>{{ $filtro->familiaresMent}}</div>

        <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
        <!-- Force next columns to break to new line -->

        @if (empty($filtro->resultadoRRHH))
        <div class="col"><p class="h6"></div>
        <div class="col"><p class="h6"></div>
        @else
        <div class="col"><p class="h6">Resultado Primera Entrevista</p>{{ $filtro->resultadoRRHH}}</div>
        <div class="col"><p class="h6">Fecha</p>{{ $filtro->fechaRrhh}}</div>
        @endif

        @if (empty($filtro->resultadoGer))
        <div class="col"><p class="h6"></div>
        @else
        <div class="col"><p class="h6">Resultado Entrevista Gerencia</p>{{ $filtro->resultadoGer}}</div>
        @endif
@if (empty($filtro->resultadoJefe))
<div class="col"><p class="h6"></div>
@else
<div class="col"><p class="h6">Resultado Entrevista Jefe</p>{{ $filtro->resultadoJefe}}</div>
@endif

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
        'RESUMEN',
        'veras el resumen de la entrevista',
        'success'
      )
      </script>




 @stop


      @endsection
