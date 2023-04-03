
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
    <?php include('../../components/navbar.php'); ?>

      <div class="container mt-5">
        <div class="mb-4">
          <p class=" fs-2 fw-bold lh-1 text-textprimary">Clienti</p>
        </div>
        <div class="mb-4">
          <a href="nuovo-cliente.php" class="btn btn-altblue text-white">
            Nuovo Cliente
          </a>
        </div>

        <div class="card mb-4 ">
          <div class="card-body">
            <h5 class="card-title text-altblue">Ricerca</h5>
            <form class="form-floating">
              <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 g-2">
                <div class="col">
                  <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Ricerca" id="ricerca-text">
                    <label for="inputPassword">Ricerca</label>
                  </div>
                </div>
                <div class="col m-auto">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="ricerca-storico">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Includi Storico</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" checked id="ricerca-no">
                    <label class="form-check-label" for="flexRadioDefault1">
                      No
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="ricerca-si">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Sì
                    </label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="date" class="form-control" placeholder="Dalla data" id="ricerca-dalladata">
                    <label for="inputPassword">Dalla Data</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="date" class="form-control" placeholder="Alla data" id="ricerca-alladata">
                    <label for="inputPassword">Alla Data</label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card ">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="clienti-table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nominativo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono 1</th>
                    <th scope="col">Telefono 2</th>
                    <th scope="col">Data Reg.</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Operazioni</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider ">
                </tbody>
              </table>
            </div>

          </div>
        </div>

      </div>

      <div class="modal fade" id="richiesteUtente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="richiesteUtenteLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content bg-altprimary">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-altblue" id="richiesteUtenteLabel">Nuovo Cliente</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="card bg-altprimary">
                <div class="card-header">
                  <button class="btn btn-altblue" data-bs-target="#nuovaRichiesta" data-bs-toggle="modal">Nuova Richiesta</button>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Tipo</th>
                          <th scope="col">Fitto/Acq.</th>
                          <th scope="col">Costo Minimo</th>
                          <th scope="col">Costo Massimo</th>
                          <th scope="col">Operazioni</th>
                        </tr>
                      </thead>
                      <tbody class="table-group-divider border-altblue">
                        <tr>
                          <th scope="row">1</th>
                          <td>IMMOBILI RESIDENZIALI</td>
                          <td>Fitto</td>
                          <td>0</td>
                          <td>600</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Operazioni
                              </button>
                              <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Modifica</button></li>
                                <li><button class="dropdown-item" type="button">Elimina</button></li>
                                <li><button class="dropdown-item" type="button">Stampa</button></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="nuovaRichiesta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="nuovaRichiestaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content bg-altprimary">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-altblue" id="nuovaRichiestaLabel">Nuova Richiesta</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="card bg-altprimary">
                <div class="card-body">
                  <p class="fs-5 text-altblue">Richiesta Utente</p>
                  <form class="row g-4 form-floating needs-validation" novalidate>
                    <div class="col-12 col-lg-6">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                            <label class="form-check-label" for="inlineRadio1">In Affitto</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">In Vendita</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Tipo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Sotto Tipo 1</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Sotto Tipo 2</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Sotto Tipo 3</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Sotto Tipo 4</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Sotto Tipo 5</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="richiesta-localita" placeholder="Inserisci Località">
                            <label for="localita">Località</label>
                            <div class="result-localita">
                              <ul id="list-richiesta" class="list">
    
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Quartiere 1</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Quartiere 2</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Quartiere 3</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Quartiere 4</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Quartiere 5</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                          <label class="text-textprimary">Costo</label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Minimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Massimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                          <label class="text-textprimary">Superficie in MQ</label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Minimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                        </div>
                        <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                          <label class="text-textprimary">Piano</label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Minimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Massimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                          <label class="text-textprimary">Vani</label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Minimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                        </div>
                        <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                          <label class="text-textprimary">Bagni</label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Minimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                        </div>
                        <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                          <label class="text-textprimary">Camere Letto</label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Minimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                        </div>
                        <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                          <label class="text-textprimary">Anno Costruzione</label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nominativo Cliente" required>
                            <label for="inputPassword">Minimo</label>
                            <div class="invalid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                          <label for="floatingTextarea2">Note</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="p-3 border rounded-2 border-altdark">
                        <p class="fs-6 text-altblue">Caratteristiche</p>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            POSTO AUTO
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                          <label class="form-check-label" for="flexCheckChecked">
                            GARAGE
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                          <label class="form-check-label" for="flexCheckChecked">
                            TERRAZZO
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                          <label class="form-check-label" for="flexCheckChecked">
                            GIARDINO
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                          <label class="form-check-label" for="flexCheckChecked">
                            RISCALDAMENTO
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-altblue text-white">Salva Richiesta</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../../scripts/archivio/clienti/nuovo-cliente.js"></script>
    <script src="../../../scripts/archivio/clienti/lista-clienti.js"></script>
</html>