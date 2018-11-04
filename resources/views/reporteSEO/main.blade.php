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
                        <h4 class="mb-3">Linea temporal posicionamiento dominios </h4>
                        <div class="row">


                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="">Inicio</label>
                                <input type="date" name="inicio" class="form-control" >
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="">Final</label>
                                <input type="date" name="final" class="form-control" >

                              </div>
                            </div>




                          <div class="col-sm-2 offset-sm-5">
                            <button type="button" name="button" class="btn btn-outline-primary btn-block">Cargar</button>
                          </div>



                          <div class="col-sm-12 mt-5">
                            <canvas id="TimelineGeneral"></canvas>
                          </div>


                        </div>
                    </div>

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




  <script type="text/javascript">

    var today = new Date().toISOString().split('T')[0];

    // fecha minima para el inicio
    document.getElementsByName("inicio")[0].setAttribute('min', "2018-11-01");
    document.getElementsByName("inicio")[0].setAttribute('max', today);


    // definir fecha maxima final
    document.getElementsByName("final")[0].setAttribute('min', "2018-11-01");
    document.getElementsByName("final")[0].setAttribute('max', today);




    // enviar formulario

    $("button").click(function(e) {
      e.preventDefault();
      $.ajax({
          type: "POST",
          url: "/pages/test/",
          data: {
              inicio: $("[name='inicio']").val(),
              inicio: $("[name='final']").val(),
              //csrf-token: $("[name='csrf-token']").val()
          },
          success: function(result) {


            diobne

          },
          error: function(result) {
              alert('error');
          }
      });
    });





    //Sales chart
    var ctx = document.getElementById( "TimelineGeneral" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "2012", "2013", "2014", "2015", "2016", "2017", "2018" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                label: "Foods",
                data: [ 0, 30, 15, 110, 50, 63, 120 ],
                backgroundColor: 'transparent',
                borderColor: 'rgba(220,53,69,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(220,53,69,0.75)',
                    }, {
                label: "Electronics",
                data: [ 0, 50, 40, 80, 35, 99, 80 ],
                backgroundColor: 'transparent',
                borderColor: 'rgba(40,167,69,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(40,167,69,0.75)',
                    } ]
        },
        options: {
            responsive: true,

            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },
            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                        } ]
            },
            title: {
                display: false,
                text: 'Normal Legend'
            }
        }
    } );



  </script>

@endsection
