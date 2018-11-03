@extends('layout/layout')
@extends('layout/nav')
@section ('title','Inicio')
@section("css")
@endsection



@section ('contenido')
    
    <!-- Animated -->
    <div class="animated fadeIn">

        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Listado Empresas y Sedes</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card-body">


                            	<select>

								  <option value="" selected>Todos los países</option>
								  @foreach($paises as $pais)
								  <option value="{{$pais->id_pais_pk}}">{{$pais->pais}}</option>
								  @endforeach
								  </select>
								

								<br> 
                                
                            	<br>

                                <table id="example" class="table table-striped table-bordered">

									<thead>
										<th>Empresa</th>
										<th>Sedes</th>			
										<th>Sucursales</th>
									</thead>

									<tbody>
											<tr>
												<td>Microsoft</td>
												<td>20</td>
												<td>80</td>
											</tr>
											<tr>
												<td>Google</td>
												<td>20</td>
												<td>80</td>
											</tr>
											<tr>
												<td>Apple</td>
												<td>20</td>
												<td>80</td>
											</tr>
											<tr>
												<td>Linux</td>
												<td>20</td>
												<td>80</td>
											</tr>
											<tr>
												<td>Twitch</td>
												<td>20</td>
												<td>80</td>
											</tr>
									</tbody>

								</table>

								<!-- <canvas id="TrafficChart"></canvas>   -->
                                <!-- <canvas id="barChart"></canvas> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body">
                                <div class="progress-box progress-1">
                                    <h4 class="por-title">Total Empresas</h4>
                                    <div class="por-txt">96,930 Users (40%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Total Sedes</h4>
                                    <div class="por-txt">3,220 Users (24%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Total Sucursales</h4>
                                    <div class="por-txt">29,658 Users (60%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div> <!-- /.card-body -->
                        </div>
                    </div> <!-- /.row -->
                    <div class="card-body"></div>
                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
        <div class="clearfix"></div>


    <!-- /#add-category -->
    </div>
    <!-- .animated -->

@endsection

@section('js')

	<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>

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
                        data: [ 65, 59, 80 ],
                        borderColor: "rgba(0, 194, 146, 0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 194, 146, 0.5)"
                                },
                    {
                        label: "Empresas sedes",
                        data: [ 28, 48, 40 ],
                        borderColor: "rgba(0,0,0,0.09)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0,0,0,0.07)"
                      },

                    {
                        label: "Correo",
                        data: [ 28, 48, 40 ],
                        borderColor: "rgba(21,140,47,1.09)",
                        borderWidth: "0",
                        backgroundColor: "rgba(21,140,47,0.65)"
                      },



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