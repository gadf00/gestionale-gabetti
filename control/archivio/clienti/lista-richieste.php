<?php
    require_once('../../../config/dbconfig.php');

    // Query per recuperare tutti i clienti

    // Query per recuperare la lista dei clienti
    if(isset($_GET['id_cliente'])){
        $id = $_GET['id_cliente'];
        $stmt = $db->prepare("SELECT * FROM richiesta WHERE id_cliente = ?");
        $stmt->execute([$id]);
        $richieste = $stmt->fetch();
        header("Content-Type: application/json");
        $db = null;
        echo json_encode($richieste);

    }
?>