<?php
require 'Database.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $correo = $_REQUEST['correo'];
        $consulta="CALL seleccion_datos(?)";
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($correo));
        $row = $comando->fetch(PDO::FETCH_ASSOC); 
    
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