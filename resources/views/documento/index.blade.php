@extends('adminlte::page')
@section('content')
@include('custom.message')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
    <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
</center>
              <p align="right">
                    <div class="col-md-4">
                <form action="/searchcontratacion" method="GET">
                <div class="input-group">
        <input type="searchcontratacion" name="searchcontratacion" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por Numero</button>
            </span>
        </div>
    </form>
</div>
</p>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <table class="table table-striped table-bordered table-hover table-dark">
                  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Cedula</th>
        <th scope="col">Nombre</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th colspan="3">Acciones</th>
        </tr>
</thead>
<tbody>
    @foreach ($contratacions as $contratacion)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$contratacion->cedula}}</td>
        <td>{{$contratacion->nombre}}</td>
        <td>{{$contratacion->telefono}}</td>
        <td>{{$contratacion->correo}}</td>

        <td>
            <form action="{{url('/contratacion/'.$contratacion->id_filtro)}}" method="post" style='display:inline'>
                @csrf
                @method('DELETE')

        <a href="{{url('/contratacion/'.$contratacion->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
      {{--  <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>--}}
       </form>
    </td>
</tr>
        @endforeach
        </tbody>
        </table>
        {{ $contratacions->links() }}
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
'DOCUMENTOS RELACIONADOS',
'Lista de documentos',
'success'
)
</script>
@stop
@endsection

