$(document).ready(function(){
    
    var quartieri;
    const table = document.querySelector('#quartieri-table tbody');
 
     $.ajax({
         url: "../../../control/tabelle/quartieri/lista-quartieri.php",
         dataType: 'json',
         async: false,
         success: function(response) { 
             quartieri = response;
             response.forEach(quartiere =>{
                 aggiungiRigaQuartiere(table,quartiere);
             }
         );
         },
         error: function (xhr, status, error) {
             // Gestisci eventuali errori
             console.log(xhr.responseText);
           },
     });
 
 
     $('.elimina-tipo-immobile').click(function(){
         var id = $(this).attr('data-id');
         $.post('../../../control/tabelle/quartieri/elimina-quartiere.php',{id:id}, function(response){
             if(response == "eliminato"){
                 Swal.fire({
                     title: "Quartiere eliminato!",
                     text: "Il Quartiere è stato eliminato correttamente!",
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
                     title: "Quartiere non eliminato!",
                     text: "Si è verificato un errore durate l'eliminazione del Quartiere",
                     icon: "error",
                     confirmButtonText: "OK"
                 });
             }
             else{
                 Swal.fire({
                     title: "Quartiere non eliminato!",
                     text: "Il Quartiere che si vuole eliminare non esiste",
                     icon: "error",
                     confirmButtonText: "OK"
                 });
             }
         })
     });

     $('.modifica-quartiere').click(function(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: "../../../control/tabelle/quartieri/modifica-quartiere.php", // il tuo script PHP che gestisce l'insert
            type: "POST",
            data: {
                id: id,
                quartiere: quartiere,
            },
            success: function (response) {
              // Gestisci la risposta del server
              $("#nuovo-quartiere").modal("hide");
              Swal.fire({
                title: "Quartiere modificato!",
                text: "Il Quartiere è stato aggiunto correttamente!",
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
 
 function aggiungiRigaQuartiere(table,quartiere){
     const row = document.createElement('tr');
     row.innerHTML = 
         "<td>" + quartiere.id_quartiere + "</td>" +
         "<td>" + quartiere.quartiere + "</td>" +
         "<td>"+
             "<div class='dropdown'>"+
                 "<button class='btn btn-altblue dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>"+
                     "Operazioni"+
                 "</button>"+
                 "<ul class='dropdown-menu bg-altblue'>"+
                     "<li><button class=' modifica-quartiere dropdown-item text-white' type='button' data-id='"+quartiere.id_quartiere+"'>Modifica</button></li>"+
                     "<li><button class='elimina-quartiere dropdown-item' type='button' data-id='"+quartiere.quartiere+"'>Elimina</button></li>"+
                 "</ul>"+
             "</div>"+
         "</td>";
 
     table.appendChild(row);
 }