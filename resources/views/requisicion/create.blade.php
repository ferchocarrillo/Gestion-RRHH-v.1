@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">

            </center>



                <form name="f1" action="{{ url('/requisicion')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                    <form>
                        <div class="panel panel-default" div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                        <div class="card-header" aline="center" >
                            <div class="card text-center">
                                <h2 > Datos de la Requisición</h2>
                              </div>
                    <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-4">

<main>
                                    <input list="cargos" name= "cargos" class="form-control-lg-new4" placeholder="Cargo"  required />
                                    <datalist name="cargos" id="cargos" class="form-control-lg-new4">


                            <option value="" >Cargo</option>
                            @foreach($cargo as $cargos)
                                <option value="{{ $cargos->cargo}}">{{ $cargos->cargo }}</option>
                            @endforeach

                        </datalist>

                    </div>

                        <div class="col">
                        <input type="number" id ="cantidad" name="cantidad" class="form-control-lg-new5" placeholder="Cantidad" required>
                    </div>

    <div class="col">

        <input list="sede" class="form-control-lg-new5"  name= "sede" placeholder="Sede" required />
        <datalist name="sede" id="sede" >


                           <option value="">Sede</option>
                           @foreach($sede as $sedes)
                               <option value="{{ $sedes->sede}}">{{ $sedes->sede }}</option>
                           @endforeach
                        </datalist>
                    </div>

    <div class="col">
                        <select name="dependencia"  id="dependencia" class="form-control-lg-new6" required>

                            <option value="">Dependencias</option>
                            @foreach ($dependencias as $dependencia)
                            <option value="{{ $dependencia->dependencia}}">{{ $dependencia->dependencia }}</option>
                            @endforeach

                        </select>


                        </div>

    <div class="col">
        <select name="id_area" id="id_area" class="form-control-lg-new6" placeholder="Area" required> </select>
    </select>
    </div>
</div>
</div>
</div>
</div>
</div>

<div class="panel panel-default">
    <div class="card text-center">
        <div class="card-header">
           <h3 style="color:#EAF2F8">
                Motivo de la Requisición</h3>
          </div>
<div class="card" >

    <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <div class="pull-right" >
    <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);" >

        <div class="form-row">


            <input class="form-check-input" type="radio" value="maternidad/incapacidad" name="motivos" id="motivos">
           <strong><label class="form-check-label" for="reemplaza">
                &nbsp;&nbsp;Reemplazo por Maternidad / Incapacidad</label></strong>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id ="reemplaza"  class="form-control-lg-new7" name= "reemplaza"   align='right' placeholder="A quien reemplaza?">

            </div>
            <br>
            <div class="form-row">

                <input class="form-check-input" type="radio" value="Otro" name="motivos" id="motivos">

               <strong> <label class="form-check-label" for="otro">
                &nbsp;&nbsp;Otro</label></strong>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id ="cual" name="cual" class="form-control-lg-new7"  align='right' placeholder="Cual?">
                </div>

<br>
<div class="form-row">
            <div><input class="form-check-input" type="radio" value="retiro" name="motivos" id="motivos">
           <strong> <label class="form-check-label" for="Retiro">
              &nbsp;&nbsp;Retiro / Renuncia Empleado
            </label></strong>
        </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div>
            <input class="form-check-input" type="radio" value="nuevoCargo" name="motivos" id="motivos">
           <strong> <label class="form-check-label" for="nuevo_cargo">
                &nbsp;&nbsp;Nuevo Cargo
            </label></strong>
        </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div >
            <input class="form-check-input" type="radio" value="nuevoCupo" name="motivos" id="motivos">
           <strong> <label class="form-check-label" for="nuevo_cupo">
                &nbsp;&nbsp;Nuevo cupo Nomina
            </label></strong>
          </div>
</div>
</div>
</div>
<div class="form-row">

          </div>


            <div>
                <div class="col-12">

            </div>
            </div>
            <br>

            <div>

        </div>

    </div>
</div>
</div>
<div class="panel panel-default">
<div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <div class="card-body">
        <div class="form-row">
            <div class="col-6">
            <input type="text" id ="tiempo" name="tiempo" class="form-control-lg-new8" placeholder="Tiempo de vinculacion" required>
        </div>

        <div class="col-6">
            <input list="dias" class="form-control-lg-new8" name="dias" placeholder="Dias" required />
            <datalist name="dias" id="dias">

     <option value="" selected>Dias a trabajar
     <option value="lunes a viernes">lunes a viernes
     <option value="lunes a sabado">lunes a sabado
     <option value="domingo a domingo">domingo a domingo
    </datalist>
     </div>
    </div>
    <br>
    <div class="card-group">
        <div class="card" style="width: 20em;">

        <label for="radio" style="align-content: fa-pull-left">Jornada Laboral Requerida</label>

        <div class="row">


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label >
                <input type="radio" name="jornada"value="completo"> &nbsp;&nbsp;Tiempo Completo
            </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label >
                <input type="radio" name="jornada" value="medio"> &nbsp;&nbsp;Medio Tiempo
                             </label>
                          </div>

    </div>



    <div class="card" style="width: 20em;">
    <label for="finicio">Fecha de inicio de actividades</label>
    <input type="date" id="finicio" name="finicio" class="form-control-lg-new8" required>
                          </div>
                        </div>

                </div>
             </div>
        <div class="col-sm-3 col-form-label">
</div>
</div>

    <div class="form-row">
        &nbsp;&nbsp;
        &nbsp; 
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-file-signature">&nbsp;</i>REGISTRAR
        </button>
        &nbsp;&nbsp;
        &nbsp; 
            <a href=({{ route('requisicion.create')}})><button type="reset"  class="btn btn-danger">
            <i class="fa fa-ban"></i> VOLVER
        </button></a>
     </div>
</main>
&nbsp;&nbsp;
&nbsp;   &nbsp;&nbsp;
&nbsp; 

    </form>







    </div>

    </div>

    </form>










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
  'REQUISICIONES',
  'Recuerden realizar sus requisiciónes de personal con MINIMO 5 DIAS DE ANTICIPACIÓN,  a la fecha de inicio de labores solicitada',
  'success'
)
</script>


<script>
    $(document).ready(function() {
         $('#dependencia').on('change', function(e) {
             var id = $('#dependencia').val();
             $.ajax({
                 url: "{{ route('Area')}}",
                 data: "id="+id+"&_token={{ csrf_token()}}",
                 dataType: "json",
                 method: "POST",
                 success: function(result)
                 {

                     $('#id_area').empty();
                     $('#id_area').append("<option value=''>Escoja un area</option>");
                     $.each(result, function(index,value){

                         $('#id_area').append("<option value='"+value.Area+"'>"+value.Area+"</option>");
                     });
                 }
             });
         });
     });
 </script>

@stop
@endsection
