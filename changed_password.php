<?php
require 'Database.php';
    $pass = $_GET['pass'];
    $id_user = $_GET['id_user'];
    try{
        $consulta=("call changed_pass(?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($id_user,$pass));
        
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    echo 'Cambios realizados!';
?>