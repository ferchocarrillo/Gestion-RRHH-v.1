@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
             <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
                   {{-- <h3 aline="center" style="color:#DDE8EA">Formulario de Requisiciones</h3>--}}
                </center>

            <div class="card" style="background-image: linear-gradient(#1d4862, #1d4862);color:white;">
                <div class="card-header" ><h2 ><strong>Creacion de Cargos</strong></h2></div>
               
                <div class="card-body">
                   @include('custom.message')



                    <form action="{{ route('cargoNuevo.store')}}" method="POST">
                     @csrf

                     <div class="container">

                        <div class="card-title" ><h3 style="color:white;"><strong>Datos requeridos</strong></h3></div>

                         <div class="form-group">
                            <input type="text" class="form-control"
                            id="cargo"
                            placeholder="cargo"
                            name="cargo"
                            value="{{ old('cargo')}}"
                            >
                          </div>
          

                          <input class="btn btn-primary" type="submit" value="Guardar">


                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
  'Cargos nuevos',
  'Aqui deberan registrarse los cargos nuevos',
  'success'
)
</script>
@stop


