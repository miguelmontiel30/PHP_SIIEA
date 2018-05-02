<?php
require 'Database.php';
    $id_user = $_GET['id_user'];
    $date = $_GET['date'];
    $id_tipo = 2;
    try{
        $consulta=("call select_consumo_electrica(?,?,?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($id_user,$date,$id_tipo));
 	$row = $comando->fetchAll(PDO::FETCH_ASSOC);
	print json_encode($row);        

    }catch(\Exception $e){
        echo $e->getMessage();
    }

?>