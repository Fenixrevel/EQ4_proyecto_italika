<?php
include("conexion.php");

$sql = "SELECT * FROM refacciones LIMIT 50";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#0a0a0a;
    color:white;
    font-family: Arial, sans-serif;
}

.header{
    padding:25px 40px;
    border-bottom:2px solid #ffd60a;
}

.header h1{
    margin:0;
    font-size:24px;
    color:#ffd60a;
}

.wrapper{
    padding:30px 40px;
}


.card-table{
    background:#111;
    border-radius:10px;
    padding:20px;
    border:1px solid #222;
}


.btn-add{
    background:#ffd60a;
    color:black;
    font-weight:bold;
    border:none;
    padding:8px 14px;
    border-radius:6px;
    margin-bottom:15px;
}

.btn-add:hover{
    background:#e6c200;
}


.table{
    color:white;
    margin-bottom:0;
}

.table thead tr{
    background:#111;
}

.table thead th{
    background:#1a1a1a;
    color:#ffd60a;
    padding:14px;
    font-size:12px;
    text-transform:uppercase;
    letter-spacing:1px;
    border-right:1px solid #2a2a2a;
}

.table thead th:last-child{
    border-right:none;
}


.table tbody tr{
    border-bottom:1px solid #222;
    transition:0.2s;
}


.table tbody tr:hover{
    background:#1f1f1f;
    transform:scale(1.01);
}


.table td{
    padding:12px;
}

.btn-edit{
    background:#ffd60a;
    color:black;
    border:none;
    padding:6px 10px;
    border-radius:5px;
    font-size:13px;
}

.btn-edit:hover{
    background:#e6c200;
}

.btn-delete{
    background:#ff4d4d;
    color:white;
    border:none;
    padding:6px 10px;
    border-radius:5px;
    font-size:13px;
}

.btn-delete:hover{
    background:#d93636;
}
</style>
</head>

<body>

<div class="header">
    <h1>Panel de Administración</h1>
</div>

<div class="wrapper">

<div class="card-table">

<a href="create.php" class="btn btn-add">Nuevo registro</a>

<table class="table">

<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Descripción</th>
<th>Precio</th>
<th>Stock</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>

<tr>
<td><?= $fila['id'] ?></td>
<td><?= $fila['nombre'] ?></td>
<td><?= $fila['descripcion'] ?></td>
<td>$<?= $fila['precio'] ?></td>
<td><?= $fila['stock'] ?></td>

<td>
<a href="edit.php?id=<?= $fila['id'] ?>" class="btn btn-edit">Editar</a>

<a href="delete.php?id=<?= $fila['id'] ?>" class="btn btn-delete"
onclick="return confirm('¿Seguro que deseas eliminar?')">
Eliminar
</a>
</td>

</tr>

<?php } ?>

</tbody>
</table>

</div>

</div>

</body>
</html>
