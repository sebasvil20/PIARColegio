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
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="0" id="page-top">
<div id="contenedor_carga">
    <div id="carga"></div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top d-flex text-center" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">PIAR - Inicio</span>
        <span class="d-none d-lg-block">
         <img class="img-fluid img-profile mx-auto mb-2" src="img/logoPng.png" alt="">
         </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#Inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#nuevoEstudiante">Evaluar nuevo estudiante</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#consultarRegistro">Consultar registro</a>
            </li>
            <li class="nav-item pt-4 mt-4">
                <a class="nav-link js-scroll-trigger" href="#addUser">Ingresar nuevo usuario</a>
            </li>
            <li class="nav-item pt-4 mt-4">
                <a class="nav-link js-scroll-trigger" href="mainApp/cerrarSesion.php">Cerrar Sesion</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid p-0">
    <section class="resume-section p-0 p-lg-5 d-flex align-items-center text-center " id="Inicio">
        <div class="w-100 pl-0">
            <h1 class="mb-0 titulochido">Bienvenido <span class="text-primary titulochido2"><?php echo $_SESSION['Usuario']['Nombre'] ?></span> al sistema de control
                <span class="text-primary titulochido2">PIAR</span>
            </h1>
            <div class="subheading mb-5">Puede navegar por el menu para realizar cualquier accion
            </div>
            <p class="lead mb-5"><i class="fas fa-arrow-left flechita"></i></p>
            <p><button type="button" onclick="redirigir()" value="redireccionar" class="btn btn-primary">Empezar evaluacion PIAR</button></p>
        </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center justify-content-center" id="nuevoEstudiante">
        <div class="w-100 nuevoStudent">
            <div class="form-group text-left">
                <h2>Ingresar nuevo alumno y empezar evaluacion PIAR</h2>
                <form action="mainApp/newStudent.php" method="POST" class="pt-5">
                    <section class="row">
                        <section class="col-3 pt-1 ">Identificacion</section>
                        <section class="col-9"><input type="text" class="form-control" id="idAlumno" name="idenAlumno" placeholder="Ingrese la identificacion de el alumno"></section>
                    </section>
                    <section class="row mt-3">
                        <section class="col-3 pt-1 ">Nombre completo del alumno</section>
                        <section class="col-9"><input type="text" class="form-control" id="nomAlumno" name="NombreAlumno" placeholder="Ingrese el nombre completo del alumno"></section>
                    </section>
                    <section class="row mt-3">
                        <section class="col-3 pt-1 ">Director de grupo</section>
                        <section class="col-9"><input type="text" class="form-control" id="dirGrupo" name="DirectorGrupo" placeholder="Ingrese el nombre completo del director de grupo"></section>
                    </section>
                    <section class="row mt-3">
                        <section class="col-3 pt-1 ">Grado</section>
                        <section class="col-9"><input type="text" class="form-control" id="grado" name="grado" placeholder="Ingrese el grado del estudiante"></section>
                    </section>
                    <section class="row mt-3">
                        <section class="col-3 pt-1 ">Fecha</section>
                        <section class="col-9"><input type="date" class="form-control" id="fecha" name="fecha"></section>
                    </section>
                    <section class="row mt-3">
                        <section class="col-6 pt-1 offset-5">
                            <button type="submit" value="Enviar" name="IngresarEstud" class="btn btn-primary">Guardar estudiante</button>
                        </section>
                    </section>
                </form>
            </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center text-center" id="consultarRegistro">
        <div class="w-100 pl-2">
            <form action="mainApp/read.php" method="POST">
            <h2 class="mb-3 pb-3">Consulta de registros</h2>
            <section class="row">
                <section class="col-3 pt-1 ">Identificacion</section>
                <section class="col-9"><input type="text" class="form-control" id="idAlumno" name="idenAlumnoBuscar" placeholder="Ingrese la identificacion de el alumno"></section>
            </section>
            <section class="row mt-3">
                <section class="col-12">
                    <button type="submit" class="btn btn-primary">Buscar registro</button>
                </section>
            </section>
            </form>
        </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center justify-content-center" id="addUser">
        <div class="w-100">
            <div class="form-group text-left">
                <h2 class="text-center">Añadir usuario al sistema PIAR</h2>

                <form action="mainApp/newUser.php" method="POST" class="pt-1">
                    <section class="row pt-2">
                        <section class="col-3 pt-1 text-center">Nombre</section>
                        <section class="col-9"><input type="text" class="form-control" id="nombreUserNew" name="nombreUsuarioNew" placeholder="Ingrese el nombre del usuario"></section>
                    </section>
                    <section class="row pt-2">
                        <section class="col-3 pt-1 text-center">Usuario</section>
                        <section class="col-9"><input type="text" class="form-control" id="userUserNew" name="userUsuarioNew" placeholder="Ingrese el usuario de registro"></section>
                    </section>
                    <section class="row pt-2">
                        <section class="col-3  text-center">Contraseña</section>
                        <section class="col-9"><input type="text" class="form-control" id="contraUserNew" name="contrasenaUsuarioNew" placeholder="Ingrese la contraseña de registro"></section>
                    </section>
                    <section class="col-6 pt-3 offset-5">
                        <button type="submit" value="Enviar2" name="IngresarUser" class="btn btn-primary">Agregar</button>
                    </section>
                </form>

            </div>
    </section>

</div>

<script>
    function redirigir() {
        location.href="categorias.php";
    }
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
