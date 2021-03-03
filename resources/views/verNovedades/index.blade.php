@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                    <link rel="shortcut icon" href="home"><img src="\theme\images\icon\logo.jpg"  align= "center" height="70" width="150">
                </body>



<form name="f1" action="{{ url('/novedades')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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


                                                <th colspan="3"></th>
                                              </tr>
                                            </thead>
                                            <tbody>


                                                @foreach ($novedades as $novedad)

                                                <tr>
                                                    <th scope="row">{{ $novedad->id}}</th>
                                                    <td>{{ $novedad->cedula}}</td>
                                                    <td>{{ $novedad->nombres}}</td>
                                                    <td>{{ $novedad->campaña}}</td>
                                                    <td>{{ $novedad->cargos}}</td>
                                                    <td>{{ $novedad->foco}}</td>
                                                    <td>{{ $novedad->supervisor}}</td>
                                                    <td>{{ $novedad->novedad}}</td>


                                                    <td>
                                                        <a href="{{url('/verNovedades/'.$novedad->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>

                                                        <form action="{{url('/verNovedades/'.$novedad->id)}}" method="post">

                                                        @csrf

                                                        @method('DELETE')




                                                        {{--<button class="btn btn-danger btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>--}}




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


