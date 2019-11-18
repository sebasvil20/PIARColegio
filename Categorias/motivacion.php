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
    <title>Motivacion - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Css/motivacionStyles.css">
    <link rel="stylesheet" href="../Css/menuGeneral.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<section class="container text-center pt-3">
    <img src="../nombres/MOTIVACION.png" alt="">
    <section class="row mt-4 mb-4 pt-2 pb-3">
        <section class="col-4 offset-4">
            <ul class="m-0 p-0 GeneralMenu">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle aprendizajesMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Aprendizajes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="atencion.php">Atencion</a>
                        <a class="dropdown-item" href="memoria.php">Memoria</a>
                        <a class="dropdown-item" href="motivacion.php">Motivacion</a>
                        <a class="dropdown-item" href="sensoper.php">Senso-Percepcion</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle habilidadesMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Habilidades
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="hMatematicas.php">Basicas de matematicas</a>
                        <a class="dropdown-item" href="hLectoescritura.php">Basicas de lectoescritura</a>
                        <a class="dropdown-item" href="hCognitivas.php">Cognitivas</a>
                        <a class="dropdown-item" href="hSocioafectivas.php">Socioafectivas</a>
                        <a class="dropdown-item" href="hComunicativas.php">Comunicativas</a>
                        <a class="dropdown-item" href="hMotrices.php">Motrices</a>
                        <a class="dropdown-item" href="hAutocuidadoIndependencia.php">Autocuidado e Independencia</a>
                    </div>
                </li>
            </ul>
        </section>
    </section>
    <form action="../mainApp/sendData/SDmotivacion.php" method="post"">
    <section class="row border-bottom  mt-4">
        <ul class="menuInterno mb-4 pb-2 pt-2">
            <li><i class="far fa-save mr-2"></i><input type="submit" value="Guardar" style="border:none;"></li>
            <li onclick="limpiarDatos()"><i class="far fa-sticky-note mr-2"></i>Limpiar</li>
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
    <div class="form-group text-left">
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
                        <section class="col">Atribuye su desempeño a la falta de ayuda y simpatia del profesor</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem1" name="motiItem1"  class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">2</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Busca sobresalir en el grupo y ser reconocido por sus compañeros</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem2" name="motiItem2"   class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">3</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Le molesta demasiado que le pongan tareas y no sean revisadas</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem3"  name="motiItem3"  class="form-control">
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
                <section class="col-2">Motivacion Extrinseca</section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">4</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Prefiere actividades y tareas que ya conoce y domina</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem4"  name="motiItem4"  class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">5</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Abandona actividades cuando se pone en evidencia que esta haciendo mal algo</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem5"  name="motiItem5"   class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">6</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Estudia porque su familia lo exige, de lo contrario no accederia a la educacion formal</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem6" name="motiItem6"  class="form-control">
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
            <section class="row pt-2 mt-2 border-top">
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">7</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Disfruta de hacer o aprender cosas nuevas, aunque le cuesten dificultad</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem7" name="motiItem7"   class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">8</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Hace lo posible por no ausentarse de ninguna actividad</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem8" name="motiItem8"   class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">9</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Le gusta enfrentarse a tareas dificiles y sentir la satisfaccion de poder superarlas</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem9" name="motiItem9"   class="form-control">
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
                <section class="col-2">Motivacion Intrinseca</section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">10</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">No le importa la calificacion o revision de las tareas, las hace porque le interesa mejorar</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem10" name="motiItem10"  class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">11</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Prefiere pasar desapercibido, haciendo lo que debe hacer</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem11" name="motiItem11"  class="form-control">
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
                <section class="col-2"></section>
                <section class="col-1">
                    <section class="row text-center">
                        <section class="col">12</section>
                    </section>
                </section>
                <section class="col-7">
                    <section class="row text-left">
                        <section class="col">Sabe que el exito o el fracaso escolar depende de su esfuerzo y dedicacion</section>
                    </section>
                </section>
                <section class="col-2">
                    <section class="row">
                        <section class="col">
                            <select id="motiItem12" name="motiItem12"  class="form-control">
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
            <section class="row mt-3">
                <section class="col-2">Obseraciones:</section>
                <section class="col-10"><textarea class="form-control" id="textArea" name="textArea1" rows="3"></textarea></section>
            </section>
        </form>
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
            <section class="col-3">Motivacion extrinseca</section>
            <section class="col-3"><label for="" id="sumSiEx">0</label></section>
            <section class="col-3"><label for="" id="sumNoEx">0</label></section>
            <section class="col-3"><label for="">6</label></section>
        </section>
        <section class="row mt-2 text-center border-bottom pb-3">
            <section class="col-3">Motivacion intrinseca</section>
            <section class="col-3"><label for="" id="sumSiIn">0</label></section>
            <section class="col-3"><label for="" id="sumNoIn">0</label></section>
            <section class="col-3"><label for="">6</label></section>
        </section>
    </div>
</section>
<script>
    function limpiarDatos() {
        var i = 1;
        for(i=1;i<=12;i++){
            document.getElementById('motiItem'+i).selectedIndex='0';
        }
    }

    function calcular(){
        var items = [document.getElementById('motiItem1').selectedIndex, document.getElementById('motiItem2').selectedIndex,
            document.getElementById('motiItem3').selectedIndex, document.getElementById('motiItem4').selectedIndex,
            document.getElementById('motiItem5').selectedIndex, document.getElementById('motiItem6').selectedIndex];

        var items2= [document.getElementById('motiItem7').selectedIndex,
            document.getElementById('motiItem8').selectedIndex, document.getElementById('motiItem9').selectedIndex,
            document.getElementById('motiItem10').selectedIndex, document.getElementById('motiItem11').selectedIndex,
            document.getElementById('motiItem12').selectedIndex];

        var cSiEx = 0;
        var cNoEx = 0;
        var cSiIn = 0;
        var cNoIn = 0;

        for(let i = 0;i<items.length;i++){
            if(items[i]==3){
                cNoEx +=1;
                document.getElementById('sumNoEx').innerHTML = cNoEx;
            }
            else if(items[i]==2){
                cSiEx +=1;
                document.getElementById('sumSiEx').innerHTML = cSiEx;
            }
        }
        for(let i = 0;i<items2.length;i++){
            if(items2[i]==3){
                cNoIn +=1;
                document.getElementById('sumNoIn').innerHTML = cNoIn;
            }
            else if(items2[i]==2){
                cSiIn +=1;
                document.getElementById('sumSiIn').innerHTML = cSiIn  ;
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
