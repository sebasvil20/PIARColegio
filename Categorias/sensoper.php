<?php
session_start();

if(isset($_SESSION['Usuario'])){
}
else{
    header('Location: ../index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>SensoPercepcion - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Css/motivacionStyles.css">
    <link rel="stylesheet" href="../Css/menuGeneral.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<section class="container text-center pt-3">
    <img src="../nombres/SENSOPERCEPCIÓN.png" alt="">
    <section class="row mt-4 mb-4 pt-2 pb-3">
        <section class="col-4 offset-4">
            <ul class="m-0 p-0 GeneralMenu">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle aprendizajesMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Aprendizajes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="motivacion.php">Motivacion</a>
                        <a class="dropdown-item" href="sensoper.php">Senso-Percepcion</a>
                        <a class="dropdown-item" href="memoria.php">Memoria</a>
                        <a class="dropdown-item" href="atencion.php">Atencion</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle habilidadesMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Habilidades
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="hCognitivas.php">Cognitivas</a>
                        <a class="dropdown-item" href="hComunicativas.php">Comunicativas</a>
                        <a class="dropdown-item" href="hSocioafectivas.php">Socioafectivas</a>
                        <a class="dropdown-item" href="hAutocuidadoIndependencia.php">Autocuidado e Independencia</a>
                        <a class="dropdown-item" href="hMotrices.php">Motrices</a>
                        <a class="dropdown-item" href="hLectoescritura.php">Basicas de lectoescritura</a>
                        <a class="dropdown-item" href="hMatematicas.php">Basicas de matematicas</a>
                    </div>
                </li>
            </ul>
        </section>
    </section>
    <section class="row border-bottom mt-4 mb-2">
        <ul class="menuInterno mb-4 pb-2 pt-2">
            <li><i class="far fa-save mr-2"></i>Guardar</li>
            <li><i class="far fa-sticky-note mr-2"></i>Limpiar</li>
            <li><a href="../Inicio.php"><i class="fas fa-backward mr-2"></i>Regresar al inicio</a></li>
        </ul>
    </section>
    <section class="row text-center mt-5 border border-dark">
        <section class="col-2 border border-dark">Categoria</section>
        <section class="col-1 border border-dark">N°</section>
        <section class="col-7 border border-dark">Item</section>
        <section class="col-2 border border-dark">Valoracion</section>
    </section>
    <section class="row pt-1">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">1</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Reproduce secuencias auditivas inmediatamente luego de reproducirlas</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem1" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1">
        <section class="col-2">Auditiva</section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">2</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Puede diferenciar rapidamente los sonidos que escucha en medio de un ambiente ruidoso</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem2" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1 border-bottom pb-3">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">3</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Identifica las fuentes de los sonidos que escucha en el momento de la valoracion</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem3" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-3">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">4</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Identifica las formas que se trazan en su piel a pesar de no poder verlas</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem4" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1">
        <section class="col-2">Kinestésica</section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">5</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Teniendo los ojos vendados, descubre a través del tacto, el objeto que se le ha entregado</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem5" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1 border-bottom pb-3">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">6</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Puede representar de manera omprensible sus emociones y sentimientos</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem6" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-3">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">7</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Dentro de un conjunto de figuras, puede encontrar la que se le pide</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem7" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1">
        <section class="col-2">Visual</section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">8</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Encuentra fácilmente las diferencias en una pareja de imagenes semejantes</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem8" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1 border-bottom pb-3">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">9</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Identifica rápidamente los elementos u objetos que le faltan a una imagen</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem9" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-3">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">10</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Con frecuencia siente que no está solo, que alguien está detrás o al lado suyo</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem10" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1">
        <section class="col-2">Alucinación</section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">11</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Suele escuchar voces que emiten mensajes claros pero que nadie más puede escuchar</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem11" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row pt-1 pb-3">
        <section class="col-2"></section>
        <section class="col-1">
            <section class="row text-center">
                <section class="col">12</section>
            </section>
        </section>
        <section class="col-7">
            <section class="row text-left">
                <section class="col">Frecuentemente suele experimentar la sensacion de olores o sabores que nadie más percibe</section>
            </section>
        </section>
        <section class="col-2">
            <section class="row">
                <section class="col">
                    <select id="sensoItem12" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                        >
                    </select>
                </section>
            </section>
        </section>
    </section>
    <section class="row border-top text-center mt-5">
        <section class="col">
            <h3>Interpretacion</h3>
        </section>
    </section>
    <section class="row text-center">
        <section class="col"><button type="button" class="btn btn-primary" onclick="calcular()">Calcular</button></section>
    </section>
    <section class="row mt-3 text-center">
        <section class="col-3"></section>
        <section class="col-3">Sumatoria SI</section>
        <section class="col-3">Sumatoria NO</section>
        <section class="col-3">Maximo</section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-3">Auditiva</section>
        <section class="col-3"><label for="" id="sumSiAudi">0</label></section>
        <section class="col-3"><label for="" id="sumNoAudi">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-3">Kinestésica</section>
        <section class="col-3"><label for="" id="sumSiKines">0</label></section>
        <section class="col-3"><label for="" id="sumNoKines">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-3">Visual</section>
        <section class="col-3"><label for="" id="sumSiVis">0</label></section>
        <section class="col-3"><label for="" id="sumNoVis">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
    <section class="row mt-2 text-center border-bottom pb-3 mb-4">
        <section class="col-3">Alucinaciones</section>
        <section class="col-3"><label for="" id="sumSiAlu">0</label></section>
        <section class="col-3"><label for="" id="sumNoAlu">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
    <script>
        function calcular(){
            var items1 = [document.getElementById('sensoItem1').selectedIndex, document.getElementById('sensoItem2').selectedIndex,
                document.getElementById('sensoItem3').selectedIndex];

            var items2= [document.getElementById('sensoItem4').selectedIndex,
                document.getElementById('sensoItem5').selectedIndex, document.getElementById('sensoItem6').selectedIndex];

            var items3= [document.getElementById('sensoItem7').selectedIndex,
                document.getElementById('sensoItem8').selectedIndex, document.getElementById('sensoItem9').selectedIndex];

            var items4= [document.getElementById('sensoItem10').selectedIndex,
                document.getElementById('sensoItem11').selectedIndex, document.getElementById('sensoItem12').selectedIndex];

            var cSiAudi = 0;
            var cNoAudi = 0;

            var cSiKines = 0;
            var cNoKines = 0;

            var cSiVis = 0;
            var cNoVis = 0;

            var cSiAlu = 0;
            var cNoAlu = 0;

            for(let i = 0;i<items1.length;i++){
                if(items1[i]==3){
                    cNoAudi +=1;
                    document.getElementById('sumNoAudi').innerHTML = cNoAudi;
                }
                else if(items1[i]==2){
                    cSiAudi +=1;
                    document.getElementById('sumSiAudi').innerHTML = cSiAudi;
                }
            }

            for(let i = 0;i<items2.length;i++){
                if(items2[i]==3){
                    cNoKines +=1;
                    document.getElementById('sumNoKines').innerHTML = cNoKines;
                }
                else if(items2[i]==2){
                    cSiKines +=1;
                    document.getElementById('sumSiKines').innerHTML = cSiKines;
                }
            }

            for(let i = 0;i<items3.length;i++){
                if(items3[i]==3){
                    cNoVis +=1;
                    document.getElementById('sumNoVis').innerHTML = cNoVis;
                }
                else if(items3[i]==2){
                    cSiVis +=1;
                    document.getElementById('sumSiVis').innerHTML = cSiVis;
                }
            }

            for(let i = 0;i<items4.length;i++){
                if(items4[i]==3){
                    cNoAlu +=1;
                    document.getElementById('sumNoAlu').innerHTML = cNoAlu;
                }
                else if(items4[i]==2){
                    cSiAlu +=1;
                    document.getElementById('sumSiAlu').innerHTML = cSiAlu;
                }
            }

        }
    </script>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
