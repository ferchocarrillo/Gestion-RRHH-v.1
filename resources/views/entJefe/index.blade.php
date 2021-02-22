@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                    <link rel="shortcut icon" href="home"><img src="\theme\images\icon\logo.jpg"  align= "center" height="70" width="150">
                </body>
                <br>
                <p align="right">
                    <div class="col-md-4">
                <form action="/searchEntrevista" method="GET">
                <div class="input-group">
        <input type="searchEntrevista" name="searchEntrevista" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por Numero</button>
            </span>
        </div>
    </form>
</div>
</p>

<br>         <form name="f1" action="{{ url('/entGerencia')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                    <form>
                        <center>
                            <h2>Listado de Postulados</h2>
                      </center>
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-md-12">
                                  <div class="card">

                                    <table class="table table-striped table-bordered table-hover table-dark">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Cedula</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Resultado RRHH</th>
                                            <th scope="col">Observaciones RRHH</th>
                                            <th colspan="6"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($entrevistas as $entrevista)
                                            <tr>
                                                <th scope="row">{{ $entrevista->id}}</th>
                                                <td>{{ $entrevista->cedula}}</td>
                                                <td>{{ $entrevista->nombres}}</td>
                                                <td>{{ $entrevista->resultado}}</td>
                                                <td>{{ $entrevista->obsFinales}}</td>
                                                <td>
                                                   {{--<a href="{{url('/entrevista1/'.$entrevista->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Datos basicos</a>--}}
                                                  {{-- <a href="{{url('/entrevista2/'.$entrevista->id.'/edit')}}" class="btn btn-warning btn-sm" role="button" aria-pressed="true">Familiares</a>--}}
                                                    {{--<a href="{{url('/entrevista3/'.$entrevista->id.'/edit')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Academicos</a>--}}
                                                    <a href="{{url('/entJefe/'.$entrevista->id.'/edit')}}" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Ver Hoja de vida</a>

                                            </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>

                                  </div>
                              </div>
                          </div>
                      </div>

                    </form>
                    {{ $entrevistas->links()}}

       {{--             <p>
                        clic <a href="{{route('entrevista1.excel')}}">Aqui</a>
                        Descarga la entrevista en excel
                        </p>
--}}


                <!-- Bootstrap CSS-->
                <link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
            <!-- Bootstrap JS-->
                <script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
                <script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
                <!--<script src="{{asset('js/Portabilidad.js')}}"></script>-->
                        <script src="{{asset('js/app.js')}}"></script>
                    </body>
                    @section('css')
                    <link rel="stylesheet" href="/css/admin_custom.css">
                    @stop
                    @section('js')

            @stop
            @endsection
