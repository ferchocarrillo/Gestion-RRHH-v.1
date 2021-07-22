@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<style>
.buscador{
   color:aliceblue;
   background:rgb(8, 147, 240);
   width: auto;
   height: 35px;
   border-radius: 0.75rem;
   font-size: 18px;
}
.inputs-1{
   border-radius: 0.75rem;
   display: block;
   width: 300px;
   height: calc(2.25rem + 2px);
   padding: 0.375rem 0.75rem;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid #ced4da;
   box-shadow: inset 0 0 0 rgba(0, 0, 0, 0);
   transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
   text-transform: capitalize;
   margin-left: 4rem;
}

</style>
{{-- <a href="{{route('resumen.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de capacitaciones" /></a> --}}


<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
</center>
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
                                    <form action="/searchAsignaciones" method="GET">
                                    <div class="input-group">
                            <input type="hidden" name="searchAsignaciones" class="form-control">
                            <span class="input-group-prepend">
                                {{-- <button type="hidden" class="btn btn-primary">Buscar por Cedula</button> --}}
                                </span>
                            </div>
                        </form>
                    </div>
                    </p>
                    <br>


                </div>

                <fieldset class="form-group">
                    <div class="container" >
                        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                            <div class="row">
                                <div class="input-group">
                                    <div class="form-outline">

                                        <form action="/searchAsignaciones" method="GET">
                                            <input type="search" name="searchAsignaciones" class="inputs-1" value="">
                                            </div>
                                            <button type="submit" class="buscador"><i class="fas fa-search"></i> Numero de Cedula</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </fieldset>



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
                    @foreach ($filtros as $filtro)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$filtro->cedula}}</td>
                        <td>{{$filtro->nombre}}</td>
                        <td>{{$filtro->correo}}</td>
                        <td>{{$filtro->cargo}}</td>

                        <td>{{$filtro->campaña}}</td>

                        <td>
                            <form action="{{url('/asignacion/'.$filtro->id)}}" method="post" style='display:inline'>
                                @csrf
                                @method('DELETE')

                        <a href="{{url('/asignacion/'.$filtro->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Asignar</a>
                     {{--   <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>--}}
                       </form>
                    </td>
                </tr>
                        @endforeach
                        </tbody>
                        </table>
    {{ $filtros->links() }}
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


