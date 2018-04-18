<?php
require 'Database.php';
    try{
        $consulta="select * from cuotas";
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute();
        $row = $comando->fetchAll(PDO::FETCH_ASSOC);
    
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    
    if($row){
        $datos["estado"] = 1;
        $datos["consulta"] = $row;
        print json_encode($datos);   
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
    ?>