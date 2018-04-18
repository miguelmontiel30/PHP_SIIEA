<?php

$conexion = mysqli_connect("localhost","id5114403_pablo","12345678","id5114403_savenergy");

$pass = $_POST['pass'];
$correo = $_POST['email'];
$fecha = $_POST['date'];
$id_t = $_POST['tar'];
$id_c = $_POST['cuo'];

$conexion->query("call insert_user($pass,$correo,$fecha,$id_t,$id_c)");

mysqli_close($conexion);

echo "Datos ingresados";

?>
