$(document).ready(function(){
    $.ajax({
        url: "control/cliente/lista-clienti.php",
        dataType: 'json',
        success: function(response) {
            const table = document.querySelector('#clienti-table tbody');
            
            response.forEach(cliente =>{
                const row = document.createElement('tr');
                row.innerHTML = 
                    "<td>" + cliente.id + "</td>" +
                    "<td>" + cliente.nominativo + "</td>" +
                    "<td>" + cliente.email + "</td>" +
                    "<td>" + cliente.indirizzo + "</td>" +
                    "<td>" + (cliente.telefono_fisso || '') + "</td>" +
                    "<td>" + cliente.cellulare_1 + "</td>" +
                    "<td>" + cliente.data_registrazione + "</td>" +
                    "<td>"+
                        "<div class='dropdown'>"+
                            "<button class='btn btn-altblue dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>"+
                                "Operazioni"+
                            "</button>"+
                            "<ul class='dropdown-menu bg-altblue'>"+
                                "<li><button class='dropdown-item text-white' type='button'>Modifica</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Elimina</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Stampa</button></li>"+
                                "<li><button class='dropdown-item' type='button' data-bs-toggle='modal' data-bs-target='#richiesteUtente'>Richieste</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Proposte Visite</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Invia E-mail</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Stampa Scheda</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Documenti</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Ricerca Immobili</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Altri Dati</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Contatti</button></li>"+
                                "<li><button class='dropdown-item' type='button'>Siti Web</button></li>"+
                            "</ul>"+
                        "</div>"+
                    "</td>";

                    table.appendChild(row);
            });
        },
        error: function (xhr, status, error) {
            // Gestisci eventuali errori
            console.log(xhr.responseText);
          },
    })
});