@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

                </body>

                <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
                </center>
                    <p
                        <div class="col-md-4">
                    <form action="/searchverNovedades" method="GET">
                    <div class="input-group">
                    <p><input type="searchverNovedades" name="searchverNovedades" class="form-control" ></p>
                <span class="input-group-prepend">
                    <p><button type="submit" class="btn btn-primary">Buscar por Cedula</button></p>
                </span>
                </div>
                </form>
                </div>
                </p>
<form name="f1" action="{{ url('/verNovedades')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                    <form>

        <div class="panel panel-default">
            <div class="card text-center">
                <h1 align= "center" >Listado de Colaboradores</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
<div class="row">
                                    <div class="card-body">
                                 @include('custom.message')

                                        <table class="table table-striped table-bordered table-hover table-dark">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Cedula</th>
                                                <th scope="col">Nombres</th>
                                                <th scope="col">Campaña</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Foco</th>
                                                <th scope="col">Jefe inmediato</th>
                                                <th scope="col">Novedad</th>
                                                <th scope="col">Observacion</th>
                                                <th scope="col">Inicio Fin</th>
                                                <th scope="col">Total dias</th>


                                                <th colspan="3"></th>
                                              </tr>
                                            </thead>
                                            <tbody>


                                                @foreach ($novedades as $novedad)

                                                <tr>
                                                    <th scope="row">{{ $novedad->id}}</th>
                                                    <td>{{ $novedad->cedula}}</td>
                                                    <td>{{ $novedad->nombre}}</td>
                                                    <td>{{ $novedad->campaña}}</td>
                                                    <td>{{ $novedad->cargo}}</td>
                                                    <td>{{ $novedad->foco}}</td>
                                                    <td>{{ $novedad->supervisor}}</td>
                                                    <td>{{ $novedad->novedad}}</td>
                                                    <td>{{ $novedad->observaciones}}</td>
                                                    <td>{{ $novedad->desde}} {{ $novedad->hasta}}</td>
                                                    <td>{{ $novedad->totalDias}}</td>
                                                   <td>
                                              </form>
                                                    </td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                          </table>
                                      {{ $novedades->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>
                       clic <a href="{{route('requisicion.excel')}}">Aqui</a>
                        para descargar en Excel la base de novedades
                        </p>
                    <script src="{{asset('js/app.js')}}"></script>
                                  </body>
                                  @section('css')
                                  <link rel="stylesheet" href="/css/admin_custom.css">
                                  @stop
                                  @section('js')



                          <script>
                          Swal.fire(
                            'REQUISICION',
                            'Listado de solicitudes',
                            'success'
                          )
                          </script>
                          @stop

                          @endsection



