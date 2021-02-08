@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                    <link rel="shortcut icon" href="home"><img src="\theme\images\icon\logo.jpg"  align= "center" height="70" width="150">
                </body>



<form name="f1" action="{{ url('/filtro')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                                    
                                    <br>
                                    <p align="right">
                                        <div class="col-md-6">
                                    <form action="/searchNovedades" method="GET">
                                    <div class="input-group">
                            <input type="searchNovedades" name="searchNovedades" class="form-control">
                            <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">Buscar por Cedula</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    </p>
                    <br>
                                    

                </div>

                <table class="table table-striped table-bordered table-hover table-dark">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Campaña</th>
                        <th colspan="3">Acciones</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($asignaciones as $asignacion)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$asignacion->cedula}}</td>
                        <td>{{$asignacion->nombre}}</td>
                        <td>{{$asignacion->correo}}</td>
                        <td>{{$asignacion->perfil}}</td>
                        <td>{{$asignacion->campaña}}</td>
                
                        <td>
                            <form action="{{url('/asignacion/'.$asignacion->id)}}" method="post" style='display:inline'>
                                @csrf
                                @method('DELETE')
                
                        <a href="{{url('/asignacion/'.$asignacion->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Asignar</a>
                     {{--   <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>--}}
                       </form>
                    </td>
                </tr>
                        @endforeach
                        </tbody>
                        </table>


                    
                    
                    
                {{--    <h6>Total de Novedades:  {{ $novedadess->total() }}</h6>
                    @foreach ($countRequises as $countRequis)
                    <h6>Cantidad de Aprobados:   {{ $countRequis }}</h6>
                    @endforeach
                    @foreach ($countRequi2ses as $countRequi2s)
                    <h6>Cantidad de Rechazados:   {{ $countRequi2s }}</h6>
                    @endforeach
                    @foreach ($countRequi3ses as $countRequi3s)
                    <h6>Cantidad de Pendientes:   {{ $countRequi3s }}</h6>
                    @endforeach
                    @foreach ($countRequi4ses as $countRequi4s)
                    <h6>Cantidad de sin Gestion:   {{ $countRequi4s }}</h6>
                    @endforeach
                    --}}
                    
                    
                    {{--
                                    <div class="card-body">
                                 @include('custom.message')
                    
                                        <table class="table table-striped table-bordered table-hover table-dark">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Cedula</th>
                                                <th scope="col">Nombres</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Campaña</th>
                                                <th scope="col">Area</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Jefe inmediato</th>
                                                <th scope="col">Novedades</th>
                                                <th scope="col">Observaciones</th>
                                                <th colspan="3"></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                    
                    
                                                @foreach ($activos as $novedades)
                    
                                                <tr>
                                                    <th scope="row">{{ $novedades->id}}</th>
                                                    <td>{{ $novedades->cedula}}</td>
                                                    <td>{{ $novedades->nombres}}</td>
                                                    <td>{{ $novedades->fecha}}</td>
                                                    <td>{{ $novedades->campaña}}</td>
                                                    <td>{{ $novedades->area}}</td>
                                                    <td>{{ $novedades->cargo}}</td>
                                                    <td>{{ $novedades->jinmediato}}</td>
                                                    <td>{{ $novedades->novedad}}</td>
                                                    <td>{{ $novedades->observaciones}}</td>
                    
                                                    <td>
                                                        <a href="{{url('/novedades/'.$novedades->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                    
                                                        <form action="{{url('/novedades/'.$novedades->id)}}" method="post">
                    
                                                        @csrf
                    
                                                        @method('DELETE')
                    
                    
                    
                    
                                                        {{--<button class="btn btn-danger btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>
                    
                    
                    
                    
                                                </form>
                    
                    
                    
                                                    </td>
                                                </tr>
                                                @endforeach
                    
                    
                    
                    
                    
                                            </tbody>
                                          </table>
                    
                                          {{ $activos->links() }}--}}
                    
                    
               
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        clic <a href="{{route('requisicion.excel')}}">Aqui</a>
                        para descargar en Excel la base de requisicion
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
                    
                    
                    
                    