<?php
    require_once('../../config/dbconfig.php');

    // Query per recuperare tutti i clienti
    $stmt = "SELECT * FROM cliente";
    $result = $db->query($stmt);

    // Array per contenere i dati dei clienti
    $clienti = array();

    // Ciclo sui risultati della query
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $cliente = array(
            "id" => $row["id"],
            "nominativo" => $row["nominativo"],
            "data_registrazione" => $row["data_registrazione"],
            "indirizzo" => $row["indirizzo"],
            "localita" => $row["localita"],
            "cap" => $row["cap"],
            "provincia" => $row["provincia"],
            "telefono_fisso" => $row["telefono_fisso"],
            "cellulare_1" => $row["cellulare_1"],
            "cellulare_2" => $row["cellulare_2"],
            "codice_fiscale" => $row["codice_fiscale"],
            "email" => $row["email"],
            "mailing" => $row["mailing"],
            "professione" => $row["professione"],
            "acquisitore" => $row["acquisitore"],
            "segnalatore" => $row["segnalatore"],
            "note" => $row["note"],
            "autorizzazione" => $row["autorizzazione"],
            "storico" => $row["storico"]
            );
            // Aggiungi il cliente all'array
            $clienti[] = $cliente;
        }
    }

    // Chiudi la connessione al database
    $db->close();

    // Converti l'array in JSON
    $json = json_encode($clienti);
?>