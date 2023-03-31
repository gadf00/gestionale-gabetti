$(document).ready(function () {
    $("#nuovoTipoImmobile").on("hidden.bs.modal", function () {
      $(this).find("form").trigger("reset");
      $(this).find("form").removeClass("was-validated");
    });
    var form = $("#nuovo-tipo-immobile")[0];
    $("#nuovo-tipo-immobile").submit(function (event) {
      event.preventDefault();
      if (!form.checkValidity()) {
        event.stopPropagation();
      } else {
        // Prendi i valori dei campi del form
        var tipo_immobile = $("#tipo_immobile").val();
  
        // Invia una richiesta AJAX al tuo script PHP
        $.ajax({
          url: "../../../control/tabelle/tipi-immobili/nuovo-tipo-immobile.php", // il tuo script PHP che gestisce l'insert
          type: "POST",
          data: {
            tipo_immobile: tipo_immobile,
          },
          success: function (response) {
            // Gestisci la risposta del server
            $("#staticBackdrop").modal("hide");
            Swal.fire({
              title: "Cliente aggiunto!",
              text: "Il cliente è stato aggiunto correttamente!",
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
  