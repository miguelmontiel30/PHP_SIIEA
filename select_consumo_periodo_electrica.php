<?php
require 'Database.php';
    $id_user = $_GET['id_user'];
    $fecha_ini = $_GET['fecha_ini'];
    $fecha_cor = $_GET['fecha_cor'];
    try{
        $consulta=("call select_consumo_periodo_electrica(?,?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($id_user,$fecha_ini,$fecha_cor));
 	$row = $comando->fetchAll(PDO::FETCH_ASSOC);
	print json_encode($row);        

    }catch(\Exception $e){
        echo $e->getMessage();
    }

?>