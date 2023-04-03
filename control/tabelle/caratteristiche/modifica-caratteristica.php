<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $id_caratteristica = $_POST['id_caratteristica'];
        $caratteristica = $_POST['caratteristica'];


        $stmt = $db->prepare("UPDATE caratteristica SET caratteristica = ? WHERE id_caratteristica=?");


        try {
            $stmt->execute([
                $caratteristica,
                $id_caratteristica
            ]);
            echo 'Messaggio inserito correttamente!';
          } catch(PDOException $e) {
            echo 'Errore nell\'inserimento del messaggio: ' . $e->getMessage();
            exit;
        }
        $db = null;
?>