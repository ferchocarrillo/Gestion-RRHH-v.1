@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                    <link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "center" height="70" width="150">
                </body>



<form name="f1" action="{{ url('/filtro')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                    <form>

        <div class="panel panel-default">
            <div class="card text-center">
                <h1 align= "center" >Registro de Novedades</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    











                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        
        
            </div>
        </div>
        </fieldset>
        
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>REGISTRAR
            </button>
        
            <a href="{{route('filtro.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Volver</a>
        
        </div>
        </form>
        
        
        <!-- Bootstrap CSS-->
            <link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <!-- Bootstrap JS-->
            <script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
            <script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
            <!--<script src="{{asset('js/Portabilidad.js')}}"></script>--            <script src="{{asset('js/app.js')}}"></script>
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
        