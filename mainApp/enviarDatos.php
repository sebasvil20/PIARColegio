<?php
include("conexion.php");


$consulta="select * from thistorialestud where IdIdentificacionEst='37277849'";
$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error());
if (mysqli_num_rows($resultado)>0)
{
    if($mysqli->query("INSERT INTO tdetallehistlapren (DetalleHistlApren,idHistoria,idItemcat,Valoracion) values ('4','1','1','1')")){
        echo "chido";
    }
    else{
        echo "Error";
        echo $mysqli->error;
    }
} else {
    echo "No existe";
}

?>



