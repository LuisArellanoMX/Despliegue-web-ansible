<?php
    include("../persistencia/UsuarioDao.php");

    $usuarioDao= new UsuarioDao();
    $csql = "select * from usuario";
    $result = $usuarioDao->consulta($csql);
    

    echo "<h1> Listado de forma inversa...</h1>";
    for($num_fila=$result->num_rows-1; $num_fila >=0; $num_fila--){
        $result->data_seek($num_fila);
        $fila = $result->fetch_assoc();
        echo " id = ".$fila['id']."<br>";
        echo " nombre = ".$fila['nombre']."<br>";
        echo " alias = ".$fila['alias']."<br>";
        echo " nombre = ".$fila['contrasena']."<br>";
        echo "------------------------------------------<br>";
    }

?>