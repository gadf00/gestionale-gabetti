$(document).ready(function() {
  $('#staticBackdrop').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
    $(this).find('form').removeClass('was-validated');
})
    // Aspetta il submit del form
    $('#anagrafica').submit(function(event) {
      (() => {
        'use strict'
      
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
      
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            else{
              form.classList.add('was-validated');
              event.preventDefault();
      
      // Prendi i valori dei campi del form
      var nominativo = $('#nominativo').val();
      var data_registrazione = $('#data_registrazione').val();
      var codice_fiscale = $('#codice_fiscale').val();
      var telefono1 = $('#telefono1').val();
      var cellulare1 = $('#cellulare1').val();
      var cellulare2 = $('#cellulare2').val();
      var email = $('#email').val();
      var mailing = 0;
      var professione = $('#professione').val();
      var acquisitore = $('#acquisitore').val();
      var segnalatore = $('#segnalatore').val();
      var note = $('#note').val();
      var autorizzazione = 0;
      var storico = 0;
      var indirizzo = $('#indirizzo').val();
      var localita = $('#localita').val();
      var cap = $('#cap').val();
      var provincia = $('#provincia').val();


      if($("#storico").is(":checked")){
        storico = 1;
      }
      else{
        storico = 0;
      }

      if($("#autorizzazione").is(":checked")){
        autorizzazione = 1;
      }
      else{
        autorizzazione = 0;
      }

      if($("#mailing").is(":checked")){
        mailing = 1;
      }
      else{
        mailing = 0;
      }

      // Invia una richiesta AJAX al tuo script PHP
      $.ajax({
        url: 'control/cliente/nuovo-cliente.php', // il tuo script PHP che gestisce l'insert
        type: 'POST',
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
        },
        success: function(response) {
          // Gestisci la risposta del server
          $('#staticBackdrop').modal('hide');
          Swal.fire(
            'Aggiunto!',
            'Nuovo cliente aggiunto correttamente!',
            'success'
          );
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Gestisci eventuali errori
          console.log(xhr.responseText);
        }
      });
    }
  }, false)
        })
      })();
      // Impedisci il comportamento di default
      
    });
  });