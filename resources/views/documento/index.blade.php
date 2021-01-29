@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

               <br> <h6>&nbsp;&nbsp;&nbsp;&nbsp;Cantidad de Registros:  {{ $contratacions->total() }}</h6>
                <br>
                <div class="col-md-4">
                <form action="/searchDocumento" method="GET">
                <div class="input-group">
        <input type="searchDocumento" name="searchDocumento" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por Cedula</button>
            </span>
        </div>
    </form>
</div>
<br>

<table class="table table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
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
            <form action="{{url('/documentos/'.$contratacion->id_filtro)}}" method="post" style='display:inline'>
                @csrf
                @method('DELETE')

        <a href="{{url('/documento/'.$contratacion->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
        <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>
       </form>
    </td>
</tr>
        @endforeach
        </tbody>
        </table>
        {{ $contratacions->links() }}

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

