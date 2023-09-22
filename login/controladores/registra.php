<?php
    include("../persistencia/UsuarioDao.php");

    // Construimos el objeto
    $usuarioDao= new UsuarioDao();

    // Recuperamos informacion del formulario
    $nombre = $_POST["nombre"]; 
    $alias = $_POST["alias"];
    $contrasena = $_POST["contrasena"];

    // Creamos consulta con los datos
    $csql = "INSERT INTO `usuario` (`id`, `nombre`, `alias`, `contrasena`)
    VALUES (NULL, '{$nombre}', '{$alias}', '{$contrasena}')";
    
    $result = $usuarioDao->consulta($csql);

    if($result){
        $siguiente = '../vista/html/registroCorrecto.html';
    }else {
        $siguiente = '../vista/html/usuarioerroneo.html';
    }

    header("Location: {$siguiente}");  
?>