@extends('adminlte::page')
@section('content')
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand"><link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="70" width="150"></a>


    <p align="right">
        <div class="col-md-4">
    <form action="/search" method="GET">
    <div class="input-group">
<input type="search" name="search" class="form-control">
<span class="input-group-prepend">
<button type="submit" class="btn btn-primary">Buscar por id</button>
</span>
</div>
</form>
</div>
</p>
  </nav>

<center>

      <h2>Lista de Requsiciones</h2>

</center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">



                <h6>Total de Requisiciones:  {{ $requisiciones->total() }}</h6>
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




                <div class="card-body">
             @include('custom.message')

                    <table class="table table-striped table-bordered table-hover table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Cantidad</th>

                            <th scope="col">Area</th>
                            <th scope="col">Jornada</th>
                            <th scope="col">Fecha inicio</th>
                            <th scope="col">Solicita</th>
                            <th scope="col">Tramite</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>


                            @foreach ($requisiciones as $requisicion)

                            <tr>
                                <th scope="row">{{ $requisicion->id}}</th>
                                <td>{{ $requisicion->cargo}}</td>
                                <td>{{ $requisicion->cantidad}}</td>
                                <td>{{ $requisicion->area}}</td>
                                <td>{{ $requisicion->jornada}}</td>
                                <td>{{ $requisicion->finicio}}</td>
                                <td>{{ $requisicion->solicita}}</td>
                                <td>{{ $requisicion->revisado}}</td>

                                <td>
                                    <a href="{{url('/requisicion/'.$requisicion->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>

                                    <form action="{{url('/requisicion/'.$requisicion->id)}}" method="post">

                                    @csrf

                                    @method('DELETE')




                                    {{--<button class="btn btn-danger btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>--}}




                            </form>



                                </td>
                            </tr>
                            @endforeach





                        </tbody>
                      </table>

                      {{ $requisiciones->links() }}




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



