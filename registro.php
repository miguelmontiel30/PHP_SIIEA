<?php
require 'Database.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $dato = $_REQUEST['data'];
    $option = $_REQUEST['code'];
    if ($option==1){
        $consulta="CALL validacion_producto(?)";
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($dato));
        $row = $comando->fetch(PDO::FETCH_ASSOC); 
    }elseif ($option==2) {
        $consulta="CALL validacion_correo(?)";
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($dato));
        $row = $comando->fetch(PDO::FETCH_ASSOC); 
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
}
?>