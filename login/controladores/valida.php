
<?php
    session_start();
    include("../persistencia/UsuarioDao.php");
    //Recuperar datos del formulario
    $alias = $_POST["alias"];
    $contrasena = $_POST["contrasena"];

    //Validando usuario
    $usuarioDao= new UsuarioDao();
    $csql = "select * from usuario";
    $result = $usuarioDao->consulta($csql);
    $usuarioValidado = False;

    // Iteramos cada usuario en la BD buscando match entre usuario y contrasena
    while ($usuario = $result->fetch_assoc()) {
        if ($alias == $usuario['alias'] && $contrasena == $usuario['contrasena']) {
            $_SESSION['usr']['nombre'] = $usuario['nombre'];
            $_SESSION['usr']['alias'] = $usuario['alias'];
            $_SESSION['usr']['id'] = $usuario['id'];
            $usuarioValidado = True;
        }
    }

    // Validamos para hacer el siguiente salto de pagina
    if($usuarioValidado){
        $siguiente = '../vista/html/bienvenido.php';
    } else{
        $siguiente = '../vista/html/usuarioerroneo.html';
    }

    header("Location: {$siguiente}");  
?>