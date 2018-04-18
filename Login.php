<?php
require 'Database.php';
$contra=$_REQUEST['contra'];
$email=$_REQUEST['email'];

$consulta="select * from usuarios_view where contrasenia=? and email=?";
$comando = Database::getInstance()->getDb()->prepare($consulta);
$comando->execute(array($contra,$email));            // Capturar primera fila del resultado
$row = $comando->fetch(PDO::FETCH_ASSOC);
    
    if($row){
        $datos["estado"] = 1;
        $datos["usuario"] = $row;
        print json_encode($datos);    
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
?>
