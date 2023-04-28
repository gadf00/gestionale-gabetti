$(document).ready(function () {
  var form_nuovo_immobile = $("#form-nuovo-immobile")[0];
  var form_altri_dati = $("altri-dati")[0];
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
    url: "../../../control/archivio/clienti/lista-clienti.php",
    dataType: "json",
    async: false,
  }).done(function (response) {
    let acquisitore = document.getElementById("acquisitore");
    acquisitore.addEventListener("keyup", (e) => {
      removeElementsAcquisitore();
      for (let i of response) {
        if (
          i.nominativo
            .toLowerCase()
            .startsWith(acquisitore.value.toLowerCase()) &&
          acquisitore.value != ""
        ) {
          console.log(i.nominativo);
          let listAcquisitori = document.createElement("li");
          listAcquisitori.classList.add("list-items");
          listAcquisitori.style.cursor = "pointer";
          listAcquisitori.setAttribute(
            "onclick",
            "displayNamesAcquisitore('" + i.nominativo + "')"
          );
          let word =
            "<b>" + i.nominativo.substr(0, acquisitore.value.length) + "</b>";
          word += i.nominativo.substr(acquisitore.value.length);
          listAcquisitori.innerHTML = word;
          document
            .querySelector("#list-acquisitore")
            .appendChild(listAcquisitori);
        }
      }
    });
  });

  var caratteristiche;
  const caratteristiche_div = $("#caratteristiche");
  caratteristiche_div.empty();
  $.ajax({
    url: "../../../control/tabelle/caratteristiche/lista-caratteristiche.php",
    dataType: "json",
    async: false,
    success: function (response) {
      caratteristiche = response;
      caratteristiche.forEach((caratteristica) => {
        aggiungiRigaCaratteristica(caratteristiche_div, caratteristica);
      });
    },
    error: function (xhr, status, error) {
      // Gestisci eventuali errori
      console.log(xhr.responseText);
    },
  });

  $("#nuovo-immobile").click(function (event) {
    event.preventDefault();
    if (!form_nuovo_immobile.checkValidity()) {
      event.stopPropagation();
    } else {
      var data_registrazione = $("#data_registrazione").val();
      var descrizione = $("#descrizione").val();
      var select_tipo = $("#select_tipo").val();
      var select_sotto_tipo = $("#select_sotto_tipo").val();
      var indirizzo = $("#indirizzo").val();
      var localita = $("#localita").val();
      var cap = $("#cap").val();
      var select_quartiere = $("#select_quartiere").val();

      var prezzo_fitto = 0.0;
      if ($("#prezzo_fitto").val() != "") {
        prezzo_fitto = $("#prezzo_fitto").val();
      }
      var prezzo_vendita = 0.0;
      if ($("#prezzo_vendita").val() != "") {
        prezzo_vendita = $("#prezzo_vendita").val();
      }

      var acquisitore = $("#acquisitore").val();

      var superficie = 0.0;
      if ($("#superficie").val() != "") {
        superficie = $("#superficie").val();
      }

      var camera_letto = 0;
      if ($("#camere_letto").val() != "") {
        camera_letto = $("#camere_letto").val();
      }
      var piano = 0;
      if ($("#piano").val() != "") {
        piano = $("#piano").val();
      }
      var terrazzi = 0;
      if ($("#terrazzi").val() != "") {
        terrazzi = $("#terrazzi").val();
      }
      var vani = 0;
      if ($("#vani").val() != "") {
        vani = $("#vani").val();
      }
      var mq_terrazzi = 0;
      if ($("#mq_terrazzi").val() != "") {
        mq_terrazzi = $("#mq_terrazzi").val();
      }
      var bagni = 0;
      if ($("#bagni").val() != "") {
        bagni = $("#bagni").val();
      }
      var anno_costruzione = 0;
      if ($("#anno_costruzione").val() != "") {
        anno_costruzione = $("#anno_costruzione").val();
      }

      $.ajax({
        url: "../../../control/archivio/immobili/nuova-immobile.php",
        type: "POST",
        data: {
          data_registrazione: data_registrazione,
          descrizione: descrizione,
          select_tipo: select_tipo,
          select_sotto_tipo: select_sotto_tipo,
          indirizzo: indirizzo,
          localita: localita,
          cap: cap,
          select_quartiere: select_quartiere,
          prezzo_fitto: prezzo_fitto,
          prezzo_vendita: prezzo_vendita,
          acquisitore: acquisitore,
          camera_letto: camera_letto,
          piano: piano,
          terrazzi: terrazzi,
          vani: vani,
          mq_terrazzi: mq_terrazzi,
          bagni: bagni,
          anno_costruzione: anno_costruzione,
        },
        success: function (response) {
          Swal.fire({
            title: "Immobile aggiunto!",
            text: "L'immobile è stata aggiunto correttamente!",
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
    $("#form-nuovo-immobile").addClass("was-validated");
    if (!form_nuovo_immobile.checkValidity()) {
      event.stopPropagation();
    } else {
      console.log("sium");
      var data_registrazione = $("#data_registrazione").val();
      var descrizione = $("#descrizione").val();
      var select_tipp = $("#select_tipo").val();
      var select_sotto_tipo = $("#select_sotto_tipo").val();
      var indirizzo = $("#indirizzo").val();
      var localita = $("#localita").val();
      var cap = $("#cap").val();
      var select_quartiere = $("#select_quartiere").val();

      var prezzo_fitto = 0.0;
      if ($("#prezzo_fitto").val() != "") {
        prezzo_fitto = $("#prezzo_fitto").val();
      }
      var prezzo_vendita = 0.0;
      if ($("#prezzo_vendita").val() != "") {
        prezzo_vendita = $("#prezzo_vendita").val();
      }

      var acquisitore = $("#acquisitore").val();

      var superficie = 0.0;
      if ($("#superficie").val() != "") {
        superficie = $("#superficie").val();
      }

      var camera_letto = 0;
      if ($("#camere_letto").val() != "") {
        camera_letto = $("#camere_letto").val();
      }
      var piano = 0;
      if ($("#piano").val() != "") {
        piano = $("#piano").val();
      }
      var terrazzi = 0;
      if ($("#terrazzi").val() != "") {
        terrazzi = $("#terrazzi").val();
      }
      var vani = 0;
      if ($("#vani").val() != "") {
        vani = $("#vani").val();
      }
      var mq_terrazzi = 0;
      if ($("#mq_terrazzi").val() != "") {
        mq_terrazzi = $("#mq_terrazzi").val();
      }
      var bagni = 0;
      if ($("#bagni").val() != "") {
        bagni = $("#bagni").val();
      }
      var anno_costruzione = 0;
      if ($("#anno_costruzione").val() != "") {
        anno_costruzione = $("#anno_costruzione").val();
      }

      var tipo_costruzione = $("#tipo_costruzione").val();
      var facciata = $("#facciata").val();
      var manutenzione = $("#manutenzione").val();
      var soggiorno = $("#soggiorno").val();
      var pavimenti = $("#pavimenti").val();
      var acquisitore = $("#acquisitore").val();
      var rivestimenti = $("#rivestimenti").val();
      var acquisitore = $("#acquisitore").val();
      var riscaldamento = $("#riscaldamento").val();
      var impianto_elettrico = $("#impianto_elettrico").val();
      var impianto_idrico = $("#impianto_idrico").val();
      var impianto_gas = $("#impianto_gas").val();
      var impianto_anti_incendio = $("#impianto_anti_incendio").val();
      var serramenti = $("#serramenti").val();
      var condizionamento = $("#condizionamento").val();
      var occupato = $("#occupato").val();
      var libero = $("#libero").val();
      var orario_visite = $("#orario_visite").val();
      var chiavi_presso = $("#chiavi_presso").val();
      var varie = $("#varie").val();

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
    $("#form-nuovo-immobile").addClass("was-validated");
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

function displayNamesAcquisitore(value) {
  let acquisitore = document.getElementById("acquisitore");
  acquisitore.value = value;

  removeElementsAcquisitore();
}

function removeElementsAcquisitore() {
  let items = document.querySelectorAll(".list-items");
  items.forEach((item) => {
    item.remove();
  });
}


function aggiungiRigaCaratteristica(caratteristiche_div, caratteristica) {
  const radioHtml =
    "<div class='form-check'>" +
    "<input class='form-check-input' type='checkbox' name='caratteristica-" +
    caratteristica.id_caratteristica +
    "' id='" +
    caratteristica.id_caratteristica +
    "' value='" +
    caratteristica.id_caratteristica +
    "'>" +
    "<label class='form-check-label' for='" +
    caratteristica.id_caratteristica +
    "'>" +
    caratteristica.caratteristica +
    "</label>" +
    "</div>";
  caratteristiche_div.append(radioHtml);
}