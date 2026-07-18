<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Escolar</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background:linear-gradient(135deg,#4CAF50,#2E7D32);
        }

        .login{
            width:360px;
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0 15px 35px rgba(0,0,0,.3);
            text-align:center;
        }

        .icono{
            font-size:60px;
            margin-bottom:15px;
        }

        h2{
            color:#2E7D32;
            margin-bottom:5px;
        }

        p{
            color:#777;
            margin-bottom:25px;
        }

        input{
            width:100%;
            padding:12px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:15px;
            outline:none;
            transition:.3s;
        }

        input:focus{
            border-color:#4CAF50;
            box-shadow:0 0 5px rgba(76,175,80,.5);
        }

        button{
            width:100%;
            padding:12px;
            margin-top:15px;
            border:none;
            border-radius:8px;
            background:#4CAF50;
            color:white;
            font-size:16px;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#2E7D32;
            transform:scale(1.03);
        }

        .footer{
            margin-top:20px;
            color:#999;
            font-size:13px;
        }

    </style>

</head>
<body>

<div class="login">

    <div class="icono">🧑‍💻</div>

    <h2>Sistema prueba</h2>

    <p>Inicia sesión para continuar</p>

    <form action="login.php" method="POST">

        <input
            type="text"
            name="usuario"
            placeholder="Usuario"
            required
        >

        <input
            type="password"
            name="clave"
            placeholder="Contraseña"
            required
        >

        <button type="submit">
            Iniciar Sesión
        </button>

    </form>

    <div class="footer">
        © 2026 prueba sistema
    </div>

</div>

</body>
</html>