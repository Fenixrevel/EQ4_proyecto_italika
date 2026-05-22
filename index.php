<?php
include("conexion.php");

$sql = "SELECT * FROM refacciones LIMIT 6";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Italika Refacciones | Sistema Profesional</title>

    <meta name="description" content="Sistema profesional de refacciones para motocicletas Italika en Oaxaca.">
    <meta name="keywords" content="italika, refacciones, motos, cascos, frenos, llantas">
    <meta name="author" content="Sistema Web">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #050505;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.9);
            border-bottom: 2px solid #ffd60a;
        }

        .navbar-brand {
            color: #ffd60a !important;
            font-weight: 800;
            font-size: 1.5rem;
        }

        .nav-link {
            color: white !important;
            margin-left: 20px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .nav-link:hover {
            color: #ffd60a !important;
        }

        .hero {
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1558981806-ec527fa84c39');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.75);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 4.5rem;
            font-weight: 900;
        }

        .hero-content span {
            color: #ffd60a;
        }

        .hero-content p {
            color: #ccc;
            margin-top: 15px;
        }

        .btn-custom {
            background: #ffd60a;
            color: black;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: bold;
            margin-top: 20px;
            text-decoration: none;
        }

        .section-title {
            text-align: center;
            margin: 60px 0 40px;
            font-size: 2.5rem;
            color: #ffd60a;
            font-weight: bold;
        }

        .card-custom {
            background: #111;
            border: 1px solid #222;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: translateY(-8px);
            border-color: #ffd60a;
        }

        .card-img-container img {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }

        .card-body h3 {
            color: #ffd60a;
        }

        footer {
            background: #000;
            text-align: center;
            padding: 30px;
            margin-top: 80px;
        }
    </style>
</head>

<body>

<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">ITALIKA REFACCIONES</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
            <li class="nav-item"><a class="nav-link" href="#empresa">Empresa</a></li>
        </ul>

        <a href="login.php" class="btn btn-warning fw-bold ms-3">Login</a>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>TU MOTO, <span>NUESTRA PASIÓN</span></h1>
        <p>Sistema profesional de refacciones para motocicletas</p>
        <a href="#productos" class="btn-custom">Ver productos</a>
    </div>
</section>

<!-- PRODUCTOS -->
<section id="productos" class="container">

<h2 class="section-title">PRODUCTOS DESTACADOS</h2>

<div class="row g-4">

<?php
while ($fila = mysqli_fetch_assoc($resultado)) {

    $nombre = strtolower($fila['nombre']);

    if (strpos($nombre, 'casco') !== false) {
        $img = "https://images.unsplash.com/photo-1580341567260-3569b4dc537a?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3...";
    } elseif (strpos($nombre, 'llanta') !== false) {
        $img = "https://images.unsplash.com/photo-1597764699512-8d1b75fdd63a";
    } elseif (strpos($nombre, 'aceite') !== false) {
        $img = "https://images.unsplash.com/photo-1779207092186-9b17b7ed1655";
    } elseif (strpos($nombre, 'freno') !== false) {
        $img = "https://images.unsplash.com/photo-1606907568152-58fcb0a0a4e5";
    } elseif (strpos($nombre, 'motor') !== false) {
        $img = "https://images.unsplash.com/photo-1600269452121-4f2416e55c28";
    } elseif (strpos($nombre, 'bujia') !== false) {
        $img = "https://images.unsplash.com/photo-1596466588448-6e6ceb1da41c";
    } elseif (strpos($nombre, 'cadena') !== false) {
        $img = "https://images.unsplash.com/photo-1588756681780-9d5859fc2ca0";
    } else {
        $img = "https://images.unsplash.com/photo-1591637333184-19aa84b3e01f";
    }
?>

<div class="col-md-4">

<div class="card card-custom">

<div class="card-img-container">
    <img src="<?= $img ?>">
</div>

<div class="card-body p-3">

<h3><?= $fila['nombre'] ?></h3>
<p class="text-secondary"><?= $fila['descripcion'] ?></p>

</div>

</div>

</div>

<?php } ?>

</div>

</section>

<section id="empresa" class="container mt-5">

<h2 class="section-title">NUESTRA EMPRESA</h2>

<div class="row">

<div class="col-md-6">
<h3 class="text-warning">Misión</h3>
<p>Ofrecer productos de calidad y excelente servicio para motociclistas en Oaxaca.</p>
</div>

<div class="col-md-6">
<h3 class="text-warning">Visión</h3>
<p>Ser líderes en distribución de refacciones originales Italika en México.</p>
</div>

</div>

</section>

<!-- FOOTER -->
<footer>
    <p class="text-secondary">© 2026 Italika Refacciones</p>
</footer>

</body>
</html>
