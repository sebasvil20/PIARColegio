<?php
session_start();

if(isset($_SESSION['Usuario'])){
}
else{
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/mainPageStyles.css">
    <link rel="stylesheet" href="Css/loadingPageStyles.css">
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
            echo "
                  <tr>
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
            echo "
            
                      <tr>
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

        // map data for the third series, take x from the zero column and value from the third column of data set
        var thirdSeriesData = dataSet.mapAs({x: 0, value: 3});

        // map data for the fourth series, take x from the zero column and value from the fourth column of data set
        var fourthSeriesData = dataSet.mapAs({x: 0, value: 4});

        // create bar chart
        var chart = anychart.bar();

        // turn on chart animation
        chart.animation(true);

        chart.padding([10, 40, 5, 20]);

        // set chart title text settings
        chart.title('Grafico de '+document.getElementById('nombre').innerText);

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
<div id="gr1" style="width: 100%;height: 50vh; margin:auto;">

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



