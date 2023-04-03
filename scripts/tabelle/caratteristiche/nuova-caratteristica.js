$(document).ready(function () {
    $("#nuovaCaratteristica").on("hidden.bs.modal", function () {
      $(this).find("form").trigger("reset");
      $(this).find("form").removeClass("was-validated");
    });
    var form = $("#nuova-caratteristica")[0];
    $("#nuova-caratteristica").submit(function (event) {
      event.preventDefault();
      if (!form.checkValidity()) {
        event.stopPropagation();
      } else {
        // Prendi i valori dei campi del form
        var caratteristica = $("#caratteristica").val();
  
        // Invia una richiesta AJAX al tuo script PHP
        $.ajax({
          url: "../../../control/tabelle/caratteristiche/nuova-caratteristica.php", // il tuo script PHP che gestisce l'insert
          type: "POST",
          data: {
            caratteristica: caratteristica,
          },
          success: function (response) {
            // Gestisci la risposta del server
            $("#nuovaCaratteristica").modal("hide");
            Swal.fire({
              title: "Caratteristica aggiunta!",
              text: "La Caratteristica è stato aggiunta correttamente!",
              icon: "success",
              confirmButtonText: "OK"
            }
            ).then((result) => {
              if (result.isConfirmed) {
                location.reload();
              }
            });
          },
          error: function (xhr, status, error) {
            // Gestisci eventuali errori
            console.log(xhr.responseText);
          },
        });
      }
      $(this).addClass("was-validated");
    });
  });
  