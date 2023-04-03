<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Richieste</title>
  <link rel="stylesheet" href="../../../css/main.min.css">
  <link rel="stylesheet" href="../../../css/style.css">

</head>
<?php
$id = $_GET['id'];
?>

<body class="bg-altwhite">
  <input type="hidden" id="id_cliente" value="<?php echo $id ?>">
  <?php include('../../components/navbar.php'); ?>

  <div class="container mt-5">
    <div class="mb-4">
      <p class=" fs-2 fw-bold lh-1 text-textprimary">Clienti</p>
    </div>
    <div class="mb-4">
      <button class="btn btn-altblue" data-bs-target="#nuovaRichiesta" data-bs-toggle="modal">Nuova Richiesta</button>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="richieste-table">
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
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

  <div class="modal fade" id="nuovaRichiesta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="nuovaRichiestaLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-altblue" id="nuovaRichiestaLabel">Nuova Richiesta</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <p class="fs-5 text-altblue">Richiesta Utente</p>
              <form class="row g-4 form-floating needs-validation" novalidate id="nuova-richiesta">
                <div class="col-12 col-lg-6">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" id="vendita" value="option1" checked>
                        <label class="form-check-label" for="vendita">In Vendita</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" id="affitto" value="option2">
                        <label class="form-check-label" for="affitto">In Affitto</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="tipo" placeholder="Tipo" pattern="^[\p{L} ]+$"
                          required>
                        <label for="inputPassword">Tipo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Tipo non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="sotto_tipo_1" placeholder="Sotto Tipo 1"
                          pattern="^[\p{L} ]+$">
                        <label for="inputPassword">Sotto Tipo 1</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Sotto Tipo 1 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="sotto_tipo_2" placeholder="Sotto Tipo 2"
                          pattern="^[\p{L} ]+$">
                        <label for="inputPassword">Sotto Tipo 2</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Sotto Tipo 2 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="sotto_tipo_3" placeholder="Sotto Tipo 3"
                          pattern="^[\p{L} ]+$">
                        <label for="inputPassword">Sotto Tipo 3</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Sotto Tipo 3 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="sotto_tipo_4" placeholder="Sotto Tipo 4"
                          pattern="^[\p{L} ]+$">
                        <label for="inputPassword">Sotto Tipo 4</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Sotto Tipo 4 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="sotto_tipo_5" placeholder="Sotto Tipo 5"
                          pattern="^[\p{L} ]+$">
                        <label for="inputPassword">Sotto Tipo 5</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Sotto Tipo 5 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="localita" placeholder="Località" required>
                        <label for="localita">Località</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Località non può essere vuota.
                        </div>
                        <div class="localita">
                          <ul id="list-richiesta" class="list">

                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="quartiere_1" placeholder="Quartiere 1"
                          pattern="^[\p{L} ]+$">
                        <label for="quartiere_1">Quartiere 1</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Quartiere 1 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="quartiere_2" placeholder="Quartiere 2"
                          pattern="^[\p{L} ]+$">
                        <label for="quartiere_2">Quartiere 2</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Quartiere 2 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="quartiere_3" placeholder="Quartiere 3"
                          pattern="^[\p{L} ]+$">
                        <label for="quartiere_3">Quartiere 3</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Quartiere 3 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="quartiere_4" placeholder="Quartiere 4"
                          pattern="^[\p{L} ]+$">
                        <label for="quartiere_4">Quartiere 4</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Quartiere 4 non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="quartiere_5" placeholder="Quartiere 5"
                          pattern="^[\p{L} ]+$">
                        <label for="quartiere_5">Quartiere 5</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Quartiere 5 non può essere vuoto, contenere caratteri speciali o numeri.
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
                        <input type="text" class="form-control" id="costo_min" placeholder="Nominativo Cliente">
                        <label for="costo_min">Minimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Costo Min non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="costo_max" placeholder="Nominativo Cliente">
                        <label for="costo_max">Massimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Costo Max non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                      <label class="text-textprimary">Superficie in MQ</label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="superficie_min" placeholder="Nominativo Cliente">
                        <label for="superficie_min">Minimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Superficie Min non può essere vuoto, contenere caratteri speciali o numeri.
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
                        <input type="text" class="form-control" id="piano_min" placeholder="Nominativo Cliente">
                        <label for="piano_min">Minimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Piano Min non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="piano_max" placeholder="Nominativo Cliente">
                        <label for="piano_max">Massimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Piano Max non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-4 m-auto d-flex justify-content-center">
                      <label class="text-textprimary">Vani</label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="vano_min" placeholder="Nominativo Cliente">
                        <label for="vano_min">Minimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Vani Min non può essere vuoto, contenere caratteri speciali o numeri.
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
                        <input type="text" class="form-control" id="bagno_min" placeholder="Nominativo Cliente">
                        <label for="bagno_min">Minimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Bagni Min non può essere vuoto, contenere caratteri speciali o numeri.
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
                        <input type="text" class="form-control" id="camera_letto_min" placeholder="Nominativo Cliente">
                        <label for="camera_letto_min">Minimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Camere Letto Min non può essere vuoto, contenere caratteri speciali o numeri.
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
                        <input type="text" class="form-control" id="anno_costruzione_min"
                          placeholder="Nominativo Cliente">
                        <label for="anno_costruzione_min">Minimo</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Anno Costruzione Min non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="note"
                        style="height: 100px"></textarea>
                      <label for="note">Note</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Note non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="p-3 border rounded-2 border-altdark">
                    <p class="fs-6 text-altblue">Caratteristiche</p>
                    <div id="caratteristiche"></div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../../papaparse/papaparse.min.js"></script>
<script src="../../../scripts/archivio/clienti/nuova-richiesta.js"></script>
<script src="../../../scripts/archivio/clienti/lista-richieste.js"></script>
<script src="../../../scripts/read-comuni.js"></script>

</html>