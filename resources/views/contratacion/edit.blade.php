@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
<link rel="shortcut icon" href="home"><img src="\theme\images\isotipo-slogan.png"  align= "auto" height="80" width="200">

<div class="page-header">
    <br>
      <h3>CHECKLIST DE DOCUMENTOS</h3>
</div>
</center>
<br>

    </body>
    <form action="{{ url('/contratacion/')}}"
          method="POST"
          enctype="multipart/form-data"
          class="form-horizontal"
          style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          {{csrf_field()}}


          <div class="card-header">
           <center> <h3>{{ $filtro->nombre }}</h3></center>
          </div>
          <div class="container" style="background-image: linear-gradient(#ebf3f4,#ebf3f4, #ebf3f4); width: 840px; margin-center: .5rem;" >
            <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
              <div class="row">

                &nbsp;&nbsp;&nbsp;
          <p>
            <div class="col-auto"><label for="cedula" style="color: rgb(41, 20, 6)">Cedula</label><input type="number" class="form-control" style="width: 240px" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula )}}"></div>
            </p>
            <p>
              <div class="col-auto"><label for="cedula">Telefono</label><input type="number" class="form-control" style="width: 240px" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono', $filtro->telefono )}}"></div>
              </p>
               <p>
                <div class="col-auto"><label for="correo">Correo</label><input type="text" class="form-control" style="width: 240px" id="correo" placeholder="correo" name="correo" value="{{ old('correo', $filtro->correo )}}"></div>
                </p>
                <p><div></div></p>

              </div>

                <div class="row">
                  &nbsp;&nbsp;&nbsp;
                <p>
                  <div class="col-auto"><label for="perfil">Perfil</label><input type="text" class="form-control" style="width: 240px" id="perfil" placeholder="perfil" name="perfil" value="{{ old('perfil', $filtro->perfil )}}"></div>
                  </p>
                  <p>
                    <div class="col-auto"><label for="campaña">Campaña</label><input type="text" class="form-control" style="width: 240px" id="campaña" placeholder="campaña" name="campaña" value="{{ old('campaña', $filtro->campaña )}}"></div>
                    </p>
                    <p>
                      <div class="col-auto"><label for="fuente">Fuente</label><input type="text" class="form-control" style="width: 240px" id="fuente" placeholder="fuente" name="fuente" value="{{ old('fuente', $filtro->fuente )}}"></div>
                      </p>


        </div>
        <div class="row">
          <br>
        </div>

    </div>
  </div>


<div class="card" style="margin-center: .5rem;">
<center><h3>DOCUMENTOS SOLICITADOS</h3></center></div>
<div class="container" style=" background-image: linear-gradient(#EAF2F8, #AAB7B8);  margin-center: 1.5rem;" >
<div class="row">
  <div class="col-sm-6" >
    <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;" >
      <div class="card-body">
        <h5 class="card-title" style="color:#214c63;"><strong>Hoja de vida actualizada&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> con foto</strong></h5>
        <div class="card" >

          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hv" id="hv1" value="Si"  required>
          <label class="form-check-label" for="hv1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hv" id="hv2" value="No">
          <label class="form-check-label" for="hv2">No</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hv" id="hv3" value="Pendiente">
          <label class="form-check-label" for="hv3">Pendiente</label>
      </div>

      </div>
    </div>
  </div>
</div>
  <div class="col-sm-6">
    <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
      <div class="card-body">
        <h5 class="card-title" style="color:#214c63;"><strong>Fotocopia de  servicio publico</strong></h5>
        <div class="card">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="serv_publico" id="serv_publico1" value="Si"  required>
          <label class="form-check-label" for="serv_publico1">Si</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="serv_publico" id="serv_publico2" value="No">
          <label class="form-check-label" for="serv_publico2">No</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="serv_publico" id="serv_publico3" value="Pendiente">
          <label class="form-check-label" for="serv_publico3">Pendiente</label>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>




<div class="row">
  <div class="col-sm-6">
    <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
      <div class="card-body">
        <h5 class="card-title" style="color:#214c63;"><strong>Apertura cuenta de nomina&nbsp;&nbsp;&nbsp;&nbsp;</strong></h5>
        <div class="card">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cert_bancaria" id="cert_bancaria1" value="Si" required>
            <label class="form-check-label" for="cert_bancaria1">Si</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cert_bancaria" id="cert_bancaria2" value="No">
            <label class="form-check-label" for="cert_bancaria2">No</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cert_bancaria" id="cert_bancaria3" value="Pendiente" >
            <label class="form-check-label" for="cert_bancaria3" >Pendiente</label>
        </div>
        <p><select name="bancos" id="bancos" class="form-control" style="font-size: 12px" required>
        <option value="0" >seleccione el banco</option>

        @foreach($bancoses as $bancos)<option value="{{ $bancos->banco}}">
            {{ $bancos->banco }}</option>
          @endforeach
        </select></p>
        </div>
 </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Examen medico ocupacional<br>emitido por el laboratorio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h5>
          <div class="card">

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ex_medico" id="ex_medico1" value="Si" required>
              <label class="form-check-label" for="ex_medico1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ex_medico" id="ex_medico2" value="No">
              <label class="form-check-label" for="ex_medico2">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ex_medico" id="ex_medico3" value="Pendiente" >
              <label class="form-check-label" for="ex_medico3">Pendiente</label>
          </div>
          <div><br><br></div>
        </div>
      </div>
    </div>
  </div>

  </div>




  <div class="row">

    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Antecedentes disciplinarios<br> emitidos por la procuraduría&nbsp;&nbsp;</strong></h5>
          <div class="card">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ant_procuraduria" id="ant_procuraduria1" value="Si" required>
              <label class="form-check-label" for="ant_procuraduria1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ant_procuraduria" id="ant_procuraduria2" value="No">
              <label class="form-check-label" for="ant_procuraduria2">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ant_procuraduria" id="ant_procuraduria3" value="Pendiente" >
              <label class="form-check-label" for="ant_procuraduria3">Pendiente</label>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">

        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Pasado judicial emitido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> por la Policía Nacional</strong></h5>
          <div class="card">

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ant_ponal" id="ant_ponal1" value="Si" required>
              <label class="form-check-label" for="ant_ponal1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ant_ponal" id="ant_ponal2" value="No">
              <label class="form-check-label" for="ant_ponal2">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ant_ponal" id="ant_ponal3" value="Pendiente">
              <label class="form-check-label" for="ant_ponal3">Pendiente</label>
          </div>

        </div>


        </div>


      </div>
    </div>


  </div>






  <div class="row">
    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Fotocopia de la libreta militar</strong></h5>
          <div class="card">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="libreta_militar" id="libreta_militar1" value="Si" required>
              <label class="form-check-label" for="libreta_militar1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="libreta_militar" id="libreta_militar2" value="No">
              <label class="form-check-label" for="libreta_militar2">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="libreta_militar" id="libreta_militar3" value="No aplica" >
              <label class="form-check-label" for="libreta_militar3">No aplica</label>
          </div>
   </div>
   <div><br><br></div>
        </div>






      </div>
    </div>


    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>5 fotocopias de la cedula <br>de ciudadanía ampliada al <br>150%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h5>
          <div class="card">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="copia_cedula" id="copia_cedula1" value="Si" required>
              <label class="form-check-label" for="copia_cedula1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="copia_cedula" id="copia_cedula2" value="No">
              <label class="form-check-label" for="copia_cedula2">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="copia_cedula" id="copia_cedula3" value="Pendiente" >
              <label class="form-check-label" for="copia_cedula3" >Pendiente</label>
          </div>
          <p><input type="number" name="cantidadcedula" id="cantidadcedula" placeholder="Cantidad entregada"  class="form-control" required></p>
          </div>
         </div>
        </div>
      </div>
    </div>




    <div class="row">

</div>
</div>




<div class="card" style="margin-center: .5rem;">
  <center><h3>CERTIFICADOS DE ESTUDIOS</h3></center></div>
  <div class="container" style=" background-image: linear-gradient(#EAF2F8, #AAB7B8);  margin-center: 1.5rem;" >

    <div class="row">




    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Certificado de bachiller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h5>
          <div class="card">

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cert_bachiller" id="cert_bachiller1" value="Si" required>
              <label class="form-check-label" for="cert_bachiller1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cert_bachiller" id="cert_bachiller2" value="No">
              <label class="form-check-label" for="cert_bachiller2">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cert_bachiller" id="cert_bachiller3" value="Pendiente">
              <label class="form-check-label" for="cert_bachiller3">Pendiente</label>
          </div>

        </div>
        <div><br><br></div>

        </div>
      </div>
    </div>


    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 3px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Certificado Tecnico <br>o Tecnologo (otros)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></h5>
          <div class="card">
            <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_otros" id="cert_otros1" value="Si" required>
    <label class="form-check-label" for="cert_otros1">Si</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_otros" id="cert_otros2" value="No">
    <label class="form-check-label" for="cert_otros2">No</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_otros" id="cert_otros3" value="Pendiente">
    <label class="form-check-label" for="cert_otros3">Pendiente</label>
</div>
<p><input type="number" id="cantidadcert" name="cantidadcert" placeholder="Cantidad entregada"  class="form-control" required></p>
</div>
   </div>
        </div>
      </div>
    </div>
    <div class="card" style="margin-center: .5rem;">
      <center><h3>REFERENCIAS</h3></center></div>
      <div class="container" style=" background-image: linear-gradient(#EAF2F8, #AAB7B8);  margin-center: 1.5rem;" >

    <div class="row">
      <div class="col-sm-6">
        <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 2px solid;">
          <div class="card-body">
            <h5 class="card-title" style="color:#214c63;"><strong>2 Referencias laborales<br> últimos empleos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </strong></h5>
            <div class="card">

             <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ref_laborales" id="ref_laborales1" value="Si" required>
              <label class="form-check-label" for="ref_laborales1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ref_laborales" id="ref_laborales2" value="No">
              <label class="form-check-label" for="ref_laborales2">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ref_laborales" id="ref_laborales3" value="Pendiente">
              <label class="form-check-label" for="ref_laborales3">Pendiente</label>
          </div>
          <p><input type="number" id="cantidadlab" name="cantidadlab" placeholder="Cantidad entregada"  class="form-control" required></p>

          </div>
        </div>
      </div>
    </div>
      <div class="col-sm-6">
        <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 2px solid;">
          <div class="card-body">
            <h5 class="card-title" style="color:#214c63;"><strong>2 Referencias personales<br> vigentes y firmadas en original
            </strong></h5>
            <div class="card">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ref_personales" id="ref_personales1" value="Si" required>
                <label class="form-check-label" for="ref_personales1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ref_personales" id="ref_personales2" value="No">
                <label class="form-check-label" for="ref_personales2">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ref_personales" id="ref_personales3" value="Pendiente">
                <label class="form-check-label" for="ref_personales3">Pendiente</label>
            </div>
            <p><input type="number" id="cantidadper" name="cantidadper" placeholder="Cantidad entregada"  class="form-control" required></p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card" style="margin-center: .5rem;">
    <center><h3>AFILIACIONES</h3></center></div>
    <div class="container" style=" background-image: linear-gradient(#EAF2F8, #AAB7B8);  margin-center: 1.5rem;" >

  <div class="row">
    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 2px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Certificado EPS actual, no&nbsp;&nbsp;&nbsp;<br> mayor a 30 días
          </strong></h5>
          <div class="card">

           <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_eps" id="cert_eps1" value="Si" required>
    <label class="form-check-label" for="cert_eps1">Si</label>
          </div>
          <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_eps" id="cert_eps2" value="No">
    <label class="form-check-label" for="cert_eps2">No</label>
          </div>
          <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_eps" id="cert_eps3" value="Pendiente">
    <label class="form-check-label" for="cert_eps3">Pendiente</label>
        </div>


        </div>
      </div>
    </div>
  </div>
    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 2px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Certificado fondo de <br>pensiones, no mayor a 30 días&nbsp;&nbsp;
          </strong></h5>
          <div class="card">
            <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_pensiones" id="cert_pensiones1" value="Si" required>
    <label class="form-check-label" for="cert_pensiones1">Si</label>
            </div>
            <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_pensiones" id="cert_pensiones2" value="No">
    <label class="form-check-label" for="cert_pensiones2">No</label>
            </div>
            <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_pensiones" id="cert_pensiones3" value="Pendiente">
    <label class="form-check-label" for="cert_pensiones3">Pendiente</label>
          </div>

        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 2px solid;">
        <div class="card-body">
          <h5 class="card-title" style="color:#214c63;"><strong>Certificado fondo de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>cesantías,no mayor a <br>30 días

          </strong></h5>
          <div class="card">

           <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_cesantias" id="cert_cesantias1" value="Si" required>
    <label class="form-check-label" for="cert_cesantias1">Si</label>
          </div>
          <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_cesantias" id="cert_cesantias2" value="No">
    <label class="form-check-label" for="cert_cesantias2">No</label>
          </div>
          <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="cert_cesantias" id="cert_cesantias3" value="Pendiente">
    <label class="form-check-label" for="cert_cesantias3">Pendiente</label>
        </div>


        </div>
      </div>
    </div>
  </div>

  </div>
</div>






<div class="card" style="margin-center: .5rem;">
  <center><h3>OTROS DOCUMENTOS</h3></center></div>
  <div class="container" style=" background-image: linear-gradient(#EAF2F8, #AAB7B8);  margin-center: 1.5rem;" >

<div class="row">
  <div class="col-sm-6">
    <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 2px solid;">
      <div class="card-body">
        <h5 class="card-title" style="color:#214c63;"><strong>Documentos de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <BR>identificación de <BR>núcleo familiar

        </strong></h5>
        <div class="card">

         <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="nucleo_familiar" id="nucleo_familiar1" value="Si" required>
    <label class="form-check-label" for="nucleo_familiar1">Si</label>
        </div>
        <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="nucleo_familiar" id="nucleo_familiar2" value="No">
    <label class="form-check-label" for="nucleo_familiar2">No</label>
        </div>
        <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="nucleo_familiar" id="nucleo_familiar3" value="No Aplica">
    <label class="form-check-label" for="nucleo_familiar3">No Aplica</label>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="card" style="background-image: linear-gradient(#ebf3f4,#96b2bf,#4dadb9, #164863); border: #ebf3f4 2px solid;">
    <div class="card-body">
      <h5 class="card-title" style="color:#214c63;"><strong>Relaciona Aqui <br>los Documentos
      </strong></h5>
      <div class="card">
        <textarea class="form-control form-control-lg col-12" cols="40" placeholder="" id="documentos" name="documentos" style="height: 100px"></textarea>

    </div>
    <div><br></div>
  </div>
</div>
</div>



</div>


</div>
<div class="card" style="margin-center: .5rem;">
  <center><h3>OBSERVACIONES</h3></center></div>

  <div class="card">
    <textarea class="form-control form-control-lg col-12" cols="40" placeholder="" id="observaciones" name="observaciones" style="height: 100px"></textarea>

</div>


<input class="btn btn-lg btn-primary" type="submit" value="Registrar">
<a href="{{route('capacitacion.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Volver</a>
  </div>


<div class="col-2"><input type="hidden" class="form-control" id="id_filtro"  name="id_filtro" value="{{ old('id_filtro', $filtro->id)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="cedula" placeholder="cedula" name="cedula" value="{{ old('cedula', $filtro->cedula)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="nombres" placeholder="nombres" name="nombres" value="{{ old('nombre', $filtro->nombre)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="telefono" placeholder="telefono" name="telefono" value="{{ old('telefono', $filtro->telefono)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="correo" placeholder="correo" name="correo" value="{{ old('correo', $filtro->correo)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="perfil" placeholder="perfil" name="perfil" value="{{ old('perfil', $filtro->perfil)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="campaña" placeholder="campaña" name="campaña" value="{{ old('campaña', $filtro->campaña)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="fuente" placeholder="fuente" name="fuente" value="{{ old('fuente', $filtro->fuente)}}"></div>

<div class="col-2"><input type="hidden" class="form-control" id="residencia" placeholder="residencia" name="residencia" value="{{ old('residencia', $contratacions->residencia)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="id_localidad" placeholder="id_localidad" name="id_localidad" value="{{ old('id_localidad', $contratacions->id_localidad)}}"></div>
<div class="col-2"><input type="hidden" class="form-control" id="estado" placeholder="estado" name="estado" value="activo"></div>



</div>




</div>











            </div>
        </div>
    </div>
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
        'ENTREVISTA',
        'Aqui podras registrar algunas generalidades',
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
