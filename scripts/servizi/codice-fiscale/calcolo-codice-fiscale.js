$(document).ready(function () {
    var form = $("#calcolo-codice-fiscale")[0];
    $("#calcolo-codice-fiscale").submit(function (event) {
        event.preventDefault();
        console.log("sium");
        const codiceFiscale = require('codice-fiscale-js');
        if (!form.checkValidity()) {
          event.stopPropagation();
        } else {
            var nomeInput = $('#nome').val();
            var cognomeInput = $('#cognome').val();
            var dataInput = $('#data').val();
            var codiceInput = $('codice-catastale').val();
            var sessoInput = 'M';
            if($('#maschio').is(":checked")){
                sesso = 'M';
            }else if($('#femmina').is(":checked")){
                sesso = 'F';
            }
            const datiPersona = {
                nome: nomeInput,
                cognome: cognomeInput,
                sesso: sessoInput,
                dataNascita: dataInput,
                comuneNascita: 'Avellino',
                provinciaNascita: 'AV'
            };
            const cf = codiceFiscale.calcolaCodiceFiscale(datiPersona);
            console.log(cf);
        }
        $(this).addClass("was-validated");
    });
});