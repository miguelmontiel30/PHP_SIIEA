<?php
require 'Database.php';

    $id_user = '3';
    $volts = $_GET['volts'];
    
    try{
        $consulta=("call insert_consumo_electrica(?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($id_user,$volts));
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    echo 'Volts A�adidos';
?>