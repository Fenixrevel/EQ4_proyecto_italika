<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM refacciones WHERE id=$id";
$resultado = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_assoc($resultado);

if(isset($_POST['actualizar'])){

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "UPDATE refacciones SET
nombre='$nombre',
descripcion='$descripcion',
precio='$precio',
stock='$stock'
WHERE id=$id";

mysqli_query($conexion,$sql);

header("Location: admin.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar registro</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#0a0a0a;
    color:white;
    font-family: Arial;
}


.card-form{
    max-width:500px;
    margin:80px auto;
    background:#111;
    padding:30px;
    border-radius:10px;
    border:1px solid #222;
}


h2{
    color:#ffd60a;
    text-align:center;
    margin-bottom:20px;
}

.form-label{
    color:#ffd60a;
    font-size:13px;
    margin-bottom:5px;
    font-weight:bold;
}


.form-control{
    background:#1a1a1a;
    border:none;
    color:white;
    border-radius:8px;
    padding:10px;
}

.form-control:focus{
    background:#222;
    color:white;
    border:1px solid #ffd60a;
    box-shadow:none;
}


.btn-update{
    background:#ffd60a;
    color:black;
    width:100%;
    font-weight:bold;
    border:none;
    padding:10px;
    border-radius:8px;
}

.btn-update:hover{
    background:#e6c200;
}
</style>
</head>

<body>

<div class="card-form">

<h2>Editar registro</h2>

<form method="POST">

<label class="form-label">Nombre</label>
<input class="form-control mb-3" name="nombre" value="<?= $fila['nombre'] ?>">

<label class="form-label">Descripción</label>
<input class="form-control mb-3" name="descripcion" value="<?= $fila['descripcion'] ?>">

<label class="form-label">Precio</label>
<input class="form-control mb-3" name="precio" value="<?= $fila['precio'] ?>">

<label class="form-label">Cantidad</label>
<input class="form-control mb-3" name="stock" value="<?= $fila['stock'] ?>">

<button class="btn btn-update" name="actualizar">Actualizar</button>

<a href="admin.php" class="btn btn-secondary w-100 mt-2">Cancelar</a>

</form>

</div>

</body>
</html>
