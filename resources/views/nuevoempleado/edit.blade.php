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
            <form name="f1" action="{{ url('/nuevoempleado/'.$nuevo->id_filtro)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')
                <div class="col-sm-12">
                    <center><p>
                        <div class="p-3 mb-2 bg-info text-white">
                       <h3>{{ old('nombre', $nuevo->nombres)}}</h3>
                        </div>
                    </p></center>
                    </div>
                    </body>

                <div><input type="hidden" id="fuente" name="fuente" class="col-6 col-md-9" value="{{old('fuente', $filtro->fuente)}}" ></div><br>
            <div class="container">
    <div class="row">

        <div id="tipoDoc" name="tipoDoc" class="col-6 col-md-2"><strong><p>Tipo de Documento:</p></strong>
            <select type="text" name="tipoDoc" id="tipoDoc"  style="font-size: 13px" class="col-6 col-md-5" placeholder="tipoDoc"required>
                                    <option value="0"></option>
                                    <option value="CC">CC</option>
                                    <option value="CE">CE</option>
                                    <option value="PEP">PEP</option>
            </select>
        </div>
        <div id="cedula" name="cedula" class="col-6 col-md-2"><strong><p>Cedula:</p></strong><br>{{ old('cedula', $nuevo->cedula)}}</div>
            <div id="fexpe" name="fexpe" class="col-6 col-md-2"><strong><p>Fecha de Expedicion:</p></strong><input type="date"id="fexpe" name="fexpe" style="font-size:0.3cm" class="col-6 col-md-10" value=""></div>
            <div id="depNac" name="depNac" class="col-6 col-md-2"><strong><p>Departamento de Expedicion:</p></strong>
                <select name="departamento" id="departamento" class="col-6 col-md-8" required> <label for="departamento"></label>
                    <option value="">Escoja uno</option>
                        @foreach($departamento as $departamentos)
                    <option value="{{ $departamentos->Nombre}}">{{ $departamentos->Nombre }}</option>
                        @endforeach
                </select>
            </div>
            <div id="depNac" name="depNac" class="col-6 col-md-3"><strong><p>Municipio o ciudad de Expedicion:</p></strong>

                <select name="id_ciudad" id="id_ciudad" "col-6 col-md-10" placeholder="Ciudad de Expedicion" required> </select>
            </div>
    </div>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <div class="row">

                <div id="correo" name="correo" class="col-6 col-md-3"><strong><p>Correo:</p></strong>{{ old('correo', $nuevo->correo)}}</div>
                <div id="tCelular" name="tCelular" class="col-6 col-md-3"><strong><p>Celular:</p></strong><input type="number"id="tCelular" name="tCelular" class="col-6 col-md-6" value="{{ old('tCelular', $nuevo->tCelular)}}"></div><br>
                <div id="tFijo" name="tFijo" class="col-6 col-md-3"><strong><p>Tel Fijo:</p></strong><input type="number"id="tFijo" name="tFijo" class="col-6 col-md-6" value="{{ old('tFijo', $nuevo->tFijo)}}"></div><br>
                <div id="eCivil" name="eCivil" class="col-6 col-md-3"><strong><p>Estado Civil:</p></strong>{{ old('eCivil', $nuevo->eCivil)}}</div>
            </div>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

            <div class="row">
                <div id="direccion" name="direccion" class="col-6 col-md-3"><strong><p>Direccion:</p></strong> {{old ('TipoVia',$nuevo->TipoVia)}} {{ $nuevo->dr1}} {{ $nuevo->Prefijo1}} # {{ $nuevo->dr2}} {{ $nuevo->Prefijo2}} - {{ $nuevo->dr3}} {{ $nuevo->orientacion}} {{ $nuevo->adicional}} {{ $nuevo->ad1}} {{ $nuevo->adicional2}} {{ $nuevo->ad2}} {{ $nuevo->adicional3}} {{ $nuevo->ad3}}</div><br><br><br>
                <div id="residencia" name="residencia" class="col-6 col-md-3"><strong><p>Ciudad y localidad:</p></strong>{{ old('residencia', $nuevo->residencia)}} | {{ old('localidad', $nuevo->id_localidad)}}</div><br><br>
                <div id="lugarNac" name="lugarNac" class="col-6 col-md-4"><strong><p>Lugar y fecha de nacimiento:</p></strong>{{ old('departamento', $nuevo->departamento)}} | {{old('id_ciudad', $nuevo->id_ciudad) }} | {{ old('fnacimiento', $nuevo->fnacimiento)}}</div><br>
                <div id="edad" name="edad" class="col-6 col-md-2"><strong><p>Edad:</p></strong>{{ old('edad', $nuevo->edad)}}</div>
            </div>

            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">


            <div class="row">

                <div id="genero" name="genero" class="col-6 col-md-2"><strong><p>Genero:</p></strong>
                    <select type="text" name="genero" id="genero" class="col-6 col-md-12" placeholder="Genero"required>
                                            <option value="0"></option>
                                            <option value="masculino">Masculino</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="otro">Otro</option>

                    </select>
                </div><br>
                <div id="rh" name="rh" class="col-6 col-md-2"><strong><p>RH:</p></strong>
                    <select type="text" name="rh" id="rh" class="col-6 col-md-8" placeholder="RH"required>
                                            <option value="0"></option>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
                                            <option value="A-">A-</option>
                                            <option value="A+">A+</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">B+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
                    </select>


    </div>
    <div id="nivelEdu" name="nivelEdu" class="col-6 col-md-3"><strong><p>Nivel Educativo:</p></strong>
        <select name="nivelEdu" id="nivelEdu" class="col-6 col-md-8" required> <label for="nivelEdu"></label>
            <option value="">Escoja uno</option>
                @foreach($NivelEdus as $nivelEdu)
            <option value="{{ $nivelEdu->nivelEdu}}">{{ $nivelEdu->nivelEdu }}</option>
                @endforeach
        </select>
    </div>
    <div id="cargo" name="cargo" class="col-4 col-md-2"><strong><p>Cargo:</p></strong>{{ old('cargo', $nuevo->cargo)}}</div><br>

    <input type="checkbox" id="corporativo" name="corporativo" class="col-4 col-md-2" data-toggle="toggle" data-size="small" data-onstyle="success" data-offstyle="danger" data-on="Correo corporativo Si" data-off="Correo corportativo No">



    <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

        <div class="row">
            <div id="personaContacto" name="personaContacto" class="col-6 col-md-2"><strong><p>Persona de contacto:</p></strong><input type="text"id="personaContacto" name="personaContacto" class="col-6 col-md-12" required></div><br>
            <div id="parentesco" name="parentesco" class="col-6 col-md-2"><strong><p>Parentesco:</p><br></strong>
                <select name="parentesco" id="parentesco" class="col-6 col-md-8" required> <label for="parentesco"></label>
                    <option value="">Escoja uno</option>
                        @foreach($parentescos as $parentesco)
                    <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
                        @endforeach
                </select>
            </div>


            <div id="personaDireccion" name="personaDireccion" class="col-6 col-md-3"><strong><p>Direccion:</p><br></strong><input type="text"id="personaDireccion" name="personaDireccion" class="col-6 col-md-12" required></div><br>
            <div id="contactof" name="contactof" class="col-6 col-md-2"><strong><p>Telefono fijo contacto:</p></strong><input type="text"id="contactof" name="contactof" class="col-6 col-md-12" ></div><br>
            <div id="contactoCelular" name="contactoCelular" class="col-6 col-md-2"><strong><p>Celular de contacto:</p></strong>&nbsp;<input type="text"id="contactoCelular" name="contactoCelular" class="col-6 col-md-12"required ></div><br>
    </div>




<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

    <div class="row">

        <div id="numHijos" name="numHijos" class="col-4 col-md"><strong><p>Numero <br>de Hijos: </p></strong><input type="number" id="numHijos" name="numHijos" class="col-6 col-md"></div>
        <div id="hijosMAs" name="hijosMAs" class="col-4 col-md"><strong><p>Hijos <br>masculinos:</p></strong><input type="number" id="hijosMAs" name="hijosMAs" class="col-6 col-md"></div>
        <div id="hijosFem" name="hijosFem" class="col-4 col-md"><strong><p>Hijos <br>femininos: </p></strong><input type="number" id="hijosFem" name="hijosFem" class="col-6 col-md"></div>
        <div ><p><strong>Preexistencia <br>medica:</strong></p><input type="checkbox" id="Preexistencia" name="Preexistencia" class="custom-control-input" data-toggle="toggle" data-size="small" data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Tiene <br>Alergias:</strong></p><input type="checkbox" id="alergias" name="alergias" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
        <div id="medicamentos" name="medicamentos"   class="col-4 col-md"><strong><p>Medicamentos que toma actualmente: </p></strong><input type="text" id="medicamentos" name="medicamentos" class="col-6 col-md-12"></div>
    </div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
    <center><h3 aline="center">Datos de familiares</h3></center>
    <div class="row">
        <div id="tipo_docs1" name="tipo_docs1" class="col-6 col-md-2"><strong><p>Tipo Documento:</p></strong>
            <select name="tipo_docs1" id="tipo_docs1" class="col-6 col-md-8" > <label for="tipo_docs1"></label>
                <option value="">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
            </select>
        </div>
        <div id="docfam1" name="docfam1" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="number"id="docfam1" name="docfam1" class="col-6 col-md-12" ></div>
        <div id="familiarp1" name="familiarp1" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp1" name="familiarp1" class="col-6 col-md-12" value="{{old('familiarp1', $nuevo2->familiarp1)}}"></div><br>
        <div id="parentescop1" name="parentescop1" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop1" name="parentescop1" class="col-6 col-md-12" value="{{old('parentescop1', $nuevo2->parentescop1)}}"></div><br>
        <div id="edadp1" name="edadp1" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp1" name="edadp1" class="col-6 col-md-4" value="{{old('edadp1', $nuevo2->edadp1)}}"></div><br>
        <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam1" name="epsFam1" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Caja:</strong></p><input type="checkbox" id="alergias1" name="alergias1" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
    </div>


    <div class="row">
        <div id="tipo_docs2" name="tipo_docs2" class="col-6 col-md-2"><strong><p>Tipo Documento:</p></strong>
            <select name="tipo_docs1" id="tipo_docs2" class="col-6 col-md-8" > <label for="tipo_docs2"></label>
                <option value="">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
            </select>
        </div>
        <div id="docfam2" name="docfam2" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="number"id="docfam2" name="docfam2" class="col-6 col-md-12"></div>
        <div id="familiarp2" name="familiarp2" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp2" name="familiarp2" class="col-6 col-md-12" value="{{old('familiarp2', $nuevo2->familiarp2)}}"></div><br>
        <div id="parentescop2" name="parentescop2" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop2" name="parentescop2" class="col-6 col-md-12" value="{{old('parentescop2', $nuevo2->parentescop2)}}"></div><br>
        <div id="edadp2" name="edadp2" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp2" name="edadp2" class="col-6 col-md-4" value="{{old('edadp2', $nuevo2->edadp2)}}"></div><br>
        <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam2" name="epsFam2" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Caja:</strong></p><input type="checkbox" id="alergia2" name="alergia2" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
    </div>
    <div class="row">
        <div id="tipo_docs3" name="tipo_docs3" class="col-6 col-md-2"><strong><p>Tipo Documento:</p></strong>
            <select name="tipo_docs3" id="tipo_docs3" class="col-6 col-md-8" > <label for="tipo_docs3"></label>
                <option value="">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
            </select>
        </div>
        <div id="docfam3" name="docfam3" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="number"id="docfam3" name="docfam3" class="col-6 col-md" ></div>
        <div id="familiarp3" name="familiarp3" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp3" name="familiarp3" class="col-6 col-md-12" value="{{old('familiarp3', $nuevo2->familiarp3)}}"></div><br>
        <div id="parentescop3" name="parentescop3" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop3" name="parentescop3" class="col-6 col-md" value="{{old('parentescop3', $nuevo2->parentescop3)}}"></div><br>
        <div id="edadp3" name="edadp3" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp3" name="edadp3" class="col-6 col-md-4" value="{{old('edadp3', $nuevo2->edadp3)}}"></div><br>
        <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam3" name="epsFam3" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Caja:</strong></p><input type="checkbox" id="alergia3" name="alergia3" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
    </div>

    <div class="row">
        <div id="tipo_docs4" name="tipo_docs4" class="col-6 col-md-2"><strong><p>Tipo Documento:</p></strong>
            <select name="tipo_docs4" id="tipo_docs4" class="col-6 col-md-8" > <label for="tipo_docs4"></label>
                <option value="">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
            </select>
        </div>
        <div id="docfam4" name="docfam4" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="number"id="docfam4" name="docfam4" class="col-6 col-md-12"></div>
        <div id="familiarp4" name="familiarp4" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp4" name="familiarp4" class="col-6 col-md-12" value="{{old('familiarp4', $nuevo2->familiarp4)}}"></div><br>
        <div id="parentescop4" name="parentescop4" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop4" name="parentescop4" class="col-6 col-md-12" value="{{old('parentescop4', $nuevo2->parentescop4)}}"></div><br>
        <div id="edadp4" name="edadp4" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp4" name="edadp4" class="col-6 col-md-4" value="{{old('edadp4', $nuevo2->edadp4)}}"></div><br>
        <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam4" name="epsFam4" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Caja:</strong></p><input type="checkbox" id="alergia4" name="alergia4" data-toggle="toggle" data-size="small"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
    </div>





</div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
<div class="row">
    <div id="salario" name="salario" class="col-4 col-md"><strong><p>Salario: </p></strong><input type="number" id="salario" name="salario" class="col-6 col-md"></div>
    <div id="ingreso" name="ingreso" class="col-4 col-md"><strong><p>Ingreso: </p></strong><input type="date" id="ingreso" name="ingreso" class="col-6 col-md"></div>

<div id="tipo_contratos" name="tipo_contratos" class="col-4 col-md"><strong><p>Tipo Contrato:</p></strong>
    <select name="tipo_contratos" id="tipo_contratos" class="col-4 col-md" required> <label for="tipo_contratos"></label>
        <option value="">Escoja uno</option>
            @foreach($tipo_contratoses as $tipo_contratos)
        <option value="{{ $tipo_contratos->tipoCon}}">{{ $tipo_contratos->tipoCon }}</option>
            @endforeach
    </select>
</div>
<div id="supervisor" name="supervisor" class="col-4 col-md"><strong><p>Supervisor:</p></strong>
    <select name="supervisor" id="supervisor" class="col-4 col-md" required> <label for="supervisor"></label>
        <option value="">Asigne uno</option>
            @foreach($supervisores as $supervisor)
        <option value="{{ $supervisor->supervisor}}">{{ $supervisor->supervisor }}</option>
            @endforeach
    </select>
</div>

</div>
</div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
<div class="row">



<div id="sede" name="sede" class="col-4 col-md"><strong><p>Sede:</p></strong>
    <select name="sede" id="sede" class="col-4 col-md" required> <label for="sede"></label>
        <option value="">Asigne una</option>
            @foreach($sedes as $sede)
        <option value="{{ $sede->sede}}">{{ $sede->sede }}</option>
            @endforeach
    </select>
</div>
<div id="modalidad" name="modalidad" class="col-4 col-md"><strong><p>Modalidad:</p></strong>
    <select name="modalidad" id="modalidad" class="col-4 col-md" required> <label for="modalidad"></label>
        <option value="">Asigne una</option>
            @foreach($modalidades as $modalidad)
        <option value="{{ $modalidad->modalidad}}">{{ $modalidad->modalidad }}</option>
            @endforeach
    </select>
</div>

<div id="tipoModalidad" name="tipoModalidad" class="col-4 col-md"><strong><p>Tipo:</p></strong>
    <select name="tipoModalidad" id="tipoModalidad" class="col-4 col-md" required> <label for="tipoModalidad"></label>
        <option value="">Asigne una</option>
            @foreach($tipoModalidades as $tipoModalidad)
        <option value="{{ $tipoModalidad->tipoModalidad}}">{{ $tipoModalidad->tipoModalidad }}</option>
            @endforeach
    </select>
</div>


</div>
</div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<div class="container">

    <div class="row">
        <div id="cesantias" name="cesantias" class="col-4 col-md"><strong><p>Fondo Cesantias:</p></strong>
            <select name="cesantias" id="cesantias" class="col-4 col-md" required> <label for="cesantias"></label>
                <option value="">Asigne una</option>
                    @foreach($cesantiases as $cesantias)
                <option value="{{ $cesantias->fondo}}">{{ $cesantias->fondo }}</option>
                    @endforeach
            </select>
        </div>

            <div id="pensiones" name="pensiones" class="col-4 col-md"><strong><p>Fondo Pensiones:</p></strong>
                <select name="pensiones" id="pensiones" class="col-4 col-md" required> <label for="pensiones"></label>
                    <option value="">Asigne una</option>
                        @foreach($pensioneses as $pensiones)
                    <option value="{{ $pensiones->fondo}}">{{ $pensiones->fondo }}</option>
                        @endforeach
                </select>
            </div>
            <div id="eps" name="eps" class="col-4 col-md"><strong><p>Eps:</p></strong>
                    <select name="eps" id="eps" class="col-4 col-md" required> <label for="epsess"></label>
                        <option value="">Asigne una</option>
                            @foreach($epses as $eps)
                        <option value="{{ $eps->entidad}}">{{ $eps->entidad }}</option>
                            @endforeach
                    </select>
                </div>

                   <div id="cajaComp" name="cajaComp" class="col-4 col-md"><strong><p>Caja de Compensación:</p></strong>
                        <select name="cajaComp" id="cajaComp" class="col-4 col-md" required> <label for="cajaComp"></label>
                            <option value="">Asigne una</option>
                                @foreach($cajaComps as $cajaComp)
                            <option value="{{ $cajaComp->entidad}}">{{ $cajaComp->entidad }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div id="ips" name="ips" class="col-4 col-md"><strong><p>Ips: </p></strong><input type="text" id="ips" name="ips" class="col-6 col-md"></div>
                    <input type="hidden" id="arl" name="arl" class="col-6 col-md" value= "Arl Sura">
</div>
</div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<div class="container">

    <div class="row">

<div id="Tcuenta" name="Tcuenta" class="col-6 col-md-3"><strong><p>Tipo de cuenta:</p></strong>Ahorros</div>
<div id="nCuenta" name="nCuenta" class="col-4 col-md"><strong><p>Numero de cuenta: </p></strong><input type="number" id="nCuenta" name="nCuenta" class="col-6 col-md"></div>
<div id="bancos" name="bancos" class="col-6 col-md-2"><strong><p>Banco:</p></strong><input id="bancos" name="bancos" class="col-6 col-md-12" value="{{old('bancos', $contratacion->bancos)}}"></div><br>
<div id="estado" name="estado" class="col-4 col-md"><strong><p>Estado: </p></strong>{{old('estado', $contratacion->estado)}}</div>
</div>
</div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<div class="container">
    <center><h3 aline="center">Asignacion Inicial</h3></center>
    <div class="row">



        <div id="foco" name="foco" class="col-6 col-md-4"><strong><p>Foco:</p></strong>
            <select type="text" name="foco" id="foco" class="col-8 col-md-12" placeholder="foco"required>
    <option  value="">Seleccion un foco</option>
    @foreach($focos as $foco)<option value="{{ $foco->foco}}">
      {{ $foco->foco }}</option>
    @endforeach
</select>
</div>

<div id="campana" name="campana" class="col-6 col-md-4"><strong><p>Campaña:</p></strong>
    <select type="text" name="campana" id="campana" class="col-8 col-md-12" placeholder="campana"required>
<option  value="">Seleccion un foco</option>
@foreach($campanas as $campana)<option value="{{ $campana->campana}}">
{{ $campana->campana }}</option>
@endforeach
</select>
</div>
</div>
</div>

<div class="form-group">
    @csrf
    @method('PUT')
                  <input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
                  &nbsp;&nbsp;&nbsp;
                 <a href="{{route('nuevoempleado.index')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Regresar</a>

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

