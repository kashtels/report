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


                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for="">Inicio</label>
                                <input type="date" name="inicio" class="form-control" >
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for="">Final</label>
                                <input type="date" name="final" class="form-control" >
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for="">Dominio</label>
                                <select class="form-control" name="dominio">
                                  @foreach ($dm as $key => $value)
                                    <option value="{{ $value->dominio }}">{{ $value->dominio }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>




                          <div class="col-sm-2 offset-sm-5">
                            <button type="button" id="cargar" class="btn btn-outline-primary btn-block">Cargar</button>
                          </div>



                          <div class="col-sm-12 mt-5">
                            <canvas id="TimelineGeneral"></canvas>
                          </div>

                          <div class="col-sm-12 mt-5">
                            <p>Mientras mas cercano a la posicion 1, mejor.<br>
                            Si el valor es 0, el dominio no fue encontrado en los resultados de busqueda</p>
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
<script src="{{ asset("js/reporte_seo/timeline.js") }}" charset="utf-8"></script>




  <script type="text/javascript">

    var today = new Date().toISOString().split('T')[0];

    // fecha minima para el inicio
    document.getElementsByName("inicio")[0].setAttribute('min', "2018-11-01");
    document.getElementsByName("inicio")[0].setAttribute('max', today);


    // definir fecha maxima final
    document.getElementsByName("final")[0].setAttribute('min', "2018-11-01");
    document.getElementsByName("final")[0].setAttribute('max', today);




    // enviar formulario




  </script>

@endsection
