@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Creacion de Cargos</h2></div>

                <div class="card-body">
                   @include('custom.message')



                    <form action="{{ route('cargoNuevo.store')}}" method="POST">
                     @csrf

                     <div class="container">

                        <h3>Datos requeridos</h3>

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


