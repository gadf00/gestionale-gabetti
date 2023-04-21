<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuovo Immobile</title>
  <link rel="stylesheet" href="../../../css/main.min.css">
  <link rel="stylesheet" href="../../../css/style.css">

</head>

<body class="bg-altwhite">
  <?php include('../../components/navbar.php'); ?>
  <div class="container mt-5">
    <div class="mb-4">
      <p class=" fs-2 fw-bold lh-1 text-textprimary">Nuovo Immobile</p>
    </div>
    <div class="card bg-white">
      <div class="card-header">
        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 1%"></div>
        </div>
      </div>
      <div class="card-body">
      <div style="display:block;" id="generale_div">
            <p class="fs-5 text-altblue">Generale</p>
            <form class="mb-3 row g-4 form-floating needs-validation" id="form-nuovo-immobile" novalidate>
              <div class="row g-2">
                <div class="col-6">
                  <div class="row g-2">
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="date" class="form-control" name="data_registrazione" id="data_registrazione" placeholder="Data Registrazione" pattern="^[\p{L} ]+$" required>
                        <label for="data_registrazione">Data Registrazione</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Data registrazione non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="descrizione" id="descrizione" placeholder="Descrizione" pattern="^[\p{L} ]+$" required>
                        <label for="descrizione">Descrizione</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Descrizione non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <select id="select_tipo" class="form-select" aria-label="Tipo Immobile">
                          <option disabled selected>Seleziona Tipo Immobile</option>
                        </select>
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
                        <select id="select_sotto_tipo" class="form-select" aria-label="Sotto Tipo Immobile">
                          <option disabled selected>Seleziona Sotto Tipo Immobile</option>
                        </select>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Tipo non può essere vuoto, contenere caratteri speciali o numeri.
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
                    <div class="col-12">
                      <div class="form-floating mb-2">
                        <select id="select_quartiere" class="form-select" aria-label="Quartiere Immobile">
                          <option disabled selected>Seleziona Quartiere Immobile</option>
                        </select>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Tipo non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="prezzo_fitto" id="prezzo_fitto" placeholder="Prezzo Fitto" pattern="^[\p{L} ]+$" required>
                        <label for="prezzo_fitto">Prezzo Fitto</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Prezzo Fitto non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="prezzo_vendita" id="prezzo_vendita" placeholder="Prezzo Vendita" pattern="^[\p{L} ]+$" required>
                        <label for="prezzo_vendita">Prezzo Vendita</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Prezzo Vendita non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="acquisitore" id="acquisitore" placeholder="Acquisitore" pattern="^[\p{L} ]+$" required>
                        <label for="acquisitore">Acquisitore</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Acquisitore non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                        <div class="result-acquisitore">
                          <ul class="list" id="list-acquisitore">

                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="superficie" id="superficie" placeholder="Superficie" pattern="^[\p{L} ]+$" required>
                        <label for="superficie">Superficie MQ</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Superficie MQ non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="camere_letto" id="camere_letto" placeholder="Camere Letto" pattern="^[\p{L} ]+$" required>
                        <label for="prezzo_vendita">Camere Letto</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Camere Letto non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="piano" id="piano" placeholder="Piano" pattern="^[\p{L} ]+$" required>
                        <label for="piano">Piano</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Piano non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="terrazzi" id="terrazzi" placeholder="Terrazzi" pattern="^[\p{L} ]+$" required>
                        <label for="terrazzi">Terrazzi</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Terrazzi non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="vani" id="vani" placeholder="Vani" pattern="^[\p{L} ]+$" required>
                        <label for="vani">Vani</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Vani non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="mq_terrazzi" id="mq_terrazzi" placeholder="MQ Terrazzi" pattern="^[\p{L} ]+$" required>
                        <label for="mq_terrazzi">MQ Terrazzi</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          MQ Terrazzi non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="bagni" id="bagni" placeholder="Bagni" pattern="^[\p{L} ]+$" required>
                        <label for="bagni">Bagni</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Bagni non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="anno_costruzione" id="anno_costruzione" placeholder="Anno Costruzione" pattern="^[\p{L} ]+$" required>
                        <label for="anno_costruzione">Anno Costruzione</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Anno Costruzione non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="box" id="box" placeholder="Box" pattern="^[\p{L} ]+$" required>
                        <label for="box">Box</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Box non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="perche_vende" id="perche_vende" placeholder="Perché Vende" pattern="^[\p{L} ]+$" required>
                        <label for="perche_vende">Perché Vende</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Perché Vende non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="fonte" id="fonte" placeholder="fonte" pattern="^[\p{L} ]+$" required>
                        <label for="fonte">Fonte</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Fonte non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="sdegnalatore" id="segnalatore" placeholder="Segnalatore" pattern="^[\p{L} ]+$" required>
                        <label for="segnalatore">Segnalatore</label>
                        <div class="valid-feedback">
                          Inserimento corretto!
                        </div>
                        <div class="invalid-feedback">
                          Segnalatore non può essere vuoto, contenere caratteri speciali o numeri.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6"></div>
            </form>
          </div>
          <div class="col">
            <button class="btn btn-altblue text-white mb-3" id="altri_dati_button" type="button">Avanti</button>
          </div>
        <div style="display:none;" id="altri_dati_div">
          <p class="fs-5 text-altblue">Altri Dati</p>
          <form class="mb-3 row g-4 form-floating needs-validation" id="altridati" novalidate>
            <div class="row g-2">
              <div class="col-6">
                <div class="row g-2">
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="tipo_costruzione" id="tipo_costruzione" placeholder="Tipo Costruzione" pattern="^[\p{L} ]+$" required>
                      <label for="tipo_costruzione">Tipo Costruzione</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Tipo Costruzione non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="facciata" id="facciata" placeholder="Facciata" pattern="^[\p{L} ]+$" required>
                      <label for="facciata">Facciata</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Facciata non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="manutenzione" id="manutenzione" placeholder="Manutenzione" pattern="^[\p{L} ]+$" required>
                      <label for="manutenzione">Manutenzione</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Manutenzione non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="soggiorno" id="soggiorno" placeholder="Soggiorno" pattern="^[\p{L} ]+$" required>
                      <label for="soggiorno">Soggiorno</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Soggiorno non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="pavimenti" id="pavimenti" placeholder="Pavimenti" pattern="^[\p{L} ]+$" required>
                      <label for="pavimenti">Pavimenti</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Pavimenti non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="rivestimenti" id="rivestimenti" placeholder="Rivestimenti" pattern="^[\p{L} ]+$" required>
                      <label for="rivestimenti">Rivestimenti</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Rivestimenti non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="riscaldamento" id="riscaldamento" placeholder="Riscaldamento" pattern="^[\p{L} ]+$" required>
                      <label for="riscaldamento">Riscaldamento</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Riscaldamento non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="impianto_elettrico" id="impianto_elettrico" placeholder="Impianto Elettrico" pattern="^[\p{L} ]+$" required>
                      <label for="impianto_elettrico">Impianto Elettrico</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Impianto Elettrico non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="impianto_idrico" id="impianto_idrico" placeholder="Impianto Idrico" pattern="^[\p{L} ]+$" required>
                      <label for="impianto_idrico">Impianto Idrico</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Impianto Idrico non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="impianto_gas" id="impianto_gas" placeholder="Impianto Gas" pattern="^[\p{L} ]+$" required>
                      <label for="impianto_gas">Impianto Gas</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Impianto Gas non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="impianto_anti_incendio" id="impianto_anti_incendio" placeholder="Impianto Anti Incendio" pattern="^[\p{L} ]+$" required>
                      <label for="impianto_anti_incendio">Impianto Anti Incendio</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Impianto Anti Incendio non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="serramenti" id="serramenti" placeholder="Serramenti" pattern="^[\p{L} ]+$" required>
                      <label for="serramenti">Serramenti</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Serramenti non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="condizionamento" id="condizionamento" placeholder="Condizionamento" pattern="^[\p{L} ]+$" required>
                      <label for="condizionamento">Condizionamento</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Condizionamento non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="occupato" id="occupato" placeholder="Occupato" pattern="^[\p{L} ]+$" required>
                      <label for="occupato">Occupato</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Occupato non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="libero" id="libero" placeholder="Libero" pattern="^[\p{L} ]+$" required>
                      <label for="libero">Libero</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Libero non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="orario_visite" id="orario_visite" placeholder="Orario Visite" pattern="^[\p{L} ]+$" required>
                      <label for="orario_visite">Orario Visite</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Orario Visite non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="chiavi_presso" id="chiavi_presso" placeholder="Chiavi Presso" pattern="^[\p{L} ]+$" required>
                      <label for="chiavi_presso">Chiavi Presso</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Chiavi Presso non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="varie" id="varie" placeholder="Varie" pattern="^[\p{L} ]+$" required>
                      <label for="varie">Varie</label>
                      <div class="valid-feedback">
                        Inserimento corretto!
                      </div>
                      <div class="invalid-feedback">
                        Varie non può essere vuoto, contenere caratteri speciali o numeri.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <p class="fs-5 text-black">Annunci</p>
                <div class="row g-2">
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                      <label for="floatingTextarea">Primo</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                      <label for="floatingTextarea">Secondo</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                      <label for="floatingTextarea">Terzo</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="pills-immagini" role="tabpanel" aria-labelledby="immagini-tab" tabindex="0">
          <p class="fs-5 text-altblue">Immagini</p>
        </div>
        <div class="tab-pane fade" id="pills-caratteristiche" role="tabpanel" aria-labelledby="caratteristiche-tab" tabindex="0">
          <p class="fs-5 text-altblue">Caratteristiche</p>
        </div>
        <div class="tab-pane fade" id="pills-importanti" role="tabpanel" aria-labelledby="importanti-tab" tabindex="0">
          <p class="fs-5 text-altblue">Dati Importanti</p>
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
<script src="../../../scripts/archivio/immobili/read-comuni-immobili.js"></script>
<script src="../../../scripts/archivio/immobili/nuovo-immobile.js"></script>
<script src="../../../scripts/archivio/immobili/tabs-immobile.js"></script>

</html>