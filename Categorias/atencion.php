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
    <title>Atencion - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Css/motivacionStyles.css">
    <link rel="stylesheet" href="../Css/menuGeneral.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<section class="container text-center pt-3">
    <img src="../nombres/ATENCION.png" alt="">
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
                        <a class="dropdown-item" href="atenria.php">atenria</a>
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
    <form action="../mainApp/sendData/SDatencion.php" method="POST">
    <section class="row border-bottom mt-4 mb-2">
        <ul class="menuInterno mb-4 pb-2 pt-2 d-flex">
            <li><i class="far fa-save mr-2"></i><input type="submit" value="Guardar" style="border:none;"></li>
            <li><i class="far fa-sticky-note mr-2"></i>Limpiar</li>
            <li><a href="../Inicio.php"><i class="fas fa-backward mr-2"></i>Regresar al inicio</a></li>
        </ul>
    </section>
        <section>
            <div class="form-group">
                <section class="row">
                    <section class="col-3">
                        <label for="IdentificacionEstudiante">Identificacion del estudiante</label>
                    </section>
                    <section class="col-9">
                        <input type="text" class="form-control" id="idEstudiante1" name="idEstudiante1" placeholder="Ingrese la identificacion del estudiante">
                    </section>
                </section>
                <section class="row">
                    <section class="col-3">
                        <label for="IdentificacionEvaluador">Identificacion del evaluador</label>
                    </section>
                    <section class="col-9">
                        <input type="text" class="form-control" id="idEvualuador1" name="idEvualuador1" placeholder="Ingrese la identificacion del evaluador (Profesor-Psicologa)">
                    </section>
                </section>
                <section class="row">
                    <section class="col-3">
                        <label for="Fecha1">fecha</label>
                    </section>
                    <section class="col-9">
                        <input type="date" class="form-control" id="Fecha1" name="Fecha1">
                    </section>
                </section>
            </div>
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
                    <section class="col">Enlaza figuras siguiendo una secuencia dada y cambia de tarea a petición del maestro</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem1" name="atenItem1" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </section>
                </section>
            </section>
        </section>
        <section class="row pt-1">
            <section class="col-2">Alterna</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">2</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Responde a alguien que le pregunta algo, aunque este concentrado en otra cosa (leer,tv)</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem2" name="atenItem2" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
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
                    <section class="col">Si alguien interrumpe lo que está haciendo, puede continuarla luego sin ningún problema</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem3" name="atenItem3" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
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
                    <section class="col">Juega o conversa en clase a la vez que presta atención a toda la informacion que está dando el profesor</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem4" name="atenItem4" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </section>
                </section>
            </section>
        </section>
        <section class="row pt-1">
            <section class="col-2">Dividida</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">5</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Pone atención a la explicación del profesor, a la vez que ve lo que escribe en el tablero y toma nota</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem5" name="atenItem5" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
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
                    <section class="col">Ve la televisión o escucha música y hace las tareas escolares al mismo tiempo</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem6" name="atenItem6" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
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
                    <section class="col">Identifica el color en que está escrita la palabra aunque el texto diga otro color (<span style="color:green; font-weight: 800;">rojo</span>) </section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem7" name="atenItem7" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </section>
                </section>
            </section>
        </section>
        <section class="row pt-1">
            <section class="col-2">Selectiva</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">8</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Observa rápidamente los detalles de varias figuras y puede ver la que no es como las otras</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem8" name="atenItem8" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
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
                    <section class="col">Puede atender a una persona que habla en un ambiente ruidoso y comprender lo que está diciendo</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem9" name="atenItem9" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
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
                    <section class="col">Encuentra las palabras o gráficos ocultos en una sopa de letras o en una imagen</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem10" name="atenItem10" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </section>
                </section>
            </section>
        </section>
        <section class="row pt-1">
            <section class="col-2">Sostenido</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">11</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Inicia y termina de manera oportuna las actividades en el tiempo requerido, aunque sean monótonas</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem11" name="atenItem11" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
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
                    <section class="col">Usualmente es muy atento en clase, incluso en aquellas que parecen un poco aburridas</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="atenItem12" name="atenItem12" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </section>
                </section>
            </section>
        </section>
        <section class="row mt-3">
            <section class="col-2">Obseraciones:</section>
            <section class="col-10"><textarea class="form-control" id="textArea" rows="3"></textarea></section>
        </section>
    </form>
    <section class="row border-top text-center mt-4 pt-2">
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
        <section class="col-3">Alterna</section>
        <section class="col-3"><label for="" id="sumSiAlter">0</label></section>
        <section class="col-3"><label for="" id="sumNoAlter">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-3">Dividida</section>
        <section class="col-3"><label for="" id="sumSiDivi">0</label></section>
        <section class="col-3"><label for="" id="sumNoDivi">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-3">Selectiva</section>
        <section class="col-3"><label for="" id="sumSiSelec">0</label></section>
        <section class="col-3"><label for="" id="sumNoSelec">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
    <section class="row mt-2 text-center border-bottom pb-3 mb-4">
        <section class="col-3">Sostenida</section>
        <section class="col-3"><label for="" id="sumSiSos">0</label></section>
        <section class="col-3"><label for="" id="sumNoSos">0</label></section>
        <section class="col-3"><label for="" id="">3</label></section>
    </section>
</section>
<script>
    function calcular(){

        document.getElementById('sumNoAlter').innerHTML = 0;
        document.getElementById('sumSiAlter').innerHTML = 0;
        document.getElementById('sumNoDivi').innerHTML = 0;
        document.getElementById('sumSiDivi').innerHTML = 0;
        document.getElementById('sumNoSelec').innerHTML = 0;
        document.getElementById('sumSiSelec').innerHTML = 0;
        document.getElementById('sumNoSos').innerHTML = 0;
        document.getElementById('sumSiSos').innerHTML = 0;

        var items1 = [document.getElementById('atenItem1').selectedIndex, document.getElementById('atenItem2').selectedIndex,
            document.getElementById('atenItem3').selectedIndex];

        var items2= [document.getElementById('atenItem4').selectedIndex,
            document.getElementById('atenItem5').selectedIndex, document.getElementById('atenItem6').selectedIndex];

        var items3= [document.getElementById('atenItem7').selectedIndex,
            document.getElementById('atenItem8').selectedIndex, document.getElementById('atenItem9').selectedIndex];

        var items4= [document.getElementById('atenItem10').selectedIndex,
            document.getElementById('atenItem11').selectedIndex, document.getElementById('atenItem12').selectedIndex];

        var cSiAlter = 0;
        var cNoAlter = 0;

        var cSiDivi = 0;
        var cNoDivi = 0;

        var cSiSelec = 0;
        var cNoSelec = 0;

        var cSiSos = 0;
        var cNoSos = 0;

        for(let i = 0;i<items1.length;i++){
            if(items1[i]==3){
                cNoAlter +=1;
                document.getElementById('sumNoAlter').innerHTML = cNoAlter;
            }
            else if(items1[i]==2){
                cSiAlter +=1;
                document.getElementById('sumSiAlter').innerHTML = cSiAlter;
            }
        }

        for(let i = 0;i<items2.length;i++){
            if(items2[i]==3){
                cNoDivi +=1;
                document.getElementById('sumNoDivi').innerHTML = cNoDivi;
            }
            else if(items2[i]==2){
                cSiDivi +=1;
                document.getElementById('sumSiDivi').innerHTML = cSiDivi;
            }
        }

        for(let i = 0;i<items3.length;i++){
            if(items3[i]==3){
                cNoSelec +=1;
                document.getElementById('sumNoSelec').innerHTML = cNoSelec;
            }
            else if(items3[i]==2){
                cSiSelec +=1;
                document.getElementById('sumSiSelec').innerHTML = cSiSelec;
            }
        }

        for(let i = 0;i<items4.length;i++){
            if(items4[i]==3){
                cNoSos +=1;
                document.getElementById('sumNoSos').innerHTML = cNoSos;
            }
            else if(items4[i]==2){
                cSiSos +=1;
                document.getElementById('sumSiSos').innerHTML = cSiSos;
            }
        }

    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
