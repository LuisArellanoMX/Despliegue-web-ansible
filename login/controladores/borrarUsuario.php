<?php
    include("../persistencia/UsuarioDao.php");
    //Recuperar datos del formulario
    $id_eliminar = $_POST["id_eliminar"];

    //Eliminando usuario
    $usuarioDao= new UsuarioDao();
    $csql = "DELETE FROM usuario WHERE id = {$id_eliminar}";
    $result = $usuarioDao->consulta($csql);

    // Validamos para hacer el siguiente salto de pagina
    if($result){
        $siguiente = '../vista/html/borradoCorrecto.html';
    } else{
        $siguiente = '../vista/html/usuarioerroneo.html';
    }

    header("Location: {$siguiente}");
?>