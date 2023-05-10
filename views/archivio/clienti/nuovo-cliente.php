<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuovo Cliente</title>
  <link rel="stylesheet" href="../../../css/main.min.css">
  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body class="bg-altwhite">
  <?php include('../../components/navbar.php'); ?>
  <div class="container mt-5">
    <div class="mb-4">
      <p class=" fs-2 fw-bold lh-1 text-textprimary">Nuovo Cliente</p>
    </div>
    <div class="card bg-white">
      <div class="card-header">
        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuemin="0"
          aria-valuemax="100">
          <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" style="width:1%;">
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex gap-2">
          <div id="indietro_anagrafica_div" class="hide">
            <button class="btn btn-altblue text-white mb-3" id="indietro_anagrafica_button"
              type="button">Indietro</button>
          </div>
          <div id="indietro_altri_dati_div" class="hide">
            <button class="btn btn-altblue text-white mb-3" id="indietro_altri_dati_button"
              type="button">Indietro</button>
          </div>
          <div id="indietro_documenti_div" class="hide">
            <button class="btn btn-altblue text-white mb-3" id="indietro_documenti_button"
              type="button">Indietro</button>
          </div>
          <div class="show" id="avanti_altri_dati_div">
            <button class="btn btn-altblue text-white mb-3" id="altri_dati_button" type="button">Avanti</button>
          </div>
          <div id="avanti_documenti_div" class="hide">
            <button class="btn btn-altblue text-white mb-3" id="documenti_button" type="button">Avanti</button>
          </div>
          <div id="avanti_postit_div" class="hide">
            <button class="btn btn-altblue text-white mb-3" id="postit_button" type="button">Avanti</button>
          </div>
          <div class="hide" id="salva_cliente_div">
            <button class="btn btn-altblue text-white mb-3" id="salva_cliente_button" type="button">Salva
              Cliente</button>
          </div>
        </div>
        <div class="show" id="anagrafica_div">
          <p class="fs-5 text-altblue">Anagrafica Utente</p>
          <form class="mb-3 row g-4 form-floating needs-validation" id="anagrafica" novalidate>
            <div class="col-12 m-auto">
              <div class="form-check form-switch mt-4 no">
                <input class="form-check-input" name="storico" type="checkbox" value="1" id="storico">
                <label class="form-check-label" for="storico">
                  Storico
                </label>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="nominativo" id="nominativo"
                  placeholder="Nominativo Cliente" pattern="^[\p{L} ]+$" required>
                <label for="nominativo">Nominativo</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Nominativo non può essere vuoto, contenere caratteri speciali o numeri.
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-floating">
                <input type="date" class="form-control" name="data_registrazione" id="data_registrazione"
                  placeholder="Data Registrazione" required
                  pattern="^(?:(?:31\/(?:0?[13578]|1[02]))\/|(?:(?:29|30)\/(?:0?[1,3-9]|1[0-2])\/))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29\/0?2\/(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:16|[2468][048]|[3579][26])00)))$|^(?:0?[1-9]|1\d|2[0-8])\/(?:0?[1-9]|1[0-2])\/(?:(?:1[6-9]|[2-9]\d)?\d{2})$">
                <label for="data_registrazione">Data Registrazione</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Data Registrazione non può essere vuoto e deve essere del formato gg/mm/aaaa.
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="form-floating">
                <input type="text" class="form-control" name="indirizzo" id="indirizzo"
                  placeholder="Inserisci Indirizzo" required
                  pattern="^[A-Za-zàèéìòù\s]+(\s+(di|del|della|dei|degli|delle)\s+[A-Za-zàèéìòù\s]+)?(?:,\s*\d{1,4})?([A-Za-z]{0,1}\/[A-Za-z]{0,1}\s*)?$">
                <label for="indirizzo">Indirizzo</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Indirizzo non può essere vuoto, esempi: "Via Roma 1", "Corso di Porta Ticinese 72/A", "Via Giuseppe
                  Garibaldi, 17".
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="localita" name="localita" placeholder="Inserisci Località"
                  required>
                <label for="localita">Località</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Località non può essere vuota.
                </div>
                <div class="result-localita">
                  <ul class="list">

                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
              <div class="form-floating">
                <input disabled type="text" class="form-control" id="cap" name="cap" placeholder="Inserisci CAP">
                <label for="cap">CAP</label>
              </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
              <div class="form-floating">
                <input disabled type="text" class="form-control" id="provincia" name="provincia"
                  placeholder="Inserisci Provincia">
                <label for="provincia">Provincia</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="tel" class="form-control" id="telefono1" name="telefono1"
                  placeholder="Inserisci Telefono 1">
                <label for="telefono1">Telefono Fisso</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Formato per Telefono Fisso non valido.
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="cellulare1" name="cellulare1"
                  placeholder="Inserisci Telefono 2">
                <label for="cellulare1">Cellulare 1</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Formato per Cellulare non valido.
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="cellulare2" name="cellulare2"
                  placeholder="Inserisci Telefono 3">
                <label for="cellulare2">Cellulare 2</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Formato per Cellulare non valido.
                </div>
              </div>
            </div>
            <div class="col-md-5 col-12">
              <div class="form-floating">
                <input type="text" class="form-control" id="codice_fiscale" name="codice_fiscale"
                  placeholder="Inserisci Codice Fiscale" required pattern="^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$">
                <label for="codice_fiscale">Codice Fiscale</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Formato Codice Fiscale non valido.
                </div>
              </div>
            </div>
            <div class="col-8 col-md-4">
              <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci Email" required>
                <label for="email">Email</label>
                <div class="valid-feedback">
                  Inserimento corretto!
                </div>
                <div class="invalid-feedback">
                  Formato Email non valido.
                </div>
              </div>
            </div>
            <div class="col-4 col-md-3 d-flex align-items-center">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="mailing" name="mailing">
                <label class="form-check-label" for="mailinig">
                  Mailing
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="professione" name="professione"
                  placeholder="Inserisci Professione">
                <label for="professione">Professione</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="acquisitore" name="acquisitore"
                  placeholder="Inserisci Acquisitore">
                <label for="acquisitore">Acquisitore</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="segnalatore" name="segnalatore"
                  placeholder="Inserisci Segnalatore">
                <label for="segnalatore">Segnalatore</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="note" name="note" placeholder="Inserisci Note">
                <label for="note">Note</label>
              </div>
            </div>
            <div class="col-12 m-auto">
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="1" id="autorizzazione" name="autorizzazione">
                <label class="form-check-label" for="autorizzazione">
                  Autorizzazione concesso al trattamento dei dati personali
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="hide" id="altri_dati_div">
          <p class="fs-5 text-altblue">Altri Dati Utente</p>
          <form id="altri_dati"></form>
        </div>
        <div class="hide" id="documenti_div">
          <p class="fs-5 text-altblue">Documenti Utente</p>
          <form class="needs-validation" novalidate id="documenti">
            <div id="drop-area">
              <h3 class="text-black">Trascina qui i tuoi file o clicca per selezionarli</h3>
              <input type="file" id="fileElem" multiple accept="image/*, audio/*, video/*, application/pdf">
            </div>
          </form>

          <ul id="file-list" class="text-black"></ul>
        </div>
        <div class="hide" id="postit_div">
          <p class="fs-5 text-altblue">Post It Utente</p>
          <form id="postit">
            <div class="row mb-3 g-3">
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Primo Postit" id="primo_postit"
                    style="height: 100px"></textarea>
                  <label for="primo_postit">Primo</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Secondo Postit" id="secondo_postit"
                    style="height: 100px"></textarea>
                  <label for="secondo_postit">Secondo</label>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../../papaparse/papaparse.min.js"></script>
<script src="../../../scripts/archivio/clienti/nuovo-cliente.js"></script>
<script src="../../../scripts/archivio/clienti/tabs-cliente.js"></script>
<script src="../../../scripts/archivio/clienti/comune-cliente.js"></script>
<script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
<script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>


</html>