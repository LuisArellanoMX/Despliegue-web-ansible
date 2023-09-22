<?php
    include("Usuario.php");

    $empleado = new Usuario();
    
    $empleado->setId(1);
    $empleado->setAlias("TuPadre");
    $empleado->setNombre("Luis Arellano");
    $empleado->setContrasena("wicho");

    echo $empleado->getId();
    echo $empleado->getAlias();
    echo $empleado->getNombre();
    echo $empleado->getContrasena();
?>