<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolo Codice Fiscale</title>
    <link rel="stylesheet" href="../../../css/main.min.css">
    <link rel="stylesheet" href="../../../css/style.css">

</head>

<body class="bg-altwhite">
    <?php include('../../components/navbar.php'); ?>

    <div class="container mt-5">
        <div class="mb-4">
            <p class=" fs-2 fw-bold lh-1 text-textprimary">Calcolo Codice Fiscale</p>
        </div>

        <div class="card">
            <div class="card-body">
                <form class="row g-4 form-floating needs-validation" novalidate id="calcolo-codice-fiscale">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="nome" placeholder="Caratteristica" pattern="^[\p{L} ]+$" required>
                                    <label for="caratteristica">Nome</label>
                                    <div class="valid-feedback">
                                        Inserimento corretto!
                                    </div>
                                    <div class="invalid-feedback">
                                        Caratteristica non può essere vuoto, contenere caratteri speciali o
                                        numeri.
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="cognome" placeholder="Caratteristica" pattern="^[\p{L} ]+$" required>
                                    <label for="caratteristica">Cognome</label>
                                    <div class="valid-feedback">
                                        Inserimento corretto!
                                    </div>
                                    <div class="invalid-feedback">
                                        Caratteristica non può essere vuoto, contenere caratteri speciali o
                                        numeri.
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="date" class="form-control" id="data" placeholder="Caratteristica" pattern="^[\p{L} ]+$" required>
                                    <label for="caratteristica">Data di Nascita</label>
                                    <div class="valid-feedback">
                                        Inserimento corretto!
                                    </div>
                                    <div class="invalid-feedback">
                                        Caratteristica non può essere vuoto, contenere caratteri speciali o
                                        numeri.
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sesso" id="maschio" value="M" checked>
                                    <label class="form-check-label" for="maschio">Maschio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sesso" id="femmina" value="F">
                                    <label class="form-check-label" for="femmina">Femmina</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="comune" name="comune" placeholder="Comune di Nascita" required>
                                    <label for="comune">Comune di Nascita</label>
                                    <div class="valid-feedback">
                                        Inserimento corretto!
                                    </div>
                                    <div class="invalid-feedback">
                                        Comune di Nascita non può essere vuoto.
                                    </div>
                                    <div class="result-comune">
                                        <ul class="list"></ul>
                                    </div>
                                    <input type="hidden" id="codice-catastale">
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="codice-fiscale" placeholder="Codice Fiscale" disabled>
                                    <label for="caratteristica">Codice Fiscale</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-altblue text-white">Calcolo Codice Fiscale</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../../papaparse/papaparse.min.js"></script>
<script src="../../../scripts/servizi/codice-fiscale/comune-codice-fiscale.js"></script>
<script src="../../../scripts/servizi/codice-fiscale/calcolo-codice-fiscale.js"></script>
</html>