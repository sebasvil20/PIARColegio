<?php
session_start();
if(isset($_SESSION['Usuario'])){
    if($_SESSION['Usuario']['Tipo'] == "admin"){
        header('Location: Inicio.php');
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>LOGIN PIAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Css/loginStyle.css">
    <link rel="stylesheet" href="Css/loadingPageStyles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="Js/jquery-3.4.1.min.js" ></script>
<div id="contenedor_carga">
    <div id="carga"></div>
</div>
<section class="container">
    <section class="bigBlackContainer p-4">
        <section class="row align-middle">
            <section class="col-6 text-center">
                <img src="img/logoPng.png" class="logo" alt="">
                <h1>Bienvenido</h1>
                <h2>Sistema de control PIAR</h2>
                <h3>Inicie sesion para continuar</h3>
            </section>
            <section class="col-6 Login align-middle pt-4 mt-4">
                <form action="" id="formlg">
                    <section class="row pt-4">
                        <section class="col-12 pt-4">
                           <span class="loginText">
                           Usuario
                           </span>
                        </section>
                    </section>
                    <section class="row">
                        <section class="col-12">
                            <input type="text" name="usuariolg" pattern="[A-Za-z0-9_-]{1,25}" required id="usuariolg" class="Input" placeholder="Ingrese su usuario">
                        </section>
                    </section>
                    <section class="row pt-3">
                        <section class="col-12">
                           <span class="loginText">
                           Contraseña
                           </span>
                        </section>
                    </section>
                    <section class="row">
                        <section class="col-12">
                            <input type="password" name="passwordlg" pattern="[A-Za-z0-9_-]{1,15}" required id="passwordlg"   class="Input" placeholder="Contraseña">
                        </section>
                    </section>
                    <section class="row pt-3">
                        <section class="col-12">
                            <button type="submit" class="btn btn-primary">Login</button>    <span class="errorMsj" style="color:red; visibility:hidden;">Usuario o contraseña incorrecta</span>
                        </section>
                    </section>
                </form>
            </section>
        </section>
    </section>
</section>
<img class="bg" src="img/bgLogin.jpg" alt="">
<script src="Js/loadingPage.js"></script>
<script src="Js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
