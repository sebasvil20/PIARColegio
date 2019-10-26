<?php
include("conexion.php");
$idEstudiante = $_POST['idenAlumno'];
$nombre = $_POST['NombreAlumno'];
$grado = $_POST['grado'];

if($idEstudiante=="" || $nombre=="" || $grado==""){
    echo "Error  -  Todos los datos deben estar llenos";
}
else{
    if($mysqli->query("INSERT INTO testudiante (IdIdentificacionEst,NombreEst,Grado) values ('$idEstudiante','$nombre','$grado')")){
        header('Location: ../Inicio.php');
    }
    else{
        echo "Error";
        echo $mysqli->error;
    }
}
?>
