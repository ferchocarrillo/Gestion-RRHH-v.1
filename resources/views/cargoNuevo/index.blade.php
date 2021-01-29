@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    
                        <a href="{{route('cargoNuevo.create')}}"    
                          class="btn btn-primary float-right"
                          >Nuevo cargo
                        </a>
                    <form name="" action="{{ url('/cargoNuevo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{csrf_field()}}
                        <form>
                            <center>
                                <h2>Listado de cargos</h2>
                          </center>
                          <div class="container">
                              <div class="row justify-content-center">
                                  <div class="col-md-12">
                                      <div class="card">
    
                                        <table class="table table-dark">
                                            <thead>
                                              <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Cedula</th>


                                                <center><th colspan="3"></th></center>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              @foreach ($cargoses as $cargo)
                                              <tr>
                                                  <th scope="row">{{ $cargo->id}}</th>
                                                  <td>{{ $cargo->cargo}}    

                                                  <td>

                                                  <a href="{{url('/cargoNuevo/'.$cargo->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                                                
                                                 </td>
                                                <td>
                                                    
                                  <form action="{{ route('cargoNuevo.destroy',$cargo->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-info btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>
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
