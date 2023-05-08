const CLIENT_ID = '49085586669-jami426l3ejbpot9o45ln368udjf512d.apps.googleusercontent.com';
const API_KEY = 'AIzaSyDXPLNcp8fTvqA-luQ_N2wdZoGqVwNeisU';

// Discovery doc URL for APIs used by the quickstart
const DISCOVERY_DOC = 'https://www.googleapis.com/discovery/v1/apis/drive/v3/rest';

// Authorization scopes required by the API; multiple scopes can be
// included, separated by spaces.
const SCOPES = 'https://www.googleapis.com/auth/drive.file';

let tokenClient;
let gapiInited = false;
let gisInited = false;

$(document).ready(function () {

  $("#salva_cliente_button").click(function(){
    var anagrafica = $("#anagrafica")[0];
    var altri_dati = $("#altri_dati")[0];
    var documenti = $("#documenti")[0];
    var postit = $("#postit")[0];
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
              dataType: "JSON",
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
                console.log("response success " + response.success);
                if(response != null){
                  var id_cliente = response.cliente_id;
                  tokenClient.callback = async (resp) => {
                    console.log(response.success);
                    if (resp.error !== undefined) {
                      throw (resp);
                    }
                    var fileMetadata = {
                      'name': id_cliente,
                      'mimeType': 'application/vnd.google-apps.folder',
                      parents: ['1lHNDrQrkLGTN2N7Z5U3yzzLLTTszhgzj']
                    };
                    gapi.client.drive.files.create({
                      resource: fileMetadata,
                      fields: 'id'
                    }).then(function(response) {
                      $.ajax({
                        url: "../../../control/archivio/clienti/cartella-cliente.php",
                        type: 'POST',
                        data:{
                          id_cartella: response.result.id,
                          id_cliente: id_cliente
                        }
                      }).done(function(response) {
                        if(response == true){
                          console.log("sium");
                        }
                      }).fail(function(response) {
                        console.log(response);
                      });
                    });
                  };
                }
                else if(!response.success){
                  console.log(response);
                }
        
                if (gapi.client.getToken() === null) {
                  // Prompt the user to select a Google Account and ask for consent to share their data
                  // when establishing a new session.
                  tokenClient.requestAccessToken({prompt: 'consent'});
                } else {
                  // Skip display of account chooser and consent dialog for an existing session.
                  tokenClient.requestAccessToken({prompt: ''});
                }
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

function gapiLoaded() {
  gapi.load('client', initializeGapiClient);
}

async function initializeGapiClient() {
  await gapi.client.init({
    apiKey: API_KEY,
    discoveryDocs: [DISCOVERY_DOC],
  });
  gapiInited = true;
}

function gisLoaded() {
  tokenClient = google.accounts.oauth2.initTokenClient({
    client_id: CLIENT_ID,
    scope: SCOPES,
    callback: '', // defined later
  });
  gisInited = true;
}

