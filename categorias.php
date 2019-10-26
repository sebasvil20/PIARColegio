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
<head>
    <title>Psicologia colegio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/main.css">
    <link rel="stylesheet" href="Css/categorias.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="container">
    <img src="img/logo2.png" class="giant" alt="">
    <section class="main">
        <section class="row">
            <section class="col-md-6 col-lg-4 col-12 mb-4 mt-4 text-center columna">
                <a href="Categorias/motivacion.php">
                    <img src="img/unMotivacion.png" alt="">
                    <img src="nombres/MOTIVACION.png" alt="logo atencion">
                </a>
            </section>
            <section class="col-md-6 col-lg-4 col-12 mt-4 text-center columna">
                <a href="Categorias/sensoper.php">
                    <img src="img/unSensoper.png" alt="">
                    <img src="nombres/SENSOPERCEPCIÓN.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-12 col-lg-4 mb-4 mt-4 text-center columna">
                <a href="Categorias/memoria.php">
                    <img src="img/unMemori.png" alt="">
                    <img src="nombres/MEMORIA.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-lg-4 col-12 mb-4 mt-4 text-center columna">
                <a href="Categorias/atencion.php">
                    <img src="img/unAtencion.png" alt="">
                    <img src="nombres/ATENCION.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-lg-4 col-12 mb-4 mt-4 text-center columna">
                <a href="Categorias/hCognitivas.php">
                    <img src="img/unHabilidadesCognitivas.png" alt="">
                    <img src="nombres/HABILIDADESCOGNITIVAS.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-12 col-lg-4 mb-4 mt-4 text-center columna">
                <a href="Categorias/hComunicativas.php">
                    <img src="img/unHabilidadesComu.png" alt="">
                    <img src="nombres/HABILIDADESCOMUNICATIVAS.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-12 col-lg-4 mb-4 mt-4 text-center columna">
                <a href="Categorias/hSocioafectivas.php">
                    <img src="nombres/HABILIDADESSOCIOAFECTIVAS.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-12 col-lg-4 mb-4 mt-4 text-center columna">
                <a href="Categorias/hAutocuidadoIndependencia.php">
                    <img src="nombres/HABILIDADESAUTOCUIDADINDEPENDENCIA.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-12 col-lg-4 mb-4 mt-4 text-center columna">
                <a href="Categorias/hMotrices.php">
                    <img src="nombres/HABILIDADESMOTRICES.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-12 col-lg-4 mb-4 mt-4 offset-2 text-center columna">
                <a href="Categorias/hLectoescritura.php">
                    <img src="nombres/HABILIDADESLECTOESCRITURA.png" alt="">
                </a>
            </section>
            <section class="col-md-6 col-12 col-lg-4 mb-4 mt-4 text-center columna">
                <a href="Categorias/hMatematicas.php">
                    <img src="nombres/HABILIDADESMATEMÁTICAS.png" alt="">
                </a>
            </section>
        </section>
    </section>
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
