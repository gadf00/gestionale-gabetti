<?php
    session_start();
    include '../../config/dbconfig.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $stmt = $db->prepare("SELECT * FROM cliente WHERE id = ?");
        $stmt->execute([$id]);
        $cliente = $stmt->fetch();
        if($cliente){
            try{
                $stmt = $db->prepare("DELETE FROM cliente WHERE id = ?");
                $stmt->execute([$id]);
                echo "eliminato";
            }
            catch(PDOException $e){
                echo "errore";
            }
        }
        else{
            echo "non esiste";
        }
    }

?>