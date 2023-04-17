<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
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
                    <li><a class="dropdown-item" href="../../archivio/clienti/lista-clienti.php">Clienti</a></li>
                    <li><a class="dropdown-item" href="#">Proprietari</a></li>
                    <li><a class="dropdown-item" href="../../archivio/immobili/lista-immobili.php">Immobili</a></li>
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
                    <li><a class="dropdown-item" href="../../tabelle/quartieri/lista-quartieri.php">Quartieri</a></li>
                    <li><a class="dropdown-item" href="../../tabelle/tipi-immobili/lista-tipi-immobili.php">Tipi Immobili</a></li>
                    <li><a class="dropdown-item" href="../../tabelle/caratteristiche/lista-caratteristiche.php">Caratteristiche</a></li>
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
                    <li><a class="dropdown-item" href="../../servizi/codice-fiscale/calcolo-codice-fiscale.php">Calcolo Codice Fiscale</a></li>
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
  </div>
</body>
</html>