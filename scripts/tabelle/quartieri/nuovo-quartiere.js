$(document).ready(function () {
    $("#nuovoQuartiere").on("hidden.bs.modal", function () {
      $(this).find("form").trigger("reset");
      $(this).find("form").removeClass("was-validated");
    });
    var form = $("#nuovo-quartiere")[0];
    $("#nuovo-quartiere").submit(function (event) {
      event.preventDefault();
      if (!form.checkValidity()) {
        event.stopPropagation();
      } else {
        // Prendi i valori dei campi del form
        var quartiere = $("#quartiere").val();
        // Invia una richiesta AJAX al tuo script PHP
        $.ajax({
          url: "../../../control/tabelle/quartieri/nuovo-quartiere.php", // il tuo script PHP che gestisce l'insert
          type: "POST",
          data: {
            quartiere: quartiere,
          },
          async: false
        })
        .done(function(response){
            console.log(response);
            $("#nuovo-quartiere").modal("hide");
                Swal.fire({
                title: "Quartiere aggiunto!",
                text: "Il Quartiere è stato aggiunto correttamente!",
                icon: "success",
                confirmButtonText: "OK"
                }
            ).then((result) => {
              if (result.isConfirmed) {
                location.reload();
              }
            });
        })
        .fail(function(xhr, status,error){
            console.log(xhr.responseText);
        })
      }
      $(this).addClass("was-validated");
    });
  });
  