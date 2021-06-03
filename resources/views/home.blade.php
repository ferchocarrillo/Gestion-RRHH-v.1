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
                  <th scope="col" style="font-size: 8px;">Citado<br>Entrevista</th>
                  <th scope="col" style="font-size: 8px;">No<br>Aplica</th>
                  <th scope="col" style="font-size: 8px;">No<br>Interesado</th>
                  <th scope="col" style="font-size: 8px;">Enviado<br>Examenes</th>
                  <th scope="col" style="font-size: 8px;">Pruebas<br>Enviadas</th>
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
                <th scope="col" style="font-size: 8px;">Ya<br>Trabaja</th>
                <th scope="col" style="font-size: 8px;">Numero<br>Equivocado</th>
                <th scope="col" style="font-size: 8px;">No Res 2do<br>llamado</th>
                <th scope="col" style="font-size: 8px;">Ya No<br>Interesado</th>
                <th scope="col" style="font-size: 8px;">Es Estudiante</th>
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
                <th scope="col" style="font-size: 8px;">No<br>Asiste Citacion</th>
                <th scope="col" style="font-size: 8px;">No Asiste<br>Entrevista</th>
                <th scope="col" style="font-size: 8px;">Enviado<br>Contratación</th>
                <th scope="col" style="font-size: 8px;">No Contratado</th>
                <th scope="col" style="font-size: 8px;">Enviado<br>Capacitacion</th>
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
                <th scope="col" style="font-size: 8px;">Enviado Entrevista<br>Jefe In.</th>
                <th scope="col" style="font-size: 8px;">Enviado Entrevista<br>Gerencia</th>
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
                      '#2E2EFE',
                      '#3ADF00',
                      '#FE2E9A',
                      '#FACC2E',
                      '#086A87',
                      '#0B6121',
                      '#243B0B',
                      '#64FE2E',
                      '#FE2E64',
                      '#6E6E6E',
                      '#81BEF7',
                      '#81BEF7',
                      '#FA8258',
                      '#8181F7',
                      '#222A0A',
                      '#FE2E2E'
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
                <th scope="col" style="font-size: 8px;">Bogotá</th>
                <th scope="col" style="font-size: 8px;">Alrededores</th>
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
         <canvas id="myChartRrHh" width="180" height="100" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 8px;">Aprobado Jefe inmediato</th>
                <th scope="col" style="font-size: 8px;">No Aprobado Jefe Inmediato</th>
                <th scope="col" style="font-size: 8px;">Aprobado Gerencia</th>
                <th scope="col" style="font-size: 8px;">No Aprobado Gerencia</th>
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
            type: 'line',
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

    {{--inicio capacitacion--}}
    <div class="row">
   <div class="col-sm-2">
      <div class="card">
        <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
          <h5 class="card-title" style="font-size: 12px;"><strong>ETB</strong></h5>
           <canvas id="etbcapa" width="40" height="40" style="background-color: white;"></canvas>
           <table class="table">
              <thead>

                <tr>
                  <th scope="col" style="font-size: 8px;">Aprobado</th>
                  <th scope="col" style="font-size: 8px;">No Aprobados</th>
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
        type: 'pie',
        data: {
            labels: ['No aprobado', 'Aprobado'],
            datasets: [{
                label: 'Capacitados',
                data: [{{ $reproetb }}, {{ $aproetb }}],
                backgroundColor: [
                    '#FF0000',

                    '#2EFEF7'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',

                    'rgba(0, 0, 0, 1)'

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


{{--fin capacitacion--}}

<div class="col-sm-2">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title" style="font-size: 12px;"><strong>MOVISTAR</strong></h5>
         <canvas id="movistarcapa" width="40" height="40" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 8px;">Aprobados</th>
                <th scope="col" style="font-size: 8px;">No Aprobados</th>
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
      type: 'pie',
      data: {
          labels: ['No aprobado', 'Aprobado'],
          datasets: [{
              label: 'Capacitados',
              data: [{{ $repromovistar }}, {{ $apromovistar }}],
              backgroundColor: [
                  '#FF0000',
                  '#3ADF00'
              ],
              borderColor: [
                  'rgba(0, 0, 0, 1)',

                  'rgba(0, 0, 0, 1)'

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

{{--inicio QNT--}}
<div class="col-sm-2">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title" style="font-size: 12px;"><strong>QNT</strong></h5>
         <canvas id="qntcapa" width="40" height="40" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 8px;">Aprobados</th>
                <th scope="col" style="font-size: 8px;">No Aprobados</th>
              </tr>
            <tr>
                @foreach ($aproqnts as $aproqnt)
                <td>  {{ $aproqnt}}  </td>
                @endforeach
              @foreach ($reproqnts as $reproqnt)
              <td>{{ $reproqnt }}</td>
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
      type: 'pie',
      data: {
          labels: ['No aprobado', 'Aprobado'],
          datasets: [{
              label: 'Capacitados',
              data: [{{ $reproqnt }}, {{ $aproqnt }}],
              backgroundColor: [
                '#FF0000',

                 '#0B0B3B'
              ],
              borderColor: [
                  'rgba(0, 0, 0, 1)',

                  'rgba(0, 0, 0, 1)'

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


{{--fin QNT-}}

{{--inicio VAnti--}}
<div class="col-sm-2">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title" style="font-size: 12px;"><strong>VANTI</strong></h5>
         <canvas id="vanticapa" width="40" height="40" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 8px;">Aprobados</th>
                <th scope="col" style="font-size: 8px;">No Aprobados</th>
              </tr>
            <tr>
                @foreach ($aprovantis as $aprovanti)
                <td>  {{ $aprovanti}}  </td>
                @endforeach
              @foreach ($reprovantis as $reprovanti)
              <td>{{ $reprovanti }}</td>
              @endforeach

              </tr>
            </thead>
          </table>
      </div>
    </div>
  </div>

<script>
  var ctx = document.getElementById('vanticapa').getContext('2d');
  var myLineChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['No aprobado', 'Aprobado'],
          datasets: [{
              label: 'Capacitados',
              data: [{{ $reprovanti }}, {{ $aprovanti }}],
              backgroundColor: [
                '#FF0000',

                  '#F7FE2E'
              ],
              borderColor: [
                  'rgba(0, 0, 0, 1)',

                  'rgba(0, 0, 0, 1)'

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


{{--fin VANTI-}}



{{--inicio SAC--}}
<div class="col-sm-2">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title" style="font-size: 12px;"><strong>VANTI SAC</strong></h5>
         <canvas id="saccapa" width="40" height="40" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 8px;">Aprobados</th>
                <th scope="col" style="font-size: 8px;">No Aprobados</th>
              </tr>
            <tr>
                @foreach ($aprosacs as $aprosac)
                <td>  {{ $aprosac}}  </td>
                @endforeach
              @foreach ($reprosacs as $reprosac)
              <td>{{ $reprosac }}</td>
              @endforeach

              </tr>
            </thead>
          </table>
      </div>
    </div>
  </div>

<script>
  var ctx = document.getElementById('saccapa').getContext('2d');
  var myLineChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['No aprobado', 'Aprobado'],
          datasets: [{
              label: 'Capacitados',
              data: [{{ $reprosac }}, {{ $aprosac }}],
              backgroundColor: [
                '#FF0000',

                  '#F7FE2E'
              ],
              borderColor: [
                  'rgba(0, 0, 0, 1)',

                  'rgba(0, 0, 0, 1)'

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


{{--fin SAC-}}
{{--inicio STAFF--}}
<div class="col-sm-2">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title" style="font-size: 12px;"><strong>STAFF</strong></h5>
         <canvas id="staffcapa" width="40" height="40" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 8px;">Aprobados</th>
                <th scope="col" style="font-size: 8px;">No Aprobados</th>
              </tr>
            <tr>
                @foreach ($aprostaffs as $aprostaff)
                <td>  {{ $aprostaff}}  </td>
                @endforeach
              @foreach ($reprostaffs as $reprostaff)
              <td>{{ $reprostaff }}</td>
              @endforeach

              </tr>
            </thead>
          </table>
      </div>
    </div>
  </div>

<script>
  var ctx = document.getElementById('staffcapa').getContext('2d');
  var myLineChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['No aprobado', 'Aprobado'],
          datasets: [{
              label: 'Capacitados',
              data: [{{ $reprostaff }}, {{ $aprostaff }}],
              backgroundColor: [
                  '#FF0000',

                  '#088A85'
              ],
              borderColor: [
                  'rgba(0, 0, 0, 1)',

                  'rgba(0, 0, 0, 1)'

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


{{--fin STAFF-}}
</div>


<div class="card-header">
    <center><H4>CONTRATACION</H4></center>

    </div>
<div class="row">

{{-- INICIO CAPACITACION GENERAL--}}
<div class="col-sm-6">
   <div class="card">
     <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
       <h5 class="card-title"><strong>RESULTADO DE CAPACITACION GENERAL</strong></h5>
        <canvas id="capacitacionresultado" width="80" height="80" style="background-color: white;"></canvas>
        <table class="table">
           <thead>
             <tr>
               <th scope="col">Aprobados</th>
               <th scope="col">No aprobados</th>
             </tr>
           <tr>
             <br>


            @foreach ( $numeroCapacitacions as $numeroCapacitacions )
            <h6>Personas Capacitadas:{{ $numeroCapacitacions  }}  <strong>
            @endforeach


            </strong></h6>
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
</div>

<script>
 var ctx = document.getElementById('capacitacionresultado').getContext('2d');
 var myLineChart = new Chart(ctx, {
     type: 'bar',
     data: {
         labels: ['Aprobado', 'No aprobado'],
         datasets: [{
             label: 'Capacitados',
             data: [{{ $capacitacionAp }}, {{  $capacitacionNap }}],
             backgroundColor: [
                 '#0080FF',

                 '#DF0101'
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

{{-- FIN CAPACITACION GENERAL--}}
{{--inicio grafico contratacion--}}
<div class="col-sm-6">
   <div class="card">
     <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
       <h5 class="card-title"><strong>RESULTADO DE CONTRATACION GENERAL</strong></h5>
        <canvas id="contratacion" width="80" height="80" style="background-color: white;"></canvas>
        <table class="table">
           <thead>
             <tr>

               <th scope="col">Contatado</th>
               <th scope="col">NO contatado</th>
             </tr>
           <tr>
             <br>
<h6>Personas Capacitadas:  <strong>{{ $contratacionEnvs->total() }}</strong></h6>


               @foreach ($ContratacionOks as $ContratacionOk)
               <td>  {{ $ContratacionOk}}  </td>
               @endforeach
               @foreach ($noContratados as $noContratado)
               <td>{{ $noContratado }}</td>
               @endforeach
             </tr>
           </thead>
         </table>
     </div>
   </div>
 </div>

 <script>
   var ctx = document.getElementById('contratacion').getContext('2d');
   var myLineChart = new Chart(ctx, {
       type: 'pie',
       data: {
           labels: ['Contratados', 'No Contratado'],
           datasets: [{
               label: 'filtro hojas de vida',
               data: [{{ $ContratacionOk }}, {{ $noContratado }}],
               backgroundColor: [
                   '#5858FA',

                   '#D7DF01'
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

</div> </div>

 {{-- fin resultado capacitacion--}}



{{--inicio sexto grafico campañas--}}

<div class="card-header">
    <center><H4>Personal Activo</H4></center>

    </div>
  <div class="row">

     <div class="col-sm-6">
        <div class="card">
          <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <h5 class="card-title"><strong>Campañas</strong></h5>
             <canvas id="campañas" width="100" height="40" style="background-color: white;"></canvas>
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

      <script>
        var ctx = document.getElementById('campañas').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['etb', 'movistar', 'qnt', 'staff', 'vanti', 'vanti sac'],
                datasets: [{
                    label: 'personal activo por campaña',
                    data: [{{ $etb }}, {{ $movistar }}, {{$qnt}},{{$staff}},{{$vanti}},{{$vantisac}}],
                    backgroundColor: [
                        '#00FFFF',
                        '#01DF01',
                        '#1C1C1C',
                        '#0489B1',
                        '#F7FE2E',
                        '#FFBF00'
                    ],
                    borderColor: [
                        '#0101DF'


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

  {{--inicio grafico edades--}}


  <div class="col-sm-6">
      <div class="card-graficos"  style="background-image: linear-gradient(#EAF2F8, #AAB7B8)";>
     <h5 class="card-title"><strong>Rango de Edades</strong></h5>

  <canvas id="edades" ></canvas>
  <table class="table">
  <thead>
  <tr>
    <th scope="col">0 - 20 </th>
    <th scope="col">20 - 25 </th>
    <th scope="col">25 - 30 </th>
    <th scope="col">30 - 35 </th>
    <th scope="col">35 - 40 </th>
    <th scope="col">40 - 45 </th>
    <th scope="col">45 - 50 </th>
    <th scope="col">+50</th>

  </tr>
  </thead>
  <tbody>
  <tr>
  <br>

  @foreach ($edad1s as $edad1)
  <td>{{ $edad1 }}</td>
  @endforeach
  @foreach ($edad2s as $edad2)
  <td>  {{ $edad2 }}</td>
  @endforeach
  @foreach ($edad3s as $edad3)
  <td>  {{ $edad3 }}</td>
  @endforeach
  @foreach ($edad4s as $edad4)
  <td>  {{ $edad4 }}</td>
  @endforeach
  @foreach ($edad5s as $edad5)
  <td>  {{ $edad5 }}</td>
  @endforeach
  @foreach ($edad6s as $edad6)
  <td>  {{ $edad6 }}</td>
  @endforeach
  @foreach ($edad7s as $edad7)
  <td>  {{ $edad7 }}</td>
  @endforeach
  @foreach ($edad8s as $edad8)
  <td>  {{ $edad8 }}</td>
  @endforeach
  @foreach ($edad9s as $edad9)
  <td>  {{ $edad9 }}</td>
  @endforeach



  </tr>

  </tbody>
  </table>


  <script>
  var ctx = document.getElementById('edades').getContext('2d');
  var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
  labels: ['0-20', '20-25', '25-30', '30-35', '35-40', '40-45','45-50','50-55','+55'],
  datasets: [{
  label:"RANGO DE EDAD PERSONAL ACTIVO",
  data: [{{ $edad1 }}, {{ $edad2 }} , {{ $edad3 }} , {{ $edad4 }} , {{ $edad5 }} , {{ $edad6 }}, {{ $edad7 }} , {{ $edad8 }} , {{ $edad9 }}],
  backgroundColor: [
    'rgba(80, 252, 0, 0.5)',
    'rgba(80, 252, 0, 0.5)',
    'rgba(80, 252, 0, 0.5)',
    'rgba(80, 252, 0, 0.5)',
    'rgba(80, 252, 0, 0.5)',
    'rgba(80, 252, 0, 0.5)',
    'rgba(80, 252, 0, 0.5)',
    'rgba(80, 252, 0, 0.5)',
    'rgba(252, 31, 0, 0.5)'
  ],
  borderColor: [
      '#000000',
      '#000000',
      '#000000',
      '#000000',
      '#000000',
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
  </div>
  </div>
</div>
  {{--fin grafico edades--}}
{{--inicio localidades activos--}}

<div class="row">

    <div class="col-sm-12">
       <div class="card">
         <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
           <h5 class="card-title"><strong>Ciudad de Procedencia Activos</strong></h5>
            <canvas id="procedencia" width="100" height="40" style="background-color: white;"></canvas>
            <table class="table">
               <thead>
                 <tr>
                   <th scope="col">Bogotá</th>
                   <th scope="col">Aledaños</th>

                 </tr>
               <tr>
                 <br>

                   @foreach ($localidad1s as $localidad1)
                   <td>{{ $localidad1 }}</td>
                   @endforeach
                   @foreach ($localidad2s as $localidad2)
                   <td>  {{ $localidad2}}  </td>
                   @endforeach

                 </tr>
               </thead>
             </table>
         </div>
       </div>
     </div>

     <script>
       var ctx = document.getElementById('procedencia').getContext('2d');
       var myLineChart = new Chart(ctx, {
           type: 'doughnut',
           data: {
               labels: ['Bogotá', 'Aledaños'],
               datasets: [{
                   label: 'personal activo por campaña',
                   data: [{{ $localidad1 }}, {{ $localidad2 }}],
                   backgroundColor: [
                       '#00FFFF',
                        '#FFBF00'
                   ],
                   borderColor: [
                       '#0101DF'


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

 {{--inicio grafico localiades2--}}
<div class="row">

 <div class="col-sm-6">
     <div class="card-graficos"  style="background-image: linear-gradient(#EAF2F8, #AAB7B8)";>
    <h5 class="card-title"><strong>LOCALIDADES</strong></h5>

 <canvas id="locaactivos" width="100" height="40" style="background-color: white;" ></canvas>
 <table class="table">
 <thead>
 <tr>
   <th scope="col">Usaquen</th>
   <th scope="col">Chapinero</th>
   <th scope="col">Santa Fe</th>
   <th scope="col">San Cristobal</th>
   <th scope="col">Usme</th>
   <th scope="col">Tunjuelito</th>
   <th scope="col">Bosa</th>
   <th scope="col">Kennedy</th>

</tr>



 <tr>
 <br>
 @foreach ($Usas as $Usa)
 <td>{{ $Usa }}</td>
 @endforeach
 @foreach ($Chapis as $Chapi)
 <td>{{ $Chapi }}</td>
 @endforeach
 @foreach ($SantaFes as $SantaFe)
 <td>{{ $SantaFe }}</td>
 @endforeach
 @foreach ($SanCris as $SanCri)
 <td>{{ $SanCri }}</td>
 @endforeach
 @foreach ($Usmes as $Usme)
 <td>{{ $Usme }}</td>
 @endforeach
 @foreach ($Tunjuelitos as $Tunjuelito)
 <td>{{ $Tunjuelito }}</td>
 @endforeach
 @foreach ($Bosas as $Bosa)
 <td>  {{ $Bosa }}</td>
 @endforeach
 @foreach ($Kennedys as $Kennedy)
 <td>  {{ $Kennedy }}</td>
 @endforeach
</tr>
<tr>

    <th scope="col">Fontibón</th>
    <th scope="col">Engativá</th>
    <th scope="col">Suba</th>
    <th scope="col">Barrios Unidos</th>
    <th scope="col">Teusaquillo</th>
    <th scope="col">Los Mártires</th>
    <th scope="col">Antonio Nariño</th>
    <th scope="col">Puente Aranda</th>
 </tr>
<tr>


 @foreach ($Fontibóns as $Fontibón)
 <td>  {{ $Fontibón }}</td>
 @endforeach
 @foreach ($Engativás as $Engativá)
 <td>  {{ $Engativá }}</td>
 @endforeach
 @foreach ($Subas as $Suba)
 <td>  {{ $Suba }}</td>
 @endforeach
 @foreach ($BarriosUnidoss as $BarriosUnidos)
 <td>  {{ $BarriosUnidos }}</td>
 @endforeach
 @foreach ($Teusaquillos as $Teusaquillo)
 <td>  {{ $Teusaquillo }}</td>
 @endforeach
 @foreach ($LosMártiress as $LosMártires)
 <td>  {{ $LosMártires }}</td>
 @endforeach
 @foreach ($AntonioNariños as $AntonioNariño)
 <td>  {{ $AntonioNariño }}</td>
 @endforeach
 @foreach ($PuenteArandas as $PuenteAranda)
 <td>  {{ $PuenteAranda }}</td>
 @endforeach
</tr>
<tr>


    <th scope="col">La Candelaria</th>
    <th scope="col">Rafael Uribe Uribe</th>
    <th scope="col">Ciudad Bolívar</th>
    <th scope="col">Sumapaz</th>
  </tr>
<tr>
 @foreach ($LaCandelarias as $LaCandelaria)
 <td>  {{ $LaCandelaria }}</td>
 @endforeach
 @foreach ($RafaelUribeUribes as $RafaelUribeUribe)
 <td>  {{ $RafaelUribeUribe }}</td>
 @endforeach
 @foreach ($CiudadBolívars as $CiudadBolívar)
 <td>  {{ $CiudadBolívar }}</td>
 @endforeach
 @foreach ($Sumapazs as $Sumapaz)
 <td>  {{ $Sumapaz }}</td>
 @endforeach
</tr>
 </tbody>
 </table>
</thead>
<tbody>
 <script>
 var ctx = document.getElementById('locaactivos').getContext('2d');
 var myLineChart = new Chart(ctx, {
 type: 'line',
 data: {
 labels: ['Usaquen','Chapinero','Santa Fe','San Cristobal','Usme','Tunjuelito', 'Bosa', 'Kennedy', 'Fontibon', 'Engativa', 'Suba','Barrio Unidos','Teusaquillo','Los Martires', 'Antonio Nariño','Puente Aranda', 'La Candelaria','Rafael Uribe', 'Ciudad Bolivar','Sumapaz'],
 datasets: [{
 label:"Localidades Bogota",
 data: [{{$Usa}},{{$Chapi}},{{$SantaFe}}, {{$SanCri}}, {{$Usme}}, {{ $Tunjuelito }}, {{ $Bosa }} , {{ $Kennedy }} , {{ $Fontibón }} , {{ $Engativá }} , {{ $Suba }}, {{ $BarriosUnidos }} , {{ $Teusaquillo }} , {{ $LosMártires }}, {{ $AntonioNariño }} , {{ $PuenteAranda }} , {{ $LaCandelaria }}, {{ $RafaelUribeUribe }} , {{ $CiudadBolívar }} , {{ $Sumapaz }}],
 backgroundColor: [
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(252, 31, 0, 0.5)'
 ],
 borderColor: [
     '#000000',
     '#000000',
     '#000000',
     '#000000',
     '#000000',
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
 </div>
 </div>

 {{--fin grafico localiades2--}}

{{--fin localidades activos--}}


{{--inicio grafico localiades3--}}


 <div class="col-sm-6">
     <div class="card-graficos"  style="background-image: linear-gradient(#EAF2F8, #AAB7B8)";>
    <h5 class="card-title"><strong>ALEDAÑOS</strong></h5>

 <canvas id="aledaactivos" width="100" height="52" style="background-color: white;"></canvas>
 <table class="table">
 <thead>
 <tr>
   <th scope="col">Soacha</th>
   <th scope="col">Facatativá</th>
   <th scope="col">Chía</th>
   <th scope="col">Zipaquirá</th>
   <th scope="col">Mosquera</th>
   <th scope="col">Madrid</th>
   <th scope="col">Funza</th>
   <th scope="col">Cajicá</th>

</tr>



 <tr>
 <br>
 @foreach ($Soachas as $Soacha)
 <td>{{ $Soacha }}</td>
 @endforeach
 @foreach ($Facatativás as $Facatativá)
 <td>{{ $Facatativá }}</td>
 @endforeach
 @foreach ($Chías as $Chía)
 <td>{{ $Chía }}</td>
 @endforeach
 @foreach ($Zipaquirás as $Zipaquirá)
 <td>{{ $Zipaquirá }}</td>
 @endforeach
 @foreach ($Mosqueras as $Mosquera)
 <td>{{ $Mosquera }}</td>
 @endforeach
 @foreach ($Madrids as $Madrid)
 <td>{{ $Madrid }}</td>
 @endforeach
 @foreach ($Funzas as $Funza)
 <td>  {{ $Funza }}</td>
 @endforeach
 @foreach ($Cajicás as $Cajicá)
 <td>  {{ $Cajicá }}</td>
 @endforeach
</tr>
<tr>

    <th scope="col">Sibaté</th>
    <th scope="col">Tocancipá</th>
    <th scope="col">Tabio</th>
    <th scope="col">La Calera</th>
    <th scope="col">Sopó</th>
    <th scope="col">Cota</th>
    <th scope="col">Tenjo</th>
    <th scope="col">El Rosal</th>
 </tr>
<tr>


 @foreach ($Sibatés as $Sibaté)
 <td>  {{ $Sibaté }}</td>
 @endforeach
 @foreach ($Tocancipás as $Tocancipá)
 <td>  {{ $Tocancipá }}</td>
 @endforeach
 @foreach ($Tabios as $Tabio)
 <td>  {{ $Tabio }}</td>
 @endforeach
 @foreach ($LaCaleras as $LaCalera)
 <td>  {{ $LaCalera }}</td>
 @endforeach
 @foreach ($Sopós as $Sopó)
 <td>  {{ $Sopó }}</td>
 @endforeach
 @foreach ($Cotas as $Cota)
 <td>  {{ $Cota }}</td>
 @endforeach
 @foreach ($Tenjos as $Tenjo)
 <td>  {{ $Tenjo }}</td>
 @endforeach
 @foreach ($ElRosals as $ElRosal)
 <td>  {{ $ElRosal }}</td>
 @endforeach
</tr>
<tr>


    <th scope="col">Gachancipá</th>
    <th scope="col">Bojacá</th>
  </tr>
<tr>
 @foreach ($Gachancipás as $Gachancipá)
 <td>  {{ $Gachancipá }}</td>
 @endforeach
 @foreach ($Bojacás as $Bojacá)
 <td>  {{ $Bojacá }}</td>
 @endforeach


</tr>
 </tbody>
 </table>
</thead>
<tbody>
 <script>
 var ctx = document.getElementById('aledaactivos').getContext('2d');
 var myLineChart = new Chart(ctx, {
 type: 'line',
 data: {
 labels: ['Soacha','Facatativá','Chía','Zipaquirá','Mosquera','Madrid', 'Funza', 'Cajicá', 'Sibaté', 'Tocancipá', 'Tabio','La Calera','Sopó','Cota', 'Tenjo','El Rosal', 'Gachancipá','Bojacá'],
 datasets: [{
 label:"Fuera de Bogota",
 data: [{{$Soacha}},{{$Facatativá}},{{$Chía}}, {{$Zipaquirá}}, {{$Mosquera}}, {{ $Madrid }}, {{ $Funza }} , {{ $Cajicá }} , {{ $Sibaté }} , {{ $Tocancipá }} , {{ $Tabio }}, {{ $LaCalera }} , {{ $Sopó }} , {{ $Cota }}, {{ $Tenjo }} , {{ $ElRosal }} , {{ $Gachancipá }}, {{ $Bojacá }}],
 backgroundColor: [
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(80, 252, 0, 0.5)',
   'rgba(252, 31, 0, 0.5)'
 ],
 borderColor: [
     '#000000',
     '#000000',
     '#000000',
     '#000000',
     '#000000',
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
 </div>
 </div>
</div>
</div>
 {{--fin grafico localiades3--}}

 {{--inicio sexto grafico numero de hijos--}}

 <div class="card-header">
     <center><H4>Numero de Hijos</H4></center>

     </div>
   <div class="row">

      <div class="col-sm-6">
         <div class="card">
           <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
             <h5 class="card-title"><strong>Numero de Hijos de Colaboradores</strong></h5>
              <canvas id="hijosNum" width="100" height="40" style="background-color: white;"></canvas>
              <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">Sin Hijos</th>
                     <th scope="col">1 Hijos</th>
                     <th scope="col">2 Hijos</th>
                     <th scope="col">3 Hijos</th>
                     <th scope="col">4 Hijos o mas</th>

                   </tr>
                 <tr>
                   <br>


                     @foreach ($hijos0s as $hijos0)
                     <td>{{ $hijos0 }}</td>
                     @endforeach
                     @foreach ($hijos1s as $hijos1)
                     <td>{{ $hijos1 }}</td>
                     @endforeach
                     @foreach ($hijos2s as $hijos2)
                     <td>{{ $hijos2 }}</td>
                     @endforeach
                     @foreach ($hijos3s as $hijos3)
                     <td>{{ $hijos3 }}</td>
                     @endforeach
                     @foreach ($hijos4s as $hijos4)
                     <td>{{ $hijos4 }}</td>
                     @endforeach


                   </tr>
                 </thead>
               </table>
           </div>
         </div>
       </div>

       <script>
         var ctx = document.getElementById('hijosNum').getContext('2d');
         var myLineChart = new Chart(ctx, {
             type: 'line',
             data: {
                 labels: ['Sin Hijos', '1 Hijo', '2 Hijos', '3 Hijos', '4 Hijos o mas'],
                 datasets: [{
                     label: 'personal activo por campaña',
                     data: [{{ $hijos0 }}, {{ $hijos1 }}, {{$hijos2}},{{$hijos3}},{{$hijos4}}],
                     backgroundColor: [
                         '#00FFFF',
                         '#01DF01',
                         '#1C1C1C',
                         '#0489B1',
                         '#F7FE2E',
                         '#FFBF00'
                     ],
                     borderColor: [
                         '#0101DF'


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


   {{--fin sexto grafico genero de hijos--}}

   <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>Genero de Hijos de Colaboradores</strong></h5>
         <canvas id="hijosGen" width="100" height="40" style="background-color: white;"></canvas>
         <table class="table">
            <thead>
              <tr>
                <th scope="col">Masculino</th>
                <th scope="col">Femenino</th>
              </tr>
            <tr>
              <br>

                @foreach ($ninos as $nino)
                <td>{{ $nino }}</td>
                @endforeach
                @foreach ($ninas as $nina)
                <td>{{ $nina }}</td>
                @endforeach



              </tr>
            </thead>
          </table>
      </div>
    </div>
  </div>

  <script>
    var ctx = document.getElementById('hijosGen').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Masculilno', 'Femenino'],
            datasets: [{
                label: 'personal activo por campaña',
                data: [{{ $nino }}, {{ $nina }}],
                backgroundColor: [
                    '#00FFFF',
                    '#FFBF00'
                ],
                borderColor: [
                    '#0101DF',
                    '#0101DF'


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


{{--fin sexto grafico genero de hijos--}}


</div>



<div class="card-header">
    <center><H4>Novedades</H4>
        <h6>Total de Novedades:<strong>  {{ $novedades->total() }}</strong></h6></center>

    </div>
{{--  inicio novedades--}}
<div class="row">

    <div class="col-sm-6">
       <div class="card">
         <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
           <h5 class="card-title"><strong>Novedades por Campaña</strong></h5>
            <canvas id="novedadescant" width="100" height="90" style="background-color: white;"></canvas>



            <table class="table">
               <thead>
                 <tr>
                    <th scope="col">ETB</th>
                    <th scope="col">MOVISTAR</th>
                    <th scope="col">QNT</th>
                    <th scope="col">STAFF</th>
                    <th scope="col">VANTI</th>
                    <th scope="col">VANTI SAC</th>

                 </tr>
               <tr>
                 <br>


                   @foreach ($novedadesetbes as $novedadesetbe)
                   <td>{{ $novedadesetbe }}</td>
                   @endforeach
                   @foreach ($novedadesmovistares as $novedadesmovistare)
                   <td>{{ $novedadesmovistare }}</td>
                   @endforeach
                   @foreach ($novedadesqntes as $novedadesqnte)
                   <td>{{ $novedadesqnte }}</td>
                   @endforeach
                   @foreach ($novedadesstaffes as $novedadesstaffe)
                   <td>{{ $novedadesstaffe }}</td>
                   @endforeach
                   @foreach ($novedadesvanties as $novedadesvantie)
                   <td>{{ $novedadesvantie }}</td>
                   @endforeach
                   @foreach ($novedadesvantisaces as $novedadesvantisace)
                   <td>{{ $novedadesvantisace }}</td>
                   @endforeach


                 </tr>
               </thead>
             </table>
         </div>
       </div>
     </div>

     <script>
       var ctx = document.getElementById('novedadescant').getContext('2d');
       var myLineChart = new Chart(ctx, {
           type: 'line',
           data: {
               labels: ['ETB', 'MOVISTAR', 'QNT', 'STAFF', 'VANTI','VANTI SAC'],
               datasets: [{
                   label: 'personal activo por campaña',
                   data: [{{ $novedadesetbe }}, {{ $novedadesmovistare }}, {{$novedadesqnte}},{{$novedadesstaffe}},{{$novedadesvantie}},{{$novedadesvantisace}}],
                   backgroundColor: [
                       '#00FFFF',
                       '#01DF01',
                       '#1C1C1C',
                       '#0489B1',
                       '#F7FE2E',
                       '#FFBF00'
                   ],
                   borderColor: [
                       '#00FF00'


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


 {{--fin novedades cantidades--}}
 <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>Tipo de Novedad</strong></h5>
         <canvas id="tipoNovedad" width="100" height="40" style="background-color: white;"></canvas>



         <table class="table">
            <thead>
              <tr>
                 <th scope="col">Aislamiento</th>
                 <th scope="col">Calamidad</th>
                 <th scope="col">Capacitación</th>
                 <th scope="col">Cumplimiento De Meta</th>
                 <th scope="col">Eps</th>
                 <th scope="col">Incapacidad</th>

              </tr>
            <tr>
              <br>


                @foreach ($Aislamientos as $Aislamiento)
                <td>{{ $Aislamiento }}</td>
                @endforeach
                @foreach ($Calamidads as $Calamidad)
                <td>{{ $Calamidad}}</td>
                @endforeach
                @foreach ($Capacitacións as $Capacitación)
                <td>{{ $Capacitación }}</td>
                @endforeach
                @foreach ($CumplimientoDeMetas as $CumplimientoDeMeta)
                <td>{{ $CumplimientoDeMeta }}</td>
                @endforeach
                @foreach ($Epss as $Eps)
                <td>{{ $Eps }}</td>
                @endforeach
                @foreach ($Incapacidads as $Incapacidad)
                <td>{{ $Incapacidad }}</td>
                @endforeach


              </tr>
              <tr>
                 <th scope="col">Injustificada</th>
                 <th scope="col">Licencia De Luto</th>
                 <th scope="col">Licencia De Maternidad</th>
                 <th scope="col">Licencia No Remunerada</th>
                 <th scope="col">No Reporta</th>
                 <th scope="col">Permiso</th>

              </tr>
            <tr>
              <br>


                @foreach ($Injustificadas as $Injustificada)
                <td>{{ $Injustificada }}</td>
                @endforeach
                @foreach ($LicenciaDeLutos as $LicenciaDeLuto)
                <td>{{ $LicenciaDeLuto}}</td>
                @endforeach
                @foreach ($LicenciaDeMaternidads as $LicenciaDeMaternidad)
                <td>{{ $LicenciaDeMaternidad }}</td>
                @endforeach
                @foreach ($LicenciaNoRemuneradas as $LicenciaNoRemunerada)
                <td>{{ $LicenciaNoRemunerada }}</td>
                @endforeach
                @foreach ($NoReportas as $NoReporta)
                <td>{{ $NoReporta }}</td>
                @endforeach
                @foreach ($Permisos as $Permiso)
                <td>{{ $Permiso }}</td>
                @endforeach


              </tr>

              <tr>
                 <th scope="col">Posible Renuncia</th>
                 <th scope="col">Problemas Técnicos</th>
                 <th scope="col">Sin Conexión</th>
                 <th scope="col">Suspensión</th>
                 <th scope="col">Vacaciones</th>


              </tr>
            <tr>
              <br>


                @foreach ($PosibleRenuncias as $PosibleRenuncia)
                <td>{{ $PosibleRenuncia }}</td>
                @endforeach
                @foreach ($ProblemasTécnicoss as $ProblemasTécnicos)
                <td>{{ $ProblemasTécnicos}}</td>
                @endforeach
                @foreach ($SinConexións as $SinConexión)
                <td>{{ $SinConexión }}</td>
                @endforeach
                @foreach ($Suspensións as $Suspensión)
                <td>{{ $Suspensión }}</td>
                @endforeach
                @foreach ($Vacacioness as $Vacaciones)
                <td>{{ $Vacaciones }}</td>
                @endforeach



              </tr>



            </thead>
          </table>
      </div>
    </div>
  </div>

  <script>
    var ctx = document.getElementById('tipoNovedad').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Aislamiento', 'Calamidad', 'Capacitación', 'Cumplimiento De Meta', 'Eps','Incapacidad','Injustificada','Licencia De Luto','Licencia De Maternidad','Licencia No Remunerada','No Reporta','Permiso','Posible Renuncia','Problemas Técnicos','Sin Conexión','Suspensión','Vacaciones'],
            datasets: [{
                label: '',
                data: [{{$Aislamiento}},{{$Calamidad}},{{$Capacitación}},{{$CumplimientoDeMeta}},{{$Eps}},{{$Incapacidad}},{{$Injustificada}},{{$LicenciaDeLuto}},{{$LicenciaDeMaternidad}},{{$LicenciaNoRemunerada}},{{$NoReporta}},{{$Permiso}},{{$PosibleRenuncia}},{{$ProblemasTécnicos}},{{$SinConexión}},{{$Suspensión}},{{$Vacaciones}}],
                backgroundColor: [
                    '#00FFFF',
                    '#01DF01',
                    '#1C1C1C',
                    '#0489B1',
                    '#F7FE2E',
                    '#FFBF00'
                ],
                borderColor: [
                    '#0404B4'


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
{{-- fin novedades--}}

{{--inicio retiros--}}

<div class="col-sm-12">
    <div class="card">
      <div class="card-body" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        <h5 class="card-title"><strong>Causales de retiro</strong></h5>
         <canvas id="causalRetiro" width="250" height="80" style="background-color: white;"></canvas>



         <table class="table">
            <thead>
              <tr>
                 <th scope="col">Renuncia Voluntaria</th>
                 <th scope="col">Abandono De Cargo</th>
                 <th scope="col">Terminacion De Contrato Justa Causa</th>
                 <th scope="col">Malas Practicas</th>
                 <th scope="col">Procesos Disciplinarios</th>
                 <th scope="col">Finalizacion Etapa Productiva Sena</th>
                 <th scope="col">Periodo De Prueba</th>
                 <th scope="col">Sin Justa Causa</th>
                 <th scope="col">Periodo De Prueba Y Abandono De Cargo</th>

              </tr>
            <tr>
              <br>


                @foreach ($renuncias as $renuncia)
                <td>{{ $renuncia }}</td>
                @endforeach
                @foreach ($Abandonos as $Abandono)
                <td>{{ $Abandono}}</td>
                @endforeach
                @foreach ($conjustaCausas as $conjustaCausa)
                <td>{{ $conjustaCausa }}</td>
                @endforeach
                @foreach ($MalasPracticass as $MalasPracticas)
                <td>{{ $MalasPracticas }}</td>
                @endforeach
                @foreach ($disciplinarios as $disciplinario)
                <td>{{ $disciplinario }}</td>
                @endforeach
                @foreach ($finetapas as $finetapa)
                <td>{{ $finetapa }}</td>
                @endforeach
                @foreach ($periodopruebas as $periodoprueba)
                <td>{{ $periodoprueba }}</td>
                @endforeach
                @foreach ($sinjustacasusas as $sinjustacasusa)
                <td>{{ $sinjustacasusa}}</td>
                @endforeach
                @foreach ($perioriodoabandonos as $perioriodoabandono)
                <td>{{ $perioriodoabandono }}</td>
                @endforeach

              </tr>
            </thead>
          </table>
      </div>
    </div>
  </div>

  <script>
    var ctx = document.getElementById('causalRetiro').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Renuncia Voluntaria', 'Abandono De Cargo', 'Terminacion De Contrato Justa Causa', 'Malas Practicas', 'Procesos Disciplinarios','Finalizacion Etapa Productiva Sena','Periodo De Prueba','Sin Justa Causa','Periodo De Prueba Y Abandono De Cargo',],
            datasets: [{
                label: '',
                data: [{{$renuncia}},{{$Abandono}},{{$conjustaCausa}},{{$MalasPracticas}},{{$disciplinario}},{{$finetapa}},{{$periodoprueba}},{{$sinjustacasusa}},{{$perioriodoabandono}}],
                backgroundColor: [
                    '#FF4000',
                    '#01DF01',
                    '#1C1C1C',
                    '#0489B1',
                    '#F7FE2E',
                    '#FFBF00'
                ],
                borderColor: [
                    '#B40404'


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




{{--fin retiros--}}


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
    </script>

--}}






        <script src="{{asset('js/app.js')}}"></script>
    </body>
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    @section('js')

@stop


@endsection







