<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $tipo_immobile = $_POST['tipo_immobile'];

        $stmt = $db->prepare("INSERT INTO tipo_immobile (tipo_immobile) VALUES (?)");


        try {
            $stmt->execute([$tipo_immobile]);
            echo 'Tipo Immobile inserito correttamente!';
          } catch(PDOException $e) {
            echo 'Errore nell\'inserimento del messaggio: ' . $e->getMessage();
            exit;
        }
        $db = null;
?>