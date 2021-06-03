@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">


                    <form name="" action="{{ url('/cargoNuevo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{csrf_field()}}
                        <form>
                            <div class="card text-center">
                                <div class="card-header">
                           <h1 style="font-size: 10mm"> Listado de cargos</h1>
                                </div>
                            </div>
                            <a href="{{route('cargoNuevo.create')}}"
                            class="btn btn-primary float-right"
                            >Nuevo cargo
                          </a>
                          <div class="container">
                              <div class="row justify-content-center">
                                  <div class="col-md-12">
                                      <div class="card">

                                        <table class="table table-dark">
                                            <thead>
                                              <tr >
                                                <th scope="col">id</th>
                                                <th scope="col">Cedula</th>


                                                <center><th colspan="3"  ></th></center>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              @foreach ($cargoses as $cargo)
                                              <tr>
                                                  <th scope="row"  >{{ $cargo->id}}</th>
                                                  <td style="font-size: 5mm">{{ $cargo->cargo}}

                                                  <td>

                                                  <a href="{{url('/cargoNuevo/'.$cargo->id.'/edit')}}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Editar</a>

                                                 </td>
                                                <td>

                                  <form action="{{ route('cargoNuevo.destroy',$cargo->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>
                                  </form>

                                                </td>

                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                  </table>

                 {{ $cargoses->links() }}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
