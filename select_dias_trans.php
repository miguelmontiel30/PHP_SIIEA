<?php
require 'Database.php';
    $fecha_ini = $_GET['fecha_ini'];
    $fecha_cor = $_GET['fecha_cor'];
    try{
        $consulta=("call select_dias_trans(?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($fecha_ini,$fecha_cor));
 	$row = $comando->fetchAll(PDO::FETCH_ASSOC);
	print json_encode($row);        

    }catch(\Exception $e){
        echo $e->getMessage();
    }

?>