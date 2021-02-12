@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                   
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">            
    <div class="card">
    <div class="row">
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                
                
                    <img src="\theme\images\isotipo-slogan.png" float="center" height="120" width="300">
                   
              

            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{-- 
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    --}}
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

</div>
</div>            
</div>

</div>
</div> 



    
 

    

<div class="card text-center">
 <div class="card-header">
      <h2>Lista de Requsiciones</h2>
 </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
<br><br>
<div class="row">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<h6  ><strong>Total de Requisiciones:</strong><center><p style="font-size:5mm"> {{ $requisiciones->total() }}</p></center></h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@foreach ($countRequises as $countRequis)
<h6 FONT SIZE=5><strong>Cantidad de Aprobados:</strong><center><p style="font-size:5mm">   {{ $countRequis }}</p></center></h6>
@endforeach&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@foreach ($countRequi2ses as $countRequi2s)
<h6 FONT SIZE=5><strong>Cantidad de Rechazados:</strong><center><p style="font-size:5mm">   {{ $countRequi2s }}</p></center></h6>
@endforeach&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@foreach ($countRequi3ses as $countRequi3s)
<h6 FONT SIZE=5><strong>Cantidad de Pendientes:</strong><center><p style="font-size:5mm">   {{ $countRequi3s }}</p></center></h6>
@endforeach&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@foreach ($countRequi4ses as $countRequi4s)
<h6 FONT SIZE=5><strong>Cantidad de sin Gestion:</strong><center><p style="font-size:5mm">   {{ $countRequi4s }}</p></center></h6>
@endforeach&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>



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



