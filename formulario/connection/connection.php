<?php

$hostname = "localhost"; // 127.0.0.1
$username = "root";
$password = "root";
$database = "mliscam5s_formulario";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection){
    die("Conexión fallida: " . mysqli_connect_error());
}

?>

