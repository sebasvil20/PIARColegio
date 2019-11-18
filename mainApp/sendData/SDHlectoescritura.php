<?php
include("../conexion.php");

$idEstudiante = $_POST['idEstudiante1'];
$idEvaluador= $_POST['idEvualuador1'];
$Fecha = $_POST['Fecha1'];


//Datos de la evaluacion -----------------------
$dato1 = $_POST['hLectoesItem1'];
$dato2 = $_POST['hLectoesItem2'];
$dato3 = $_POST['hLectoesItem3'];
$dato4 = $_POST['hLectoesItem4'];
$dato5 = $_POST['hLectoesItem5'];
$dato6 = $_POST['hLectoesItem6'];
$dato7 = $_POST['hLectoesItem7'];
$dato8 = $_POST['hLectoesItem8'];
$dato9 = $_POST['hLectoesItem9'];
$dato10 = $_POST['hLectoesItem10'];
$dato11 = $_POST['hLectoesItem11'];
$dato12 = $_POST['hLectoesItem12'];
$dato13 = $_POST['hLectoesItem13'];
$dato14 = $_POST['hLectoesItem14'];

//Precisiones de la evaluacion

//Datos de la evaluacion -----------------------
$datoPres1 = $_POST['textAreaPres1'];
$datoPres2 = $_POST['textAreaPres2'];
$datoPres3 = $_POST['textAreaPres3'];
$datoPres4 = $_POST['textAreaPres4'];
$datoPres5 = $_POST['textAreaPres5'];
$datoPres6 = $_POST['textAreaPres6'];
$datoPres7 = $_POST['textAreaPres7'];
$datoPres8 = $_POST['textAreaPres8'];
$datoPres9 = $_POST['textAreaPres9'];
$datoPres10 = $_POST['textAreaPres10'];
$datoPres11 = $_POST['textAreaPres11'];
$datoPres12 = $_POST['textAreaPres12'];
$datoPres13 = $_POST['textAreaPres13'];
$datoPres14 = $_POST['textAreaPres14'];


//Se define el array con los datos para despues acceder a ellos mas facilmente
$dataSet = array($dato1,$dato2,$dato3,$dato4,$dato5,$dato6,$dato7,$dato8,$dato9,$dato10,$dato11,$dato12,$dato13,$dato14);
$dataSetPres = array($datoPres1,$datoPres2,$datoPres3,$datoPres4,$datoPres5,$datoPres6,$datoPres7,$datoPres8,$datoPres9,$datoPres10,$datoPres11,$datoPres12,$datoPres13,$datoPres14);

//Se consulta si el registro del historial ya existe, y dependiendo si la respuesta es falsa o no, se crea uno nuevo o no, despues se ingresan los datos a la db
$consulta="select IdHistorial from thistorialestud where IdIdentificacionEst='$idEstudiante'";
$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error());
if (mysqli_num_rows($resultado)>0)
{
    echo "Existe el historial","<br>";
    while($row=mysqli_fetch_array($resultado)){
        $IdHistorial=$row[0];
    }
    $j = 15;
    for ($i = 0;$i<count($dataSet);$i++){
        if($mysqli->query("INSERT INTO `tdetallehabilidad`(`idDetalleHabilidad`, `idHistorial`, `idDescriptor`, `Valoracion`, `Precisiones`) VALUES ('','$IdHistorial','$j','$dataSet[$i]','$dataSetPres[$i]')")){
            echo "Dato $i se ha ingresado correctamente","<br>";
            $j++;
        }
        else{
            echo "Error, no se ha podido ingresar el dato","<br>";
            echo $mysqli->error;
        }
    }
}
else {
    echo "No se encontro un registro de este estudiante, se creara uno","<br>";
    $consulta2="SELECT MAX(IdHistorial) FROM `thistorialestud`";
    $resultado1=mysqli_query($mysqli,$consulta2) or die (mysqli_error());
    while($row1=mysqli_fetch_array($resultado1)){
        $maxHistorial=$row1[0];
    }
    $maxHistorial[0]=(int)$maxHistorial[0]+1;
    echo "Id del historial: ",$maxHistorial,"<br>";
    if($mysqli->query("INSERT INTO `thistorialestud`(`IdHistorial`, `IdIdentificacionEst`, `IdIdentificacionProf`, `FechaHistoria`) VALUES ('$maxHistorial','$idEstudiante','$idEvaluador','$Fecha')")){
        $j = 15;
        for ($i = 0;$i<count($dataSet);$i++){
            if($mysqli->query("INSERT INTO `tdetallehabilidad`(`idDetalleHabilidad`, `idHistorial`, `idDescriptor`, `Valoracion`, `Precisiones`) VALUES ('','$maxHistorial','$j','$dataSet[$i]','$dataSetPres[$i]')")){
                echo "Dato $i se ha ingresado correctamente","<br>";
                $j++;
            }
            else{
                echo "Error, no se ha podido ingresar el dato","<br>";
                echo $mysqli->error;
            }
        }
    }
    else{
        echo "Error, puede deberse a que el estudiante no esta registrado en la base de datos o el evaluador no esta registrado en la base de datos.","<br>";
        echo $mysqli->error;
    }
}
?>