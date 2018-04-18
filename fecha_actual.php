<?php

    try{

        require_once('Conexion.php');

        $sql_query = "SELECT CURDATE();";

         $result = $conexion->query($sql_query);

        $rows = array();

        while($r = mysqli_fetch_assoc($result)) {

          $rows[] = $r;

    }

    print json_encode($rows);

    }catch(\Exception $e){

        echo $e->getMessage();

    }

    $conexion->close();

    ?>