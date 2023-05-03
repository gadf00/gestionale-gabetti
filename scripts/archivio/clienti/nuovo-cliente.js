$(document).ready(function () {

  $("#salva_cliente_button").click(function(){
    var anagrafica = ("#anagrafica")[0];
    var altri_dati = ("#altri_dati")[0];
    var documenti = ("#documenti")[0];
    var postit = ("#postit")[0];
    if(anagrafica.checkValidity()){
      var nominativo = $("#nominativo").val();
      var data_registrazione = $("#data_registrazione").val();
      var codice_fiscale = $("#codice_fiscale").val();
      var telefono1 = $("#telefono1").val();
      var cellulare1 = $("#cellulare1").val();
      var cellulare2 = $("#cellulare2").val();
      var email = $("#email").val();
      var mailing = 0;
      var professione = $("#professione").val();
      var acquisitore = $("#acquisitore").val();
      var segnalatore = $("#segnalatore").val();
      var note = $("#note").val();
      var autorizzazione = 0;
      var storico = 0;
      var indirizzo = $("#indirizzo").val();
      var localita = $("#localita").val();
      var cap = $("#cap").val();
      var provincia = $("#provincia").val();
  
      if ($("#storico").is(":checked")) {
        storico = 1;
      } else {
        storico = 0;
      }
  
      if ($("#autorizzazione").is(":checked")) {
        autorizzazione = 1;
      } else {
        autorizzazione = 0;
      }
  
      if ($("#mailing").is(":checked")) {
        mailing = 1;
      } else {
        mailing = 0;
      }

      if(altri_dati.checkValidity()){
        if(documenti.checkValidity()){
          if(postit.checkValidity()){
            $.ajax({
              url: "../../../control/archivio/clienti/nuovo-cliente.php", // il tuo script PHP che gestisce l'insert
              type: "POST",
              data: {
                nominativo: nominativo,
                data_registrazione: data_registrazione,
                codice_fiscale: codice_fiscale,
                telefono: telefono1,
                cellulare1: cellulare1,
                cellulare2: cellulare2,
                email: email,
                mailing: mailing,
                professione: professione,
                acquisitore: acquisitore,
                segnalatore: segnalatore,
                note: note,
                autorizzazione: autorizzazione,
                storico: storico,
                indirizzo: indirizzo,
                localita: localita,
                cap: cap,
                provincia: provincia,
              }

            })
              .done(function(response){
                //altri dati
                $.ajax({

                })
                  .done(function(response){

                  })
                  .fail(function(response){

                  });
              })
              .fail(function(xhr, status, error){
                console.log(xhr.responseText);
              });
          }
        }
      }
    }
  });
});
