<?php
include("conexion.php");

$idEstudiante = $_POST['idEstudiante1'];
$idEvaluador= $_POST['idEvualuador1'];
$Fecha = $_POST['Fecha1'];

//Datos de la evaluacion -----------------------
$dato1 = $_POST['atenItem1'];
$dato2 = $_POST['atenItem2'];
$dato3 = $_POST['atenItem3'];
$dato4 = $_POST['atenItem4'];
$dato5 = $_POST['atenItem5'];
$dato6 = $_POST['atenItem6'];
$dato7 = $_POST['atenItem7'];
$dato8 = $_POST['atenItem8'];
$dato9 = $_POST['atenItem9'];
$dato10 = $_POST['atenItem10'];
$dato11= $_POST['atenItem11'];
$dato12 = $_POST['atenItem12'];

$consulta="select IdHistorial from thistorialestud where IdIdentificacionEst='$idEstudiante'";
$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error());
if (mysqli_num_rows($resultado)>0)
{
    echo "Existe el historial";
    while($row=mysqli_fetch_array($resultado)){
        $IdHistorial=$row[0];
    }

}
else {
    echo "No  registro de este estudiante, se creara uno","<br>";
    $consulta2="SELECT MAX(IdHistorial) FROM `thistorialestud`";
    $resultado1=mysqli_query($mysqli,$consulta2) or die (mysqli_error());
    while($row1=mysqli_fetch_array($resultado1)){
        $maxHistorial=$row1[0];
    }
    $maxHistorial[0]=(int)$maxHistorial[0]+1;
    echo "Id del historial: ",$maxHistorial,"<br>";
    if($mysqli->query("INSERT INTO `thistorialestud`(`IdHistorial`, `IdIdentificacionEst`, `IdIdentificacionProf`, `FechaHistoria`) VALUES ('$maxHistorial','$idEstudiante','$idEvaluador','$Fecha')")){
        echo "chido";
    }
    else{
        echo "Error, puede deberse a que el estudiante no esta registrado en la base de datos o el evaluador no esta registrado en la base de datos.","<br>";
        echo $mysqli->error;
    }
}

?>



