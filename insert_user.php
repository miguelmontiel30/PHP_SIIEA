<?php
require 'Database.php';
    $pass = $_GET['pass'];
    $correo = $_GET['email'];
    $id_clave = $_GET['clave'];
    $id_t = $_GET['tar'];
    $id_c = $_GET['cuo'];
    try{
        $consulta=("call insert_user(?,?,?,?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($pass,$correo,$id_t,$id_c,$id_clave));
    
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    echo 'Datos registados!';
?>