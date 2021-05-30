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
<div class="container">
               <form name="f1" action="{{ url('/filtro/')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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

                                            <th scope="col">Cedula</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Correo</th>


                                            <th colspan="2"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($entrevistases as $entrevistas)
                                            <tr>
                                    <th scope="row">{{ $entrevistas->id}}</th>

                                                <td>{{ $entrevistas->cedula}}</td>
                                                <td>{{ $entrevistas->nombre}}</td>
                                                <td>{{ $entrevistas->telefono}}</td>
                                                <td>{{ $entrevistas->correo}}</td>


                                                <td>
                                                    <a href="{{url('/entRRHH/'.$entrevistas->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Resultado RRHH</a>
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

                    {{ $entrevistases->links()}}
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
