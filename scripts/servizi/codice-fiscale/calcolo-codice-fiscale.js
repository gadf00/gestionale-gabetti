$(document).ready(function () {
    var form = $("#calcolo-codice-fiscale")[0];
    $("#calcolo-codice-fiscale").submit(function (event) {
        event.preventDefault();
        if (!form.checkValidity()) {
          event.stopPropagation();
        } else {
            var mesi = {
                1: "A",
                2: "B",
                3: "C",
                4: "D",
                5: "E",
                6: "H",
                7: "L",
                8: "M",
                9: "P",
                10: "R",
                11: "S",
                12: "T",
              };

            var controllo ={
                0: 'A',
                1: 'B',
                2: 'C',
                3: 'D',
                4: 'E',
                5: 'F',
                6: 'G',
                7: 'H',
                8: 'I',
                9: 'J',
                10: 'K',
                11: 'L',
                12: 'M',
                13: 'N',
                14: 'O',
                15: 'P',
                16: 'Q',
                17: 'R',
                18: 'S',
                19: 'T',
                20: 'U',
                21: 'V',
                22: 'W',
                23: 'X',
                24: 'Y',
                25: 'Z'
            }
            var nome = $('#nome').val();
            var cognome = $('#cognome').val();
            var data = $('#data').val();
            var codiceComune = $('#codice-catastale').val();

            var dataNascita = new Date(data);
            var anno = dataNascita.getFullYear().toString().substr(-2);
            var mese = mesi[dataNascita.getMonth() + 1];
            var giorno = dataNascita.getDate().toString().padStart(2, "0");
            if($('#femmina').is(":checked")){
                giorno = (parseInt(giorno) + 40).toString();
            }
            var dataNascitaString = anno + mese + giorno;

            // Sostituiamo le vocali nel nome e cognome con le consonanti successive
            var nomeConsonanti = nome.toUpperCase().replace(/[^BCDFGHJKLMNPQRSTVWXYZ]/g, "");
            if (nomeConsonanti.length < 3) {
              nomeConsonanti = nomeConsonanti + "X".repeat(3 - nomeConsonanti.length);
            }
            var cognomeConsonanti = cognome.toUpperCase().replace(/[^BCDFGHJKLMNPQRSTVWXYZ]/g, "");
            if (cognomeConsonanti.length < 3) {
              cognomeConsonanti = cognomeConsonanti + "X".repeat(3 - cognomeConsonanti.length);
            }
            
            
            // Calcoliamo la cifra di controllo
            var cifreDispari = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var cifrePari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var cifraControllo = 0;
            var cf = "";
            var cfEven = "";
            var cfOdd = "";
            var sum = 0;
            var cifraControllo;
            cf += cognomeConsonanti.substring(0, 3);
            cf += nomeConsonanti.substring(0, 3);
            cf += dataNascitaString;
            cf += codiceComune; // Carattere di controllo temporaneo
            for (var i = 0; i < 15; i += 2) {
                cfEven += cifrePari.charAt(cf.charCodeAt(i) - 65);
                cfOdd += cifreDispari.charAt(cf.charCodeAt(i + 1) - 48);
              }
              for (var i = 0; i < cfEven.length; i++) {
                sum += cifrePari.indexOf(cfEven.charAt(i)) + 10;
              }
              for (var i = 0; i < cfOdd.length; i++) {
                sum += parseInt(cfOdd.charAt(i));
              }
              var cifraControllo = cifreDispari.charAt(sum % 26);
              var lettera = controllo[cifraControllo];
              console.log(cf + lettera);
        }
        $(this).addClass("was-validated");
    });
});