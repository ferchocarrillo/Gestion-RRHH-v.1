@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<a href="{{route('filtro.index')}}"><img src="https://images.cooltext.com/5506399.png" width="60" height="70" alt="retorno al index de la entrevista datos iniciales" /></a>
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png" style="position:absolute; top:50px; left:800px; visibility:visible z-index:1; margin-left:5rem;" align= "auto" height="100" width="270">
<br>
<br>

<center>
    <style>
        .inputs{
        border-radius: 0.75rem;
        width: 180px;
        height: 50px;
        background-color: #e9f1f1;
        font-weight: 100;
        }
        .inputs-1{
        border-radius: 0.75rem;
        width: 240px;
        height: 50px;
        background-color: #e9f1f1;
        font-weight: 100;
        }
        .inputs1{
            border-radius: 0.75rem;
            width: 270px;
            height: 50px;
            background-color: #e9f1f1;
            font-weight: 100;
            }

        .inputs2{
            border-radius: 0.75rem;
            width: 140px;
            background-color: #e9f1f1;
            font-weight: 200;
            }

        .inputs3{
            border-radius: 0.75rem;
            width: 370px;
            background-color: #e9f1f1;
            font-weight: 200;
            height: 38px;
            text-transform: capitalize;

            }

        .inputs4{
            border-radius: 0.75rem;
            width: 100px;
            background-color: #e9f1f1;
            font-weight: 200;
            height: 38px;
            margin-left: 2rem;
            color: #234c63;
            font-size: 16px;
           text-transform: capitalize;
            }

        .inputs5{
            border-radius: 0.75rem;
            width: 220px;
            background-color: #e9f1f1;
            font-weight: 200;
            height: 38px;
            color: #01090e;
                font-size: 19px;
               text-transform: capitalize;

            }
            .inputs5-1{
                color: #234c63;
                font-size: 16px;
                border-radius: 0.75rem;
                width: 350px;
                background-color: #e9f1f1;
                font-weight: 200;
                height: 38px;
                text-transform: capitalize;

                }

        .inputs5-1::placeholder {
            color: #234c63;
            font-weight: bold;
            font-size: 16px;
            opacity: 1;
            text-transform: capitalize;
          }

                        .inputs6{
                            font-size: 16px;
                            color: #234c63;
                            border-radius: 0.75rem;
                            width: 120px;
                            background-color: #e9f1f1;
                            font-weight: 200;
                            height: 38px;
                            text-transform: capitalize;

                            }
                            .inputs7{
                                font-size: 14px;
                                color: #234c63;
                                border-radius: 0.75rem;
                                width: 100px;
                                background-color: #e9f1f1;
                                font-weight: 100;
                                height: 38px;
                                text-transform: capitalize;

                                }

        .labels{
        font-size: 1.3rem;
        margin-left: 2rem;
        }
        .etiquetas{
            height: 38px;
            background: #97c8cd;
            color:  #234c63;
            font-size: 18px;
            text-align: center;
            border-radius: 0.75rem;
        }


        .textarea1{
            columns: 14;
            width: 300px;
            border-radius: 0.75rem;
        }
        .botones{
background-color: #1da0af;
height: 2rem;
border-radius: 0.75rem;
width: 150px;
align-self: center;
text-align: center;
font-size: 1rem;
text-transform: capitalize;
font-weight: bold;
color: #fdffff;
margin-left: 12rem;
        }
        .botones:hover{
            background-color: #165ebd;
            height: 2rem;
            border-radius: 0.75rem;
            width: 150px;
            align-self: center;
            text-align: center;
            font-size: 1rem;
            text-transform: capitalize;
            font-weight: bold;
            color: #f2f2f3;
            margin-left:12rem;
                    }

        .labeler{
            word-wrap:normal;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
            color: rgb(26, 24, 24);
            font-weight: bold;
            font-style: normal;
            padding-top: 0px;
            cursor: pointer;"
        }

        </style>

<div class="page-header">
      <h3>REGISTRO DE RESULTADO ENTREVISTA GERENCIA</h3>
</div>
</center>
        </body>
<form action="{{ url('/entGerencia/'.$filtro->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')


<h3>DATOS GENERALES</h3>

<fieldset class="form-group">
  <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
      <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <div class="row">




            <div class="col-3"><strong><span>Nombres</strong></span><p class="inputs5">{{ old('nombre', $filtro->nombre)}}</p></div>&nbsp;
            <div class="col"><strong><span>Cedula</strong></span><p class="inputs5">{{ old('cedula', $filtro->cedula)}}</p></div>&nbsp;
            <div class="col"><strong><span>Telefono</strong></span><p class="inputs5">{{ old('telefono', $filtro->telefono)}}</p></div>&nbsp;
            <div class="col-3"><strong><span>Correo</strong></span><p class="inputs5">{{ old('correo', $filtro->correo)}}</p></div>&nbsp;
            <div class="col-3"><strong><span>Perfil</strong></span><p class="inputs5">{{ old('cargo', $filtro->cargo)}}</p></div>&nbsp;
            <div class="col-3"><strong><span>Campaña</strong></span><p class="inputs5">{{ old('campaña', $filtro->campaña)}}</p></div>&nbsp;
            <div class="col-3"><strong><span>Fuente</strong></span><p class="inputs5">{{ old('fuente', $filtro->fuente)}}</p></div>&nbsp;
            <div class="col"><strong><span>Fecha de registro</strong></span><p class="inputs5">{{ old('fregistro', $filtro->fregistro)}}</p></div>&nbsp;

</div>
</div>
</div>
</div>
</fieldset>



<fieldset class="form-group">
  <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
      <div class="card-group" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <div class="row">

 <p class="col-3">

  <input list="resultadoGer" type="text" name="resultadoGer" class="inputs5-1" placeholder="Registre aqui el resultado" >

  <datalist name="resultadoGer" id="resultadoGer">
    <option value="">Resultado</option>
    @foreach($aprobaciones as $aprobacions)<option value="{{ $aprobacions->aprobacion}}">
        {{ $aprobacions->corto }}</option>
      @endforeach
  </datalist>
  </p>
  <a href="{{url('/resumen/'.$filtro->id.'/edit')}}" class="botones"  role="button" aria-pressed="true">ver hoja completa</a></p>


</div>

</div>
<p><input class="btn btn-lg btn-primary" type="submit" value="REGISTRAR">

  <a href="{{route('home')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a></p>
   </div>
  </fieldset>






    </form>







      <script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')



      <script>
      Swal.fire(
        'RESULTADO ENTREVISTA GERENCIA',
        'Actualiza los datos de los postulados',
        'success'
      )
      </script>
      @stop

      @endsection
