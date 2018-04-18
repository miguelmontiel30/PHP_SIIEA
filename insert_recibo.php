<?php
require 'Database.php';

    try{
        $consulta=("Select CURDATE();");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $row = $comando->execute(array());
        
    }catch(\Exception $e){
        echo $e->getMessage();
    }    
?>