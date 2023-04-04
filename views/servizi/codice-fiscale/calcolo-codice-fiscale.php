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
                <form class="row g-4 form-floating needs-validation" novalidate id="nuova-caratteristica">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="caratteristica" placeholder="Caratteristica" pattern="^[\p{L} ]+$" required>
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
                                    <input type="text" class="form-control" id="caratteristica" placeholder="Caratteristica" pattern="^[\p{L} ]+$" required>
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
                                    <input type="date" class="form-control" id="caratteristica" placeholder="Caratteristica" pattern="^[\p{L} ]+$" required>
                                    <label for="caratteristica">Cognome</label>
                                    <div class="valid-feedback">
                                        Inserimento corretto!
                                    </div>
                                    <div class="invalid-feedback">
                                        Caratteristica non può essere vuoto, contenere caratteri speciali o
                                        numeri.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-altblue text-white">Salva
                                Caratteristica</button>
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
<script src="../../../scripts/tabelle/caratteristiche/nuova-caratteristica.js"></script>
<script src="../../../scripts/tabelle/caratteristiche/lista-caratteristiche.js"></script>
<script src="../../../scripts/tabelle/caratteristiche/modifica-caratteristica.js"></script>

</html>