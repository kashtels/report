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

<!--
                            	<select>                                   #Desechar

								  <option value="" selected>Todos los países</option>
								  @foreach($paises as $pais)
								  <option value="{{$pais->id_pais_pk}}">{{ucwords($pais->pais)}}</option>
								  @endforeach
								</select>								

								<br> 
                                
                            	<br>
-->
                                <table id="example" class="table table-striped table-bordered">

									<thead>
                                        <th>#</th>
										<th>Empresa</th>
                                        <th>Pais</th>
                                        <th>Web</th>
<!--										<th>Sedes</th>			      #Trabajar Modulo para obtener datos de columnas
										<th>Sucursales</th>       -->                                  
									</thead>

									<tbody>
                                    @foreach($empresas as $empresa)
											<tr>
                                                <td>1</td>
												<td>{{$empresa->nombre}}</td>
												<td>{{ucwords($empresa->pais)}}</td>
                                                <td>{{$empresa->web}}</td>
<!--                                                <td>20</td>           #Trabajar Modulo para obtener datos de columnas
												<td>80</td> -->
											</tr>
                                    @endforeach
									</tbody>

								</table>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body">
                                <div class="progress-box progress-1">
                                    <h4 class="por-title">Total Empresas</h4>
                                    <div class="por-txt">{{$total_empresas}} (100%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Total Oficinas Principales</h4>
                                    <div class="por-txt">x (24%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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

<!-- Resources -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!-- Data Table Initialize -->     
    <script> 
 var j= jQuery.noConflict();
 
j(document).ready(function() {  
    

	j('#example').DataTable({
	    retrieve: true,
    language:{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ning\u00FAn dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
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