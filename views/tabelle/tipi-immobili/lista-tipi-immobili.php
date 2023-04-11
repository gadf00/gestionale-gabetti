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
            <p class=" fs-2 fw-bold lh-1 text-textprimary">Tipi Immobili</p>
        </div>
        <div class="mb-4">
            <button class="btn btn-altblue" data-bs-target="#nuovoTipoImmobile" data-bs-toggle="modal">Nuovo Tipo
                Immobile</button>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tipi-immobili-table">
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

    <div class="modal fade" id="nuovoTipoImmobile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="nuovoTipoImmobileLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-altblue" id="nuovoTipoImmobileLabel">Nuovo Tipo Immobile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-4 form-floating needs-validation" novalidate id="nuovo-tipo-immobile">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="tipo_immobile"
                                                    placeholder="Tipo Immobile" pattern="^[\p{L} ]+$" required>
                                                <label for="inputPassword">Tipo</label>
                                                <div class="valid-feedback">
                                                    Inserimento corretto!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Tipo non può essere vuoto, contenere caratteri speciali o numeri.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-altblue text-white">Salva
                                            Richiesta</button>
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
<script src="../../../scripts/tabelle/tipi-immobili/nuovo-tipo-immobile.js"></script>
<script src="../../../scripts/tabelle/tipi-immobili/lista-tipi-immobili.js"></script>

</html>