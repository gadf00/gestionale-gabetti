<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $id_cliente = $_POST['id_cliente'];
        $nominativo = $_POST['nominativo'];
        $data_registrazione = $_POST['data_registrazione'];
        $codice_fiscale = $_POST['codice_fiscale'];
        $telefono1 = $_POST['telefono1'];
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

        $stmt = $db->prepare("UPDATE cliente SET nominativo = ?, data_registrazione = ?, codice_fiscale = ?, telefono_fisso = ?, cellulare_1 = ?, cellulare_2 = ?, email = ?, mailing = ?, professione = ?, acquisitore = ?, segnalatore = ?, note = ?, autorizzazione = ?, storico = ?, indirizzo = ?, localita = ?, cap = ?, provincia = ? WHERE id_cliente=?");


        try {
            $stmt->execute([
                $nominativo,
                $data_registrazione,
                $codice_fiscale,
                $telefono1,
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
                $provincia,
                $id_cliente
            ]);
            echo 'Messaggio inserito correttamente!';
          } catch(PDOException $e) {
            echo 'Errore nell\'inserimento del messaggio: ' . $e->getMessage();
            exit;
        }
        $db = null;
?>