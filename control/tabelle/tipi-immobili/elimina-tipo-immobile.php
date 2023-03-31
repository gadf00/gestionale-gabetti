<?php
    session_start();
    include '../../../config/dbconfig.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $stmt = $db->prepare("SELECT * FROM tipo_immobile WHERE id_tipo_immobile = ?");
        $stmt->execute([$id]);
        $tipo_immobile = $stmt->fetch();
        if($tipo_immobile){
            try{
                $stmt = $db->prepare("DELETE FROM tipo_immobile WHERE id_tipo_immobiles = ?");
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