// defecto.
// Si se encuentran fechas que no contiene datos. grafico llegara hasta
// el ultimo dato agregado, provocando que se desincronicen las fechas y la
// relacion el con eje Y


//Sales chart
   var ctx = document.getElementById( "TimelineGeneral" );
   ctx.height = 150;
   var myChart = new Chart( ctx, {
       type: 'line',
       data: {},
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






(function($) {

  $("#cargar").click(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      datatype: "JSON",
      url: base_url+"/reporte_seo/cargar_timeline",
      data: {
        inicio:   $("[name='inicio']").val(),
        final:    $("[name='final']").val(),
        dominio:  $("[name='dominio']").val(),
        _token:   $("[name='csrf-token']").attr("content")
      },
      success: function(result) {

        result = JSON.parse(result);

        aux = []
        fechas_global = []
        // recorrer las kewword
        len_kw = Object.keys(result.kw).length
        for (i=0; i < len_kw; i++){

          // recorrer lista de elementos
          data = []
          fechas = []
          pic_len = Object.keys(result.pic).length
          for(a=0; a<pic_len; a++){
            if(result.kw[i].keyword == result.pic[a].keyword){
              data.push(result.pic[a].numero);
              fechas.push(result.pic[a].fecha)
              fechas_global.push(result.pic[a].fecha)
            }
          }

          aux.push([result.kw[i].keyword, fechas, data ])
        }

        var uniqueItems = Array.from(new Set(fechas_global))





        aux_len = aux.length
        final = []
        for (i=0; i < aux_len; i++){

          r = Math.floor(Math.random() * 256);
          g = Math.floor(Math.random() * 256);
          b = Math.floor(Math.random() * 256);


          var a = {}
          a["label"] = aux[i][0]
          a["data"]  = aux[i][2]
          a["backgroundColor"] =  'transparent'
          a["borderColor"] = 'rgba('+r+','+g+','+b+',0.75)'
          a["borderWidth"] = 3
          a["pointStyle"] = 'circle'
          a["pointRadius"]= 5
          a["pointBorderColor"] = 'transparent'
          a["pointBackgroundColor"]= 'rgba('+r+','+g+','+b+',0.75)'

          final.push(a)
        }


        myChart.data = {
          labels: uniqueItems.sort(),
          type: 'line',
          defaultFontFamily: 'Montserrat',
          datasets: final
        };

        myChart.update();



      },
      error: function(result) {
        alert('error');
      }
    });
  });


})(jQuery);
