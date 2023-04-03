<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caratteristiche</title>
    <link rel="stylesheet" href="../../../css/main.min.css">
    <link rel="stylesheet" href="../../../css/style.css">

</head>

<body class="bg-altwhite">
    <?php include('../../components/navbar.php'); ?>

    <div class="container mt-5">
        <div class="mb-4">
            <p class=" fs-2 fw-bold lh-1 text-textprimary">Caratteristiche</p>
        </div>
        <div class="mb-4">
            <button class="btn btn-altblue" data-bs-target="#nuovaCaratteristica" data-bs-toggle="modal">Nuova
                Caratteristica</button>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="caratteristiche-table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tipo Immobile</th>
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

    <div class="modal fade" id="nuovaCaratteristica" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="nuovaCaratteristicaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-altblue" id="nuovaCaratteristicaLabel">Nuova Caratterstica</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-4 form-floating needs-validation" novalidate id="nuova-caratteristica">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="caratteristica"
                                                    placeholder="Caratteristica" pattern="^[\p{L} ]+$" required>
                                                <label for="caratteristica">Caratteristica</label>
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
            </div>
        </div>
    </div>

    <div class="modal fade" id="modificaCaratteristica" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modificaCaratteristicaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-altblue" id="modificaCaratteristicaLabel">Modifica Caratterstica</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-4 form-floating needs-validation" novalidate id="modifica-caratteristica-form">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-2" id="modifica-caratteristica-div"></div>
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
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../../scripts/tabelle/caratteristiche/nuova-caratteristica.js"></script>
<script src="../../../scripts/tabelle/caratteristiche/lista-caratteristiche.js"></script>
<script src="../../../scripts/tabelle/caratteristiche/modifica-caratteristica.js"></script>
</html>