//pie chart
var ctx = document.getElementById( "pieChart" );
ctx.height = 100;
var myChart = new Chart( ctx, {
  type: 'pie',
  data: {},
  options: {
    responsive: true
  }
} );


jQuery(document).ready(function($) {

  $("[name='continente']").change(function(e) {
    swal.showLoading()

    $.ajax({
      type: "POST",
      datatype: "JSON",
      url: base_url+"/empresa/cargar_pais",
      data: {
        continente:   $("[name='continente']").val(),
        pais:         $("[name='pais']").val(),
        _token:       $("[name='csrf-token']").attr("content")
      },
      success: function(result) {

        result = JSON.parse(result);
        len = Object.keys(result).length
        $("[name='pais'] > option").remove()
        $("[name='pais']").append("<option value='' selected disabled>Seleccione un pais</option>")
        for(i=0; i<len; i++){
          $("[name='pais']").append("<option value='"+result[i].id_pais_pk+"'>"+result[i].pais+"</option>")
        }

        swal.close()


      },
      error: function(result) {
        alert('error');
      }
    });







      $("#cargar").click(function(e) {



        $.ajax({
          type: "POST",
          datatype: "JSON",
          url: base_url+"/empresa/cargar_wca_lista",
          data: {
            pais:         $("[name='pais']").val(),
            _token:       $("[name='csrf-token']").attr("content")
          },
          success: function(result) {

            result = JSON.parse(result);
            //len = Object.keys(result).length




            $("#totalOficinasPrincipales").html(result.total_ho[0].count)
            $("#totalOficinasSucursal").html(result.total_no_ho[0].count)
            $("#totalglobal").html(result.total_no_ho[0].count + result.total_ho[0].count)



            myChart.data = {
              datasets: [{
                data: [result.total_ho[0].count, result.total_no_ho[0].count],
                backgroundColor: [
                  "rgba(0, 194, 146,0.9)",
                  "rgba(0, 194, 146,0.5)",
                ],
                hoverBackgroundColor: [
                  "rgba(0, 194, 146,0.9)",
                  "rgba(0, 194, 146,0.5)",
                ]
              }],
              labels: [
                "Oficinas centrales",
                "Oficinas sedes"
              ]
            };


            myChart.update();



            len = result.empresa.length
              $("#myTable > tbody >tr").remove()
            for(i=0; i<len; i++){
              $("#myTable > tbody").append(`
                <tr>
                  <td>`+result.empresa[i].nombre+`</td>
                  <td>`+result.empresa[i].direccion+`</td>
                  <td>`+result.empresa[i].contacto+`</td>
                  <td>`+result.empresa[i].web+`</td>
                </tr>
              `)
            }





            if ($.fn.DataTable.isDataTable("#myTable")) {
              ("#myTable").DataTable().destroy();
            }

            $('#myTable').dataTable( {
              dom: 'Bfrtip',
              buttons: [
                'excelHtml5',
              ],
              destroy : true
            } );






            swal.close()


          },
          error: function(result) {
            alert('error');
          }
        });









      });






  });

});
