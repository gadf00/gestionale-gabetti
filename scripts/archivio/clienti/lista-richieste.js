$(document).ready(function () {
    var richieste;
    const table = document.querySelector("#richieste-table tbody");
    var id_cliente = $("#id_cliente").val();
    $.ajax({
        url: "../../../control/archivio/clienti/lista-richieste.php",
        method: "GET",
        data: {
            id_cliente: id_cliente,
        },
        dataType: "json",
    })
        .done(function (response) {
            richieste = response;
            richieste.forEach(function (richiesta) {
                aggiungiRigaRichiesta(table, richiesta);
            });
        })
        .fail(function (xhr, status, error) {
            console.log(xhr.responseText);
        });

    $(".elimina-richiesta").click(function () {
        var idRichiesta = $(this).attr("data-id");
        $.post(
            "control/archivio/clienti/elimina-richiesta.php",
            { id: idRichiesta },
            function (response) {
                if (response == "eliminata") {
                    Swal.fire({
                        title: "Richiesta Eliminata!",
                        text: "La richiesta è stata eliminata correttamente!",
                        icon: "success",
                        confirmButtonText: "OK",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                } else if (response == "errore") {
                    Swal.fire({
                        title: "Richiesta non eliminata!",
                        text: "Si è verificato un errore durate l'eliminazione della richiesta",
                        icon: "error",
                        confirmButtonText: "OK",
                    });
                } else {
                    Swal.fire({
                        title: "Richiesta non eliminata!",
                        text: "La richiesta che si vuole eliminare non esiste",
                        icon: "error",
                        confirmButtonText: "OK",
                    });
                }
            }
        );
    });
});

function aggiungiRigaRichiesta(table, richiesta) {
    const row = document.createElement("tr");
    row.innerHTML =
        "<td>" +
        richiesta.id_richiesta +
        "</td>" +
        "<td>" +
        richiesta.tipo_immobile +
        "</td>" +
        "<td>" +
        richiesta.tipo_richiesta +
        "</td>" +
        "<td>" +
        richiesta.localita +
        "</td>" +
        "<td>" +
        (richiesta.costo_min || "") +
        "</td>" +
        "<td>" +
        (richiesta.costo_max || "") +
        "</td>" +
        "<td>" +
        "<div class='dropdown'>" +
        "<button class='btn btn-altblue dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>" +
        "Operazioni" +
        "</button>" +
        "<ul class='dropdown-menu bg-altblue'>" +
        "<li><a href='./control/cliente/redirect-modifica-cliente.php?id=" +
        richiesta.id_cliente +
        "' class='dropdown-item text-white' type='button'>Modifica</a></li>" +
        "<li><button class='elimina-cliente dropdown-item' type='button' data-id='" +
        richiesta.id +
        "'>Elimina</button></li>" +
        "<li><button class='dropdown-item' type='button'>Stampa</button></li>" +
        "<li><button class='dropdown-item' type='button' data-bs-toggle='modal' data-bs-target='#richiesteUtente'>Richieste</button></li>" +
        "<li><button class='dropdown-item' type='button'>Proposte Visite</button></li>" +
        "<li><button class='dropdown-item' type='button'>Invia E-mail</button></li>" +
        "<li><button class='dropdown-item' type='button'>Stampa Scheda</button></li>" +
        "<li><button class='dropdown-item' type='button'>Documenti</button></li>" +
        "<li><button class='dropdown-item' type='button'>Ricerca Immobili</button></li>" +
        "<li><button class='dropdown-item' type='button'>Altri Dati</button></li>" +
        "<li><button class='dropdown-item' type='button'>Contatti</button></li>" +
        "<li><button class='dropdown-item' type='button'>Siti Web</button></li>" +
        "</ul>" +
        "</div>" +
        "</td>";

    table.appendChild(row);
}
