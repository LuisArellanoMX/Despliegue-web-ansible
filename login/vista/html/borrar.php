<?php
    session_start();
    // Validar si ya hay una sesion iniciada
    if(!isset($_SESSION['usr'])){
        header("Location: ../../index.php");
    }else{
        $usr_sesion = $_SESSION['usr'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_tabla.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Borrar usuario</title>
</head>
<body>
    <center>
        <h1>Borrar usuario</h1>
        <form method="POST" action="../../controladores/borrarUsuario.php">
                <br><br/>Id a eliminar  <input type="number" name="id_eliminar" id="id_eliminar" required>
                <br><br/><input type="submit" value="Borrar">
        </form>

        
        <?php
            
            include_once("../../controladores/mostrarUsuarios.php");

        ?>
        <a href="bienvenido.php"><h3>Atras</h3></a>
    </center>
</body>
</html>