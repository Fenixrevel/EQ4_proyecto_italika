<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM refacciones WHERE id=$id";

mysqli_query($conexion,$sql);

header("Location: admin.php");
exit;
?>
