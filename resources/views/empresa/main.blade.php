@extends('layout/layout')
@extends('layout/nav')
@section ('title','Inicio')
@section("css")
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endsection
@section ('contenido')


    <!-- Animated -->
    <div class="animated fadeIn">

        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Información general </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>

                    </div> <!-- /.row -->
                    <div class="card-body"></div>
                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
        <div class="clearfix"></div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h4 class="box-title">Información WCA</h4>

                <div class="row mt-5">
                  <div class="col-sm-5">
                    <select class="form-control" name="continente">
                      <option value="" selected disabled>Seleccione un continente</option>
                      @foreach ($continente as $key => $value)
                        <option value="{{ $value->id_continente_pk }}">{{ $value->continente }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <select class="form-control" name="pais">
                      <option value="" selected disabled>Seleccione un pais</option>

                    </select>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" id="cargar" class="btn btn-primary btn-block">Cargar</button>
                  </div>
                </div>


                <div class="row mt-5">
                  <div class="col-lg-12">
                    <canvas id="pieChart"></canvas>
                  </div>
                  <div class="col-sm-4">
                    Total oficinas principales: <span id="totalOficinasPrincipales"></span>
                  </div>
                  <div class="col-sm-4">
                    Total sucursales: <span id="totalOficinasSucursal"></span>
                  </div>
                  <div class="col-sm-4">
                    Total global: <span id="totalglobal"></span>
                  </div>
                </div>


                <div class="row mt-5">


                  <div class="card col-sm-12">
                    <div class="card-body">

                      <table id="myTable">
                        <thead>
                          <tr>
                            <th>Empresa</th>
                            <th>Direccion</th>
                            <th>Contacto</th>
                            <th>Web</th>
                          </tr>
                        </thead>
                        <tbody>


                        </tbody>
                      </table>

                    </div>
                  </div>


                </div>

              </div>
            </div>
          </div>
        </div>


    <!-- /#add-category -->
    </div>
    <!-- .animated -->





@endsection
@section('js')

<script src="{{ asset("js/wca/cargar.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.all.min.js" charset="utf-8"></script>
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" charset="utf-8"></script>
<script src="{{ asset("js/jszip.min.js") }}" charset="utf-8"></script>

  <!--Local Stuff-->
  <script>
      jQuery(document).ready(function($) {
          "use strict";



        // barchart - cantidad empresas por agente

        //bar chart
        var ctx = document.getElementById( "barChart" );
        //    ctx.height = 200;
        var myChart = new Chart( ctx, {
            type: 'bar',
            data: {
                labels: [ "WCA", "DGCI", "logistic"],
                datasets: [
                    {
                        label: "Empresas principales",
                        data: [ {{ $TotalAgenteWCA_HO[0]->count }}, 55, 80 ],
                        borderColor: "rgba(0, 194, 146, 0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 194, 146, 0.5)"
                                },
                    {
                        label: "Empresas sedes",
                        data: [ {{ $TotalAgenteWCA_Sucursal[0]->count }}, 48, 40 ],
                        borderColor: "rgba(0,0,0,0.09)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0,0,0,0.07)"
                      }



                            ]
            },
            options: {
                scales: {
                    yAxes: [ {
                        ticks: {
                            beginAtZero: true
                        }
                                    } ]
                }
            }
        } );





      });
  </script>

@endsection
