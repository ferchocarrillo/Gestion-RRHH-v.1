@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
                <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
                <!-- Force next columns to break to new line -->
                <h3 aline="center">Formulario de Ingreso de Novedades</h3>
            </center>
            <hr width=100%  align="center"  size=3  style="border:1px inset ; noshade="noshade">
            <!-- Force next columns to break to new line -->
            <form name="f1" action="{{ url('/novedades')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}


                <p align="right">
                    <div class="col-md-4">
                <form action="/searchNovedades" method="GET">
                <div class="input-group">
            <input type="searchNovedades" name="searchNovedades" class="form-control">
            <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por cedula</button>
            </span>
            </div>
            </form>
            </div>
            </p>
              </nav>



              <div class="panel panel-default">
                <div class="card text-center">
                    <h1 align= "center" >Personal Activo</h1>
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
                                                    <th scope="col">Jefe Inmediato</th>
                                                    <th scope="col">Sede</th>
                                                    <th scope="col">Foco</th>
                                                    <th scope="col">Modalidad</th>
                                                    <th scope="col">Tipo</th>


                                                    <th colspan="3"></th>
                                                  </tr>
                                                </thead>
                                                <tbody>


                                                    @foreach ($activos as $novedades)

                                                    <tr>
                                                        <th scope="row">{{ $novedades->id}}</th>
                                                        <td>{{ $novedades->cedula}}</td>
                                                        <td>{{ $novedades->nombres}}</td>
                                                        <td>{{ $novedades->campaña}}</td>
                                                        <td>{{ $novedades->cargo}}</td>
                                                        <td>{{ $novedades->supervisor}}</td>
                                                        <td>{{ $novedades->sede}}</td>
                                                        <td>{{ $novedades->foco}}</td>
                                                        <td>{{ $novedades->modalidad}}</td>
                                                        <td>{{ $novedades->tipoModalidad}}</td>


                                                        <td>
                                                            <a href="{{url('/novedades/'.$novedades->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>

                                                            <form action="{{url('/novedades/'.$novedades->id)}}" method="post">

                                                            @csrf

                                                            @method('DELETE')




                                                            {{--<button class="btn btn-danger btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>--}}




                                                    </form>



                                                        </td>
                                                    </tr>
                                                    @endforeach





                                                </tbody>
                                              </table>

                                             {{-- {{ $activos->links() }}--}}




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




















<script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    $(document).ready(function() {
         $('#departamento').on('change', function(e) {
             var id = $('#departamento').val();
             $.ajax({
                 url: "{{ route('Ciudad')}}",
                 data: "id="+id+"&_token={{ csrf_token()}}",
                 dataType: "json",
                 method: "POST",
                 success: function(result)
                 {

                     $('#id_ciudad').empty();
                     $('#id_ciudad').append("<option value=''>Ingrese Ciudad o Municipio</option>");
                     $.each(result, function(index,value){

                         $('#id_ciudad').append("<option value='"+value.Municipio+"'>"+value.Municipio+"</option>");
                     });
                 }
             });
         });
     });
 </script>

 <script>
    $(function() {
      $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
      });
    })
  </script>

<script>
Swal.fire(
'NOVEDADES',
'Aqui se podran registrar todas las novedades de cada colaborador en la operación',
'success'
)
</script>
@stop
<!-- Bootstrap CSS-->
<link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
<!-- Bootstrap JS-->
<script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!--<script src="{{asset('js/Portabilidad.js')}}"></script>-->

@endsection

