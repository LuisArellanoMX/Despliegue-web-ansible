<?php
    session_start();
    // Validar si ya hay una sesion iniciada
    if(isset($_SESSION['usr'])){
        header("Location: vista/html/bienvenido.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/style.css">
    <title>Login</title>
</head>

<body>
    <center>
        <h1>Login</h1>
        <form method="POST" action="./controladores/valida.php">
            <br><br/>Usuario  <input type="text" name="alias" id="alias" required>
            <br><br/>Contraseña  <input type="text" name="contrasena" id="contrasena" required>
            <br><br/><input type="submit" value="Aceptar">
        </form>
        <a href="vista/html/registro.html"><h3>Registrar usuario</h3></a>
    </center>

</body>

</html>