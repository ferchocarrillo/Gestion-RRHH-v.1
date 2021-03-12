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
            <p align="right">
                    <div class="col-md-4">
                <form action="/searchCapacitacion" method="GET">
                <div class="input-group">
        <input type="searchCapacitacion" name="searchCapacitacion" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por cedula</button>
            </span>
        </div>
    </form>
</div>
</p>
<div class="container">






               <form name="f1" action="{{ url('/capacitacion/')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                    <form>
                        <center>
                            <h2>Listado de Capacitados</h2>
                      </center>
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-md-12">
                                  <div class="card">

                                    <table class="table table-striped table-bordered table-hover table-dark">
                                        <thead>
                                          <tr >
                                            <th scope="col">#</th>

                                            <th scope="col">Cedula</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Perfil</th>
                                            <th scope="col">Campaña</th>


                                            <th colspan="2"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($filtros as $filtro)
                                            <tr>
                                    <th scope="row">{{ $filtro->id}}</th>

                                                <td>{{ $filtro->cedula}}</td>
                                                <td>{{ $filtro->nombre}}</td>
                                                <td>{{ $filtro->telefono}}</td>
                                                <td>{{ $filtro->correo}}</td>
                                                <td>{{ $filtro->perfil}}</td>
                                                <td>{{ $filtro->campaña}}</td>


                                                <td>


                                                    <a href="{{url('/capacitacion/'.$filtro->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Capacitacion</a>
                                                    {{-- <a href="{{url('/entFinalizacion/'.$entrevistas->id.'/edit')}}" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Datos Consignados</a> --}}
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
            <script>
            Swal.fire(
              'PROCESO DE CAPACITACION',
              'Validacion de evaluacion del capacitacion',
              'success'
            )
            </script>
            @stop
            @endsection
