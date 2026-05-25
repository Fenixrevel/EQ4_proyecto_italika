<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    LOGIN
                </h2>

                <?php

                if($_POST){

                    $usuario = $_POST['usuario'];
                    $password = $_POST['password'];

                    if(
                        $usuario == "24160773@itoaxaca.edu.mx"
                        &&
                        $password == "Noi6XYFQXD"
                    ){

                        header("Location: admin.php");

                    }else{

                        echo "
                        <div class='alert alert-danger'>
                            Datos incorrectos
                        </div>
                        ";

                    }

                }

                ?>

                <form method="POST">

                    <div class="mb-3">
                        <label>Usuario</label>

                        <input
                            type="email"
                            name="usuario"
                            class="form-control"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label>Contraseña</label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            required
                        >
                    </div>

                    <button
                        type="submit"
                        class="btn btn-warning w-100"
                    >
                        Entrar
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>
