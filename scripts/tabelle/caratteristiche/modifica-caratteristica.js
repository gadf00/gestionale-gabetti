$(document).ready(function () {

    $("#modificaCaratteristica").on("hidden.bs.modal", function () {
      $(this).find("form").trigger("reset");
      $(this).find("form").removeClass("was-validated");
    });
    var form = $("#modifica-caratteristica-form")[0];
    $("#modifica-caratteristica-form").submit(function (event) {
      event.preventDefault();
      if (!form.checkValidity()) {
        event.stopPropagation();
      } else {
        // Prendi i valori dei campi del form
        var caratteristica = $("#modifica-caratteristica").val();
        var id_caratteristica = $("#modifica-caratteristica").attr('data-id');
        console.log(id_caratteristica);
        // Invia una richiesta AJAX al tuo script PHP
        $.ajax({
          url: "../../../control/tabelle/caratteristiche/modifica-caratteristica.php", // il tuo script PHP che gestisce l'insert
          type: "POST",
          data: {
            id_caratteristica: id_caratteristica,
            caratteristica: caratteristica,
          },
          success: function (response) {
            // Gestisci la risposta del server
            $("#modificaCaratteristica").modal("hide");
            Swal.fire({
              title: "Caratteristica modificata!",
              text: "La Caratteristica è stato modificata correttamente!",
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
  