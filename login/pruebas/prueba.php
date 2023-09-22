<?php
    include("../modelo/Usuario.php");

    $empleado = new Usuario();
    
    $empleado->setId(1);
    $empleado->setAlias("TuPadre");
    $empleado->setNombre("Luis Arellano");
    $empleado->setContrasena("wicho");

    echo $empleado->getId()."<br>";
    echo $empleado->getAlias()."<br>";
    echo $empleado->getNombre()."<br>";
    echo $empleado->getContrasena()."<br>";
?>