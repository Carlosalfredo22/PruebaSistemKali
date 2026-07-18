<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location:index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#4CAF50,#2E7D32);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .contenedor{
            background:#fff;
            width:420px;
            padding:35px;
            border-radius:12px;
            text-align:center;
            box-shadow:0 10px 25px rgba(0,0,0,.3);
        }

        h1{
            color:#2E7D32;
            margin-bottom:15px;
        }

        p{
            font-size:18px;
            margin-bottom:25px;
            color:#555;
        }

        .usuario{
            color:#4CAF50;
            font-weight:bold;
        }

        .btn{
            display:inline-block;
            text-decoration:none;
            background:#4CAF50;
            color:white;
            padding:12px 25px;
            border-radius:8px;
            transition:.3s;
        }

        .btn:hover{
            background:#2E7D32;
        }

    </style>

</head>
<body>

<div class="contenedor">

    <h1>🧑‍💻Prueba sistema</h1>

    <p>
        Bienvenido,
        <span class="usuario">
            <?php echo $_SESSION['usuario']; ?>
        </span>
    </p>

    <a href="logout.php" class="btn">Cerrar sesión</a>

</div>

</body>
</html>