<?php
require 'Database.php';
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $id_user = $_GET['id_user'];
    try{
        $consulta=("call user_update(?,?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($id_user,$nombre,$correo));
        
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    echo 'Cambios Guardados';
?>