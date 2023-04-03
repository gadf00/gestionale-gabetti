<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $caratteristica = $_POST['caratteristica'];

        $stmt = $db->prepare("INSERT INTO caratteristica (caratteristica) VALUES (?)");


        try {
            $stmt->execute([$caratteristica]);
            echo 'Caratteristica inserita correttamente!';
          } catch(PDOException $e) {
            echo 'Errore nell\'inserimento del messaggio: ' . $e->getMessage();
            exit;
        }
        $db = null;
?>