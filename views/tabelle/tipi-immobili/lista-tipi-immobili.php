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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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