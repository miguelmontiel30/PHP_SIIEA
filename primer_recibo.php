<?php
require 'Database.php';

    $id_user = $_GET['id_user'];
    $fecha = $_GET['fecha'];
    
    try{
        $consulta=("call insert_primer_recibo(?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($id_user,$fecha));
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    echo 'Primer Fecha asignada';
?>