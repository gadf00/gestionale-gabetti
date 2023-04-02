$(document).ready(function () {
  var form = $("#nuova-richiesta")[0];
  $("#nuova-richiesta").submit(function (event) {
    event.preventDefault();
    if (!form.checkValidity()) {
      event.stopPropagation();
    } else {
      var vendita = $("#vendita");
      var affitto = $("#affitto");
      var tipo_richiesta = 0;

      if (vendita.is(":checked")) {
        tipo_richiesta = 0;
      } else if (affitto.is(":checked")) {
        tipo_richiesta = 1;
      }

      var tipo = $("#tipo").val();
      var sotto_tipo_1 = $("#sotto_tipo_1").val();
      var sotto_tipo_2 = $("#sotto_tipo_2").val();
      var sotto_tipo_3 = $("#sotto_tipo_3").val();
      var sotto_tipo_4 = $("#sotto_tipo_4").val();
      var sotto_tipo_5 = $("#sotto_tipo_5").val();
      var localita = $("#localita").val();
      var quartiere_1 = $("#quartiere_1").val();
      var quartiere_2 = $("#quartiere_2").val();
      var quartiere_3 = $("#quartiere_3").val();
      var quartiere_4 = $("#quartiere_4").val();
      var quartiere_5 = $("#quartiere_5").val();
      
      var costo_min = 0.0;
      if($("#costo_min").val() != ''){
        costo_min = $("#costo_min").val();
      }
      var costo_max = 0.0;
      if($("#costo_max").val() != ''){
        costo_min = $("#costo_max").val();
      }
      var superficie_min = 0.0;
      if($("#superficie_min").val() != ''){
        costo_min = $("#superficie_min").val();
      }

      var piano_min = 0;
      if($("#piano_min").val() != ''){
        costo_min = $("#piano_min").val();
      }
      var piano_max = 0;
      if($("#piano_max").val() != ''){
        costo_min = $("#piano_max").val();
      }
      var vano_min = 0;
      if($("#vano_min").val() != ''){
        costo_min = $("#vano_min").val();
      }
      var bagno_min = 0;
      if($("#bagno_min").val() != ''){
        costo_min = $("#bagno_min").val();
      }
      var camera_letto_min = 0;
      if($("#camera_letto_min").val() != ''){
        costo_min = $("#camera_letto_min").val();
      }
      var anno_costruzione_min = 0;
      if($("#anno_costruzione_min").val() != ''){
        costo_min = $("#anno_costruzione_min").val();
      }
      var note = $("#note").val();
      var id_cliente = $("#id_cliente").val();

      $.ajax({
        url: "../../../control/cliente/nuova-richiesta.php",
        type: "POST",
        data: {
          tipo_richiesta: tipo_richiesta,
          tipo: tipo,
          sotto_tipo_1: sotto_tipo_1,
          sotto_tipo_2: sotto_tipo_2,
          sotto_tipo_3: sotto_tipo_3,
          sotto_tipo_4: sotto_tipo_4,
          sotto_tipo_5: sotto_tipo_5,
          localita: localita,
          quartiere_1: quartiere_1,
          quartiere_2: quartiere_2,
          quartiere_3: quartiere_3,
          quartiere_4: quartiere_4,
          quartiere_5: quartiere_5,
          costo_min: costo_min,
          costo_max: costo_max,
          superficie_min: superficie_min,
          piano_min: piano_min,
          piano_max: piano_max,
          vano_min: vano_min,
          bagno_min: bagno_min,
          camera_letto_min: camera_letto_min,
          anno_costruzione_min: anno_costruzione_min,
          note: note,
          id_cliente: id_cliente,
        },
        success: function (response) {
          $("#nuova-richiesta").modal("hide");
          Swal.fire({
            title: "Richiesta aggiunta!",
            text: "La richiesta è stata aggiunta correttamente!",
            icon: "success",
            confirmButtonText: "OK",
          }).then((result) => {
            console.log(response);
            if (result.isConfirmed) {
              //location.reload();
            }
          });
        },
        error: function(xhr,status, error){
            console.log(xhr.responseText);
        }
      });
    }
    $(this).addClass("was-validated");
  });
});
