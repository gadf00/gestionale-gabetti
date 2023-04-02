<?php
    session_start();
    include '../../../config/dbconfig.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $stmt = $db->prepare("SELECT * FROM cliente WHERE id = ?");
        $stmt->execute([$id]);
        $cliente = $stmt->fetch();
        if($cliente){
            try{
                $stmt = $db->prepare("DELETE FROM cliente WHERE id_cliente = ?");
                $stmt->execute([$id]);
                echo "eliminato";
                exit;
            }
            catch(PDOException $e){
                echo $e;
            }
        }
        else{
            echo "non esiste";
        }
    }

?>