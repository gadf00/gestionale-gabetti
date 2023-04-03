<?php
    require_once('../../../config/dbconfig.php');

    // Query per recuperare tutti i clienti

    // Query per recuperare la lista dei clienti
    $sql = "SELECT * FROM caratteristica";
    $stmt = $db->query($sql);
    $caratteristiche = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Imposta l'header della risposta come JSON
    header('Content-Type: application/json');

    $db = null;
    // Restituisci i dati come JSON
    echo json_encode($caratteristiche);

?>