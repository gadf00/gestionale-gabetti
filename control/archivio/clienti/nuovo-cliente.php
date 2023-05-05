<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $nominativo = $_POST['nominativo'];
        $data_registrazione = $_POST['data_registrazione'];
        $codice_fiscale = $_POST['codice_fiscale'];
        $telefono = $_POST['telefono'];
        $cellulare1 = $_POST['cellulare1'];
        $cellulare2 = $_POST['cellulare2'];
        $email = $_POST['email'];
        $mailing = isset($_POST['mailing']);
        $professione = $_POST['professione'];
        $acquisitore = $_POST['acquisitore'];
        $segnalatore = $_POST['segnalatore'];
        $note = $_POST['note'];
        $autorizzazione = $_POST['autorizzazione'];
        $storico = $_POST['storico'];
        $indirizzo = $_POST['indirizzo'];
        $localita = $_POST['localita'];
        $cap = $_POST['cap'];
        $provincia = $_POST['provincia'];

        $stmt = $db->prepare("INSERT INTO cliente (nominativo, data_registrazione, codice_fiscale, telefono_fisso, cellulare_1, cellulare_2, email, mailing, professione, acquisitore, segnalatore, note, autorizzazione, storico, indirizzo, localita, cap, provincia) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


        try {
            $stmt->execute([
                $nominativo,
                $data_registrazione,
                $codice_fiscale,
                $telefono,
                $cellulare1,
                $cellulare2,
                $email,
                $mailing,
                $professione,
                $acquisitore,
                $segnalatore,
                $note,
                $autorizzazione,
                $storico,
                $indirizzo,
                $localita,
                $cap,
                $provincia
            ]);
            $cliente_id = $db->lastInsertId();
            $result = array('success' => true,'cliente_id'=>$cliente_id);
            echo json_encode($result);
          } catch(PDOException $e) {
            echo json_encode(array('success' => false, 'error' => 'Errore nell\'inserimento del cliente: ' . $e->getMessage()));
            exit;
        }
        $db = null;
?>