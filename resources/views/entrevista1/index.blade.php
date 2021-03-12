@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
</center>
    <p
        <div class="col-md-4">
    <form action="/searchEntrevista1" method="GET">
    <div class="input-group">
    <p><input type="searchEntrevista1" name="searchEntrevista1" class="form-control" ></p>
<span class="input-group-prepend">
    <p><button type="submit" class="btn btn-primary">Buscar por Cedula</button></p>
</span>
</div>
</form>
</div>
</p>
<div class="container">


        <form name="f1" action="{{ url('/entrevista1')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                    <form>

                        <div class="card-header">
                        <center>
                            <h2>Listado de Postulados a Entrevistar</h2>
                      </center>
                    </div>


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
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Perfil</th>
                                            <th scope="col">Campaña</th>

                                            <th colspan="6">Datos a Registrar</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($filtros as $filtro)
                                            <tr>
                                                <th scope="row">{{ $filtro->id}}</th>
                                                <td>{{ $filtro->cedula}}</td>
                                                <td>{{ $filtro->nombre}}</td>
                                                <td>{{ $filtro->telefono}}</td>
                                                <td>{{ $filtro->perfil}}</td>
                                                <td>{{ $filtro->campaña}}</td>




                                                <td>




                                                    <a href="{{url('/entrevista1/'.$filtro->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Basicos</a>
                                                    <a href="{{url('/filtro/'.$filtro->id.'/edit')}}" class="btn btn-success btn-sm" role="button" aria-pressed="true">No asiste</a>{{--
                                                    <a href="{{url('/entrevista1/'.$entrevista->id.'/edit')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Academicos</a>
                                                    <a href="{{url('/entrevista1/'.$entrevista->id.'/edit')}}" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Laborales</a>--}}

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
                    {{ $filtros->links()}}
{{--
                    <p>
                        clic <a href="{{route('entrevista1.excel')}}">Aqui</a>
                        Descarga la entrevista en excel
                        </p> --}}

                    </div>
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
