<?php
    include("../../persistencia/UsuarioDao.php");

    $usuarioDao= new UsuarioDao();
    $csql = "select * from usuario";
    $result = $usuarioDao->consulta($csql);


    echo "<h2> Lista de usuarios </h2>";
    echo '
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Alias</th>
                </tr>
            </thead>
            <tbody>
            ';

    foreach($result as $fila){
        echo "<tr>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['alias']."</td>";
        echo "</tr>";
    }
    echo "</tbody> </table>"
?>