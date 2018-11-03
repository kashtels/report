<?php $__env->startSection('title','Inicio'); ?>
<?php $__env->startSection("css"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>


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
                        <div class="col-lg-8">
                            <div class="card-body">
                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body">
                                <div class="progress-box progress-1">
                                    <h4 class="por-title">Total empresas principales</h4>
                                    <div class="por-txt">96,930 Users (40%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Total empresas con correo</h4>
                                    <div class="por-txt">3,220 Users (24%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Total empresas sin correo</h4>
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





<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>