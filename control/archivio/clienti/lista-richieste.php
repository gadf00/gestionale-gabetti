<?php
    require_once('../../../config/dbconfig.php');


    $id_cliente = $_GET['id_cliente'];
    try{
        $stmt = $db->prepare("SELECT richiesta.*, tipo_immobile.tipo_immobile FROM richiesta JOIN tipo_immobile WHERE richiesta.id_tipo_immobile = ? AND richiesta.id_tipo_immobile = tipo_immobile.id_tipo_immobile");
        $stmt->execute([$id_cliente]);
        $richieste = $stmt->fetchAll(PDO::FETCH_ASSOC);
        header("Content-Type: application/json");
        echo json_encode($richieste);
    }
    catch(PDOException $e){
        echo "Error: " .$e->getMessage();
    }
    $db = null;
?>