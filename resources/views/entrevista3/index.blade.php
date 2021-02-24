@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('entrevista2.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos familiares " /></a>


<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
</center>
    <p
        <div class="col-md-4">
    <form action="/searchEntrevista" method="GET">
    <div class="input-group">
    <p><input type="searchEntrevista" name="searchEntrevista" class="form-control" ></p>
<span class="input-group-prepend">
    <p><button type="submit" class="btn btn-primary">Buscar por Numero</button></p>
</span>
</div>
</form>
</div>
</p>
<div class="container">
             <form name="f1" action="{{ url('/entrevista3/')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                                            <th scope="col">Telefono</th>



                                            <th colspan="6">Etapas de la entrevista</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($entrevistas as $entrevista)
                                            <tr>
                                                <th scope="row">{{ $entrevista->id}}</th>
                                                <td>{{ $entrevista->cedula}}</td>
                                                <td>{{ $entrevista->nombres}}</td>
                                               <td>{{ $entrevista->telefono}}</td>



                                                <td>
                                                   {{--<a href="{{url('/entrevista1/'.$entrevista->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Datos basicos</a>--}}
                                                  {{-- <a href="{{url('/entrevista2/'.$entrevista->id.'/edit')}}" class="btn btn-warning btn-sm" role="button" aria-pressed="true">Familiares</a>--}}
                                                    <a href="{{url('/entrevista3/'.$entrevista->id.'/edit')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Academicos</a>
                                                  {{--  <a href="{{url('/entrevista4/'.$entrevista->id.'/edit')}}" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Laborales</a>--}}

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

                    <p>
                        clic <a href="{{route('entrevista1.excel')}}">Aqui</a>
                        Descarga la entrevista en excel
                        </p>

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
