@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('entrevista5.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos adicionales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="80" width="200">
<div class="page-header">
      <h3>Entrevista Jefe Inmediato</h3>
</div>
</center>
<br>
<div class="col-sm-12">
    <center><p>
        <div class="p-3 mb-2 bg-info text-white">
            Resumen entrevista previa
        </div>
    </p></center>
    </div>
    </body>

    <form action="{{ url('/entFinalizacion/'.$filtros->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
      @csrf
      @method('PATCH')

    

          <div class="conteiner">

            <center><p>
                <div class="card-header">
                   <h3>{{( $filtros->nombres)}}</h3>
                </div>
            </p></center>

<fieldset class="form-group">
<div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <div class="row">
          <p>
            <div class="col-auto"><label for="cedula">Cedula</label><input type="number" class="form-control" style="width: 200px" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtros->cedula)}}" readonly></div>
          </p>
          <p>
            <div class="col-auto"> <label for="nombres">Nombre</label><input type="text" class="form-control" style="width: 300px" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtros->nombres)}}" readonly></div>
          </p>
          <p>
            <div class="col-auto"> <label for="telefono">Telefono</label> <input type="number" class="form-control" style="width: 180px" id="" placeholder="" name="" value="{{ old('telefono' , $entrevista1s->telefono)}}" readonly></div>
          </p>
          <p>
            <div class="col-auto"> <label for="correo">Correo</label> <input type="mail" class="form-control" style="width: 250px" id="" placeholder="" name="" value="{{ old('correo' , $entrevista1s->correo)}}" readonly></div>
          </p>
        </div>
    </div>
 </div>
 </fieldset>


 <fieldset class="form-group">
    <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row">
              <p>
                <div class="col-auto"><label for="cedula">Cargo</label><input type="text" class="form-control" style="width: 300px" id="" placeholder="" name="" value="{{ $entrevista1s->cargo}}" readonly></div>
              </p>
              <p>
                <div class="col-auto"> <label for="nombres">Edad</label><input type="text" class="form-control" style="width: 50px" id="" name="" value="{{ old('edad', $entrevista1s->edad)}}" readonly></div>
              </p>
              <p>
                <div class="col-auto"> <label for="telefono">Lugar de nacimiento</label> <input type="text" class="form-control" style="width: 200px" id="" placeholder="" name="" value="{{ $entrevista1s->departamento}} | {{ $entrevista1s->id_ciudad}}" readonly></div>
              </p>
              <p>
                <div class="col-auto"> <label for="direccion">Direccion</label> <input type="text" class="form-control" style="width: 300px" id="" placeholder="" name="" value="{{ $entrevista1s->TipoVia}} {{ $entrevista1s->dr1}} {{ $entrevista1s->Prefijo1}} # {{ $entrevista1s->dr2}} {{ $entrevista1s->Prefijo2}} {{ $entrevista1s->dr3}} {{ $entrevista1s->orientacion}} {{ $entrevista1s->adicional}} {{ $entrevista1s->ad1}} {{ $entrevista1s->adicional2}} {{ $entrevista1s->ad2}} {{ $entrevista1s->adicional3}} {{ $entrevista1s->ad3}}" readonly></div>
              </p>
              <p>
                <div class="col-auto"> <label for="tvivienda">Tipo de Vivienda</label> <input type="text" class="form-control" style="width: 120px" id="tvivienda" placeholder="tvivienda" name="" value="{{ $entrevista1s->tVivienda}}" readonly></div>
              </p>
              <P>
                <div class="col-auto"> <label for="barrio">Ciudad y localidad Residecia</label> <input type="text" class="form-control" style="width: 300px" id="barrio" placeholder="barrio" name="" value="{{ $entrevista1s->residencia}} | {{ $entrevista1s->id_localidad}} | {{ $entrevista1s->barrio}}" readonly></div>  
              </P>
              <P>
                <div class="col-auto"> <label for="telefonos">Telefonos</label> <input type="text" class="form-control" style="width: 280px" id="telefonos" placeholder="telefonos" name="" value="{{ $entrevista1s->tFijo}}  {{ $entrevista1s->tCelular}}  {{ $entrevista1s->tCelular2}}" readonly></div>  
              </P>

              <P>
                <div class="col-auto"> <label for="conoce">Que Conoce de Mentius</label> <input type="text" class="form-control" style="width: 300px" id="conoce" placeholder="conoce" name="" value="{{ $entrevista1s->conoce}}" readonly></div>  
              </P>
              <P>
                <div class="col-auto"> <label for="eCivil">Estado civil</label> <input type="text" class="form-control" style="width: 120px" id="eCivil" placeholder="eCivil" name="" value="{{ $entrevista1s->eCivil}}" readonly></div>  
              </P>


            </div>
        </div>
     </div>
     </fieldset>

     <div class="p-3 mb-2 bg-info text-white"><center><h5>Datos de los Familiares</h5></center></div>
     <fieldset class="form-group">
        <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <div class="row">
               

                 
                    <div class="w-100 d-none d-md-block"></div>
                    <div class="col"><p class="h6">Nombre</p></div>
                    <div class="col"><p class="h6">Parentesco</p></div>
                    <div class="col"><p class="h6">Edad</p> </div>
                    <div class="col"><p class="h6">Ocupación</p></div>
                    <div class="col"><p class="h6">Teléfono</p> </div>
                   
                    <!-- Force next columns to break to new line -->
                   <div class="w-100 d-none d-md-block"></div>
                   <div class="col">{{ $entrevista2s->sinfamilia }}</div>
                   <div class="col">{{ $entrevista2s->sinfamilia }}</div>
                   <div class="col">{{ $entrevista2s->sinfamilia }}</div>
                   <div class="col">{{ $entrevista2s->sinfamilia }}</div>
                   <div class="col">{{ $entrevista2s->sinfamilia }}</div>          

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


                </div>
            </div>
         </div>
         </fieldset>





         <div class="p-3 mb-2 bg-info text-white"><center><h5>Datos de Academicos</h5></center></div>

     <fieldset class="form-group">
        <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <div class="row">


                    <div class="w-100 d-none d-md-block"></div>
                    <div class="col"><p class="h6">Grado</p></div>
                    <div class="col"><p class="h6">Institución</p> </div>
                    <div class="col"><p class="h6">Duración en años</p></div>
                    <div class="col"><p class="h6">Fecha</p></div>
                    <div class="col"><p class="h6">Titulo</p></div>
                    <div class="col"><p class="h6">Estado</p> </div>


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

                </div>
            </div>
         </div>
         </fieldset>
         <div class="p-3 mb-2 bg-info text-white"><center><h5>Datos de Laborales</h5></center></div>

     <fieldset class="form-group">
        <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <div class="row">


                    <div class="w-100 d-none d-md-block"></div>
                    <div class="col"><p class="h6">Empresa</p></div>
                    <div class="col"><p class="h6">Fecha de inicio</p> </div>
                    <div class="col"><p class="h6">Fecha de retiro</p></div>
                    <div class="col"><p class="h6">Tiempo de labor</p></div>
                    <div class="col"><p class="h6">Cargo</p></div>
                    <div class="col"><p class="h6">Jefe Inmediato</p></div>
                    <div class="col"><p class="h6">Teléfono</p> </div>
                    <div class="col"><p class="h6">Salario</p> </div>
                    <div class="col"><p class="h6">Motivo de retiro</p> </div>

                    <div class="w-100 d-none d-md-block"></div>
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
                    <div class="col">{{ $entrevista4s->sinExp}} </div>
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
           
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
                    <div class="col">{{ $entrevista4s->sinExp}}</div>
                    <hr width=80%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
         
         
         <div class="w-100 d-none d-md-block"></div>
         <div class="col">{{ $entrevista4s->empresa1}}</div>
         <div class="col">{{ $entrevista4s->fechain1}} </div>
         <div class="col">{{ $entrevista4s->fechart1}}</div>
         <div class="col">{{ $entrevista4s->tiempo1}}</div>
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
         <div class="col">{{ $entrevista4s->tiempo2}}</div>
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
         <div class="col">{{ $entrevista4s->tiempo3}}</div>
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
         <div class="col">{{ $entrevista4s->tiempo4}}</div>
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
         <div class="col">{{ $entrevista4s->tiempo5}}</div>
         <div class="col">{{ $entrevista4s->hlcargo5}}</div>
         <div class="col">{{ $entrevista4s->jefeinm5}}</div>
         <div class="col">{{ $entrevista4s->teleinf5}}</div>
        <div class="col">{{ $entrevista4s->salarioh5}}</div>
         <div class="col">{{ $entrevista4s->motivor5}}</div>
                </div>
            </div>
         </div>
         </fieldset>
         <div class="p-3 mb-2 bg-info text-white"><center><h5>Generalidades</h5></center></div>
         <fieldset class="form-group">
            <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
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
         <div class="col"><p class="h6">¿Ha sufrido accidentes? </p>  {{ $entrevista5s->acceidentes}} {{ $entrevista5s->cuantoTiempo}}</div>
         <div class="col"><p class="h6">Que accidente tuvo</p> {{ $entrevista5s->cualAc}}</div>
         <div class="col"><p class="h6">Ha tenido procesos anteriores en Mentius?</p>{{ $entrevista5s->procesosAnt}}</div>
         <div class="col"><p class="h6">¿Tiene familiares en la compañía? </p>{{ $entrevista5s->familiaresMent}}</div>

        </div>
    </div>
 </div>
 <fieldset class="form-group">
    <div class="container" style="background-image: linear-gradient(#ffffff, #ffffff);">
        
            <div class="row">
 <div class="w-100 d-none d-md-block"></div>
 <div class="col"><p class="h6">RRHH</p></div>
 <div class="col"><p class="h6">Gerencia</p> </div>
 <div class="col"><p class="h6">Jefe Inmediato</p></div>
 <div class="col"><p class="h6">Observaciones</p></div>

 <div class="w-100 d-none d-md-block"></div>
 <div class="col">{{ $filtros->resultado}}</div>
 <div class="col">{{ $filtros->resultadoGer}}</div>
 &nbsp;&nbsp;&nbsp;&nbsp;

 <div><input type="checkbox" id="resultadoJefe" name="resultadoJefe"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="Aprueba" data-off="No aprueba"></div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;
 <textarea name="obsJefe" id="obsJefe" cols="35" rows="3"></textarea>
 
</div>
</div>
<br>
<div class="d-grid gap-2">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    <a href="{{route('entJefe.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continuar</a>
</div>
<br> <br>
</div>
</div>
</div>
</div>
</div>

        


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
        'Aqui podras registrar algunas generalidades',
        'success'
      )
      </script>

<script>
    $(function() {
      $('#toggle-two').bootstrapToggle({
        aprobado: 'Enabled',
        no_aprobado: 'Disabled'
      });
    })
  </script>


 @stop

      @endsection
