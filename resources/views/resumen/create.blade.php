@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<center style="background-image: linear-gradient(#FFFFFF, #FEFFF1 );">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="80" width="200">
<div class="page-header">
    <br>
      <h3>Datos Registrados </h3>
</div>
</center>


<fieldset class="form-group">
    <div class="container" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);>
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <div class="row">
<div class="col-3"><label for="cedula">Cedula</label><input type="number" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>



<script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
'ENTREVISTA',
'Aqui podras registrar los datos de la entrevista',
'success'
)
</script>
<script>
$(document).ready(function() {
$('#departamento').on('change', function(e) {
var id = $('#departamento').val();
$.ajax({
   url: "{{ route('Ciudad')}}",
   data: "id="+id+"&_token={{ csrf_token()}}",
   dataType: "json",
   method: "POST",
   success: function(result)
   {

       $('#id_ciudad').empty();
       $('#id_ciudad').append("<option value=''>Ingrese Ciudad o Municipio</option>");
       $.each(result, function(index,value){

           $('#id_ciudad').append("<option value='"+value.Municipio+"'>"+value.Municipio+"</option>");
       });
   }
});
});
});
</script>

<script>
$(document).ready(function() {
$('#residencia').on('change', function(e) {
var id = $('#residencia').val();
$.ajax({
   url: "{{ route('Ciudad2')}}",
   data: "id="+id+"&_token={{ csrf_token()}}",
   dataType: "json",
   method: "POST",
   success: function(result)
   {

       $('#id_localidad').empty();
       $('#id_localidad').append("<option value=''>localidad</option>");
       $.each(result, function(index,value){

           $('#id_localidad').append("<option value='"+value.localidad+"'>"+value.localidad+"</option>");
       });
   }
});
});
});
</script>

@stop


@endsection

