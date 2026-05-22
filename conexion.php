<?php

$servidor = "localhost";

$usuario = "dev_user";

$password = "Dev*2026";

$bd = "italika_sy";

$conexion = mysqli_connect(
    $servidor,
    $usuario,
    $password,
    $bd
);

if(!$conexion){

    die("Error de conexión");

}

?>
