@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Editar Roles</h2></div>

                <div class="card-body">
                   @include('custom.message')



                    <form action="{{ route('cargoNuevo.update', $cargos->id)}}" method="POST">
                     @csrf
                     @method('PUT')

                     <div class="container">

                        <h3>Cargos existentes</h3>

                         <div class="form-group">
                            <input type="text" class="form-control"
                            id="cargo"
                            placeholder="Cargo"
                            name="cargo"
                            value="{{ old('cargo', $cargos->cargo)}}"
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
