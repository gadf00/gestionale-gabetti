<?php
    session_start();
    include '../../../config/dbconfig.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $stmt = $db->prepare("SELECT * FROM cliente WHERE id_cliente = ?");
        $stmt->execute([$id]);
        $cliente = $stmt->fetch();
        header("Location: ../../modifica-cliente.php?cliente=".urlencode(json_encode($cliente)));

    }
?>