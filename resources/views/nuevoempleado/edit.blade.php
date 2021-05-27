@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
                <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <h3 aline="center">Formulario de Ingreso</h3>
            </center>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->
            <form action="{{ url('/nuevoempleado/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')
                <div class="col-sm-12">
                    <center><p>
                        <div class="card-header">
                           <h3>{{( $filtro->nombre)}}</h3>
                        </div>
                    </p></center>
                    </div>
                    </body>

                <div><input type="hidden" id="fuente" name="fuente" class="col-6 col-md-9" value="{{old('fuente', $filtro->fuente)}}" ></div><br>



                <div class="container">
    <div class="row">
        <div class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Tipo de Documento:</p></strong>
        <p>
            <input list="tipoDoc" type="text" name="tipoDoc"   class="form-control-lg-new13" required>

            <datalist name="tipoDoc" id="tipoDoc" >
              <option value="">Tipo de Documento</option>
              @foreach($t_docs as $tipo_doc2)<option value="{{ $tipo_doc2->tipo_doc2}}">
                  {{ $tipo_doc2->tipo_doc2 }}</option>
                @endforeach
            </datalist>
            </p>
        </div>

        <input type="hidden" id="cedula" name="cedula" value={{ old('cedula', $filtro->cedula)}}>

        &nbsp;&nbsp;
        <div class="col-6 col-md-2"><strong><p >Cedula:</p></strong><br><div class="form-control-lg-new13">{{ old('cedula', $filtro->cedula)}}</div></div>
            <div id="fexpe" name="fexpe" class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Fecha de Expedicion:</p></strong><input type="date"id="fexpe" name="fexpe" class="form-control-lg-new13" value="" required></div>
            <div class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Departamento de Expedicion:</p></strong>
                <select name="departamento" id="departamento" class="form-control-lg-new13" required> <label for="departamento"></label>
                    <option value="">Escoja uno</option>
                        @foreach($departamento as $departamentos)
                    <option value="{{ $departamentos->Nombre}}">{{ $departamentos->Nombre }}</option>
                        @endforeach
                </select>
            </div>
            <div  class="col-6 col-md-3"><strong><p><a style="color: red">* </a>Municipio o ciudad de Expedicion:</p></strong>

                <select name="id_ciudad" id="id_ciudad" class="form-control-lg-new13" placeholder="Ciudad de Expedicion" required> </select>
            </div>
    </div>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <div class="row">

                <div class="col-6 col-md-3"><strong><p>Correo:</p></strong><div class="form-control-lg-new13">{{ old('correo', $filtro->correo)}}</div></div>
                <div id="telefono" name="telefono" class="col-6 col-md-3"><strong><p><a style="color: red">* </a>Celular:</p></strong><input type="number" class="form-control-lg-new13" value="{{ old('telefono', $filtro->telefono)}}"></div><br>
                <div id="tFijo" name="tFijo" class="col-6 col-md-3"><strong><p>Tel Fijo:</p></strong><input type="number"id="tFijo" name="tFijo" class="form-control-lg-new13" value="{{ old('tFijo', $filtro->tFijo)}}"></div><br>
                <div  ><strong><p>Estado Civil:</p></strong><div>{{ old('eCivil', $filtro->eCivil)}} </div></div>
            </div>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

            <div class="row">





                <div  class="col-6 col-md-3"><strong><p>Direccion:</p></strong><div class="form-control-lg-new13"> {{old ('TipoVia',$filtro->TipoVia)}} {{ $filtro->dr1}} {{ $filtro->Prefijo1}} # {{ $filtro->dr2}} {{ $filtro->Prefijo2}} - {{ $filtro->dr3}} {{ $filtro->orientacion}} {{ $filtro->adicional}} {{ $filtro->ad1}} {{ $filtro->adicional2}} {{ $filtro->ad2}} {{ $filtro->adicional3}} {{ $filtro->ad3}}</div></div><br><br><br>
                <div  class="col-6 col-md-3"><strong><p>Ciudad y localidad:</p></strong><div class="form-control-lg-new13">{{ old('residencia', $filtro->residencia)}} | {{ old('localidad', $filtro->id_localidad)}}</div></div><br><br>
                <div  class="col-6 col-md-4"><strong><p>Lugar y fecha de nacimiento:</p></strong><div class="form-control-lg-new13">{{ old('departamento', $filtro->departamento)}} | {{old('id_ciudad', $filtro->id_ciudad) }} | {{ old('fnacimiento', $filtro->fnacimiento)}}</div></div><br>
                <div  class="col-6 col-md-2"><strong><p>Edad:</p></strong><div class="form-control-lg-new5" id="edad" name="edad" >{{ $edad }}</div></div>
            </div>

            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">


            <div class="row">

                &nbsp;&nbsp;&nbsp;

                <div ><strong><p><a style="color: red">* </a>Genero:</p></strong>
                    <p>
                        <input list="genero" type="text" name="genero"  class="form-control-lg-new13" required>

                        <datalist name="genero" id="genero" >
                          <option value="">Tipo de Documento</option>
                          @foreach($generos as $genero)<option value="{{ $genero->genero}}">
                              {{ $genero->genero }}</option>
                            @endforeach
                        </datalist>
                        </p>
                    </div>
                    &nbsp;&nbsp;&nbsp;



<br>
<div ><strong><p><a style="color: red">* </a>RH:</p></strong>
    <p>
        <input list="rh" type="text" name="rh"  class="form-control-lg-new13" required>

        <datalist name="rh" id="rh" >
          <option value="">Tipo de Documento</option>
          @foreach($tipo_rhs as $tipo_rh)<option value="{{ $tipo_rh->tipo_rh}}">
              {{ $tipo_rh->tipo_rh }}</option>
            @endforeach
        </datalist>
        </p>
    </div>
    &nbsp;&nbsp;&nbsp;

    <div ><strong><p><a style="color: red">* </a>Nivel Educativo:</p></strong>
        <p>
            <input list="nivelEdu" type="text" name="nivelEdu"  class="form-control-lg-new13" required>

            <datalist name="nivelEdu" id="nivelEdu" >
                <option value="">Escoja uno</option>
                @foreach($NivelEdus as $nivelEdu)
            <option value="{{ $nivelEdu->nivelEdu}}">{{ $nivelEdu->nivelEdu }}</option>
                @endforeach
            </datalist>
            </p>
        </div>
        &nbsp;&nbsp;&nbsp;

        <div id="cargo" name="cargo" class="col-6 col-md-2"><strong><p>Cargo:</p></strong><input type="text" id="cargo" name="cargo" class="form-control-lg-new13" value="{{ old('cargo', $filtro->cargo)}}"></div><br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" id="correoCorp" name="correoCorp"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="Correo corporativo Si" data-off="Correo corportativo No" >
    <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
</div>
        <div class="row">

            <div id="nombreContacto" name="nombreContacto" class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Persona de contacto:</p></strong><input type="text"id="personaContacto" name="personaContacto" class="form-control-lg-new13" required></div><br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div ><strong><p><a style="color: red">* </a>Parentesco:</p><span><br></span></strong>
                <p>
                    <input list="parentesco" type="text" name="parentesco"  class="form-control-lg-new13" required>

                    <datalist name="parentesco" id="parentesco">
                        <option value="">Escoja uno</option>
                        @foreach($parentescos as $parentesco)
                    <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
                        @endforeach
                    </datalist>
                    </p>
                </div>




            <div id="personaDireccion" name="personaDireccion" class="col-6 col-md-3"><strong><p><a style="color: red">* </a>Direccion:</p><br></strong><input type="text"id="personaDireccion" name="personaDireccion" class="form-control-lg-new13" required></div><br>
            <div id="contactof" name="contactof" class="col-6 col-md-2"><strong><p>Telefono fijo contacto:</p></strong><input type="text"id="contactof" name="contactof" class="form-control-lg-new13" ></div><br>
            <div id="contactoCelular" name="contactoCelular" class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Celular de contacto:</p></strong><input type="text"id="contactoCelular" name="contactoCelular" class="form-control-lg-new13"required ></div><br>
    </div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

    <div class="row">

        <div id="numHijos" name="numHijos" class="col-4 col-md"><strong><p>Numero <br>de Hijos: </p></strong><input type="number" id="numHijos" name="numHijos" class="form-control-lg-new13"></div>
        <div id="hijosMAs" name="hijosMAs" class="col-4 col-md"><strong><p>Hijos <br>masculinos:</p></strong><input type="number" id="hijosMAs" name="hijosMAs" class="form-control-lg-new13"></div>
        <div id="hijosFem" name="hijosFem" class="col-4 col-md"><strong><p>Hijos <br>femininos: </p></strong><input type="number" id="hijosFem" name="hijosFem" class="form-control-lg-new13"></div>
        <div ><p><strong>Preexistencia <br>medica:</strong></p><input type="checkbox" id="Preexistencia" name="Preexistencia" class="custom-control-input" data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Tiene <br>Alergias:</strong></p><input type="checkbox" id="alergias" name="alergias" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
        <div id="medicamentos" name="medicamentos"   class="col-4 col-md"><strong><p>Medicamentos que toma actualmente: </p></strong><input type="text" id="medicamentos" name="medicamentos" class="form-control-lg-new13"></div>
    </div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
    <center><h3 aline="center">Datos de familiares</h3></center>
    <div class="row">


        <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p></strong>
            <p><input list="tpd1" type="text" name="tpd1"  class="form-control-lg-new14">
               <datalist name="tpd1" id="tpd1" >
                    <option value="" name="tpd1" id="tpd1">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>



        <div id="docfam1" name="docfam1" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam1" name="docfam1" class="form-control-lg-new13" ></div>
        &nbsp;
        <div id="" name="" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text"  class="form-control-lg-new13" value="{{old('familiarp1', $filtro->familiarp1)}}"></div><br>
        &nbsp;
        <div id="" name="" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text"  class="form-control-lg-new13" value="{{old('parentescop1', $filtro->parentescop1)}}"></div><br>
        &nbsp;
        <div id="" name="" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text"  class="form-control-lg-new13" value="{{old('edadp1', $filtro->edadp1)}}"></div><br>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam1" name="epsFam1" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja1" name="caja1" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
    </div>
    <div class="row">


        <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p><span></span></strong>
            <p><input list="tpd2" type="text" name="tpd2"  class="form-control-lg-new14">
               <datalist name="tpd2" id="tpd2" >
                    <option value="" name="tpd2" id="tpd2">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>

            <div id="docfam2" name="docfam2" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam2" name="docfam2" class="form-control-lg-new13" ></div>
            <div id="" name="" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp2" name="familiarp2" class="form-control-lg-new13" value="{{old('familiarp2', $filtro->familiarp2)}}"></div><br>
            <div id="" name="" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop2" name="parentescop2" class="form-control-lg-new13" value="{{old('parentescop2', $filtro->parentescop2)}}"></div><br>
            <div id="" name="" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp2" name="edadp2" class="form-control-lg-new13" value="{{old('edadp2', $filtro->edadp2)}}"></div><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam2" name="epsFam2" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja2" name="caja2" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
        </div>

    <div class="row">
        <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p><span></span></strong>
            <p><input list="tpd3" type="text" name="tpd3"  class="form-control-lg-new14">
               <datalist name="tpd3" id="tpd3" >
                    <option value="" name="tpd3" id="tpd3">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>

            <div id="docfam3" name="docfam3" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam3" name="docfam3" class="form-control-lg-new13" ></div>
            <div id="" name="" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp3" name="familiarp3" class="form-control-lg-new13" value="{{old('familiarp3', $filtro->familiarp3)}}"></div><br>
            <div id="" name="" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop3" name="parentescop3" class="form-control-lg-new13" value="{{old('parentescop3', $filtro->parentescop3)}}"></div><br>
            <div id="" name="" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp3" name="edadp3" class="form-control-lg-new13" value="{{old('edadp3', $filtro->edadp3)}}"></div><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam3" name="epsFam3" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja3" name="caja3" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
        </div>

        <div class="row">
            <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p><span></span></strong>
                <p><input list="tpd4" type="text" name="tpd4"  class="form-control-lg-new14">
                   <datalist name="tpd4" id="tpd4" >
                        <option value="" name="tpd4" id="tpd4">Escoja uno</option>
                        @foreach($tipo_docs as $tipo_doc)
                    <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                        @endforeach
                    </datalist>
                    </p>
                </div>

                <div id="docfam4" name="docfam4" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam4" name="docfam4" class="form-control-lg-new13" ></div>
                <div id="" name="" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp4" name="familiarp4" class="form-control-lg-new13" value="{{old('familiarp4', $filtro->familiarp4)}}"></div><br>
                <div id="" name="" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop4" name="parentescop3" class="form-control-lg-new13" value="{{old('parentescop4', $filtro->parentescop4)}}"></div><br>
                <div id="" name="" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp4" name="edadp4" class="form-control-lg-new13" value="{{old('edadp4', $filtro->edadp4)}}"></div><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam4" name="epsFam4" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja4" name="caja4" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
            </div>
</div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
<div class="row">
    <div id="salario" name="salario" class="col-auto"><strong><p><a style="color: red" >* </a>Salario: </p></strong><input type="number" id="salario" name="salario" class="form-control-lg-new14" required></div>
    <div id="ingreso" name="ingreso" class="col-auto"><strong><p><a style="color: red" >* </a>Ingreso: </p></strong><input type="date" id="ingreso" name="ingreso" class="form-control-lg-new13" required></div>


    <div ><strong><p><a style="color: red" >* </a>Tipo Contrato:</p><span></span></strong>
        <p><input list="tipo_contratos" type="text" name="tipo_contratos"   class="form-control-lg-new14" required>
           <datalist name="tipo_contratos" id="tipo_contratos" >
            <option value="">Escoja uno</option>
            @foreach($tipo_contratoses as $tipo_contratos)
        <option value="{{ $tipo_contratos->tipoCon}}">{{ $tipo_contratos->tipoCon }}</option>
            @endforeach
            </datalist>
            </p>
        </div>
        <div class="col-auto"><strong><p><a style="color: red" >* </a>Sede:</p><span></span></strong>
            <p><input list="sede" type="text" name="sede"   class="form-control-lg-new14" required>
               <datalist name="sede" id="sede" >
                <option value="">Asigne una</option>
                @foreach($sedes as $sede)
            <option value="{{ $sede->sede}}">{{ $sede->sede }}</option>
                @endforeach
                </datalist>
                </p>
            </div>
            <div class="col-auto"><strong><p><a style="color: red" >* </a>Modalidad:</p><span></span></strong>
                <p><input list="modalidad" type="text" name="modalidad"   class="form-control-lg-new13" required>
                   <datalist name="modalidad" id="modalidad" >
                    <option value="">Asigne una</option>
                    @foreach($modalidades as $modalidad)
                <option value="{{ $modalidad->modalidad}}">{{ $modalidad->modalidad }}</option>
                    @endforeach
                    </datalist>
                    </p>
                </div>
                <div class="col-auto"><strong><p><a style="color: red" >* </a>Tipo de Modalidad:</p><span></span></strong>
                    <p><input list="tipoModalidad" type="text" name="tipoModalidad"   class="form-control-lg-new14" required>
                       <datalist name="tipoModalidad" id="tipoModalidad" >
                        <option value="">Asigne una</option>
                        @foreach($tipoModalidades as $tipoModalidad)
                    <option value="{{ $tipoModalidad->tipoModalidad}}">{{ $tipoModalidad->tipoModalidad }}</option>
                        @endforeach
                        </datalist>
                        </p>
                    </div>
</div>
</div>


<div class="container">
<div class="row">






</div>
</div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<div class="container">
    <div class="row">



        <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Fondo Cesantias:</p><span></span></strong>
            <p><input list="cesantias" type="text" name="cesantias" class="form-control-lg-new13" required>
               <datalist name="cesantias" id="cesantias" >
                <option value="">Asigne una</option>
                    @foreach($cesantiases as $cesantias)
                <option value="{{ $cesantias->fondo}}">{{ $cesantias->fondo }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>

            <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Fondo Pensiones:</p><span></span></strong>
                <p><input list="pensiones" type="text" name="pensiones"   class="form-control-lg-new13" required>
                   <datalist name="pensiones" id="pensiones" >
                    <option value="">Asigne una</option>
                    @foreach($pensioneses as $pensiones)
                <option value="{{ $pensiones->fondo}}">{{ $pensiones->fondo }}</option>
                    @endforeach
                    </datalist>
                    </p>
                </div>


                <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Eps:</p><span></span></strong>
                    <p><input list="eps" type="text" name="eps"   class="form-control-lg-new13" required>
                       <datalist name="eps" id="eps" >
                        <option value="">Asigne una</option>
                        @foreach($epses as $eps)
                    <option value="{{ $eps->entidad}}">{{ $eps->entidad }}</option>
                        @endforeach
                        </datalist>
                        </p>
                    </div>


                    <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Caja Compensación:</p><span></span></strong>
                        <p><input list="cajaComp" type="text" name="cajaComp"   class="form-control-lg-new13" required>
                           <datalist name="cajaComp" id="cajaComp" >
                            <option value="">Asigne una</option>
                            @foreach($cajaComps as $cajaComp)
                        <option value="{{ $cajaComp->entidad}}">{{ $cajaComp->entidad }}</option>
                            @endforeach
                            </datalist>
                            </p>
                        </div>





                    <div id="ips" name="ips" class="col-4 col-md"><strong><p>Ips: </p></strong><input type="text" id="ips" name="ips" class="form-control-lg-new13" required></div>
                    <input type="hidden" id="arl" name="arl" class="col-6 col-md" value= "Arl Sura">
</div>
</div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">

    <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="hidden" id="Tcuenta" name="Tcuenta" class="col-auto" value= "Ahorros">
<div  type="text"><strong><p>Tipo de cuenta:</p></strong><div class="form-control-lg-new13">Ahorros</div></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="bancos" name="bancos" class="col-auto"><strong><p><a style="color: red">* </a>Banco: </p></strong><input type="text" id="bancos" name="bancos" class="form-control-lg-new13"  value="{{old('bancos', $filtro->bancos)}}"></div><br>
<div id="nCuenta" name="nCuenta" class="col-auto"><strong><p><a style="color: red">* </a>Numero de cuenta: </p></strong><input type="number" id="nCuenta" name="nCuenta" class="form-control-lg-new13"  value="{{old('nCuenta', $filtro->nCuenta)}}"></div><br>





<div  class="col-auto"><strong><p>Estado: </p></strong><div class="col-6 col-md">{{old('estado', $filtro->estado)}}</div></div>
</div>
</div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<div class="container">
    <center><h3 aline="center">Asignacion Inicial</h3></center>
    <div class="row">


    <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Foco:</p><span></span></strong>
    <p><input list="foco" type="text" name="foco"   class="form-control-lg-new13" required>
       <datalist name="foco" id="foco" >
        <option  value="">Seleccion un foco</option>
        @foreach($focos as $foco)<option value="{{ $foco->foco}}">
          {{ $foco->foco }}</option>
        @endforeach
        </datalist>
        </p>
    </div>
    <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Campaña:</p><span></span></strong>
          <p><input list="campaña" type="text" name="campaña"   class="form-control-lg-new13" required>
             <datalist name="campaña" id="campaña" >
              <option  value="">Seleccion una Campaña</option>
              @foreach($campanas as $campana)<option value="{{ $campana->campana}}">
              {{ $campana->campana }}</option>
              @endforeach
              </datalist>
              </p>
    </div>
    <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Supervisor:</p><span></span></strong>
        <p><input list="supervisor" type="text" name="supervisor"   class="form-control-lg-new13" required>
           <datalist name="supervisor" id="supervisor" >
            <option value="">Asigne uno</option>
            @foreach($supervisores as $supervisor)
        <option value="{{ $supervisor->supervisor}}">{{ $supervisor->supervisor }}</option>
            @endforeach
            </datalist>
            </p>
     </div>
</div>
<br><br>
</div>
<div><input type="hidden" id="contratacionOK" name="contratacionOK" value="X"></div>
<div class="form-group">

                  <input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
                  &nbsp;&nbsp;&nbsp;
                 <a href="{{route('nuevoempleado.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>

                </div>

            </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
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
    $(function() {
      $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
      });
    })
  </script>

<script>
Swal.fire(
'Activacion de empleados',
'Registra los datos de los empleados cuidadosamente',
'success'
)
</script>
@stop
<!-- Bootstrap CSS-->
<link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
<!-- Bootstrap JS-->
<script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!--<script src="{{asset('js/Portabilidad.js')}}"></script>-->

@endsection

