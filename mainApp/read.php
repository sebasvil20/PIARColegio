<?php
session_start();

if(isset($_SESSION['Usuario'])){
}
else{
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="es">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="..Css/mainPageStyles.css">
    <link rel="stylesheet" href="..Css/loadingPageStyles.css">
    <link rel="stylesheet" href="..Css/read.css">
    <link href="https://cdn.anychart.com/releases/builtin-generator/css/anychart-ui.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/builtin-generator/fonts/css/anychart-font.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" type="text/css" rel="stylesheet">
    <script src="Js/loadingPage.js"></script>
    <script src="https://cdn.anychart.com/releases/builtin-generator/js/anychart-base.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
    <script src="https://cdn.anychart.com/releases/builtin-generator/js/anychart-ui.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
    <script src="https://cdn.anychart.com/releases/builtin-generator/js/anychart-exports.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
    <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-base.min.js" type="text/javascript"></script>
    <title>PIAR - Inicio</title>
</head>

<body>
<!--  ---------------------------------------------------------------------- Inicio bloque aprendizajes ---------------------------------------------------------------------------->
<h2>
    Aprendizajes
</h2>
<?php
include("conexion.php");

$idAlumno = $_POST['idenAlumnoBuscar'];
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//Consulta para contar la cantidad de No en el estudiante

$consulta = "SELECT tdetallehistlapren.Valoracion,COUNT(tdetallehistlapren.Valoracion),taprendizajes.NombreAprendizaje,testudiante.NombreEst
FROM testudiante
INNER JOIN thistorialestud
ON
testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
INNER JOIN tdetallehistlapren
ON
tdetallehistlapren.idHistoria=thistorialestud.IdHistorial
INNER JOIN titemscategorias
ON
titemscategorias.idItemCategorias=tdetallehistlapren.idItemcat
INNER JOIN tcategorias
ON
tcategorias.idCategoria=titemscategorias.idCategoria
INNER JOIN taprendizajes
ON
taprendizajes.idAprendizaje=tcategorias.idAprendizaje
WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehistlapren.Valoracion='No' GROUP BY taprendizajes.NombreAprendizaje";

    if($resultado = $mysqli->query($consulta))
    {
        echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Aprendizaje</th>
                <th>Nombre Alumno</th>
              </tr>";
        while ($fila = $resultado->fetch_row()) {
            echo "<tr>
                    <td>$fila[0]</td>
                    <td class='resultados'>$fila[1]</td>
                    <td>$fila[2]</td>
                    <td id='nombre'>$fila[3]</td>
                  </tr>";
        }
    }
    else{
        echo "Error";
        echo $mysqli->error;
    }
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//Consulta para contar la cantidad de Si en el estudiante
    $consulta1 = "SELECT tdetallehistlapren.Valoracion,COUNT(tdetallehistlapren.Valoracion),taprendizajes.NombreAprendizaje,testudiante.NombreEst
    FROM testudiante
    INNER JOIN thistorialestud
    ON
    testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
    INNER JOIN tdetallehistlapren
    ON
    tdetallehistlapren.idHistoria=thistorialestud.IdHistorial
    INNER JOIN titemscategorias
    ON
    titemscategorias.idItemCategorias=tdetallehistlapren.idItemcat
    INNER JOIN tcategorias
    ON
    tcategorias.idCategoria=titemscategorias.idCategoria
    INNER JOIN taprendizajes
    ON
    taprendizajes.idAprendizaje=tcategorias.idAprendizaje
    WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehistlapren.Valoracion='Si' GROUP BY taprendizajes.NombreAprendizaje";

    if($resultado1 = $mysqli->query($consulta1))
    {
        while ($fila1 = $resultado1->fetch_row()) {
            echo "<tr>
                    <td>$fila1[0]</td>
                    <td class='resultados1'>$fila1[1]</td>
                    <td>$fila1[2]</td>
                    <td id='nombre1'>$fila1[3]</td>
                  </tr>";
        }
        echo "</table>";
    }
    else{
        echo "Error";
        echo $mysqli->error;
    }
?>


<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html

    var array1 = [];
    for(let i=0;i<document.getElementsByClassName('resultados').length;i++){
        array1[i] =  document.getElementsByClassName('resultados')[i].innerText;
    }
    console.log(array1)
    var array2 = [];
    for(let i=0;i<document.getElementsByClassName('resultados1').length;i++){
        array2[i] =  document.getElementsByClassName('resultados1')[i].innerText;
    }
    console.log(array2)

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['Atencion', array2[0], array1[0]],
            ['Memoria', array2[1],array1[1]],
            ['Motivacion', array2[2],array1[2]],
            ['Sensoper', array2[3],array1[3]]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1});

        // map data for the second series, take x from the zero column and value from the second column of data set
        var secondSeriesData = dataSet.mapAs({x: 0, value: 2});

        // create bar chart
        var chart = anychart.bar();

        // turn on chart animation
        chart.animation(true);

        chart.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart.title('Grafico aprendizajes de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart.yScale().minimum(0);

        chart.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart.yAxis().title('Cantidad de si y no');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('{%SeriesName} : {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart.bar(firstSeriesData);
        setupSeries(series, 'Si');

        // create second series with mapped data
        series = chart.bar(secondSeriesData);
        setupSeries(series, 'No');

        // turn on legend
        chart.legend()
            .enabled(true)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart.interactivity().hoverMode('single');
        chart.tooltip().positionMode('point');

        // set container id for the chart
        chart.container('gr1');
        // initiate chart drawing
        chart.draw();
    });
</script>

<!--  Contenedor en el que se imprime el bar chart de los aprendizajes  -->


<div id="gr1" style="width: 100%;height: 50vh; margin:auto;">

</div>
<!------------------------------------------------------------------------ Inicio bloque de habilidades basicas matematicas ----------------------------------------------------------------------------->
<h2>
    Habilidades basicas matematicas
</h2>
<?php
include("conexion.php");

$consultaHabilidades1 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='0'  && thabilidades.NombreHabilidad='Basicas matematicas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidades1 = $mysqli->query($consultaHabilidades1))
{
    echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Habilidad</th>
                <th>Nombre Alumno</th>
              </tr>";
    while ($filaHabilidades1 = $resultadoHabilidades1->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidades1[0]</td>
                <td id='resultadosHabilidades1'>$filaHabilidades1[1]</td>
                <td>$filaHabilidades1[2]</td>
                <td id='nombre'>$filaHabilidades1[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidades2 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='1'  && thabilidades.NombreHabilidad='Basicas matematicas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidades2 = $mysqli->query($consultaHabilidades2))
{
    while ($filaHabilidades2 = $resultadoHabilidades2->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidades2[0]</td>
                <td id='resultadosHabilidades2'>$filaHabilidades2[1]</td>
                <td>$filaHabilidades2[2]</td>
                <td>$filaHabilidades2[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidades3 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='2'  && thabilidades.NombreHabilidad='Basicas matematicas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidades3 = $mysqli->query($consultaHabilidades3))
{
    while ($filaHabilidades3 = $resultadoHabilidades3->fetch_row()) {
        echo "
                                      <tr>
                                        <td>$filaHabilidades3[0]</td>
                                        <td id='resultadosHabilidades3'>$filaHabilidades3[1]</td>
                                        <td>$filaHabilidades3[2]</td>
                                        <td>$filaHabilidades3[3]</td>
                                      </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidades4 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='3'  && thabilidades.NombreHabilidad='Basicas matematicas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidades4 = $mysqli->query($consultaHabilidades4))
{
    while ($filaHabilidades4 = $resultadoHabilidades4->fetch_row()) {
        echo "
                  <tr>
                    <td>$filaHabilidades4[0]</td>
                    <td id='resultadosHabilidades4'>$filaHabilidades4[1]</td>
                    <td>$filaHabilidades4[2]</td>
                    <td>$filaHabilidades4[3]</td>
                  </tr>";
    }
    echo "</table>";
}
else{
    echo "Error";
    echo $mysqli->error;
}
?>

<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html
    //Aca no se totalmente como funcionan los colores en las barras, pero en una de todos mis intentos salio, y lo deje asi :(
    var valoracion0Habilidad1 = document.getElementById('resultadosHabilidades1').innerText;
    var valoracion1Habilidad1 = document.getElementById('resultadosHabilidades2').innerText;
    var valoracion2Habilidad1 = document.getElementById('resultadosHabilidades3').innerText;
    var valoracion3Habilidad1 = document.getElementById('resultadosHabilidades4').innerText;

    console.log(valoracion0Habilidad1,valoracion1Habilidad1,valoracion2Habilidad1,valoracion3Habilidad1);

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['0', valoracion0Habilidad1, "#5cd65c"],
            ['1', valoracion1Habilidad1,"#ff5555"],
            ['2', valoracion2Habilidad1,"#1296bd"],
            ['3', valoracion3Habilidad1,"#b86eec"]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1,fill: 2});

        // create bar chart
        var chart2 = anychart.bar();

        // turn on chart animation
        chart2.animation(true);

        chart2.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart2.title('Grafico habilidades basicas matematicas de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart2.yScale().minimum(0);

        chart2.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart2.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart2.yAxis().title('Cantidad numerica por valoracion (0,1,2,3)');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('Numero de veces obtenida {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart2.bar(firstSeriesData);
        setupSeries(series, '');

        // turn on legend
        chart2.legend()
            .enabled(false)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart2.interactivity().hoverMode('single');
        chart2.tooltip().positionMode('point');

        // set container id for the chart
        chart2.container('gr2');
        // initiate chart drawing
        chart2.draw();
    });
</script>

<!-- Contenedor habilidades matematicas barchart -->

<div id="gr2" style="width: 100%;height: 50vh; margin:auto;">
</div>

<!--  ---------------------------------------------------------------------- Fin bloque habilidades basicas matematicas ---------------------------------------------------------------------------->






<!------------------------------------------------------------------------ Inicio bloque de habilidades basicas lectoescritura ----------------------------------------------------------------------------->
<h2>
    Habilidades basicas de lectoescritura
</h2>
<?php
include("conexion.php");

$consultaHabilidadesLecto1 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='0'  && thabilidades.NombreHabilidad='Basicas de lectoescritura' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesLecto1 = $mysqli->query($consultaHabilidadesLecto1))
{
    echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Habilidad</th>
                <th>Nombre Alumno</th>
              </tr>";
    while ($filaHabilidadesLecto1 = $resultadoHabilidadesLecto1->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesLecto1[0]</td>
                <td id='resultadosHabilidadesLecto1'>$filaHabilidadesLecto1[1]</td>
                <td>$filaHabilidadesLecto1[2]</td>
                <td id='nombre'>$filaHabilidadesLecto1[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesLecto2 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='1'  && thabilidades.NombreHabilidad='Basicas de lectoescritura' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesLecto2 = $mysqli->query($consultaHabilidadesLecto2))
{
    while ($filaHabilidadesLecto2 = $resultadoHabilidadesLecto2->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesLecto2[0]</td>
                <td id='resultadosHabilidadesLecto2'>$filaHabilidadesLecto2[1]</td>
                <td>$filaHabilidadesLecto2[2]</td>
                <td>$filaHabilidadesLecto2[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesLecto3 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='2'  && thabilidades.NombreHabilidad='Basicas de lectoescritura' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesLecto3 = $mysqli->query($consultaHabilidadesLecto3))
{
    while ($filaHabilidadesLecto3 = $resultadoHabilidadesLecto3->fetch_row()) {
        echo "
                                      <tr>
                                        <td>$filaHabilidadesLecto3[0]</td>
                                        <td id='resultadosHabilidadesLecto3'>$filaHabilidadesLecto3[1]</td>
                                        <td>$filaHabilidadesLecto3[2]</td>
                                        <td>$filaHabilidadesLecto3[3]</td>
                                      </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesLecto4 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='3'  && thabilidades.NombreHabilidad='Basicas de lectoescritura' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesLecto4 = $mysqli->query($consultaHabilidadesLecto4))
{
    while ($filaHabilidadesLecto4 = $resultadoHabilidadesLecto4->fetch_row()) {
        echo "
                  <tr>
                    <td>$filaHabilidadesLecto4[0]</td>
                    <td id='resultadosHabilidadesLecto4'>$filaHabilidadesLecto4[1]</td>
                    <td>$filaHabilidadesLecto4[2]</td>
                    <td>$filaHabilidadesLecto4[3]</td>
                  </tr>";
    }
    echo "</table>";
}
else{
    echo "Error";
    echo $mysqli->error;
}
?>

<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html
    //Aca no se totalmente como funcionan los colores en las barras, pero en una de todos mis intentos salio, y lo deje asi :(
    //En este comentario explico la nomenclatura de esta parte del js,   valoracion + (El numero de la valoracion que son 0,1,2,3) + Habilidad + (El numero de habilidad, basicas matematicas es la habilidad 1, basicas lectoescritura es la 2, etc)
    var valoracion0Habilidad2 = document.getElementById('resultadosHabilidadesLecto1').innerText;
    var valoracion1Habilidad2 = document.getElementById('resultadosHabilidadesLecto2').innerText;
    var valoracion2Habilidad2 = document.getElementById('resultadosHabilidadesLecto3').innerText;
    var valoracion3Habilidad2 = document.getElementById('resultadosHabilidadesLecto4').innerText;

    console.log(valoracion0Habilidad1,valoracion1Habilidad1,valoracion2Habilidad1,valoracion3Habilidad1);

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['0', valoracion0Habilidad2, "#5cd65c"],
            ['1', valoracion1Habilidad2,"#ff5555"],
            ['2', valoracion2Habilidad2,"#1296bd"],
            ['3', valoracion3Habilidad2,"#b86eec"]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1,fill: 2});

        // create bar chart
        var chart3 = anychart.bar();

        // turn on chart animation
        chart3.animation(true);

        chart3.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart3.title('Grafico habilidades basicas de lectoescritura de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart3.yScale().minimum(0);

        chart3.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart3.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart3.yAxis().title('Cantidad numerica por valoracion (0,1,2,3)');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('Numero de veces obtenida {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart3.bar(firstSeriesData);
        setupSeries(series, '');

        // turn on legend
        chart3.legend()
            .enabled(false)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart3.interactivity().hoverMode('single');
        chart3.tooltip().positionMode('point');

        // set container id for the chart
        chart3.container('gr3');
        // initiate chart drawing
        chart3.draw();
    });
</script>

<!-- Contenedor habilidades lectoescritura barchart -->

<div id="gr3" style="width: 100%;height: 50vh; margin:auto;">
</div>

<!--  ---------------------------------------------------------------------- Fin bloque habilidades basicas de lectoescritura ---------------------------------------------------------------------------->







<!------------------------------------------------------------------------ Inicio bloque de habilidades basicas Cognitivas ----------------------------------------------------------------------------->
<h2>
    Habilidades Cognitivas
</h2>
<?php
include("conexion.php");

$consultaHabilidadesCognitivas1 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='0'  && thabilidades.NombreHabilidad='Cognitivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesCognitivas1 = $mysqli->query($consultaHabilidadesCognitivas1))
{
    echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Habilidad</th>
                <th>Nombre Alumno</th>
              </tr>";
    while ($filaHabilidadesCognitivas1 = $resultadoHabilidadesCognitivas1->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesCognitivas1[0]</td>
                <td id='resultadosHabilidadesCognitivas1'>$filaHabilidadesCognitivas1[1]</td>
                <td>$filaHabilidadesCognitivas1[2]</td>
                <td id='nombre'>$filaHabilidadesCognitivas1[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesCognitivas2 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='1'  && thabilidades.NombreHabilidad='Cognitivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesCognitivas2 = $mysqli->query($consultaHabilidadesCognitivas2))
{
    while ($filaHabilidadesCognitivas2 = $resultadoHabilidadesCognitivas2->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesCognitivas2[0]</td>
                <td id='resultadosHabilidadesCognitivas2'>$filaHabilidadesCognitivas2[1]</td>
                <td>$filaHabilidadesCognitivas2[2]</td>
                <td>$filaHabilidadesCognitivas2[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesCognitivas3 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='2'  && thabilidades.NombreHabilidad='Cognitivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesCognitivas3 = $mysqli->query($consultaHabilidadesCognitivas3))
{
    while ($filaHabilidadesCognitivas3 = $resultadoHabilidadesCognitivas3->fetch_row()) {
        echo "
                                      <tr>
                                        <td>$filaHabilidadesCognitivas3[0]</td>
                                        <td id='resultadosHabilidadesCognitivas3'>$filaHabilidadesCognitivas3[1]</td>
                                        <td>$filaHabilidadesCognitivas3[2]</td>
                                        <td>$filaHabilidadesCognitivas3[3]</td>
                                      </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesCognitivas4 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='3'  && thabilidades.NombreHabilidad='Cognitivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesCognitivas4 = $mysqli->query($consultaHabilidadesCognitivas4))
{
    while ($filaHabilidadesCognitivas4 = $resultadoHabilidadesCognitivas4->fetch_row()) {
        echo "
                  <tr>
                    <td>$filaHabilidadesCognitivas4[0]</td>
                    <td id='resultadosHabilidadesCognitivas4'>$filaHabilidadesCognitivas4[1]</td>
                    <td>$filaHabilidadesCognitivas4[2]</td>
                    <td>$filaHabilidadesCognitivas4[3]</td>
                  </tr>";
    }
    echo "</table>";
}
else{
    echo "Error";
    echo $mysqli->error;
}
?>

<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html
    //Aca no se totalmente como funcionan los colores en las barras, pero en una de todos mis intentos salio, y lo deje asi :(
    //En este comentario explico la nomenclatura de esta parte del js,   valoracion + (El numero de la valoracion que son 0,1,2,3) + Habilidad + (El numero de habilidad, basicas matematicas es la habilidad 1, basicas lectoescritura es la 2, etc)
    var valoracion0Habilidad3 = document.getElementById('resultadosHabilidadesCognitivas1').innerText;
    var valoracion1Habilidad3 = document.getElementById('resultadosHabilidadesCognitivas2').innerText;
    var valoracion2Habilidad3 = document.getElementById('resultadosHabilidadesCognitivas3').innerText;
    var valoracion3Habilidad3 = document.getElementById('resultadosHabilidadesCognitivas4').innerText;

    console.log(valoracion0Habilidad1,valoracion1Habilidad1,valoracion2Habilidad1,valoracion3Habilidad1);

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['0', valoracion0Habilidad3, "#5cd65c"],
            ['1', valoracion1Habilidad3,"#ff5555"],
            ['2', valoracion2Habilidad3,"#1296bd"],
            ['3', valoracion3Habilidad3,"#b86eec"]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1,fill: 2});

        // create bar chart
        var chart4 = anychart.bar();

        // turn on chart animation
        chart4.animation(true);

        chart4.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart4.title('Grafico habilidades Cognitivas de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart4.yScale().minimum(0);

        chart4.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart4.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart4.yAxis().title('Cantidad numerica por valoracion (0,1,2,3)');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('Numero de veces obtenida {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart4.bar(firstSeriesData);
        setupSeries(series, '');

        // turn on legend
        chart4.legend()
            .enabled(false)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart4.interactivity().hoverMode('single');
        chart4.tooltip().positionMode('point');

        // set container id for the chart
        chart4.container('gr4');
        // initiate chart drawing
        chart4.draw();
    });
</script>

<!-- Contenedor habilidades cognitivas barchart -->

<div id="gr4" style="width: 100%;height: 50vh; margin:auto;">
</div>

<!--  ---------------------------------------------------------------------- Fin bloque habilidades cognitivas ---------------------------------------------------------------------------->









<!------------------------------------------------------------------------ Inicio bloque de habilidades basicas Cognitivas ----------------------------------------------------------------------------->
<h2>
    Habilidades Socioafectivas
</h2>
<?php
include("conexion.php");

$consultaHabilidadesSocioafectivas1 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='0'  && thabilidades.NombreHabilidad='Socioafectivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesSocioafectivas1 = $mysqli->query($consultaHabilidadesSocioafectivas1))
{
    echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Habilidad</th>
                <th>Nombre Alumno</th>
              </tr>";
    while ($filaHabilidadesSocioafectivas1 = $resultadoHabilidadesSocioafectivas1->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesSocioafectivas1[0]</td>
                <td id='resultadosHabilidadesSocioafectivas1'>$filaHabilidadesSocioafectivas1[1]</td>
                <td>$filaHabilidadesSocioafectivas1[2]</td>
                <td id='nombre'>$filaHabilidadesSocioafectivas1[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesSocioafectivas2 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='1'  && thabilidades.NombreHabilidad='Socioafectivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesSocioafectivas2 = $mysqli->query($consultaHabilidadesSocioafectivas2))
{
    while ($filaHabilidadesSocioafectivas2 = $resultadoHabilidadesSocioafectivas2->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesSocioafectivas2[0]</td>
                <td id='resultadosHabilidadesSocioafectivas2'>$filaHabilidadesSocioafectivas2[1]</td>
                <td>$filaHabilidadesSocioafectivas2[2]</td>
                <td>$filaHabilidadesSocioafectivas2[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesSocioafectivas3 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='2'  && thabilidades.NombreHabilidad='Socioafectivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesSocioafectivas3 = $mysqli->query($consultaHabilidadesSocioafectivas3))
{
    while ($filaHabilidadesSocioafectivas3 = $resultadoHabilidadesSocioafectivas3->fetch_row()) {
        echo "
                                      <tr>
                                        <td>$filaHabilidadesSocioafectivas3[0]</td>
                                        <td id='resultadosHabilidadesSocioafectivas3'>$filaHabilidadesSocioafectivas3[1]</td>
                                        <td>$filaHabilidadesSocioafectivas3[2]</td>
                                        <td>$filaHabilidadesSocioafectivas3[3]</td>
                                      </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesSocioafectivas4 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='3'  && thabilidades.NombreHabilidad='Socioafectivas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesSocioafectivas4 = $mysqli->query($consultaHabilidadesSocioafectivas4))
{
    while ($filaHabilidadesSocioafectivas4 = $resultadoHabilidadesSocioafectivas4->fetch_row()) {
        echo "<tr>
                    <td>$filaHabilidadesSocioafectivas4[0]</td>
                    <td id='resultadosHabilidadesSocioafectivas4'>$filaHabilidadesSocioafectivas4[1]</td>
                    <td>$filaHabilidadesSocioafectivas4[2]</td>
                    <td>$filaHabilidadesSocioafectivas4[3]</td>
                  </tr>";
    }
    echo "</table>";
}
else{
    echo "Error";
    echo $mysqli->error;
}
?>

<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html
    //Aca no se totalmente como funcionan los colores en las barras, pero en una de todos mis intentos salio, y lo deje asi :(
    //En este comentario explico la nomenclatura de esta parte del js,   valoracion + (El numero de la valoracion que son 0,1,2,3) + Habilidad + (El numero de habilidad, basicas matematicas es la habilidad 1, basicas lectoescritura es la 2, etc)
    var valoracion0Habilidad4 = document.getElementById('resultadosHabilidadesSocioafectivas1').innerText;
    var valoracion1Habilidad4 = document.getElementById('resultadosHabilidadesSocioafectivas2').innerText;
    var valoracion2Habilidad4 = document.getElementById('resultadosHabilidadesSocioafectivas3').innerText;
    var valoracion3Habilidad4 = document.getElementById('resultadosHabilidadesSocioafectivas4').innerText;

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['0', valoracion0Habilidad4, "#5cd65c"],
            ['1', valoracion1Habilidad4,"#ff5555"],
            ['2', valoracion2Habilidad4,"#1296bd"],
            ['3', valoracion3Habilidad4,"#b86eec"]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1,fill: 2});

        // create bar chart
        var chart5 = anychart.bar();

        // turn on chart animation
        chart5.animation(true);

        chart5.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart5.title('Grafico habilidades Cognitivas de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart5.yScale().minimum(0);

        chart5.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart5.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart5.yAxis().title('Cantidad numerica por valoracion (0,1,2,3)');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('Numero de veces obtenida {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart5.bar(firstSeriesData);
        setupSeries(series, '');

        // turn on legend
        chart5.legend()
            .enabled(false)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart5.interactivity().hoverMode('single');
        chart5.tooltip().positionMode('point');

        // set container id for the chart
        chart5.container('gr5');
        // initiate chart drawing
        chart5.draw();
    });
</script>

<!-- Contenedor habilidades cognitivas barchart -->

<div id="gr5" style="width: 100%;height: 50vh; margin:auto;">
</div>

<!--  ---------------------------------------------------------------------- Fin bloque habilidades Socioafectivas ---------------------------------------------------------------------------->









<!------------------------------------------------------------------------ Inicio bloque de habilidades basicas Cognitivas ----------------------------------------------------------------------------->
<h2>
    Habilidades Comunicativas
</h2>
<?php
include("conexion.php");

$consultaHabilidadesComunicativas1 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='0'  && thabilidades.NombreHabilidad='Comunicativas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesComunicativas1 = $mysqli->query($consultaHabilidadesComunicativas1))
{
    echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Habilidad</th>
                <th>Nombre Alumno</th>
              </tr>";
    while ($filaHabilidadesComunicativas1 = $resultadoHabilidadesComunicativas1->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesComunicativas1[0]</td>
                <td id='resultadosHabilidadesComunicativas1'>$filaHabilidadesComunicativas1[1]</td>
                <td>$filaHabilidadesComunicativas1[2]</td>
                <td id='nombre'>$filaHabilidadesComunicativas1[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesComunicativas2 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='1'  && thabilidades.NombreHabilidad='Comunicativas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesComunicativas2 = $mysqli->query($consultaHabilidadesComunicativas2))
{
    while ($filaHabilidadesComunicativas2 = $resultadoHabilidadesComunicativas2->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesComunicativas2[0]</td>
                <td id='resultadosHabilidadesComunicativas2'>$filaHabilidadesComunicativas2[1]</td>
                <td>$filaHabilidadesComunicativas2[2]</td>
                <td>$filaHabilidadesComunicativas2[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesComunicativas3 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='2'  && thabilidades.NombreHabilidad='Comunicativas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesComunicativas3 = $mysqli->query($consultaHabilidadesComunicativas3))
{
    while ($filaHabilidadesComunicativas3 = $resultadoHabilidadesComunicativas3->fetch_row()) {
        echo "
                                      <tr>
                                        <td>$filaHabilidadesComunicativas3[0]</td>
                                        <td id='resultadosHabilidadesComunicativas3'>$filaHabilidadesComunicativas3[1]</td>
                                        <td>$filaHabilidadesComunicativas3[2]</td>
                                        <td>$filaHabilidadesComunicativas3[3]</td>
                                      </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesComunicativas4 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='3'  && thabilidades.NombreHabilidad='Comunicativas' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesComunicativas4 = $mysqli->query($consultaHabilidadesComunicativas4))
{
    while ($filaHabilidadesComunicativas4 = $resultadoHabilidadesComunicativas4->fetch_row()) {
        echo "<tr>
                    <td>$filaHabilidadesComunicativas4[0]</td>
                    <td id='resultadosHabilidadesComunicativas4'>$filaHabilidadesComunicativas4[1]</td>
                    <td>$filaHabilidadesComunicativas4[2]</td>
                    <td>$filaHabilidadesComunicativas4[3]</td>
                  </tr>";
    }
    echo "</table>";
}
else{
    echo "Error";
    echo $mysqli->error;
}
?>

<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html
    //Aca no se totalmente como funcionan los colores en las barras, pero en una de todos mis intentos salio, y lo deje asi :(
    //En este comentario explico la nomenclatura de esta parte del js,   valoracion + (El numero de la valoracion que son 0,1,2,3) + Habilidad + (El numero de habilidad, basicas matematicas es la habilidad 1, basicas lectoescritura es la 2, etc)
    var valoracion0Habilidad5 = document.getElementById('resultadosHabilidadesComunicativas1').innerText;
    var valoracion1Habilidad5 = document.getElementById('resultadosHabilidadesComunicativas2').innerText;
    var valoracion2Habilidad5 = document.getElementById('resultadosHabilidadesComunicativas3').innerText;
    var valoracion3Habilidad5 = document.getElementById('resultadosHabilidadesComunicativas4').innerText;

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['0', valoracion0Habilidad5, "#5cd65c"],
            ['1', valoracion1Habilidad5,"#ff5555"],
            ['2', valoracion2Habilidad5,"#1296bd"],
            ['3', valoracion3Habilidad5,"#b86eec"]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1,fill: 2});

        // create bar chart
        var chart6 = anychart.bar();

        // turn on chart animation
        chart6.animation(true);

        chart6.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart6.title('Grafico habilidades Cognitivas de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart6.yScale().minimum(0);

        chart6.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart6.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart6.yAxis().title('Cantidad numerica por valoracion (0,1,2,3)');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('Numero de veces obtenida {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart6.bar(firstSeriesData);
        setupSeries(series, '');

        // turn on legend
        chart6.legend()
            .enabled(false)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart6.interactivity().hoverMode('single');
        chart6.tooltip().positionMode('point');

        // set container id for the chart
        chart6.container('gr6');
        // initiate chart drawing
        chart6.draw();
    });
</script>

<!-- Contenedor habilidades cognitivas barchart -->

<div id="gr6" style="width: 100%;height: 50vh; margin:auto;">
</div>

<!--  ---------------------------------------------------------------------- Fin bloque habilidades Comunicativas ---------------------------------------------------------------------------->









<!------------------------------------------------------------------------ Inicio bloque de habilidades Motrices ----------------------------------------------------------------------------->
<h2>
    Habilidades Motrices
</h2>
<?php
include("conexion.php");

$consultaHabilidadesMotrices1 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='0'  && thabilidades.NombreHabilidad='Motrices' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesMotrices1 = $mysqli->query($consultaHabilidadesMotrices1))
{
    echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Habilidad</th>
                <th>Nombre Alumno</th>
              </tr>";
    while ($filaHabilidadesMotrices1 = $resultadoHabilidadesMotrices1->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesMotrices1[0]</td>
                <td id='resultadosHabilidadesMotrices1'>$filaHabilidadesMotrices1[1]</td>
                <td>$filaHabilidadesMotrices1[2]</td>
                <td id='nombre'>$filaHabilidadesMotrices1[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesMotrices2 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='1'  && thabilidades.NombreHabilidad='Motrices' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesMotrices2 = $mysqli->query($consultaHabilidadesMotrices2))
{
    while ($filaHabilidadesMotrices2 = $resultadoHabilidadesMotrices2->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesMotrices2[0]</td>
                <td id='resultadosHabilidadesMotrices2'>$filaHabilidadesMotrices2[1]</td>
                <td>$filaHabilidadesMotrices2[2]</td>
                <td>$filaHabilidadesMotrices2[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesMotrices3 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='2'  && thabilidades.NombreHabilidad='Motrices' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesMotrices3 = $mysqli->query($consultaHabilidadesMotrices3))
{
    while ($filaHabilidadesMotrices3 = $resultadoHabilidadesMotrices3->fetch_row()) {
        echo "
                                      <tr>
                                        <td>$filaHabilidadesMotrices3[0]</td>
                                        <td id='resultadosHabilidadesMotrices3'>$filaHabilidadesMotrices3[1]</td>
                                        <td>$filaHabilidadesMotrices3[2]</td>
                                        <td>$filaHabilidadesMotrices3[3]</td>
                                      </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesMotrices4 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='3'  && thabilidades.NombreHabilidad='Motrices' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesMotrices4 = $mysqli->query($consultaHabilidadesMotrices4))
{
    while ($filaHabilidadesMotrices4 = $resultadoHabilidadesMotrices4->fetch_row()) {
        echo "<tr>
                    <td>$filaHabilidadesMotrices4[0]</td>
                    <td id='resultadosHabilidadesMotrices4'>$filaHabilidadesMotrices4[1]</td>
                    <td>$filaHabilidadesMotrices4[2]</td>
                    <td>$filaHabilidadesMotrices4[3]</td>
                  </tr>";
    }
    echo "</table>";
}
else{
    echo "Error";
    echo $mysqli->error;
}
?>

<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html
    //Aca no se totalmente como funcionan los colores en las barras, pero en una de todos mis intentos salio, y lo deje asi :(
    //En este comentario explico la nomenclatura de esta parte del js,   valoracion + (El numero de la valoracion que son 0,1,2,3) + Habilidad + (El numero de habilidad, basicas matematicas es la habilidad 1, basicas lectoescritura es la 2, etc)
    var valoracion0Habilidad6 = document.getElementById('resultadosHabilidadesMotrices1').innerText;
    var valoracion1Habilidad6 = document.getElementById('resultadosHabilidadesMotrices2').innerText;
    var valoracion2Habilidad6 = document.getElementById('resultadosHabilidadesMotrices3').innerText;
    var valoracion3Habilidad6 = document.getElementById('resultadosHabilidadesMotrices4').innerText;

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['0', valoracion0Habilidad6, "#5cd65c"],
            ['1', valoracion1Habilidad6,"#ff5555"],
            ['2', valoracion2Habilidad6,"#1296bd"],
            ['3', valoracion3Habilidad6,"#b86eec"]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1,fill: 2});

        // create bar chart
        var chart7 = anychart.bar();

        // turn on chart animation
        chart7.animation(true);

        chart7.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart7.title('Grafico habilidades Cognitivas de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart7.yScale().minimum(0);

        chart7.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart7.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart7.yAxis().title('Cantidad numerica por valoracion (0,1,2,3)');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('Numero de veces obtenida {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart7.bar(firstSeriesData);
        setupSeries(series, '');

        // turn on legend
        chart7.legend()
            .enabled(false)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart7.interactivity().hoverMode('single');
        chart7.tooltip().positionMode('point');

        // set container id for the chart
        chart7.container('gr7');
        // initiate chart drawing
        chart7.draw();
    });
</script>

<!-- Contenedor habilidades cognitivas barchart -->

<div id="gr7" style="width: 100%;height: 50vh; margin:auto;">
</div>

<!--  ---------------------------------------------------------------------- Fin bloque habilidades Motrices ---------------------------------------------------------------------------->









<!------------------------------------------------------------------------ Inicio bloque de habilidades de autocuidado e independencia ----------------------------------------------------------------------------->
<h2>
    Habilidades AeI
</h2>
<?php
include("conexion.php");

$consultaHabilidadesAeI1 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='0'  && thabilidades.NombreHabilidad='Autocuidado e independencia' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesAeI1 = $mysqli->query($consultaHabilidadesAeI1))
{
    echo "<table class=\"egt\">
              <tr>
                <th>Valoracion</th>
                <th>Numero total</th>
                <th>Habilidad</th>
                <th>Nombre Alumno</th>
              </tr>";
    while ($filaHabilidadesAeI1 = $resultadoHabilidadesAeI1->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesAeI1[0]</td>
                <td id='resultadosHabilidadesAeI1'>$filaHabilidadesAeI1[1]</td>
                <td>$filaHabilidadesAeI1[2]</td>
                <td id='nombre'>$filaHabilidadesAeI1[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesAeI2 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='1'  && thabilidades.NombreHabilidad='Autocuidado e independencia' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesAeI2 = $mysqli->query($consultaHabilidadesAeI2))
{
    while ($filaHabilidadesAeI2 = $resultadoHabilidadesAeI2->fetch_row()) {
        echo "<tr>
                <td>$filaHabilidadesAeI2[0]</td>
                <td id='resultadosHabilidadesAeI2'>$filaHabilidadesAeI2[1]</td>
                <td>$filaHabilidadesAeI2[2]</td>
                <td>$filaHabilidadesAeI2[3]</td>
              </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesAeI3 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='2'  && thabilidades.NombreHabilidad='Autocuidado e independencia' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesAeI3 = $mysqli->query($consultaHabilidadesAeI3))
{
    while ($filaHabilidadesAeI3 = $resultadoHabilidadesAeI3->fetch_row()) {
        echo "
                                      <tr>
                                        <td>$filaHabilidadesAeI3[0]</td>
                                        <td id='resultadosHabilidadesAeI3'>$filaHabilidadesAeI3[1]</td>
                                        <td>$filaHabilidadesAeI3[2]</td>
                                        <td>$filaHabilidadesAeI3[3]</td>
                                      </tr>";
    }
}
else{
    echo "Error";
    echo $mysqli->error;
}

$consultaHabilidadesAeI4 = "SELECT
        tdetallehabilidad.Valoracion,COUNT(tdetallehabilidad.Valoracion),thabilidades.NombreHabilidad,testudiante.NombreEst
        FROM testudiante
        INNER JOIN thistorialestud
        ON
        testudiante.IdIdentificacionEst=thistorialestud.IdIdentificacionEst
        INNER JOIN tdetallehabilidad
        ON
        thistorialestud.IdHistorial=tdetallehabilidad.idHistorial
        INNER JOIN tdescriptores
        ON
        tdetallehabilidad.idDescriptor=tdescriptores.idDescriptor
        INNER JOIN thabilidades
        ON
        tdescriptores.idHabilidad=thabilidades.idHabilidad
        WHERE testudiante.IdIdentificacionEst='$idAlumno' && tdetallehabilidad.Valoracion='3'  && thabilidades.NombreHabilidad='Autocuidado e independencia' 
        GROUP BY thabilidades.NombreHabilidad";

if($resultadoHabilidadesAeI4 = $mysqli->query($consultaHabilidadesAeI4))
{
    while ($filaHabilidadesAeI4 = $resultadoHabilidadesAeI4->fetch_row()) {
        echo "<tr>
                    <td>$filaHabilidadesAeI4[0]</td>
                    <td id='resultadosHabilidadesAeI4'>$filaHabilidadesAeI4[1]</td>
                    <td>$filaHabilidadesAeI4[2]</td>
                    <td>$filaHabilidadesAeI4[3]</td>
                  </tr>";
    }
    echo "</table>";
}
else{
    echo "Error";
    echo $mysqli->error;
}
?>

<script>
    //Se obtienen los datos de lo impreso por el php, se sacan directamente del html
    //Aca no se totalmente como funcionan los colores en las barras, pero en una de todos mis intentos salio, y lo deje asi :(
    //En este comentario explico la nomenclatura de esta parte del js,   valoracion + (El numero de la valoracion que son 0,1,2,3) + Habilidad + (El numero de habilidad, basicas matematicas es la habilidad 1, basicas lectoescritura es la 2, etc)
    var valoracion0Habilidad7 = document.getElementById('resultadosHabilidadesAeI1').innerText;
    var valoracion1Habilidad7 = document.getElementById('resultadosHabilidadesAeI2').innerText;
    var valoracion2Habilidad7 = document.getElementById('resultadosHabilidadesAeI3').innerText;
    var valoracion3Habilidad7 = document.getElementById('resultadosHabilidadesAeI4').innerText;

    anychart.onDocumentReady(function() {
        // create data set on our data
        var dataSet = anychart.data.set([
            ['0', valoracion0Habilidad7, "#5cd65c"],
            ['1', valoracion1Habilidad7,"#ff5555"],
            ['2', valoracion2Habilidad7,"#1296bd"],
            ['3', valoracion3Habilidad7,"#b86eec"]
        ]);

        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({x: 0, value: 1,fill: 2});

        // create bar chart
        var chart8 = anychart.bar();

        // turn on chart animation
        chart8.animation(true);

        chart8.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart8.title('Grafico habilidades Cognitivas de '+document.getElementById('nombre').innerText);

        // set scale minimum
        chart8.yScale().minimum(0);

        chart8.xAxis().labels()
            .rotation(-90)
            .padding([0, 0, 20, 0]);

        chart8.yAxis().labels().format('{%Value}{groupsSeparator: }');

        // set titles for Y-axis
        chart8.yAxis().title('Cantidad numerica por valoracion (0,1,2,3)');

        // helper function to setup settings for series
        var setupSeries = function(series, name) {
            series.name(name);
            series.hovered().labels(false);

            series.labels()
                .enabled(true)
                .position('right-center')
                .anchor('left-center')
                .format('{%Value}{groupsSeparator: }');

            series.tooltip()
                .position('right')
                .anchor('left-center')
                .offsetX(5)
                .offsetY(0)
                .titleFormat('{%X}')
                .format('Numero de veces obtenida {%Value}{groupsSeparator: }');
        };

        // temp variable to store series instance
        var series;

        // create first series with mapped data
        series = chart8.bar(firstSeriesData);
        setupSeries(series, '');

        // turn on legend
        chart8.legend()
            .enabled(false)
            .fontSize(13)
            .padding([0, 0, 20, 0]);

        chart8.interactivity().hoverMode('single');
        chart8.tooltip().positionMode('point');

        // set container id for the chart
        chart8.container('gr8');
        // initiate chart drawing
        chart8.draw();
    });
</script>

<!-- Contenedor habilidades cognitivas barchart -->

<div id="gr8" style="width: 100%;height: 50vh; margin:auto;">
</div>

<!--  ---------------------------------------------------------------------- Fin bloque habilidades AeI ---------------------------------------------------------------------------->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



