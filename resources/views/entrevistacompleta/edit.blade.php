@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('filtro.index')}}"><img src="https://images.cooltext.com/5506399.png" style="margin-left: 2rem; heigth: 60px; width:50px;" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8); width: 90%; margin-left:2rem;" >
    <img src="\theme\images\isotipo-slogan.png" float="left" height="80" width="260">



<style>
.inputs{
border-radius: 0.7rem;
width: 150px;
height: 40px;
background-color: #e9f1f1;
font-weight: 100;
}
.inputs-1{
border-radius: 0.50rem;
width: 250px;
height: 30px;
background-color: #e9f1f1;
font-weight: 100;
}
.inputs1{
    border-radius: 0.50rem;
    width: 270px;
    height: 40px;
    background-color: #e9f1f1;
    font-weight: 100;
    }

.inputs2{
    border-radius: 0.50rem;
    width: 140px;
    background-color: #e9f1f1;
    font-weight: 200;
    }

.inputs3{
    border-radius: 0.50rem;
    width: 400px;
    background-color: #e9f1f1;
    font-weight: 200;
    height: 38px;
    text-transform: capitalize;

    }

.inputs4{
    border-radius: 0.50rem;
    width: 80px;
    background-color: #e9f1f1;
    font-weight: 200;
    height: 38px;
    margin-left: 3.75rem;
    color: #234c63;
    font-size: 16px;
   text-transform: capitalize;
    }

.inputs5{
    border-radius: 0.50rem;
    width: 180px;
    background-color: #e9f1f1;
    font-weight: 200;
    height: 38px;
    color: #234c63;
    font-size: 16px;
    text-transform: capitalize;

    }

    .inputs5-2{
        border-radius: 0.50rem;
        width: 120px;
        background-color: #e9f1f1;
        font-weight: 200;
        height: 30px;
        color: #234c63;
        font-size: 12px;
        text-transform: capitalize;

        }
    .inputs5-1{
        color: #234c63;
        font-size: 14px;
        border-radius: 0.50rem;
        width: 180px;
        background-color: #e9f1f1;
        font-weight: 200;
        height: 38px;
        text-transform: capitalize;

        }

.inputs5-1::placeholder {
color: #234c63;
font-weight: bold;
font-size: 16px;
opacity: 1;
text-transform: capitalize;
}

.inputs6{
font-size: 14px;
color: #234c63;
border-radius: 0.50rem;
width: 160px;
background-color: #e9f1f1;
font-weight: 200;
height: 38px;
text-transform: capitalize;
margin-left: 1rem;
}
.inputs7{
font-size: 11px;
color: #234c63;
border-radius: 0.50rem;
width: 100px;
background-color: #e9f1f1;
font-weight: 100;
height: 30px;
text-transform: capitalize;
}

.labels{
font-size: 1.3rem;
margin-left: 2rem;
}
.etiquetas{
    height: 20px;
    background: #bfd7da;
    color:  #234c63;
    font-size: 14px;
    text-align: center;
    border-radius: 0.50rem;
}
.etiquetas-t{
    height: 15px;
    background: #bfd7da;
    color:  #234c63;
    font-size: 12px;
    text-align: center;
    border-radius: 0.50rem;
}

.form-control1{
    border-radius: 0.50rem;
    height: 30px;
}
.form-control0 {
    display: block;
    width: 19rem;
    height: calc(1.6em + 0.75rem + 2px);
    padding: 0.375rem 0.50rem;
    line-height: 1.6;
    color: #495057;
    background-color: #e9f1f1;
    background-clip: padding-box;
    border: 1px solid #000000;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    font-size: 12px;
    border-radius: 0.50rem;
    font-weight: 100;
    height: 38px;
    text-transform: capitalize;
  }
  .form-control0-1 {
    display: block;
    width: 80%;
    padding: 0.375rem 0.50rem;
    line-height: 1.6;
    color: #495057;
    background-color: #e9f1f1;
    background-clip: padding-box;
    border: 1px solid #000000;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    font-size: 14px;
    border-radius: 0.50rem;
    font-weight: 100;

    text-transform: capitalize;
  }

.form-control0::placeholder{
    color:#000000; ;
}
tr{
    
}
table {
    table-layout: fixed;
    width: 100%;
    border-collapse: collapse;
    border: 3px solid rgb(11, 77, 88);
  }


</style>


<div class="page-header">
    <form action="{{ url('/entrevistacompleta/'.$filtros->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @method('PATCH')

    <br>
    <center>
      <h3>ENTREVISTA LABORAL</h3>
</div>
</center>

<div class="container">
    <center><p>
        <div class="card-header">
           <h3 style="text-transform: capitalize">{{( $filtros->nombre)}}</h3>
        </div>
    </p></center>
    <fieldset class="form-group">
        <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <div class="row">
<p><div class="col-auto"><label class="etiquetas" for="cedula">Cedula</label><input type="number" class="inputs-1" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtros->cedula)}}" ></div></p>
<p><div class="col-auto"> <label class="etiquetas" for="telefono">Telefono</label> <input type="number" class="inputs-1" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono' , $filtros->telefono)}}" ></div></p>
<p><div class="col-auto"> <label class="etiquetas" for="correo">Correo</label> <input type="mail" class="inputs-1" id="correo" placeholder="correo" name="correo" value="{{ old('correo' , $filtros->correo)}}" ></div></p>
<p><div class="col-auto"><label for="perfil"></label><input type="hidden" class="form-control" style="width: 240px" id="cargo" placeholder="cargo" name="cargo" value="{{ old('cargo', $filtros->cargo)}}" ></div><div class="col-auto"><label for="campana"></label><input type="hidden" class="form-control" style="width: 240px" id="campana" placeholder="campaña" name="campaña" value="{{ old('campaña', $filtros->campaña)}}"></div>
<div class="col-auto"><label for="fuente"></label><input type="hidden" class="form-control" style="width: 240px" id="fuente" placeholder="fuente" name="fuente" value="{{ old('fuente', $filtros->fuente)}}" ></div>
</p>
</div>
</div>
</div>
</fieldset>
  <div class="col-sm-12"><center><p><div class="card-header">Datos Generales</div></p></center></div>
<fieldset class="form-group">
    <div class="container">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">
        <p>
                <input list="cargo" type="text" name="cargo"  value="{{$filtros->cargo}}" class="inputs" placeholder="Seleccione un cargo">
                <datalist name="cargo" id="cargo" >
                <option value="">Cargos</option>
                @foreach($cargos as $cargo)<option>
                    {{ $cargo->cargo }}</option>
                @endforeach
                </datalist>
        </p>
&nbsp;&nbsp;
        <p><label class="etiquetas" for="fnacimiento">Fecha nacimiento</label></p><p> <input type="date" id ="fnacimiento" name="fnacimiento" class="inputs" placeholder="Fecha de venta" required></p>
        <p>  <select name="departamento" id="departamento" class="inputs1" required> <label for="departamento"></label>
            <option value=""> Departamento de nacimiento </option>
                @foreach($departamento as $departamentos)
            <option value="{{ $departamentos->Nombre}}">{{ $departamentos->Nombre }}</option>
                @endforeach
        </select>
    </p>
        <p><select name="id_ciudad" id="id_ciudad" class="inputs1" placeholder="Ciudad de nacimiento" required> </select></p>
</div>
<div class="col-sm-12">
    <center><p>
     <div class="card-header">Datos Residencia</div>
    </p></center>
</div>
<div class="col-sm-14 col-form-label">
    <div class="input-group input-group-sm">
        <strong><span class="etiquetas" >Direccion</span></strong>&nbsp;&nbsp;
        <p><input list="TipoVia" type="text" name="TipoVia"  class="form-control1" style="width: 200px"  placeholder="Tipo via">
            <datalist name="TipoVia" id="TipoVia" >
                <option value="">Tipo Via</option>
                @foreach($TipoVias as $TipoVia)<option value="{{ $TipoVia->tipo_vias}}">
                    {{ $TipoVia->tipo_vias }}</option>
                @endforeach
            </datalist>
        </p>
<p>
<input type="text" name="dr1" id="dr1" class="form-control1"  style="width:50px" required>
</p>
<p>
    <input list="prefijo1" type="text" name="prefijo1"  class="form-control1" style="width: 100px"  placeholder="Prefijo">

    <datalist name="prefijo1" id="prefijo1" >
        <option value="">Prefijo</option>
        @foreach($prefijos as $prefijo)<option value="{{ $prefijo->prefijo}}">
            {{ $prefijo->prefijo }}</option>
        @endforeach
    </datalist>
</p>
                       <strong> <span class="etiquetas" >&nbsp; # &nbsp; </span></strong>
<p><input type="number" name="dr2" id="dr2" class="form-control1"  style="width:50px" required></p>

<p>
    <input list="prefijo2" type="text" name="prefijo2"  class="form-control1" style="width: 100px"  placeholder="Prefijo">

    <datalist name="prefijo2" id="prefijo2" >
        <option value="">Prefijo</option>
        @foreach($prefijos as $prefijo)<option value="{{ $prefijo->prefijo}}">
            {{ $prefijo->prefijo }}</option>
        @endforeach
    </datalist>
</p>
                <strong><span class="etiquetas" >&nbsp;-&nbsp; </span></strong>
                <p><input type="number" name="dr3" id="dr3" class="form-control1"  style="width:70px" required></p>

                <p>
                    <input list="orientacion" type="text" name="orientacion"  class="form-control1" style="width: 220px"  placeholder="Orientacion">

                    <datalist name="orientacion" id="orientacion" >
                        <option value="">Orientacion</option>
                        @foreach($orientaciones as $orientacion)<option value="{{ $orientacion->orientacion}}">
                          {{ $orientacion->orientacion }}</option>
                        @endforeach
                    </datalist>
                </p>

    </div>
</div>

<div class="col-sm-14 col-form-label">
    <div class="input-group input-group-sm">
        <strong><span class="etiquetas">Complementos</span></strong>

        <p>
            <input list="adicional" type="text" name="adicional"  class="form-control1" style="width: 200px"  placeholder="Adicional">

            <datalist name="adicional" id="adicional" >
                <option value="">Adicionales</option>
                @foreach($adicionales as $adicional)<option value="{{ $adicional->adicional}}">
                  {{ $adicional->adicional }}</option>
                @endforeach
            </datalist>
        </p>


<p><input type="text" name="ad1" id="ad1" class="form-control1"  style="width:50px"></p>
<strong><span class="etiquetas">&nbsp; - &nbsp; </span></strong>
        <p>
            <input list="adicional2" type="text" name="adicional2"  class="form-control1" style="width: 190px"  placeholder="Adicional">

            <datalist name="adicional2" id="adicional2" >
                <option value="">Adicionales</option>
                @foreach($adicionales as $adicional)<option value="{{ $adicional->adicional}}">
                  {{ $adicional->adicional }}</option>
                @endforeach
            </datalist>
        </p>

<p><input type="text" name="ad2" id="ad2" class="form-control1"  style="width:50px"></p>

                    <strong><span class="etiquetas">&nbsp; - &nbsp; </span></strong>
        <p>
            <input list="adicional3" type="text" name="adicional3"  class="form-control1" style="width: 190px"  placeholder="Adicional">

            <datalist name="adicional3" id="adicional3" >
                <option value="">Adicionales</option>
                @foreach($adicional2es as $adicional2)<option value="{{ $adicional2->adicional}}">
                     {{ $adicional2->adicional }}</option>
                @endforeach
            </datalist>
        </p>
<p><input type="text" name="ad3" id="ad3" class="form-control1"  style="width:50px"></p>

    </div>
</div>

<div class="input-group input-group-sm">
    <p><input type="text" name="barrio" id="barrio" class="form-control1"  style="width:160px; text-transform: capitalize;" placeholder="Barrio" ></p>

                    <span>&nbsp;</span>
                    <p><select name="residencia" id="residencia" class="form-control1" style="width: 230px" required><label for="residencia"></label>
                <option value="">Ciudad de residencia</option>
                @foreach($residencia as $residencias)<option value="{{ $residencias->residencia}}">
                  {{ $residencias->residencia }}</option>
                @endforeach
</select></p>

<p><select name="id_localidad" id="id_localidad" class="form-control1" style="width: 230px" placeholder="localidad"required> </select></p>
<p><input type="number" name="tFijo" id="tFijo" class="form-control1" style="width: 160px" placeholder="Telefono fijo"></p>

<p><input type="number" name="tCelular2" id="tCelular2" class="form-control1" style="width: 160px" placeholder="Celular secundario" ></p>

            </div>
        </div>
    </div>
</fieldset>

<div class="col-sm-12">
    <center><p>


        <div class="card-header">
            Informacion Adicional
        </div>
    </p></center>
</div>
<fieldset class="form-group">
    <div class="container">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row col-xs-12">

                &nbsp;&nbsp;&nbsp;
                    <p><input list="tVivienda" type="text" name="tVivienda"  style="width:230px"class="form-control1" placeholder="Tipo de vivienda">
                        <datalist name="tVivienda" id="tVivienda" >
                          <option value="">Tipo de vivienda</option>
                          @foreach($tViviendas as $tVivienda)<option value="{{ $tVivienda->tvivienda}}">
                              {{ $tVivienda->tvivienda }}</option>
                            @endforeach
                        </datalist>
                        </p><span>&nbsp;
                    </span>

                    <input list="sMilitar" type="text" name="sMilitar"  style="width:230px"class="form-control1" placeholder="¿Presto servicio militar?">

                    <datalist name="sMilitar" id="sMilitar" >
                      <option value="">Tipo de vivienda</option>
                      @foreach($sMilitars as $sMilitar)<option value="{{ $sMilitar->sMilitar}}">
                          {{ $sMilitar->sMilitar }}</option>
                        @endforeach
                    </datalist>
                   </p>&nbsp;
                <p>
                    <input list="eCivil" type="text" name="eCivil"  style="width:230px"class="form-control1" placeholder="Estado Civil">

                    <datalist name="eCivil" id="eCivil" >
                      <option value="">Estado Civil</option>
                      @foreach($eCivils as $eCivil)<option value="{{ $eCivil->e_civil}}">
                          {{ $eCivil->e_civil }}</option>
                        @endforeach
                    </datalist>
                    </p>&nbsp;
<div style="width:230px"><p>
    <input type="text" id ="quien" name="quien" class="form-control1" style="text-transform: capitalize" placeholder="Con Quien Vive"></p>
</div>
<div class="col-sm-12">
    <center><p>


        <div class="card-header">
            Informacion Familiar
        </div>
    </p></center>
</div>



    <div class="container">

        <p>
            <input type="checkbox" name="sinfamilia" id="sinfamilia"  value="No registran" ><label for="sinfamilia">&nbsp;&nbsp;&nbsp;&nbsp;Sin Familiares </label>&nbsp;&nbsp;<i>*solo se debera señalar esta opcion en caso de que el postulado no cuente con ningun familiar conocido</i>
        </p>






        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

            <label for="">Parentesco</label>  <div class="row col-xs-12">
 <p style="width:300px">
     <input list="parentescop1" type="text" name="parentescop1"  class="inputs3"  >
     <datalist name="parentescop1" id="parentescop1" >
         <option value="">Escoja uno</option>
         @foreach($parentescos as $parentesco)
     <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
         @endforeach
     </datalist>
     </p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="width:150px"><p><input type="number" id ="edadp1" name="edadp1" class="inputs4" placeholder="Edad"></p></div>
<div style="width:350px"><p><input type="text"  style="text-transform: capitalize" id ="ocupacionp1" name="ocupacionp1" class="inputs3" placeholder="Ocupacion"></p></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="width:350px">
    <input list="parentescop2" type="text" name="parentescop2"  class="inputs3"  >
    <datalist name="parentescop2" id="parentescop2" >
        <option value="">Escoja uno</option>
        @foreach($parentescos as $parentesco)
    <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
        @endforeach
    </datalist>
    </p>


<div style="width:150px"><p><input type="number" id ="edadp2" name="edadp2" class="inputs4" placeholder="Edad"></p></div>
<div style="width:350px"><p><input type="text"  style="text-transform: capitalize" id ="ocupacionp2" name="ocupacionp2" class="inputs3" placeholder="Ocupacion"></p></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="width:350px">
    <input list="parentescop3" type="text" name="parentescop3"  class="inputs3"  >
    <datalist name="parentescop3" id="parentescop3" >
        <option value="">Escoja uno</option>
        @foreach($parentescos as $parentesco)
    <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
        @endforeach
    </datalist>
    </p>
<div style="width:150px"><p><input type="number" id ="edadp3" name="edadp3" class="inputs4" placeholder="Edad"></p></div>
<div style="width:350px"><p><input type="text"  style="text-transform: capitalize" id ="ocupacionp3" name="ocupacionp3" class="inputs3" placeholder="Ocupacion"></p></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="width:350px">
    <input list="parentescop4" type="text" name="parentescop4"  class="inputs3" >
    <datalist name="parentescop4" id="parentescop4" >
        <option value="">Escoja uno</option>
        @foreach($parentescos as $parentesco)
    <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
        @endforeach
    </datalist>
    </p>
<div style="width:150px"><p><input type="number" id ="edadp4" name="edadp4" class="inputs4" placeholder="Edad"></p></div>
<div style="width:350px"><p><input type="text"  style="text-transform: capitalize" id ="ocupacionp4" name="ocupacionp4" class="inputs3" placeholder="Ocupacion"></p></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style="width:350px">
    <input list="parentescop5" type="text" name="parentescop5"  class="inputs3"  >
    <datalist name="parentescop5" id="parentescop5" >
        <option value="">Escoja uno</option>
        @foreach($parentescos as $parentesco)
    <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
        @endforeach
    </datalist>
    </p>
<div style="width:150px"><p><input type="number" id ="edadp5" name="edadp5" class="inputs4" placeholder="Edad"></p></div>
<div style="width:350px"><p><input type="text"  style="text-transform: capitalize" id ="ocupacionp5" name="ocupacionp5" class="inputs3" placeholder="Ocupacion"></p></div>
            </div>
        </div>
    </div>

     <div class="col-sm-12">
        <center><p>


            <div class="card-header">
                Informacion Academica
            </div>
        </p></center>
    </div>



        <div class="container">
            <table class="table">
                <thead>
                    <tr align="center">
                    <th class="etiquetas-t">GRADO</th>
                    <th class="etiquetas-t">INSTITUCION</th>
                    <th class="etiquetas-t">AÑO EGRESO</th>
                    <th class="etiquetas-t">TITULO OBTENDO</th>
                    <th class="etiquetas-t">ESTADO</th>
                    </tr>
                </thead>
                <tbody><tr>
                    <td>
                    <p><input type="text" class="inputs5-1" placeholder="Primaria" disabled></p>
                    <p><input type="text" class="inputs5-1" placeholder="Secundaria" disabled></p>
                    <p><input type="text" class="inputs5-1" placeholder="Tecnico" disabled></p>
                    <p><input type="text" class="inputs5-1" placeholder="Tecnologo" disabled></p>
                    <p><input type="text" class="inputs5-1" placeholder="Universitario" disabled></p>
                    <p><input type="text" class="inputs5-1" placeholder="Especializacion" disabled></p>
                    <p><input type="text" class="inputs5-1" placeholder="Otros" disabled></p>
                    </td>
                    <td>
                    <p><input type="text" id ="institucion1" name="institucion1"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="institucion2" name="institucion2"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="institucion3" name="institucion3"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="institucion4" name="institucion4"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="institucion5" name="institucion5"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="institucion6" name="institucion6"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="institucion7" name="institucion7"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <td>
                    <p><input type="text" id ="fecha1" name="fecha1" maxlength="4" class="inputs6" placeholder=""></p>
                    <p><input type="text" id ="fecha2" name="fecha2" maxlength="4" class="inputs6" placeholder=""></p>
                    <p><input type="text" id ="fecha3" name="fecha3" maxlength="4" class="inputs6" placeholder=""></p>
                    <p><input type="text" id ="fecha4" name="fecha4" maxlength="4" class="inputs6" placeholder=""></p>
                    <p><input type="text" id ="fecha5" name="fecha5" maxlength="4" class="inputs6" placeholder=""></p>
                    <p><input type="text" id ="fecha6" name="fecha6" maxlength="4" class="inputs6" placeholder=""></p>
                    <p><input type="text" id ="fecha7" name="fecha7" maxlength="4" class="inputs6" placeholder=""></p>
                    </td>
                    <td>
                    <p><input type="text" id ="titulo1" name="titulo1"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="titulo2" name="titulo2"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="titulo3" name="titulo3"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="titulo4" name="titulo4"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="titulo5" name="titulo5"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="titulo6" name="titulo6"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    <p><input type="text" id ="titulo7" name="titulo7"  style="text-transform: capitalize" class="inputs5" placeholder=""></p>
                    </td>
                <td>
                    <p><select name="estado1"  class="inputs6" required>
                        <option value="0" selected>Estado
                        <option value="Aprobado">aprobado
                        <option value="Aplazado">aplazado
                        <option value="Retirado">retirado
                            <option value="Veriicado">verificado
                    </select></p>
                    <p><select name="estado2"  class="inputs6" required>
                        <option value="0" selected>Estado
                        <option value="Aprobado">aprobado
                        <option value="Aplazado">aplazado
                        <option value="Retirado">retirado
                        <option value="Veriicado">verificado
                    </select></p>
                    <p><select name="estado3"  class="inputs6" >
                        <option value="0" selected>Estado
                        <option value="Aprobado">aprobado
                        <option value="Aplazado">aplazado
                        <option value="Retirado">retirado
                        <option value="Veriicado">verificado
                    </select></p>
                    <p><select name="estado4"  class="inputs6" >
                        <option value="0" selected>Estado
                        <option value="Aprobado">aprobado
                        <option value="Aplazado">aplazado
                        <option value="Retirado">retirado
                        <option value="Veriicado">verificado
                    </select></p>
                    <p><select name="estado5"  class="inputs6">
                        <option value="0" selected>Estado
                        <option value="Aprobado">aprobado
                        <option value="Aplazado">aplazado
                        <option value="Retirado">retirado
                        <option value="Veriicado">verificado
                    </select></p>
                    <p><select name="estado6"  class="inputs6">
                        <option value="0" selected>Estado
                        <option value="Aprobado">aprobado
                        <option value="Aplazado">aplazado
                        <option value="Retirado">retirado
                        <option value="Veriicado">verificado
                    </select></p>
                    <p><select name="estado7"  class="inputs6">
                        <option value="0" selected>Estado
                        <option value="Aprobado">aprobado
                        <option value="Aplazado">aplazado
                        <option value="Retirado">retirado
                        <option value="Veriicado">verificado
                    </select></p>

                </td>
                </tr></tbody>
                </table>
     </div>
       <div class="col-sm-12">
            <center><p>
                <div class="card-header">
                    Historial Laboral
                </div>
            </p></center>
        </div>

        <input type="checkbox" name="sinExp" id="sinExp"  value="Sin Experiencia" ><label for="">&nbsp;&nbsp;&nbsp;&nbsp;Sin experiencia previa</label> &nbsp;&nbsp;<i>*esta opcion solo se debera seleccionar si el postulado no tiene ninguna experiencia laboral</i>

        <table class="table" >
        <thead><tr align="center">
            <th class="etiquetas-t">Nombre de la Empresa</th>
            <th class="etiquetas-t">Fecha Ingreso</th>
            <th class="etiquetas-t">Fecha Retiro</th>
            <th class="etiquetas-t">Cargo</th>
            <th class="etiquetas-t">Jefe Inmediato</th>
            <th class="etiquetas-t">Telefono</th>
            <th class="etiquetas-t">Salario</th>
            <th class="etiquetas-t">Motivo Retiro</th>
        </tr></thead>
        <tbody>
        <td>
            <p><input type="text" id ="empresa1" name="empresa1"  style="text-transform: capitalize" class="inputs5-2" placeholder=""></p>
            <p><input type="text" id ="empresa2" name="empresa2"  style="text-transform: capitalize" class="inputs5-2" placeholder=""></p>
            <p><input type="text" id ="empresa3" name="empresa3"  style="text-transform: capitalize" class="inputs5-2" placeholder=""></p>
            </td>
        <td>
            <p><input type="date" id ="fechain1" name="fechain1" class="inputs7" placeholder=""></p>
            <p><input type="date" id ="fechain2" name="fechain2" class="inputs7" placeholder=""></p>
            <p><input type="date" id ="fechain3" name="fechain3" class="inputs7" placeholder=""></p>
        </td>
        <td>
            <p><input type="date" id ="fechart1" name="fechart1" class="inputs7" placeholder=""></p>
            <p><input type="date" id ="fechart2" name="fechart2" class="inputs7" placeholder=""></p>
            <p><input type="date" id ="fechart3" name="fechart3" class="inputs7" placeholder=""></p>
        </td>

        <td>
            <p><input type="text" id ="hlcargo1" name="hlcargo1"  style="text-transform: capitalize" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="hlcargo2" name="hlcargo2"  style="text-transform: capitalize" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="hlcargo3" name="hlcargo3"  style="text-transform: capitalize" class="inputs7" placeholder=""></p>

        </td>
        <td>
            <p><input type="text" id ="jefeinm1" name="jefeinm1"  style="text-transform: capitalize" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="jefeinm2" name="jefeinm2"  style="text-transform: capitalize" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="jefeinm3" name="jefeinm3"  style="text-transform: capitalize" class="inputs7" placeholder=""></p>
        </td>
        <td>
            <p><input type="number" id ="teleinf1" name="teleinf1" class="inputs7" placeholder=""></p>
            <p><input type="number" id ="teleinf2" name="teleinf2" class="inputs7" placeholder=""></p>
            <p><input type="number" id ="teleinf3" name="teleinf3" class="inputs7" placeholder=""></p>
        </td>
        <td>
            <p><input type="text" id ="salarioh1" name="salarioh1" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="salarioh2" name="salarioh2" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="salarioh3" name="salarioh3" class="inputs7" placeholder=""></p>
        </td>
        <td>
            <p><input type="text" id ="motivor1" name="motivor1" style="text-transform: capitalize" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="motivor2" name="motivor2" style="text-transform: capitalize" class="inputs7" placeholder=""></p>
            <p><input type="text" id ="motivor3" name="motivor3" style="text-transform: capitalize" class="inputs7" placeholder=""></p>

        </td>
        </tr></tbody>
        </table>


        <div class="col-sm-12">
            <center><p>
                <div class="card-header">
                     Generalidades
                </div>
            </p></center>
        </div>
        <fieldset class="form-group">
            <div class="container">
                <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="row">

            <div>
                <p><input type="text" id ="aspiracion" name="aspiracion" class="form-control0" placeholder="&#36; Aspiracion Salarial" required></p>
            </div>
            <div>
                <p><select type="text" id ="personasC" name="personasC" class="form-control0" placeholder="Ha tenido personas a cargo?" required>
                      <option value="0">Ha tenido personas a cargo?</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                </select></p>
            </div>
        
     

            <div >
                <p><input type="text" id ="acCambio" name="acCambio" class="form-control0" style="text-transform: capitalize" placeholder="Actividades realizadas en los lapsos de cambio ocupación" required></p>
            </div>
        </div>
        <div class="row">
            <div>
                <p><select type="text" id ="otroProceso" name="otroProceso" class="form-control0" placeholder="Esta en proceso de seleccion en otra empresa?" required>
                  <option value="0"> Esta en proceso de seleccion en otra empresa?</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select></p>
            </div>

            <div>
                <p><input type="text" id ="CualOtra" name="CualOtra" class="form-control0" style="text-transform: capitalize" placeholder="Cual?"></p>
            </div>
   

            <div>
                <p><input type="text" id ="fortalezas" name="fortalezas" class="form-control0" style="text-transform: capitalize" placeholder="Cuales son sus fortalezas" required></p>
            </div>
        </div>  
        <div class="row">
            <div>
                <p><input type="text" id ="debilidades" name="debilidades" class="form-control0" style="text-transform: capitalize" placeholder="Cuales son sus debilidades" required></p>
            </div>

            <div>
                <p><input type="text" id ="valores" name="valores" class="form-control0" style="text-transform: capitalize" placeholder="Cuales valores le inculco su familia" required></p>
            </div>
      

            <div>
                <p><select type="text" id ="cancelado" name="cancelado" class="form-control0" style="text-transform: capitalize" placeholder="Le han cancelado contrato en otra empresa?" required>
                    <option value="0">Le han cancelado contrato en otra empresa?</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></p>
            </div>
        </div>
        <div class="row">
            <div>
                <p><input type="text" id ="motivoC" name="motivoC" class="form-control0" style="text-transform: capitalize" placeholder="Motivo"></p>
            </div>

            <div>
                <p><select type="text" id ="problemas" name="problemas" class="form-control0" placeholder="Tiene problemas judiciales?" required>
                    <option value="0">Tiene problemas judiciales?</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></p>
            </div>
       
            <div>
                <p><input type="text" id ="motivoJ" name="motivoJ" class="form-control0" style="text-transform: capitalize" placeholder="Motivo"></p>
            </div>
        </div>
        <div class="row">
            <div>
                <p><select type="text" id ="fuma" name="fuma" class="form-control0" placeholder="Fuma o consume alcohol?" required>
                    <option value="0">Fuma o Bebe alcohol?</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                    </select></p>
            </div>

            <div>
                <p><input type="text" id ="frecuencia" name="frecuencia" class="form-control0" style="text-transform: capitalize" placeholder="Con que frecuencia"></p>
            </div>
      

            <div>
                <p><input type="text" id ="tiempoLibre" name="tiempoLibre" class="form-control0" style="text-transform: capitalize" placeholder="Que hace en su tiempo libre?" required></p>
            </div>
        </div>
        <div class="row">
            <div>
                <p><input type="text" id ="estadoSalud" name="estadoSalud" class="form-control0" style="text-transform: capitalize" placeholder="Cual es su estado de salud?" required></p>
            </div>

            <div>
                <p><input type="text" id ="tratamiento" name="tratamiento" class="form-control0" style="text-transform: capitalize" placeholder="Tratamientos medicos" required></p>
            </div>
     

            <div>
                <p><select type="text" id ="accidentes" name="accidentes" class="form-control0" placeholder="Ha sufrido accidentes?" required>
                <option value="0">Ha sufrido accidentes?</option>
                <option value="si">Si</option>
                <option value="no">No</option>
                </select></p>
            </div>
        </div>
        <div class="row">

            <div>
                <p><input type="text" id ="cualAc" name="cualAc" class="form-control0" style="text-transform: capitalize" placeholder="Que tipo de Accidente"></p>
            </div>

            <div>
                <p><select type="text" id ="procesosAnt" name="procesosAnt" class="form-control0" placeholder="Anteriormente ha realiazado procesos en Mentius?" required>
                <option value="0"> Anteriormente ha realiazado procesos en Mentius?</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                </select></p>
            </div>

            <div>
                <p><select type="text" id ="familiaresMent" name="familiaresMent" class="form-control0" placeholder="Tiene familiares trabajando en Mentius?" required>
                <option value="0">Tiene familiares trabajando en Mentius?</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
                </select></p>
            </div>

        </div>

    </div>

</div>
</fieldset>


    <label for="obsgenerales" class="etiquetas">Observaciones generales</label>
    <textarea class="form-control0-1" id="obsgenerales" name="obsgenerales" rows="3"></textarea>
</div>

<input type="hidden" name="entvOK" id="entvOK" value="X">

<div class="d-grid gap-2">
    <input class="btn btn-lg btn-primary" type="submit" value="Registrar">
    <a href="{{route('entrevistacompleta.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continuar</a>
</div>
</form>
<br>
<br>
<br>


</div>
        </div>

  

</fieldset>

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
'Aqui se registran los datos basicos',
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
       $('#id_localidad').append("<option value=''>seleccion una localidad</option>");
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
