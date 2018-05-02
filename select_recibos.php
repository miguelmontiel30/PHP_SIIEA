<?php
require 'Database.php';
    $id_user = $_GET['id_user'];
    try{
        $consulta=("call select_recibos(?)");
        $comando = Database::getInstance()->getDb()->prepare($consulta);
        $comando->execute(array($id_user));
 	$row = $comando->fetchAll(PDO::FETCH_ASSOC);
	print json_encode($row);        

    }catch(\Exception $e){
        echo $e->getMessage();
    }
?>