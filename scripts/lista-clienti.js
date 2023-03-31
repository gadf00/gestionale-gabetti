$(document).ready(function(){
   var clienti;
   const table = document.querySelector('#clienti-table tbody');

    $.ajax({
        url: "../../../control/cliente/lista-clienti.php",
        dataType: 'json',
        async: false,
        success: function(response) { 
            clienti = response;
            response.forEach(cliente =>{
                aggiungiRigaCliente(table,cliente);
            }
        );
        },
        error: function (xhr, status, error) {
            // Gestisci eventuali errori
            console.log(xhr.responseText);
          },
    });


    const ricercaText = document.getElementById('ricerca-text');
    const ricercaStorico = document.getElementById('ricerca-storico');
    const ricercaNo = document.getElementById('ricerca-no');
    const ricercaSi = document.getElementById('ricerca-si');
    const ricercaDallaData = document.getElementById('ricerca-dalladata');
    const ricercaAllaData = document.getElementById('ricerca-alladata');

    let valoreRicerca = '';
    let valoreStorico = 0;
    let valoreNo = true;
    let valoreSi = false;
    let valoreDalla = '';
    let valoreAlla = '';

    $('.elimina-cliente').click(function(){
        var idCliente = $(this).attr('data-id');
        $.post('control/cliente/elimina-cliente.php',{id:idCliente}, function(response){
            if(response == "eliminato"){
                Swal.fire({
                    title: "Cliente eliminato!",
                    text: "Il cliente è stato eliminato correttamente!",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result.isConfirmed) {
                      location.reload();
                    }
                  });
            }
            else if(response == "errore"){
                Swal.fire({
                    title: "Cliente non eliminato!",
                    text: "Si è verificato un errore durate l'eliminazione del cliente",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
            else{
                Swal.fire({
                    title: "Cliente non eliminato!",
                    text: "Il cliente che si vuole eliminare non esiste",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        })
    })


    ricercaText.addEventListener('input', function() {
        valoreRicerca = ricercaText.value;
        gestisciRicerca(table,clienti,valoreRicerca, valoreStorico, valoreNo, valoreDalla, valoreAlla);
    });

    ricercaStorico.addEventListener('input', function() {
        if(ricercaStorico.checked){
            valoreStorico = 1;
        }else{
            valoreStorico = 0;
        }
        gestisciRicerca(table,clienti,valoreRicerca, valoreStorico, valoreNo, valoreDalla, valoreAlla);
    });
    ricercaNo.addEventListener('input', function() {
        valoreNo = ricercaNo.checked;
        gestisciRicerca(table,clienti,valoreRicerca, valoreStorico, valoreNo, valoreDalla, valoreAlla);
    });

    ricercaDallaData.addEventListener('input', function() {
        valoreDalla = ricercaDallaData.value;
        gestisciRicerca(table,clienti,valoreRicerca, valoreStorico, valoreNo, valoreDalla, valoreAlla);
    });
    
    ricercaAllaData.addEventListener('input', function() {
        valoreAlla = ricercaAllaData.value;
        gestisciRicerca(table,clienti,valoreRicerca, valoreStorico, valoreNo, valoreDalla, valoreAlla);
    });
});

function gestisciRicerca(table,clienti,valoreRicerca, valoreStorico, valoreNo, valoreDalla, valoreAlla) {
    table.innerHTML = '';
    clienti.forEach(cliente =>{
        if(cliente.nominativo.toLowerCase().includes(valoreRicerca.toLowerCase()) || valoreRicerca == ""){
            if(cliente.storico == valoreStorico || valoreStorico == false){
                var date1 = new Date(cliente.data_registrazione);
                var date2 = new Date(valoreDalla);
                var date3 = new Date(valoreAlla);
                if(date1 >= date2 || valoreDalla == ''){
                    if(date1 <= date3 || valoreAlla == ''){
                        aggiungiRigaCliente(table,cliente);
                    }
                }
            }
        }  
    });
}


function aggiungiRigaCliente(table,cliente){
    const row = document.createElement('tr');
    row.innerHTML = 
        "<td>" + cliente.id_cliente + "</td>" +
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
                    "<li><a href='./control/cliente/redirect-modifica-cliente.php?id="+cliente.id_cliente+"' class='dropdown-item text-white' type='button'>Modifica</a></li>"+
                    "<li><button class='elimina-cliente dropdown-item' type='button' data-id='"+cliente.id+"'>Elimina</button></li>"+
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
}