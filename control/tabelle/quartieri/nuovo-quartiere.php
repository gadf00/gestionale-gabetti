<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $quartiere = $_POST['quartiere'];

        $stmt = $db->prepare("INSERT INTO quartiere (quartiere) VALUES (?)");


        try {
            $stmt->execute([$quartiere]);
            echo 'Quartiere inserito correttamente!';
          } catch(PDOException $e) {
            echo 'Errore nell\'inserimento del messaggio: ' . $e->getMessage();
            exit;
        }
        $db = null;
?>