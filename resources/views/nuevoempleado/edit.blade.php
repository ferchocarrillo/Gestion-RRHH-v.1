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
            <form name="f1" action="{{ url('/nuevoempleado')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}
                @method('PATCH')
                <div class="col-sm-12">
                    <center><p>
                        <div class="p-3 mb-2 bg-info text-white" id="nombres" name="nombres">
                       <h3> {{ old('nombres', $nuevos->nombres)}}</h3>
                        </div>
                    </p></center>
                    </div>
                    </body>
                    <div><input type="hidden" id="id_filtro" name="id_filtro" class="col-6 col-md-9" value="{{old('id', $filtro->id)}}" ></div><br>
                <div><input type="hidden" id="fuente" name="fuente" class="col-6 col-md-9" value="{{old('fuente', $filtro->fuente)}}" ></div><br>
            
                
        

                <div class="container">
    <div class="row">
        <div class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Tipo de Documento:</p></strong>
        <p>
            <input list="tipoDoc" type="text" name="tipoDoc"  style="width:100px"class="form-control">
            
            <datalist name="tipoDoc" id="tipoDoc" >
              <option value="">Tipo de Documento</option>
              @foreach($t_docs as $tipo_doc2)<option value="{{ $tipo_doc2->tipo_doc2}}">
                  {{ $tipo_doc2->tipo_doc2 }}</option>
                @endforeach
            </datalist>
            </p>
        </div>
        
        <input type="hidden" id="cedula" name="cedula" value={{ old('cedula', $nuevos->cedula)}}>
        <div class="col-6 col-md-2"><strong><p>Cedula:</p></strong><br>{{ old('cedula', $nuevos->cedula)}}</div>
            <div id="fexpe" name="fexpe" class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Fecha de Expedicion:</p></strong><input type="date"id="fexpe" name="fexpe" style="font-size:0.3cm" class="form-control" value=""></div>
            <div class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Departamento de Expedicion:</p></strong>
                <select name="departamento" id="departamento"class="form-control" required> <label for="departamento"></label>
                    <option value="">Escoja uno</option>
                        @foreach($departamento as $departamentos)
                    <option value="{{ $departamentos->Nombre}}">{{ $departamentos->Nombre }}</option>
                        @endforeach
                </select>
            </div>
            <div  class="col-6 col-md-3"><strong><p><a style="color: red">* </a>Municipio o ciudad de Expedicion:</p></strong>

                <select name="id_ciudad" id="id_ciudad" class="form-control" placeholder="Ciudad de Expedicion" required> </select>
            </div>
    </div>
    <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <div class="row">
                <input type="hidden" id="correo" name="correo" value={{ old('correo', $nuevos->correo)}}>
                <input type="hidden" id="eCivil" name="eCivil" value={{ old('eCivil', $nuevos->eCivil)}}>
                
                
                <div class="col-6 col-md-3"><strong><p>Correo:</p></strong>{{ old('correo', $nuevos->correo)}}</div>
                <div id="tCelular" name="tCelular" class="col-6 col-md-3"><strong><p><a style="color: red">* </a>Celular:</p></strong><input type="number"id="tCelular" name="tCelular" class="form-control" value="{{ old('tCelular', $nuevos->tCelular)}}"></div><br>
                <div id="tFijo" name="tFijo" class="col-6 col-md-3"><strong><p>Tel Fijo:</p></strong><input type="number"id="tFijo" name="tFijo" class="form-control" value="{{ old('tFijo', $nuevos->tFijo)}}"></div><br>
                <div  class="col-6 col-md-3"><strong><p>Estado Civil:</p></strong>{{ old('eCivil', $nuevos->eCivil)}}</div>
            </div>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">

            <div class="row">
                <input type="hidden" id="direccion" name="direccion" value="{{old ('TipoVia',$nuevos->TipoVia)}} {{ $nuevos->dr1}} {{ $nuevos->Prefijo1}} # {{ $nuevos->dr2}} {{ $nuevos->Prefijo2}} - {{ $nuevos->dr3}} {{ $nuevos->orientacion}} {{ $nuevos->adicional}} {{ $nuevos->ad1}} {{ $nuevos->adicional2}} {{ $nuevos->ad2}} {{ $nuevos->adicional3}} {{ $nuevos->ad3}}">
                <input type="hidden" id="residencia" name="residencia" value={{ old('residencia', $nuevos->residencia)}} | {{ old('localidad', $nuevos->id_localidad)}}>
                <input type="hidden" id="lugarNac" name="lugarNac" value={{ old('departamento', $nuevos->departamento)}} | {{old('id_ciudad', $nuevos->id_ciudad) }} | {{ old('fnacimiento', $nuevos->fnacimiento)}}>
                <input type="hidden" id="edad" name="edad" value={{ old('edad', $nuevos->edad)}}>
               



                <div  class="col-6 col-md-3"><strong><p>Direccion:</p></strong> {{old ('TipoVia',$nuevos->TipoVia)}} {{ $nuevos->dr1}} {{ $nuevos->Prefijo1}} # {{ $nuevos->dr2}} {{ $nuevos->Prefijo2}} - {{ $nuevos->dr3}} {{ $nuevos->orientacion}} {{ $nuevos->adicional}} {{ $nuevos->ad1}} {{ $nuevos->adicional2}} {{ $nuevos->ad2}} {{ $nuevos->adicional3}} {{ $nuevos->ad3}}</div><br><br><br>
                <div  class="col-6 col-md-3"><strong><p>Ciudad y localidad:</p></strong>{{ old('residencia', $nuevos->residencia)}} | {{ old('localidad', $nuevos->id_localidad)}}</div><br><br>
                <div  class="col-6 col-md-4"><strong><p>Lugar y fecha de nacimiento:</p></strong>{{ old('departamento', $nuevos->departamento)}} | {{old('id_ciudad', $nuevos->id_ciudad) }} | {{ old('fnacimiento', $nuevos->fnacimiento)}}</div><br>
                <div  class="col-6 col-md-2"><strong><p>Edad:</p></strong>{{ old('edad', $nuevos->edad)}}</div>
            </div>

            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">


            <div class="row">

                &nbsp;&nbsp;&nbsp;

                <div ><strong><p><a style="color: red">* </a>Genero:</p></strong>
                    <p>
                        <input list="genero" type="text" name="genero"  style="width:100px" class="form-control">
                        
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
        <input list="rh" type="text" name="rh"  style="width:100px" class="form-control">
        
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
            <input list="nivelEdu" type="text" name="nivelEdu"  style="width:250px" class="form-control">
            
            <datalist name="nivelEdu" id="nivelEdu" >
                <option value="">Escoja uno</option>
                @foreach($NivelEdus as $nivelEdu)
            <option value="{{ $nivelEdu->nivelEdu}}">{{ $nivelEdu->nivelEdu }}</option>
                @endforeach
            </datalist>
            </p>
        </div>
        &nbsp;&nbsp;&nbsp;   

    <input type="hidden" id="cargo" name="cargo" value={{ old('cargo', $nuevos->cargo)}}>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <p><div><strong><p>Cargo:</p></strong>{{ old('cargo', $nuevos->cargo)}}</div></p>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="corporativo" name="corporativo"  data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="Correo corporativo Si" data-off="Correo corportativo No" ></span>
    <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
</div>
        <div class="row">

            <div id="personaContacto" name="personaContacto" class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Persona de contacto:</p></strong><input type="text"id="personaContacto" name="personaContacto" class="form-control" required></div><br>
           
           
            <div ><strong><p><a style="color: red">* </a>Parentesco:</p><span><br></span></strong>
                <p>
                    <input list="parentesco" type="text" name="parentesco"  style="width:250px" class="form-control">
                    
                    <datalist name="parentesco" id="parentesco" >
                        <option value="">Escoja uno</option>
                        @foreach($parentescos as $parentesco)
                    <option value="{{ $parentesco->parentesco}}">{{ $parentesco->parentesco }}</option>
                        @endforeach
                    </datalist>
                    </p>
                </div>
           



            <div id="personaDireccion" name="personaDireccion" class="col-6 col-md-3"><strong><p><a style="color: red">* </a>Direccion:</p><br></strong><input type="text"id="personaDireccion" name="personaDireccion" class="form-control" required></div><br>
            <div id="contactof" name="contactof" class="col-6 col-md-2"><strong><p>Telefono fijo contacto:</p></strong><input type="text"id="contactof" name="contactof" class="form-control" ></div><br>
            <div id="contactoCelular" name="contactoCelular" class="col-6 col-md-2"><strong><p><a style="color: red">* </a>Celular de contacto:</p></strong><input type="text"id="contactoCelular" name="contactoCelular" class="form-control"required ></div><br>
    </div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

    <div class="row">

        <div id="numHijos" name="numHijos" class="col-4 col-md"><strong><p>Numero <br>de Hijos: </p></strong><input type="number" id="numHijos" name="numHijos" class="form-control"></div>
        <div id="hijosMAs" name="hijosMAs" class="col-4 col-md"><strong><p>Hijos <br>masculinos:</p></strong><input type="number" id="hijosMAs" name="hijosMAs" class="form-control"></div>
        <div id="hijosFem" name="hijosFem" class="col-4 col-md"><strong><p>Hijos <br>femininos: </p></strong><input type="number" id="hijosFem" name="hijosFem" class="form-control"></div>
        <div ><p><strong>Preexistencia <br>medica:</strong></p><input type="checkbox" id="Preexistencia" name="Preexistencia" class="custom-control-input" data-toggle="toggle" data-size="med" data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Tiene <br>Alergias:</strong></p><input type="checkbox" id="alergias" name="alergias" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
        <div id="medicamentos" name="medicamentos"   class="col-4 col-md"><strong><p>Medicamentos que toma actualmente: </p></strong><input type="text" id="medicamentos" name="medicamentos" class="form-control"></div>
    </div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
    <center><h3 aline="center">Datos de familiares</h3></center>
    <div class="row">


        <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p><span></span></strong>
            <p><input list="tipo_docs1" type="text" name="tipo_docs1"  style="width:100px" class="form-control">
               <datalist name="tipo_docs1" id="tipo_docs1" >
                    <option value="">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>


        
        <div id="docfam1" name="docfam1" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam1" name="docfam1" class="form-control" ></div>
        <div id="familiarp1" name="familiarp1" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp1" name="familiarp1" class="form-control" value="{{old('familiarp1', $nuevo2->familiarp1)}}"></div><br>
        <div id="parentescop1" name="parentescop1" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop1" name="parentescop1" class="form-control" value="{{old('parentescop1', $nuevo2->parentescop1)}}"></div><br>
        <div id="edadp1" name="edadp1" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp1" name="edadp1" class="form-control" value="{{old('edadp1', $nuevo2->edadp1)}}"></div><br>
        <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam1" name="epsFam1" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja1" name="caja1" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
    </div>
    <div class="row">


        <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p><span></span></strong>
            <p><input list="tipo_docs2" type="text" name="tipo_docs2"  style="width:100px" class="form-control">
               <datalist name="tipo_docs2" id="tipo_docs2" >
                    <option value="">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>
    
            <div id="docfam2" name="docfam2" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam2" name="docfam2" class="form-control" ></div>
            <div id="familiarp2" name="familiarp2" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp2" name="familiarp2" class="form-control" value="{{old('familiarp2', $nuevo2->familiarp2)}}"></div><br>
            <div id="parentescop2" name="parentescop2" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop2" name="parentescop2" class="form-control" value="{{old('parentescop2', $nuevo2->parentescop2)}}"></div><br>
            <div id="edadp2" name="edadp2" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp2" name="edadp2" class="form-control" value="{{old('edadp2', $nuevo2->edadp2)}}"></div><br>
            <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam2" name="epsFam2" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja2" name="caja2" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
        </div>
   
    <div class="row">
        <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p><span></span></strong>
            <p><input list="tipo_docs3" type="text" name="tipo_docs3"  style="width:100px" class="form-control">
               <datalist name="tipo_docs3" id="tipo_docs3" >
                    <option value="">Escoja uno</option>
                    @foreach($tipo_docs as $tipo_doc)
                <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>
    
            <div id="docfam3" name="docfam3" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam3" name="docfam3" class="form-control" ></div>
            <div id="familiarp3" name="familiarp3" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp3" name="familiarp3" class="form-control" value="{{old('familiarp3', $nuevo2->familiarp3)}}"></div><br>
            <div id="parentescop3" name="parentescop3" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop3" name="parentescop3" class="form-control" value="{{old('parentescop3', $nuevo2->parentescop3)}}"></div><br>
            <div id="edadp3" name="edadp3" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp3" name="edadp3" class="form-control" value="{{old('edadp3', $nuevo2->edadp3)}}"></div><br>
            <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam3" name="epsFam3" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja3" name="caja3" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
        </div>
 
        <div class="row">
            <div ><strong><p><a style="color: red" ></a>Tipo Documento:</p><span></span></strong>
                <p><input list="tipo_docs4" type="text" name="tipo_docs4"  style="width:100px" class="form-control">
                   <datalist name="tipo_docs4" id="tipo_docs4" >
                        <option value="">Escoja uno</option>
                        @foreach($tipo_docs as $tipo_doc)
                    <option value="{{ $tipo_doc->tipo_doc}}">{{ $tipo_doc->tipo_doc }}</option>
                        @endforeach
                    </datalist>
                    </p>
                </div>
        
                <div id="docfam4" name="docfam4" class="col-6 col-md-2"><strong><p>Documento:</p></strong><input type="text"id="docfam4" name="docfam4" class="form-control" ></div>
                <div id="familiarp4" name="familiarp4" class="col-6 col-md-2"><strong><p>Nombre:</p></strong><input type="text" id="familiarp4" name="familiarp4" class="form-control" value="{{old('familiarp4', $nuevo2->familiarp4)}}"></div><br>
                <div id="parentescop4" name="parentescop4" class="col-6 col-md-2"><strong><p>Parentesco:</p></strong><input type="text" id="parentescop4" name="parentescop3" class="form-control" value="{{old('parentescop4', $nuevo2->parentescop4)}}"></div><br>
                <div id="edadp4" name="edadp4" class="col-6 col-md-2"><strong><p>Edad:</p></strong><input type="text" id="edadp4" name="edadp4" class="form-control" value="{{old('edadp4', $nuevo2->edadp4)}}"></div><br>
                <div ><p><strong>EPS:</strong></p><input type="checkbox" id="epsFam4" name="epsFam4" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div ><p><strong>Caja:</strong></p><input type="checkbox" id="caja4" name="caja4" data-toggle="toggle" data-size="med"  data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></div>
            </div>
</div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
<div class="row">
    <div id="salario" name="salario" class="col-4 col-md"><strong><p><a style="color: red" >* </a>Salario: </p></strong><input type="number" id="salario" name="salario" class="form-control" required></div>
    <div id="ingreso" name="ingreso" class="col-4 col-md"><strong><p><a style="color: red" >* </a>Ingreso: </p></strong><input type="date" id="ingreso" name="ingreso" class="form-control" required></div>


    <div ><strong><p><a style="color: red" >* </a>Tipo Contrato:</p><span></span></strong>
        <p><input list="tipo_contratos" type="text" name="tipo_contratos"   class="form-control">
           <datalist name="tipo_contratos" id="tipo_contratos" >
            <option value="">Escoja uno</option>
            @foreach($tipo_contratoses as $tipo_contratos)
        <option value="{{ $tipo_contratos->tipoCon}}">{{ $tipo_contratos->tipoCon }}</option>
            @endforeach
            </datalist>
            </p>
        </div>
</div>
</div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">
<div class="row">

    <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Sede:</p><span></span></strong>
        <p><input list="sede" type="text" name="sede"   class="form-control">
           <datalist name="sede" id="sede" >
            <option value="">Asigne una</option>
            @foreach($sedes as $sede)
        <option value="{{ $sede->sede}}">{{ $sede->sede }}</option>
            @endforeach
            </datalist>
            </p>
        </div>

        <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Modalidad:</p><span></span></strong>
            <p><input list="modalidad" type="text" name="modalidad"   class="form-control">
               <datalist name="modalidad" id="modalidad" >
                <option value="">Asigne una</option>
                @foreach($modalidades as $modalidad)
            <option value="{{ $modalidad->modalidad}}">{{ $modalidad->modalidad }}</option>
                @endforeach
                </datalist>
                </p>
            </div>
            
            <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Tipo de Modalidad:</p><span></span></strong>
                <p><input list="tipoModalidad" type="text" name="tipoModalidad"   class="form-control">
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
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<div class="container">
    <div class="row">



        <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Fondo Cesantias:</p><span></span></strong>
            <p><input list="cesantias" type="text" name="cesantias"   class="form-control">
               <datalist name="cesantias" id="cesantias" >
                <option value="">Asigne una</option>
                    @foreach($cesantiases as $cesantias)
                <option value="{{ $cesantias->fondo}}">{{ $cesantias->fondo }}</option>
                    @endforeach
                </datalist>
                </p>
            </div>

            <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Fondo Pensiones:</p><span></span></strong>
                <p><input list="pensiones" type="text" name="pensiones"   class="form-control">
                   <datalist name="pensiones" id="pensiones" >
                    <option value="">Asigne una</option>
                    @foreach($pensioneses as $pensiones)
                <option value="{{ $pensiones->fondo}}">{{ $pensiones->fondo }}</option>
                    @endforeach
                    </datalist>
                    </p>
                </div>


                <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Eps:</p><span></span></strong>
                    <p><input list="eps" type="text" name="eps"   class="form-control">
                       <datalist name="eps" id="eps" >
                        <option value="">Asigne una</option>
                        @foreach($epses as $eps)
                    <option value="{{ $eps->entidad}}">{{ $eps->entidad }}</option>
                        @endforeach
                        </datalist>
                        </p>
                    </div>


                    <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Caja Compensación:</p><span></span></strong>
                        <p><input list="cajaComp" type="text" name="cajaComp"   class="form-control">
                           <datalist name="cajaComp" id="cajaComp" >
                            <option value="">Asigne una</option>
                            @foreach($cajaComps as $cajaComp)
                        <option value="{{ $cajaComp->entidad}}">{{ $cajaComp->entidad }}</option>
                            @endforeach
                            </datalist>
                            </p>
                        </div>
   
      



                    <div id="ips" name="ips" class="col-4 col-md"><strong><p>Ips: </p></strong><input type="text" id="ips" name="ips" class="form-control"></div>
                    <input type="hidden" id="arl" name="arl" class="col-6 col-md" value= "Arl Sura">
</div>
</div>

<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
<div class="container">

    <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="hidden" id="Tcuenta" name="Tcuenta" class="col-6 col-md" value= "Ahorros">
<div  type="text"><strong><p>Tipo de cuenta:</p></strong>Ahorros</div>
<div id="nCuenta" name="nCuenta" class="col-4 col-md"><strong><p><a style="color: red">* </a>Numero de cuenta: </p></strong><input type="number" id="nCuenta" name="nCuenta" class="form-control"></div>
<div id="bancos" name="bancos" class="col-6 col-md-2"><strong><p>Banco:</p></strong><input id="bancos" name="bancos" class="form-control" value="{{old('bancos', $contratacion->bancos)}}"></div><br>

<input type="hidden" id="estado" name="estado" value={{old('estado', $contratacion->estado)}}>
<div class="col-2"> <label></label><input type="hidden" class="form-control" id="nombre" placeholder="nombre" name="nombre" value="{{ old('nombre', $filtro->nombre)}}"></div>
<div  class="col-4 col-md"><strong><p>Estado: </p></strong>{{old('estado', $contratacion->estado)}}</div>
</div>
</div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">

<div class="container">
    <center><h3 aline="center">Asignacion Inicial</h3></center>
    <div class="row">


        <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Foco:</p><span></span></strong>
            <p><input list="foco" type="text" name="foco"   class="form-control">
               <datalist name="foco" id="foco" >
                <option  value="">Seleccion un foco</option>
                @foreach($focos as $foco)<option value="{{ $foco->foco}}">
                  {{ $foco->foco }}</option>
                @endforeach
                </datalist>
                </p>
            </div>


            <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Campaña:</p><span></span></strong>
                <p><input list="campana" type="text" name="campana"   class="form-control">
                   <datalist name="campana" id="campana" >
                    <option  value="">Seleccion una Campaña</option>
                    @foreach($campanas as $campana)<option value="{{ $campana->campana}}">
                    {{ $campana->campana }}</option>
                    @endforeach
                    </datalist>
                    </p>
                </div>

                <div class="col-4 col-md"><strong><p><a style="color: red" >* </a>Supervisor:</p><span></span></strong>
                    <p><input list="supervisor" type="text" name="supervisor"   class="form-control">
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

<div class="form-group">
    @csrf
    @method('POST')
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

