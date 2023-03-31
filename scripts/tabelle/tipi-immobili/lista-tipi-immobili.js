$(document).ready(function(){
    
    var tipi_immobili;
    const table = document.querySelector('#tipi-immobili-table tbody');
 
     $.ajax({
         url: "../../../control/tabelle/tipi-immobili/lista-tipi-immobili.php",
         dataType: 'json',
         async: false,
         success: function(response) { 
             tipi_immobili = response;
             response.forEach(tipo_immobile =>{
                 aggiungiRigaCliente(table,tipo_immobile);
             }
         );
         },
         error: function (xhr, status, error) {
             // Gestisci eventuali errori
             console.log(xhr.responseText);
           },
     });
 
 
     $('.elimina-tipo-immobile').click(function(){
        console.log("sium");
         var id = $(this).attr('data-id');
         $.post('control/tabelle/tipi-immobili/elimina-tipo-immobile.php',{id:id}, function(response){
             if(response == "eliminato"){
                 Swal.fire({
                     title: "Tipo Immobile eliminato!",
                     text: "Il Tipo Immobile è stato eliminato correttamente!",
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
                     title: "Tipo Immobile non eliminato!",
                     text: "Si è verificato un errore durate l'eliminazione del Tipo Immobile",
                     icon: "error",
                     confirmButtonText: "OK"
                 });
             }
             else{
                 Swal.fire({
                     title: "Tipo Immobile non eliminato!",
                     text: "Il Tipo Immobile che si vuole eliminare non esiste",
                     icon: "error",
                     confirmButtonText: "OK"
                 });
             }
         })
     });

     $('.modifica-tipo-immobile').click(function(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: "../../../control/tabelle/tipi-immobili/modifica-tipo-immobile.php", // il tuo script PHP che gestisce l'insert
            type: "POST",
            data: {
                id: id,
                tipo_immobile: tipo_immobile,
            },
            success: function (response) {
              // Gestisci la risposta del server
              $("#staticBackdrop").modal("hide");
              Swal.fire({
                title: "Tipo Immobile modificato!",
                text: "Il Tipo Immobile è stato aggiunto correttamente!",
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
    });
 
 });
 
 function aggiungiRigaCliente(table,tipo_immobile){
     const row = document.createElement('tr');
     row.innerHTML = 
         "<td>" + tipo_immobile.id_tipo_immobile + "</td>" +
         "<td>" + tipo_immobile.tipo_immobile + "</td>" +
         "<td>"+
             "<div class='dropdown'>"+
                 "<button class='btn btn-altblue dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>"+
                     "Operazioni"+
                 "</button>"+
                 "<ul class='dropdown-menu bg-altblue'>"+
                     "<li><button class=' modifica-tipo-immobile dropdown-item text-white' type='button' data-id='"+tipo_immobile.id_tipo_immobile+"'>Modifica</button></li>"+
                     "<li><button class='elimina-tipo-immobile dropdown-item' type='button' data-id='"+tipo_immobile.id_tipo_immobile+"'>Elimina</button></li>"+
                 "</ul>"+
             "</div>"+
         "</td>";
 
     table.appendChild(row);
 }