@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                    <link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "center" height="70" width="150">
                </body>
                <p align="right">
                    <div class="col-md-4">
                <form action="/searchfiltro" method="GET">
                <div class="input-group">
        <input type="searchfiltro" name="searchfiltro" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por cedula</button>
            </span>
        </div>
    </form>
</div>
</p>

               <form name="f1" action="{{ url('/filtro')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                                          <tr >
                                            <th scope="col">#</th>
                                            <th scope="col">Fecha registro</th>
                                            <th scope="col">Cedula</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Perfil</th>
                                            <th scope="col">Campaña</th>
                                            <th scope="col">Observacion</th>
                                            <th scope="col">Obs segundo filtro</th>
                                            <th colspan="2"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($filtros as $filtro)
                                            <tr>
                                                <th scope="row">{{ $filtro->id}}</th>
                                                <td>{{ $filtro->fregistro}}</td>
                                                <td>{{ $filtro->cedula}}</td>
                                                <td>{{ $filtro->nombre}}</td>
                                                <td>{{ $filtro->telefono}}</td>
                                                <td>{{ $filtro->correo}}</td>
                                                <td>{{ $filtro->perfil}}</td>
                                                <td>{{ $filtro->campaña}}</td>
                                                <td>{{ $filtro->observacion}}</td>
                                                <td>{{ $filtro->observacion2}}</td>
                                                <td>
                                                    <a href="{{url('/filtro/'.$filtro->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                                                    <form action="{{url('/filtro/'.$filtro->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                   {{-- <button class="btn btn-info btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>--}}
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
              'REGISTRO DE HV',
              'Registro de Hojas de Vida',
              'success'
            )
            </script>
            @stop
            @endsection
