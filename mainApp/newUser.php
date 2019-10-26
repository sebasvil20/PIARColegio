<?php
include("conexion.php");
$nombreUser = $_POST['nombreUsuarioNew'];
$userUser = $_POST['userUsuarioNew'];
$contrasenaUser = $_POST['contrasenaUsuarioNew'];

if($nombreUser=="" || $userUser=="" || $contrasenaUser==""){
    echo "Error  -  Todos los datos deben estar llenos";
}
else{
    if($mysqli->query("INSERT INTO usuarios (Nombre,Usuario,Contrasena,Tipo) values ('$nombreUser','$userUser','$contrasenaUser','admin')")){
        header('Location: ../Inicio.php');
    }
    else{
        echo "Error";
        echo $mysqli->error;
    }
}

?>
