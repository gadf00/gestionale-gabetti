$(document).ready(function(){
    var clienti;
    const table = document.querySelector('#richieste-table tbody');
 
     $.ajax({
         url: "../../../control/cliente/lista-richieste.php",
         dataType: 'json',
         async: false,
         success: function(response) { 
             richieste = response;
             response.forEach(richiesta =>{
                 aggiungiRigaRichiesta(table,richiesta);
             }
         );
         },
         error: function (xhr, status, error) {
             // Gestisci eventuali errori
             console.log(xhr.responseText);
           },
     });
 

     $('.elimina-richiesta').click(function(){
         var idRichiesta = $(this).attr('data-id');
         $.post('control/archivio/clienti/elimina-richiesta.php',{id:idRichiesta}, function(response){
             if(response == "eliminata"){
                 Swal.fire({
                     title: "Richiesta Eliminata!",
                     text: "La richiesta è stata eliminata correttamente!",
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
                     title: "Richiesta non eliminata!",
                     text: "Si è verificato un errore durate l'eliminazione della richiesta",
                     icon: "error",
                     confirmButtonText: "OK"
                 });
             }
             else{
                 Swal.fire({
                     title: "Richiesta non eliminata!",
                     text: "La richiesta che si vuole eliminare non esiste",
                     icon: "error",
                     confirmButtonText: "OK"
                 });
             }
         })
     })

 });
 
 
 function aggiungiRigaCliente(table,richiesta){
     const row = document.createElement('tr');
     row.innerHTML = 
         "<td>" + richiesta.id_richiesta + "</td>" +
         "<td>" + richiesta.tipo + "</td>" +
         "<td>" + richiesta.tipo_richiesta + "</td>" +
         "<td>" + richiesta.localita + "</td>" +
         "<td>" + (cliente.costo_min || '') + "</td>" +
         "<td>" + (cliente.costo_max || '') + "</td>" +
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