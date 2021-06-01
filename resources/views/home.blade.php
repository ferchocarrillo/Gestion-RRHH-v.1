@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">


<style>

tr{
font-size: 9px;
font-family: 'Times New Roman', Times, serif;
}
th{
}


</style>

<div class="container" >
    <div class="pull-right">
        <div class="col-md-20" >

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

    <link rel="shortcut icon" href="home">
    <hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">


<body style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
  <div class="card-header">
    <center>
    <img src="\theme\images\isotipo-slogan.png"  align= "center" height="150" width="400">
    <br><br>




   <h1  align= "center">
    Estadisticas y Graficos de Gestion RR.HH
 </h1>
</center></div>
<hr width=100%  align="center"  size=3  style="border:1px outset ; noshade="noshade">
</body>

<div class="card-header">
<center><H4>GESTION CON LAS REQUISICIONES</H4></center>

</div>

    <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body"style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
           <h5 class="card-title"><strong>REQUISICIONES</strong></h5>

{{--inicio primer grafico requisiciones--}}

               <canvas id="RQ1" width="160" height="200" style="background-color: white;"></canvas>
                <table class="table">
                 <thead>
                  <tr>
                    <th scope="col">Aprobados</th>
                    <th scope="col">Rechazados</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <br>
                    <h6>Total de Requisiciones: <strong> {{ $requisiciones->total() }}</strong></h6>
                    @foreach ($countRequises as $countRequis)
                    <td>{{ $countRequis }}</td>
                    @endforeach
                    @foreach ($countRequi2ses as $countRequi2s)
                    <td>  {{ $countRequi2s }}</td>
                    @endforeach
                  </tr>
                  <tr>
                    <th scope="col">Pendientes</th>
                    <th scope="col">Sin Gestion</th>
                  </tr>
                  <tr>
                    @foreach ($countRequi3ses as $countRequi3s)
                    <td> {{ $countRequi3s }}</td>
                    @endforeach
                    @foreach ($countRequi4ses as $countRequi4s)
                    <td>{{ $countRequi4s }}</td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <script>
            var ctx = document.getElementById('RQ1').getContext('2d');
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Aprobados', 'Rechazados', 'Pendientes', 'Sin gestion'],
                    datasets: [{
                        label:"Requisiciones",
                        data: [{{ $countRequis }}, {{ $countRequi2s }}, {{ $countRequi3s }}, {{ $countRequi4s }}],
                        backgroundColor: [
                            'rgba(9, 138, 26, 0.5)',
                            'rgba(248, 37, 37, 0.5)',
                            '#f3ff01',
                            '#9ecadb'
                        ],
                        borderColor: [
                            '#000000',
                            '#000000',
                            '#000000',

                            '#000000'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>

{{--fin primer grafico requisiciones--}}

{{--inicio tercer grafico gestionados y pendientes--}}

<div class="col-sm-3">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>REQUERIMIENTOS GESTIONADOS Y PENDIENTES</strong></h5>
         <canvas id="RQ3" width="160" height="160" style="background-color: white;"></canvas>
         <table class="table">
          <thead>
            <tbody>
            <tr>
              <th scope="col">Gestionado</th>
            </tr>
          <tbody>
            <tr>
              <br>
              <h6>Total de Requerimientos:  <strong>{{ $requisiciones->total() }}</strong></h6>
          @foreach ($pruebaRequises as $pruebaRequis)
              <td>{{$pruebaRequis}}</td>
          @endforeach
        </tr>
    </tbody>
</thead>
<thead>
          <tbody>
            <tr>
                <th scope="col">Sin Gestion</th>
              </tr>
            <tr>
          @foreach ($countRequi4ses as $countRequi4s)
          <td>{{ $countRequi4s }}</td>
          @endforeach
            </tr>
          </tbody>
        </thead>
        </table>
      </div>
  </div>
</div>
<script>
  var ctx = document.getElementById('RQ3').getContext('2d');
  var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Gestionado', 'Sin Gestion'],
          datasets: [{
              label: 'Estado de revision',
              data: [{{$pruebaRequis}}, {{ $countRequi4s }}],
              backgroundColor: [

                  '#042ED6',

                  '#24F608'
              ],
              borderColor: [

                  '#00030E',

                  '#00030E'
              ],
              borderWidth: 2
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
  </script>



{{--fin tercer grafico gestionados y pendientes --}}

{{--inicio segundo grafico publicaciones--}}
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
              <h5 class="card-title"><strong>LUGAR DE PUBLICACIONES REALIZADAS</strong></h5>
               <canvas id="RQ2" width="120" height="60" style="background-color: white;"></canvas>
               <table class="table">
                <thead>
                 <tr>
                    <th>Vv</th>
                    <th>Ct</th>
                    <th>SNE</th>
                    <th>Com</th>
                    <th>Ref t</th>
                    <th>Ref j</th>
                    <th>Ref cl</th>
                </tr>
                <tbody>
                    <tr>
                      <br>
                      <div class="row" >
                        <h6>Total de Publicaciones:<strong>  {{ $publicaciones->total() }}</strong></h6>&nbsp;&nbsp;&nbsp; <h6> Personal Requerido <strong> {{$contarrequisiciones}} </strong>Personas</h6></div>
                      @foreach ($countpublicas as $countpublica)
                      <td>{{ $countpublica }}</td>
                      @endforeach
                      @foreach ($count1publicas as $count1publica)
                      <td>{{ $count1publica }}</td>
                      @endforeach
                      @foreach ($count2publicas as $count2publica)
                      <td>{{ $count2publica }}</td>
                      @endforeach
                      @foreach ($count3publicas as $count3publica)
                      <td>{{ $count3publica }}</td>
                      @endforeach
                      @foreach ($count4publicas as $count4publica)
                      <td>{{ $count4publica }}</td>
                      @endforeach
                      @foreach ($count5publicas as $count5publica)
                    <td>{{ $count5publica }}</td>
                    @endforeach
                    @foreach ($count6publicas as $count6publica)
                    <td>{{ $count6publica }}</td>
                    @endforeach


                  </tr>

              </tbody>
                <tr>

                    <th>Univ</th>
                    <th>Redes</th>
                    <th>Hv p</th>
                    <th>Funda</th>
                    <th>Otros</th>
                    <th>El empleo</th>
                    <th>Magneto</th>
                  </tr>
                </thead>
            <tbody>
                <tr>


                    @foreach ($count7publicas as $count7publica)
                    <td>{{ $count7publica }}</td>
                    @endforeach
                    @foreach ($count8publicas as $count8publica)
                    <td>{{ $count8publica }}</td>
                    @endforeach
                    @foreach ($count9publicas as $count9publica)
                    <td>{{ $count9publica }}</td>
                    @endforeach
                    @foreach ($count10publicas as $count10publica)
                    <td>{{ $count10publica }}</td>
                    @endforeach
                    @foreach ($count11publicas as $count11publica)
                    <td>{{ $count11publica }}</td>
                    @endforeach
                    @foreach ($count12publicas as $count12publica)
                    <td>{{ $count12publica }}</td>
                    @endforeach
                    @foreach ($count13publicas as $count13publica)
                    <td>{{ $count13publica }}</td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <script>
            var ctx = document.getElementById('RQ2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Vincuventas', 'Computrabajo', 'SNE', 'Compensar','Referidos trabajadores','Referidos jefes','Referidos clientes','Universidades','Redes','Hv preseciales','Fundaciones','Otros','el empleo','Magneto'],
                    datasets: [{
                        label: 'publicaciones',
                        data:[
                            {{ $countpublica }} ,
                            {{ $count1publica }},
                            {{ $count2publica }},
                            {{ $count3publica }},
                            {{ $count4publica }},
                            {{ $count5publica }},
                            {{ $count6publica }},
                            {{ $count7publica }},
                            {{ $count8publica }},
                            {{ $count9publica }},
                            {{ $count10publica }},
                            {{ $count11publica }},
                            {{ $count12publica }},
                            {{ $count13publica }}
                            ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(14, 262, 95, 0.2)',
                            'rgba(154, 262, 85, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(14, 262, 95, 0.2)',
                            'rgba(154, 262, 85, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(14, 262, 95, 1)',
                            'rgba(154, 262, 85, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(14, 262, 95, 1)',
                            'rgba(154, 262, 85, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
{{--fin segundo grafico publicaciones--}}

</div>

<div class="card-header">
  <center><H4>ENTREVISTAS</H4></center>

  </div>
{{--inicio cuarto grafico filtro hojas de vida--}}

<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <h5 class="card-title"><strong> FILTRO DE HOJAS DE VIDA</strong></h5>
           <canvas id="myChart5" width="180" height="200" style="background-color: white;"></canvas>
           <table class="table">
              <thead>
                <tr>
                  <th scope="col">Citado<br>Entrevista</th>
                  <th scope="col">No<br>Aplica</th>
                  <th scope="col">No<br>Interesado</th>
                  <th scope="col">Enviado<br>Examenes</th>
                  <th scope="col">Pruebas<br>Enviadas</th>
              </tr>
              <tr>
                <br>

                  <h6>Total de hojas filtradas: <strong> {{ $filtros->total() }}</strong></h6>

                  @foreach ($countfiltros as $countfiltro)
                  <td>{{ $countfiltro }}</td>
                  @endforeach
                  @foreach ($count1filtros as $count1filtro)
                  <td>  {{ $count1filtro}}  </td>
                  @endforeach
                  @foreach ($count2filtros as $count2filtro)
                  <td>  {{ $count2filtro}}  </td>
                  @endforeach
                  @foreach ($count3filtros as $count3filtro)
                  <td>  {{ $count3filtro}}  </td>
                  @endforeach
                  @foreach ($count4filtros as $count4filtro)
                  <td>{{ $count4filtro }}</td>
                  @endforeach


                </tr>
              <tr>

                <th scope="col">Ya<br>Trabaja</th>
                <th scope="col">Numero<br>Equivocado</th>
                <th scope="col">No Res 2do<br>llamado</th>
                <th scope="col">Ya No<br>Interesado</th>
                <th scope="col">Es Estudiante</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  @foreach ($count5filtros as $count5filtro)
                  <td>{{ $count5filtro }}</td>
                  @endforeach
                  @foreach ($count6filtros as $count6filtro)
                  <td>{{ $count6filtro }}</td>
                  @endforeach
                  @foreach ($count7filtros as $count7filtro)
                  <td>{{ $count7filtro }}</td>
                  @endforeach
                  @foreach ($count8filtros as $count8filtro)
                  <td>{{ $count8filtro }}</td>
                  @endforeach
                  @foreach ($count9filtros as $count9filtro)
                  <td>{{ $count9filtro }}</td>
                  @endforeach
                </tr>
              </tbody>
              <tr>

                <th scope="col">No<br>Asiste Citacion</th>
                <th scope="col">No Asiste<br>Entrevista</th>
                <th scope="col">Enviado<br>Contratación</th>
                <th scope="col">No Contratado</th>
                <th scope="col">Enviado<br>Capacitacion</th>
               </tr>
            </thead>
            <tbody>
              <tr>

                @foreach ($count10filtros as $count10filtro)
                <td>{{ $count10filtro }}</td>
                @endforeach
                @foreach ($count11filtros as $count11filtro)
                <td>{{ $count11filtro }}</td>
                @endforeach
                @foreach ($count12filtros as $count12filtro)
                <td>{{ $count12filtro }}</td>
                @endforeach
                @foreach ($count13filtros as $count13filtro)
                <td>{{ $count13filtro }}</td>
                @endforeach
                @foreach ($count14filtros as $count14filtro)
                <td>{{ $count14filtro }}</td>
                @endforeach

              </tr>
            </tbody>

            <tr>

                <th scope="col">Enviado Entrevista<br>Jefe In.</th>
                <th scope="col">Enviado Entrevista<br>Gerencia</th>



              </tr>
            </thead>
            <tbody>
              <tr>

                @foreach ($count15filtros as $count15filtro)
                <td>{{ $count15filtro }}</td>
                @endforeach
                @foreach ($count16filtros as $count16filtro)
                <td>{{ $count16filtro }}</td>
                @endforeach
              </tr>
            </tbody>



            </table>
        </div>
      </div>
    </div>

    <script>
      var ctx = document.getElementById('myChart5').getContext('2d');
      var myLineChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['Citado Entrevista', 'no aplica', 'No Interesado','Enviado Exam.','Se Remiten Pruebas','Ya Trabaja','Numero Equivocado','No Responde Segundo Llamado', 'Ya No Le Interesa', 'Estudiante','No Asiste Citacion','No Asiste a la Entrevista','Enviado Contratación', 'No contratado','Enviado Capacitación','Ent. jefe Inm.', 'Ent. Gerencia'],
              datasets: [{
                  label: 'filtro hojas de vida',
                  data: [{{ $countfiltro }}, {{ $count1filtro }}, {{ $count2filtro }},{{ $count3filtro }},{{ $count4filtro }},{{ $count5filtro }}, {{ $count6filtro }},{{ $count7filtro }},{{ $count9filtro }},{{ $count10filtro }},{{ $count11filtro }},{{ $count12filtro }}, {{ $count13filtro }}, {{ $count14filtro }}, {{ $count15filtro }}, {{ $count16filtro }}],
                  backgroundColor: [
                      'rgba(216, 23, 23, 0.8)',
                      'rgba(216, 81, 23, 0.8)',
                      'rgba(216, 128, 23, 0.8)',
                      'rgba(216, 163, 23, 0.8)',
                      'rgba(216, 198, 23, 0.8)',
                      'rgba(201, 216, 23, 0.8)',
                      'rgba(155, 216, 23, 0.8)',
                      'rgba(108, 216, 23, 0.8)',
                      'rgba(41, 216, 23, 0.8)',
                      'rgba(23, 216, 70, 0.8)',
                      'rgba(23, 216, 149, 0.8)',
                      'rgba(23, 187, 216, 0.8)',
                      'rgba(23, 108, 216, 0.8)',
                      'rgba(216, 23, 23, 0.8)',
                      'rgba(216, 81, 23, 0.8)',
                      'rgba(216, 128, 23, 0.8)'
                  ],
                  borderColor: [
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)',
                      'rgba(0, 0, 0, 1)'

                  ],
                  borderWidth: 2
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
      </script>


{{--fin cuarto grafico filtro hojas de vida--}}
{{--inicio sexto grafico capacitacion--}}
<div class="col-sm-6">
<div class="row">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>PROCEDENCIA DE LOS ENTREVISTADOS </strong></h5>
         <canvas id="myChart7" width="160" height="80" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Bogotá</th>
                <th scope="col">Alrededores</th>
              </tr>
            <tr>
              <br>

                <h6>Personas Entrevistadas: <strong> {{ $residencias->total() }}</strong></h6>

                @foreach ($residencia1s as $residencia1)
                <td>{{ $residencia1 }}</td>
                @endforeach
                @foreach ($residencia2s as $residencia2)
                <td>  {{ $residencia2}}  </td>
                @endforeach

              </tr>

            </thead>
          </table>
      </div>
    </div>
  </div>



  <script>
    var ctx = document.getElementById('myChart7').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Bogotá', 'Alrededores'],
            datasets: [{
                label: 'Residencia de los Postulados',
                data: [{{ $residencia1 }}, {{ $residencia2 }}],
                backgroundColor: [
                    'rgba(216, 23, 23, 0.8)',

                    'rgba(23, 108, 216, 0.8)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',

                    'rgba(0, 0, 0, 1)'

                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>

{{--fin sexto grafico capacitacion--}}



{{--inicio septimo grafico resultado rrhh--}}




<div class="row">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>Resultados Jefe inmediato , Gerencia </strong></h5>
         <canvas id="myChartRrHh" width="180" height="110" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Aprobado Jefe inmediato</th>
                <th scope="col">No Aprobado Jefe Inmediato</th>
                <th scope="col">Aprobado Gerencia</th>
                <th scope="col">No Aprobado Gerencia</th>
              </tr>
            <tr>
              <br>

                <h6>Personas Entrevistadas: <strong> {{ $residencias->total() }}</strong></h6>


                @foreach ($respuestarrhh1s as $respuestarrhh1)
                <td>{{ $respuestarrhh1 }}</td>
                @endforeach
                @foreach ($respuestarrhh2s as $respuestarrhh2)
                <td>  {{ $respuestarrhh2}}  </td>
                @endforeach
                @foreach ($respuestarrhh3s as $respuestarrhh3)
                <td>{{ $respuestarrhh3 }}</td>
                @endforeach
                @foreach ($respuestarrhh4s as $respuestarrhh4)
                <td>  {{ $respuestarrhh4}}  </td>
                @endforeach


              </tr>

            </thead>
          </table>
      </div>
    </div>
  </div>
</div>
  <script>
    var ctx = document.getElementById('myChartRrHh').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Aprobado jefe inmediato', 'No Aprobado jefe inmediato', 'Aprobado Gerencia', 'No Aprobado Gerencia' ],
            datasets: [{
                label: 'Resultado Entrevistas',
                data: [{{ $respuestarrhh1 }}, {{ $respuestarrhh2 }}, {{ $respuestarrhh3 }}, {{ $respuestarrhh4 }}],
                backgroundColor: [
                    'rgb(4, 156, 212, 0.8)',
                    'rgb(116, 180, 60, 0.8 )',
                    'rgba(23, 108, 216, 0.8)',
                    'rgba(23, 108, 216, 0.8)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)'
                ],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
    <div class="col-sm-12">
        <div class="card">
          <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <h5 class="card-title"><strong>DISTRIBUCION DE CAMPAÑAS EN LAS ENTREVISTAS</strong></h5>
             <canvas id="distribucioncampanas" width="980" height="200" style="background-color: white;"></canvas>
             <table class="table">
                <thead>

                <tr>
                  <br>

                    <h6>DISTRIBUCION DE CAMPAÑAS: <strong> {{ $filtros->total() }}</strong></h6>











                  </tr>
              <tr>

                  <th scope="col">ETB</th>
                  <th scope="col">MOVISTAR</th>
                  <th scope="col">QNT</th>
                  <th scope="col">STAFF</th>
                  <th scope="col">VANTI</th>
                  <th scope="col">VANTI SAC</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    @foreach ($campaetbs as $campaetb)
                    <td>{{ $campaetb }}</td>
                    @endforeach
                    @foreach ($campamovistars as $campamovistar)
                    <td>{{ $campamovistar }}</td>
                    @endforeach
                    @foreach ($campaqnts as $campaqnt)
                    <td>{{ $campaqnt }}</td>
                    @endforeach
                    @foreach ($campastaffs as $campastaff)
                    <td>{{ $campastaff }}</td>
                    @endforeach
                    @foreach ($campavantis as $campavanti)
                    <td>{{ $campavanti }}</td>
                    @endforeach
                    @foreach ( $campavantisacs as $campavantisac)
                    <td>{{$campavantisac}}</td>
                    @endforeach
                  </tr>
              </thead>
              <tbody>
              </table>
          </div>
        </div>
      </div>

      <script>
        var ctx = document.getElementById('distribucioncampanas').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['ETB', 'MOVISTAR', 'QNT','STAFF MENTIUS','VANTI','VANTI SAC'],
                datasets: [{
                    label:'Entrevistados por campaña',
                    data: [{{ $campaetb }}, {{ $campamovistar }}, {{ $campaqnt }},{{ $campastaff }},{{ $campavanti }},{{ $campavantisac }}],
                    backgroundColor: [
                        'rgba(4, 156, 212, 0.8)',
                        'rgba(116, 180, 60, 0.8)',
                        '#e43435',
                        '#1c4c6c',
                        '#ffc447',
                        '#607584'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)'

                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>




 </div>
{{--fin septimo grafico resultado rrhh--}}




{{--inicio quinto grafico capacitacion--}}

<div class="card-header">
  <center><H4>CAPACITACION</H4></center>

  </div>
<div class="row">

   <div class="col-sm-4">
      <div class="card">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <h5 class="card-title"><strong>RESULTADO DE CAPACITACION</strong></h5>
           <canvas id="capacitacionresultado" width="80" height="80" style="background-color: white;"></canvas>
           <table class="table">
              <thead>
                <tr>
                  <th scope="col">Aprobados</th>
                  <th scope="col">No aprobados</th>
                </tr>
              <tr>
                <br>
                <h6>Personas Capacitadas:  <strong>{{ $capacitacioneses->total() }}</strong></h6>
                @foreach ($capacitacionAps as $capacitacionAp)
                <td>{{ $capacitacionAp }}</td>
                @endforeach
                @foreach ($capacitacionNaps as $capacitacionNap)
                <td>  {{ $capacitacionNap}}  </td>
                @endforeach
                </tr>
              </thead>
            </table>
        </div>
      </div>
    </div> </div>

<script>
    var ctx = document.getElementById('capacitacionresultado').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['No aprobado', 'Aprobado'],
            datasets: [{
                label: 'Capacitados',
                data: [{{ $capacitacionNap }}, {{ $capacitacionAp }}],
                backgroundColor: [
                    'rgba(216, 23, 23, 0.8)',

                    'rgba(23, 108, 216, 0.8)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',

                    'rgba(0, 0, 0, 1)'

                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>

    {{--inicio capacitacion--}}
    <div class="row">
   <div class="col-sm-4">
      <div class="card">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <h5 class="card-title"><strong>ETB</strong></h5>
           <canvas id="etbcapa" width="80" height="80" style="background-color: white;"></canvas>
           <table class="table">
              <thead>

                <tr>
                  <th scope="col">ETB Aprobado</th>
                  <th scope="col">ETB No aprobados</th>
                </tr>


                <tr>
                @foreach ($aproetbs as $aproetb)
                <td>{{ $aproetb }}</td>
                @endforeach
                @foreach ($reproetbs as $reproetb)
                <td>  {{ $reproetb}}  </td>
                @endforeach
                </tr>
              </thead>
            </table>
        </div>
      </div>
    </div>

<script>
    var ctx = document.getElementById('etbcapa').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['No aprobado', 'Aprobado'],
            datasets: [{
                label: 'Capacitados',
                data: [{{ $reproetb }}, {{ $aproetb }}],
                backgroundColor: [
                    'rgba(216, 23, 23, 0.8)',

                    'rgba(23, 108, 216, 0.8)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',

                    'rgba(0, 0, 0, 1)'

                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>


{{--fin capacitacion--}}

<div class="col-sm-4">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>MOVISTAR</strong></h5>
         <canvas id="movistarcapa" width="80" height="80" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Movistar Aprobados</th>
                <th scope="col">Movistar No aprobados</th>
              </tr>
            <tr>
                @foreach ($repromovistars as $repromovistar)
                <td>  {{ $repromovistar}}  </td>
                @endforeach
              @foreach ($apromovistars as $apromovistar)
              <td>{{ $apromovistar }}</td>
              @endforeach

              </tr>
            </thead>
          </table>
      </div>
    </div>
  </div>

<script>
  var ctx = document.getElementById('movistarcapa').getContext('2d');
  var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['No aprobado', 'Aprobado'],
          datasets: [{
              label: 'Capacitados',
              data: [{{ $repromovistar }}, {{ $apromovistar }}],
              backgroundColor: [
                  'rgba(216, 23, 23, 0.8)',

                  'rgba(23, 108, 216, 0.8)'
              ],
              borderColor: [
                  'rgba(0, 0, 0, 1)',

                  'rgba(0, 0, 0, 1)'

              ],
              borderWidth: 2
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
  </script>

{{--inicio QNT--}}
<div class="col-sm-4">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>QNT</strong></h5>
         <canvas id="qntcapa" width="80" height="80" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Movistar Aprobados</th>
                <th scope="col">Movistar No aprobados</th>
              </tr>
            <tr>
                @foreach ($repromovistars as $repromovistar)
                <td>  {{ $repromovistar}}  </td>
                @endforeach
              @foreach ($apromovistars as $apromovistar)
              <td>{{ $apromovistar }}</td>
              @endforeach

              </tr>
            </thead>
          </table>
      </div>
    </div>
  </div>

<script>
  var ctx = document.getElementById('qntcapa').getContext('2d');
  var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['No aprobado', 'Aprobado'],
          datasets: [{
              label: 'Capacitados',
              data: [{{ $repromovistar }}, {{ $apromovistar }}],
              backgroundColor: [
                  'rgba(216, 23, 23, 0.8)',

                  'rgba(23, 108, 216, 0.8)'
              ],
              borderColor: [
                  'rgba(0, 0, 0, 1)',

                  'rgba(0, 0, 0, 1)'

              ],
              borderWidth: 2
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
  </script>


{{--fin QNT-}}






</div>

{{--fin quinto grafico capacitacion--}}

{{--inicio quinto grafico contratacion--}}

<div class="card-header">
  <center><H4>CONTRATACION</H4></center>

  </div>
<div class="row">

   <div class="col-sm-4">
      <div class="card">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <h5 class="card-title"><strong>RESULTADO DE CONTRATACION</strong></h5>
           <canvas id="contratacion" width="80" height="80" style="background-color: white;"></canvas>
           <table class="table">
              <thead>
                <tr>
                  <th scope="col">NO contatado</th>
                  <th scope="col">Contatado</th>
                </tr>
              <tr>
                <br>
 <h6>Personas Capacitadas:  <strong>{{ $contratacionEnvs->total() }}</strong></h6>

                  @foreach ($noContratados as $noContratado)
                  <td>{{ $noContratado }}</td>
                  @endforeach
                  @foreach ($ContratacionOks as $ContratacionOk)
                  <td>  {{ $ContratacionOk}}  </td>
                  @endforeach
                </tr>
              </thead>
            </table>
        </div>
      </div>
    </div>
</div>
    <script>
      var ctx = document.getElementById('contratacion').getContext('2d');
      var myLineChart = new Chart(ctx, {
          type: 'pie',
          data: {
              labels: ['No Contratado', 'Contratados'],
              datasets: [{
                  label: 'filtro hojas de vida',
                  data: [{{ $noContratado }}, {{ $ContratacionOk }}],
                  backgroundColor: [
                      'rgba(216, 23, 23, 0.8)',

                      'rgba(23, 108, 216, 0.8)'
                  ],
                  borderColor: [
                      'rgba(0, 0, 0, 1)',

                      'rgba(0, 0, 0, 1)'

                  ],
                  borderWidth: 2
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
      </script>


{{--fin quinto grafico contratacion--}}




{{--inicio sexto grafico campañas--}}

<div class="card-header">
    <center><H4>Personal por Campañas</H4></center>

    </div>
  <div class="row">

     <div class="col-sm-4">
        <div class="card">
          <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <h5 class="card-title"><strong>Campañas</strong></h5>
             <canvas id="campañas" width="260" height="260" style="background-color: white;"></canvas>
             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ETB</th>
                    <th scope="col">Movistar</th>
                    <th scope="col">QNT</th>
                    <th scope="col">Staff Mentius</th>
                    <th scope="col">Vanti</th>
                    <th scope="col">Vanti S A C</th>
                  </tr>
                <tr>
                  <br>
   <h6>Personal activo:  <strong>{{ $campañases->total() }}</strong></h6>

                    @foreach ($etbes as $etb)
                    <td>{{ $etb }}</td>
                    @endforeach
                    @foreach ($movistares as $movistar)
                    <td>  {{ $movistar}}  </td>
                    @endforeach
                    @foreach ($qntes as $qnt)
                    <td>{{ $qnt }}</td>
                    @endforeach
                    @foreach ($staffes as $staff)
                    <td>  {{ $staff}}  </td>
                    @endforeach
                    @foreach ($vanties as $vanti)
                    <td>{{ $vanti }}</td>
                    @endforeach
                    @foreach ($vantisaces as $vantisac)
                    <td>  {{ $vantisac}}  </td>
                    @endforeach
                  </tr>
                </thead>
              </table>
          </div>
        </div>
      </div>
  </div>
      <script>
        var ctx = document.getElementById('campañas').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['etb', 'movistar', 'qnt', 'staff', 'vanti', 'vanti sac'],
                datasets: [{
                    label: 'personal activo por campaña',
                    data: [{{ $etb }}, {{ $movistar }}, {{$qnt}},{{$staff}},{{$vanti}},{{$vantisac}}],
                    backgroundColor: [
                        'rgba(216, 23, 23, 0.8)',
                        'rgba(216, 23, 23, 0.8)',
                        'rgba(216, 23, 23, 0.8)',
                        'rgba(216, 23, 23, 0.8)',
                        'rgba(216, 23, 23, 0.8)',
                        'rgba(23, 108, 216, 0.8)'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)'

                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>


  {{--fin sexto grafico Campañas--}}







{{--
<script type="text/javascript">
    //<![CDATA[
    // Nieve en el blog
    /** @license
    DHTML Snowstorm! JavaScript-based Snow for web pages
    --------------------------------------------------------
    Version 1.42.20111120 (Previous rev: 1.41.20101113)
    Copyright (c) 2007, Scott Schiller. All rights reserved.
    Code provided under the BSD License:
    http://schillmania.com/projects/snowstorm/license.txt
    */
    var snowStorm=function(e,d){function g(a,d){isNaN(d)&&(d=0);return Math.random()*a+d}function o(){e.setTimeout(function(){a.start(true)},20);a.events.remove(i?d:e,"mousemove",o)}function r(){if(!a.excludeMobile||!s)a.freezeOnBlur?a.events.add(i?d:e,"mousemove",o):o();a.events.remove(e,"load",r)}this.flakesMax=128;this.flakesMaxActive=120;this.animationInterval=40;this.excludeMobile=true;this.flakeBottom=null;this.followMouse=true;this.snowColor="#ffffff";this.snowCharacter="&bull;";this.snowStick=true;
    this.targetElement=null;this.useMeltEffect=true;this.usePositionFixed=this.useTwinkleEffect=false;this.freezeOnBlur=true;this.flakeRightOffset=this.flakeLeftOffset=0;this.flakeHeight=this.flakeWidth=8;this.vMaxX=5;this.vMaxY=4;this.zIndex=0;var a=this,y=this,i=navigator.userAgent.match(/msie/i),z=navigator.userAgent.match(/msie 6/i),A=navigator.appVersion.match(/windows 98/i),s=navigator.userAgent.match(/mobile/i),B=i&&d.compatMode==="BackCompat",t=s||B||z,h=null,k=null,j=null,m=null,u=null,v=null,



    p=1,n=false,q;a:{try{d.createElement("div").style.opacity="0.5"}catch(C){q=false;break a}q=true}var w=false,x=d.createDocumentFragment();this.timers=[];this.flakes=[];this.active=this.disabled=false;this.meltFrameCount=20;this.meltFrames=[];this.events=function(){function a(b){var b=f.call(b),c=b.length;l?(b[1]="on"+b[1],c>3&&b.pop()):c===3&&b.push(false);return b}function d(a,c){var e=a.shift(),f=[b[c]];if(l)e[f](a[0],a[1]);else e[f].apply(e,a)}var l=!e.addEventListener&&e.attachEvent,f=Array.prototype.slice,
    b={add:l?"attachEvent":"addEventListener",remove:l?"detachEvent":"removeEventListener"};return{add:function(){d(a(arguments),"add")},remove:function(){d(a(arguments),"remove")}}}();this.randomizeWind=function(){var c;c=g(a.vMaxX,0.2);u=parseInt(g(2),10)===1?c*-1:c;v=g(a.vMaxY,0.2);if(this.flakes)for(c=0;c<this.flakes.length;c++)this.flakes[c].active&&this.flakes[c].setVelocities()};this.scrollHandler=function(){var c;m=a.flakeBottom?0:parseInt(e.scrollY||d.documentElement.scrollTop||d.body.scrollTop,
    10);isNaN(m)&&(m=0);if(!n&&!a.flakeBottom&&a.flakes)for(c=a.flakes.length;c--;)a.flakes[c].active===0&&a.flakes[c].stick()};this.resizeHandler=function(){e.innerWidth||e.innerHeight?(h=e.innerWidth-(!i?16:16)-a.flakeRightOffset,j=a.flakeBottom?a.flakeBottom:e.innerHeight):(h=(d.documentElement.clientWidth||d.body.clientWidth||d.body.scrollWidth)-(!i?8:0)-a.flakeRightOffset,j=a.flakeBottom?a.flakeBottom:d.documentElement.clientHeight||d.body.clientHeight||d.body.scrollHeight);k=parseInt(h/2,10)};this.resizeHandlerAlt=
    function(){h=a.targetElement.offsetLeft+a.targetElement.offsetWidth-a.flakeRightOffset;j=a.flakeBottom?a.flakeBottom:a.targetElement.offsetTop+a.targetElement.offsetHeight;k=parseInt(h/2,10)};this.freeze=function(){var c;if(a.disabled)return false;else a.disabled=1;for(c=a.timers.length;c--;)clearInterval(a.timers[c])};this.resume=function(){if(a.disabled)a.disabled=0;else return false;a.timerInit()};this.toggleSnow=function(){a.flakes.length?(a.active=!a.active,a.active?(a.show(),a.resume()):(a.stop(),



    a.freeze())):a.start()};this.stop=function(){var c;this.freeze();for(c=this.flakes.length;c--;)this.flakes[c].o.style.display="none";a.events.remove(e,"scroll",a.scrollHandler);a.events.remove(e,"resize",a.resizeHandler);a.freezeOnBlur&&(i?(a.events.remove(d,"focusout",a.freeze),a.events.remove(d,"focusin",a.resume)):(a.events.remove(e,"blur",a.freeze),a.events.remove(e,"focus",a.resume)))};this.show=function(){var a;for(a=this.flakes.length;a--;)this.flakes[a].o.style.display="block"};this.SnowFlake=
    function(a,e,l,f){var b=this;this.type=e;this.x=l||parseInt(g(h-20),10);this.y=!isNaN(f)?f:-g(j)-12;this.vY=this.vX=null;this.vAmpTypes=[1,1.2,1.4,1.6,1.8];this.vAmp=this.vAmpTypes[this.type];this.melting=false;this.meltFrameCount=a.meltFrameCount;this.meltFrames=a.meltFrames;this.twinkleFrame=this.meltFrame=0;this.active=1;this.fontSize=10+this.type/5*10;this.o=d.createElement("div");this.o.innerHTML=a.snowCharacter;this.o.style.color=a.snowColor;this.o.style.position=n?"fixed":"absolute";this.o.style.width=
    a.flakeWidth+"px";this.o.style.height=a.flakeHeight+"px";this.o.style.fontFamily="arial,verdana";this.o.style.overflow="hidden";this.o.style.fontWeight="normal";this.o.style.zIndex=a.zIndex;x.appendChild(this.o);this.refresh=function(){if(isNaN(b.x)||isNaN(b.y))return false;b.o.style.left=b.x+"px";b.o.style.top=b.y+"px"};this.stick=function(){t||a.targetElement!==d.documentElement&&a.targetElement!==d.body?b.o.style.top=j+m-a.flakeHeight+"px":a.flakeBottom?b.o.style.top=a.flakeBottom+"px":(b.o.style.display=
    "none",b.o.style.top="auto",b.o.style.bottom="0px",b.o.style.position="fixed",b.o.style.display="block")};this.vCheck=function(){if(b.vX>=0&&b.vX<0.2)b.vX=0.2;else if(b.vX<0&&b.vX>-0.2)b.vX=-0.2;if(b.vY>=0&&b.vY<0.2)b.vY=0.2};this.move=function(){var d=b.vX*p;b.x+=d;b.y+=b.vY*b.vAmp;if(b.x>=h||h-b.x<a.flakeWidth)b.x=0;else if(d<0&&b.x-a.flakeLeftOffset<-a.flakeWidth)b.x=h-a.flakeWidth-1;b.refresh();if(j+m-b.y<a.flakeHeight)b.active=0,a.snowStick?b.stick():b.recycle();else{if(a.useMeltEffect&&b.active&&
    b.type<3&&!b.melting&&Math.random()>0.998)b.melting=true,b.melt();if(a.useTwinkleEffect)if(b.twinkleFrame)b.twinkleFrame--,b.o.style.visibility=b.twinkleFrame&&b.twinkleFrame%2===0?"hidden":"visible";else if(Math.random()>0.9)b.twinkleFrame=parseInt(Math.random()*20,10)}};this.animate=function(){b.move()};this.setVelocities=function(){b.vX=u+g(a.vMaxX*0.12,0.1);b.vY=v+g(a.vMaxY*0.12,0.1)};this.setOpacity=function(a,b){if(!q)return false;a.style.opacity=b};this.melt=function(){!a.useMeltEffect||!b.melting?
    b.recycle():b.meltFrame<b.meltFrameCount?(b.meltFrame++,b.setOpacity(b.o,b.meltFrames[b.meltFrame]),b.o.style.fontSize=b.fontSize-b.fontSize*(b.meltFrame/b.meltFrameCount)+"px",b.o.style.lineHeight=a.flakeHeight+2+a.flakeHeight*0.75*(b.meltFrame/b.meltFrameCount)+"px"):b.recycle()};this.recycle=function(){b.o.style.display="none";b.o.style.position=n?"fixed":"absolute";b.o.style.bottom="auto";b.setVelocities();b.vCheck();b.meltFrame=0;b.melting=false;b.setOpacity(b.o,1);b.o.style.padding="0px";b.o.style.margin=
    "0px";b.o.style.fontSize=b.fontSize+"px";b.o.style.lineHeight=a.flakeHeight+2+"px";b.o.style.textAlign="center";b.o.style.verticalAlign="baseline";b.x=parseInt(g(h-a.flakeWidth-20),10);b.y=parseInt(g(j)*-1,10)-a.flakeHeight;b.refresh();b.o.style.display="block";b.active=1};this.recycle();this.refresh()};this.snow=function(){for(var c=0,d=0,e=0,f=null,f=a.flakes.length;f--;)a.flakes[f].active===1?(a.flakes[f].move(),c++):a.flakes[f].active===0?d++:e++,a.flakes[f].melting&&a.flakes[f].melt();if(c<a.flakesMaxActive&&
    (f=a.flakes[parseInt(g(a.flakes.length),10)],f.active===0))f.melting=true};this.mouseMove=function(c){if(!a.followMouse)return true;c=parseInt(c.clientX,10);c<k?p=-2+c/k*2:(c-=k,p=c/k*2)};this.createSnow=function(c,d){var e;for(e=0;e<c;e++)if(a.flakes[a.flakes.length]=new a.SnowFlake(a,parseInt(g(6),10)),d||e>a.flakesMaxActive)a.flakes[a.flakes.length-1].active=-1;y.targetElement.appendChild(x)};this.timerInit=function(){a.timers=!A?[setInterval(a.snow,a.animationInterval)]:[setInterval(a.snow,a.animationInterval*
    3),setInterval(a.snow,a.animationInterval)]};this.init=function(){var c;for(c=0;c<a.meltFrameCount;c++)a.meltFrames.push(1-c/a.meltFrameCount);a.randomizeWind();a.createSnow(a.flakesMax);a.events.add(e,"resize",a.resizeHandler);a.events.add(e,"scroll",a.scrollHandler);a.freezeOnBlur&&(i?(a.events.add(d,"focusout",a.freeze),a.events.add(d,"focusin",a.resume)):(a.events.add(e,"blur",a.freeze),a.events.add(e,"focus",a.resume)));a.resizeHandler();a.scrollHandler();a.followMouse&&a.events.add(i?d:e,"mousemove",
    a.mouseMove);a.animationInterval=Math.max(20,a.animationInterval);a.timerInit()};this.start=function(c){if(w){if(c)return true}else w=true;if(typeof a.targetElement==="string"&&(c=a.targetElement,a.targetElement=d.getElementById(c),!a.targetElement))throw Error('Snowstorm: Unable to get targetElement "'+c+'"');if(!a.targetElement)a.targetElement=!i?d.documentElement?d.documentElement:d.body:d.body;if(a.targetElement!==d.documentElement&&a.targetElement!==d.body)a.resizeHandler=a.resizeHandlerAlt;



    a.resizeHandler();a.usePositionFixed=a.usePositionFixed&&!t;n=a.usePositionFixed;if(h&&j&&!a.disabled)a.init(),a.active=true};a.events.add(e,"load",r,false);return this}(window,document);
    //]]>
    </script>--}}








        <script src="{{asset('js/app.js')}}"></script>
    </body>
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    @section('js')

@stop


@endsection







