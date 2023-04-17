$(document).ready(function () {
  var form = $("#nuovo-immobile")[0];

  var tipi_immobili;
  const select_tipo = $("#select_tipo");
  const select_sotto_tipo = $("#select_sotto_tipo");
  $.ajax({
    url: "../../../control/tabelle/tipi-immobili/lista-tipi-immobili.php",
    dataType: "json",
    async: false,
  })
    .done(function (response) {
      tipi_immobili = response;
      tipi_immobili.forEach((tipo_immobile) => {
        aggiungiRigaTipo(select_tipo, tipo_immobile);
        aggiungiRigaTipo(select_sotto_tipo, tipo_immobile);
      });
    })
    .fail(function (xhr, status, error) {
      console.log(xhr.responseText);
    });

  var quartieri;
  const select_quartiere = $("#select_quartiere");
  $.ajax({
    url: "../../../control/tabelle/quartieri/lista-quartieri.php",
    dataType: "json",
    async: false,
  })
    .done(function (response) {
      quartieri = response;
      quartieri.forEach((quartiere) => {
        aggiungiRigaQuartiere(select_quartiere, quartiere);
      });
    })
    .fail(function (xhr, status, error) {
      console.log(xhr.responseText);
    });

    $.ajax({
        url:"../../../control/archivio/clienti/lista-clienti.php",
        dataType: "json",
        async: false,
    })
        .done(function(response){
            let acquisitore = document.getElementById("acquisitore");
            acquisitore.addEventListener("keyup", (e) =>{
                removeElementsAcquisitore();
                for(let i of response){
                    if(i.nominativo.toLowerCase().startsWith(acquisitore.value.toLowerCase()) && acquisitore.value != ""){
                        console.log(i.nominativo);
                        let listAcquisitori = document.createElement("li");
                        listAcquisitori.classList.add("list-items");
                        listAcquisitori.style.cursor = "pointer";
                        listAcquisitori.setAttribute("onclick", "displayNamesAcquisitore('"+i.nominativo+"')");
                        let word = "<b>" + i.nominativo.substr(0,acquisitore.value.length) + "</b>";
                        word += i.nominativo.substr(acquisitore.value.length);
                        listAcquisitori.innerHTML = word;
                        document.querySelector("#list-acquisitore").appendChild(listAcquisitori);
                    }
                }
            })
        })

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

      var tipo = $("#select_tipo").val();
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
      if ($("#costo_min").val() != "") {
        costo_min = $("#costo_min").val();
      }
      var costo_max = 0.0;
      if ($("#costo_max").val() != "") {
        costo_min = $("#costo_max").val();
      }
      var superficie_min = 0.0;
      if ($("#superficie_min").val() != "") {
        costo_min = $("#superficie_min").val();
      }

      var piano_min = 0;
      if ($("#piano_min").val() != "") {
        costo_min = $("#piano_min").val();
      }
      var piano_max = 0;
      if ($("#piano_max").val() != "") {
        costo_min = $("#piano_max").val();
      }
      var vano_min = 0;
      if ($("#vano_min").val() != "") {
        costo_min = $("#vano_min").val();
      }
      var bagno_min = 0;
      if ($("#bagno_min").val() != "") {
        costo_min = $("#bagno_min").val();
      }
      var camera_letto_min = 0;
      if ($("#camera_letto_min").val() != "") {
        costo_min = $("#camera_letto_min").val();
      }
      var anno_costruzione_min = 0;
      if ($("#anno_costruzione_min").val() != "") {
        costo_min = $("#anno_costruzione_min").val();
      }
      var note = $("#note").val();
      var id_cliente = $("#id_cliente").val();

      var valoriCaratteristiche = $(
        'input[type="checkbox"][name^="caratteristica-"]:checked'
      );
      var caratteristiche = valoriCaratteristiche
        .map(function () {
          return $(this).val();
        })
        .get();

      $.ajax({
        url: "../../../control/archivio/clienti/nuova-richiesta.php",
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
          caratteristiche: caratteristiche,
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
        error: function (xhr, status, error) {
          console.log(xhr.responseText);
        },
      });
    }
    $(this).addClass("was-validated");
  });
});

function aggiungiRigaTipo(select_tipo, tipo_immobile) {
  const optionHtml =
    "<option value='" +
    tipo_immobile.id_tipo_immobile +
    "'>" +
    tipo_immobile.tipo_immobile +
    "</option>";
  select_tipo.append(optionHtml);
}

function aggiungiRigaQuartiere(select_quartiere, quartiere) {
  const optionHtml =
    "<option value='" +
    quartiere.id_quartiere +
    "'>" +
    quartiere.quartiere +
    "</option>";
  select_quartiere.append(optionHtml);
}


function displayNamesAcquisitore(value){
    let acquisitore = document.getElementById("acquisitore");
    acquisitore.value = value;

    removeElementsAcquisitore();
}

function removeElementsAcquisitore(){
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) =>{
        item.remove();
    })
}
