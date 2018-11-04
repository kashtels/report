@extends('layout/layout')
@extends('layout/nav')
@section ('title','Inicio')
@section("css")
@endsection

@section ('contenido')

    <!-- Animated -->
    <div class="animated fadeIn">

        <!-- Start Page Content -->
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title card-body">
                                <h4>Paises</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
            </div>        

        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Lista de Correos</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">


                                <table id="correos" class="table table-striped table-bordered">

									<thead>
                                        
										<th>Correo</th>
                                        <th>Empresa</th>
                                        <th>Web</th>
                                        <th>Pais</th>                               
									</thead>

									<tbody>
                                    @foreach($correos as $correo)
											<tr>
                                                <td>{{$correo->correo}}</td>
												<td>{{$correo->nombre}}</td>
												<td>{{$correo->web}}</td>
                                                <td>{{ucwords($correo->pais)}}</td>
											</tr>
                                    @endforeach
									</tbody>

								</table>

                            </div>
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



<!-- Resources -->



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <!-- All Jquery -->
    <script src="Map-Vector/js/lib/jquery/jquery.min.js"></script>
    <!--Menu sidebar -->

    <!-- scripit init-->
    <script src="Map-Vector/js/lib/vector-map/jquery.vmap.min.js"></script>
    <!-- scripit country color init-->
    <script src="Map-Vector/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <!-- scripit init-->
    <script src="Map-Vector/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <!-- scripit init-->
    <script src="Map-Vector/js/lib/vector-map/vector.init.js"></script>
    

<!-- Data Table Initialize -->     
    <script> 

 var c= jQuery.noConflict();
 
c(document).ready(function() {  
    

	c('#correos').DataTable({
	    retrieve: true,
    language:{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ correos",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ning\u00FAn dato disponible en esta tabla",
    "sInfo":           "Mostrando correos del _START_ al _END_ de un total de _TOTAL_ correos",
    "sInfoEmpty":      "Mostrando correos del 0 al 0 de un total de 0 correos",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ correos)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
	    
	    
	});
} );
</script> 
    
@endsection