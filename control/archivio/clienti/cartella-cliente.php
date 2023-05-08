<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $id_cartella = $_POST['id_cartella'];
        $id_cliente = $_POST['id_cliente'];

        $stmt = $db->prepare("UPDATE cliente SET id_cartella = ? WHERE id_cliente=?");


        try {
            $stmt->execute([
                $id_cartella,
                $id_cliente
            ]);
            echo true;
          } catch(PDOException $e) {
            echo 'Errore nell\'inserimento del messaggio: ' . $e->getMessage();
            exit;
        }
        $db = null;
?>