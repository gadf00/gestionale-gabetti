<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/main.min.css">
    <link rel="stylesheet" href="../../../css/style.css">

</head>
<body class="bg-altwhite">
  <div class="container-fluid">
    <div class="mt-2 mb-n16 rounded-2 bg-altblue px-1">
      <nav class="navbar navbar-expand-lg mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Gabetti</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Archivio
                </a>
                <ul class="dropdown-menu mt-2">
                  <li><a class="dropdown-item" href="#">Clienti</a></li>
                  <li><a class="dropdown-item" href="#">Proprietari</a></li>
                  <li><a class="dropdown-item" href="#">Immobili</a></li>
                  <li><a class="dropdown-item" href="#">Censimento</a></li>
                  <li><a class="dropdown-item" href="#">Rubrica</a></li>
                  <li><a class="dropdown-item" href="#">Notizie</a></li>
                  <li><a class="dropdown-item" href="#">Pubblicazioni</a></li>
                  <li><a class="dropdown-item" href="#">Mutui</a></li>
                  <li><a class="dropdown-item" href="#">Archivio Documenti</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tabelle
                </a>
                <ul class="dropdown-menu mt-2">
                  <li><a class="dropdown-item" href="#">Acquisitori</a></li>
                  <li><a class="dropdown-item" href="#">Località</a></li>
                  <li><a class="dropdown-item" href="#">Quartieri</a></li>
                  <li><a class="dropdown-item" href="#">Tipi Immobili</a></li>
                  <li><a class="dropdown-item" href="#">Tipi Annunci</a></li>
                  <li><a class="dropdown-item" href="#">Tipi Contatto</a></li>
                  <li><a class="dropdown-item" href="#">Tipi Censimento</a></li>
                  <li><a class="dropdown-item" href="#">Finalità</a></li>
                  <li><a class="dropdown-item" href="#">Società</a></li>
                  <li><a class="dropdown-item" href="#">Concorrenti</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Servizi
                </a>
                <ul class="dropdown-menu mt-2">
                  <li><a class="dropdown-item" href="#">Cose da Fare</a></li>
                  <li><a class="dropdown-item" href="#">Calcolo Codice Fiscale</a></li>
                  <li><a class="dropdown-item" href="#">Agenda</a></li>
                  <li><a class="dropdown-item" href="#">Post It</a></li>
                  <li><a class="dropdown-item" href="#">Messaggi</a></li>
                  <li><a class="dropdown-item" href="#">Opzioni</a></li>
                  <li><a class="dropdown-item" href="#">Gestione Utenti</a></li>
                  <li><a class="dropdown-item" href="#">Cambia Utente</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

    <div class="container mt-5">
        <div class="mb-4">
          <p class=" fs-2 fw-bold lh-1 text-textprimary">Clienti</p>
        </div>
        <div class="card bg-white">
                  <div class="card-header">
                    <ul class="nav nav-pills nav-fill gap-2 p-1 small rounded-2" id="pillNav2" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-2" id="anagrafica-tab" data-bs-toggle="pill" data-bs-target="#pills-anagrafica" type="button" role="tab" aria-controls="pills-anagrafica" aria-selected="true">Anagrafica</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-2" id="altridati-tab" data-bs-toggle="pill" data-bs-target="#pills-altridati" type="button" role="tab" aria-controls="pills-altridati" aria-selected="false">Altri Dati</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-2" id="documenti-tab" data-bs-toggle="pill" data-bs-target="#pills-documenti" type="button" role="tab" aria-controls="pills-documenti" aria-selected="false">Documenti</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-2" id="postit-tab" data-bs-toggle="pill" data-bs-target="#pills-postit" type="button" role="tab" aria-controls="pills-postit" aria-selected="false">Post It</button>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-anagrafica" role="tabpanel" aria-labelledby="anagrafica-tab" tabindex="0">
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
                              <input type="text" class="form-control" name="nominativo" id="nominativo" placeholder="Nominativo Cliente" pattern="^[\p{L} ]+$" required>
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
                              <input type="date" class="form-control" name="data_registrazione" id="data_registrazione" placeholder="Data Registrazione" required pattern="^(?:(?:31\/(?:0?[13578]|1[02]))\/|(?:(?:29|30)\/(?:0?[1,3-9]|1[0-2])\/))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29\/0?2\/(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:16|[2468][048]|[3579][26])00)))$|^(?:0?[1-9]|1\d|2[0-8])\/(?:0?[1-9]|1[0-2])\/(?:(?:1[6-9]|[2-9]\d)?\d{2})$">
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
                              <input type="text" class="form-control" name="indirizzo" id="indirizzo" placeholder="Inserisci Indirizzo" required pattern="^[A-Za-zàèéìòù\s]+(\s+(di|del|della|dei|degli|delle)\s+[A-Za-zàèéìòù\s]+)?(?:,\s*\d{1,4})?([A-Za-z]{0,1}\/[A-Za-z]{0,1}\s*)?$">
                              <label for="indirizzo">Indirizzo</label>
                              <div class="valid-feedback">
                                Inserimento corretto!
                              </div>
                              <div class="invalid-feedback">
                                Indirizzo non può essere vuoto, esempi: "Via Roma 1", "Corso di Porta Ticinese 72/A", "Via Giuseppe Garibaldi, 17".
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="localita" name="localita" placeholder="Inserisci Località" required>
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
                              <input disabled type="text" class="form-control" id="provincia" name="provincia" placeholder="Inserisci Provincia">
                              <label for="provincia">Provincia</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="tel" class="form-control" id="telefono1" name="telefono1" placeholder="Inserisci Telefono 1">
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
                              <input type="text" class="form-control" id="cellulare1" name="cellulare1" placeholder="Inserisci Telefono 2">
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
                              <input type="text" class="form-control" id="cellulare2" name="cellulare2" placeholder="Inserisci Telefono 3">
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
                              <input type="text" class="form-control" id="codice_fiscale" name="codice_fiscale" placeholder="Inserisci Codice Fiscale" required pattern="^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$">
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
                              <input type="text" class="form-control" id="professione" name="professione" placeholder="Inserisci Professione">
                              <label for="professione">Professione</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="acquisitore" name="acquisitore" placeholder="Inserisci Acquisitore">
                              <label for="acquisitore">Acquisitore</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="segnalatore" name="segnalatore" placeholder="Inserisci Segnalatore">
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
                          <div class="col">
                            <button type="submit" class="btn btn-altblue text-white mb-3">
                              Salva Cliente
                            </button>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="pills-altridati" role="tabpanel" aria-labelledby="altridati-tab" tabindex="0">
                        <p class="fs-5 text-altblue">Altri Dati Utente</p>
                      </div>
                      <div class="tab-pane fade" id="pills-documenti" role="tabpanel" aria-labelledby="documenti-tab" tabindex="0">
                        <p class="fs-5 text-altblue">Documenti Utente</p>
                      </div>
                      <div class="tab-pane fade" id="pills-postit" role="tabpanel" aria-labelledby="postit-tab" tabindex="0">
                        <p class="fs-5 text-altblue">Post It Utente</p>
                        <form>
                          <div class="row mb-3 g-3">
                            <div class="col-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
    </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../../papaparse/papaparse.min.js"></script>
    <script src="../../../scripts/read-comuni.js"></script>
    <script src="../../../scripts/nuovo-cliente.js"></script>
</html>