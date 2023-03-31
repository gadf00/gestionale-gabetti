<?php
        require_once('../../../config/dbconfig.php');

        // Ottenimento dei dati dal form
        $tipo_richiesta = $_POST['tipo_richiesta'];
        $tipo = $_POST['tipo'];
        $sotto_tipo_1 = $_POST['sotto_tipo_1'];
        $sotto_tipo_2 = $_POST['sotto_tipo_2'];
        $sotto_tipo_3 = $_POST['sotto_tipo_3'];
        $sotto_tipo_4 = $_POST['sotto_tipo_4'];
        $sotto_tipo_5 = $_POST['sotto_tipo_5'];
        $localita = $_POST['localita'];
        $quartiere_1 = $_POST['quartiere_1'];
        $quartiere_2 = $_POST['quartiere_2'];
        $quartiere_3 = $_POST['quartiere_3'];
        $quartiere_4 = $_POST['quartiere_4'];
        $quartiere_5 = $_POST['quartiere_5'];
        $costo_min = $_POST['costo_min'];
        $costo_max = $_POST['costo_max'];
        $superficie_min = $_POST['superficie_min'];
        $piano_min = $_POST['piano_min'];
        $piano_max = $_POST['piano_max'];
        $vano_min = $_POST['vano_min'];
        $bagno_min = $_POST['bagno_min'];
        $camera_letto_min = $_POST['camera_letto_min'];
        $anno_costruzione_min = $_POST['anno_costruzione_min'];
        $note = $_POST['note'];
        $id_cliente = ['id_cliente'];

        $stmt = $db->prepare("INSERT INTO richiesta (tipo_richiesta, tipo, sotto_tipo_1, sotto_tipo_2, sotto_tipo_3, sotto_tipo_4, sotto_tipo_5, localita, quartiere_1, quartiere_2, quartiere_3, quartiere_4, quartiere_5, costo_min, costo_max, superficie_min, piano_min, piano_max, vano_min, bagno_min, camera_letto_min, anno_costruzione_min, note, id_cliente) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


        try {
            $stmt->execute([
                $tipo_richiesta,
                $tipo,
                $sotto_tipo_1,
                $sotto_tipo_2,
                $sotto_tipo_3,
                $sotto_tipo_4,
                $sotto_tipo_5,
                $localita,
                $quartiere_1,
                $quartiere_2,
                $quartiere_3,
                $quartiere_4,
                $quartiere_5,
                $costo_min,
                $costo_max,
                $superficie_min,
                $piano_min,
                $piano_max,
                $vano_min,
                $bagno_min,
                $camera_letto_min,
                $anno_costruzione_min,
                $note,
                $id_cliente
            ]);
            echo 'Richiesta inserita correttamente!';
          } catch(PDOException $e) {
            echo 'Errore nell\'inserimento del messaggio: ' . $e->getMessage();
            exit;
        }
        $db = null;
?>