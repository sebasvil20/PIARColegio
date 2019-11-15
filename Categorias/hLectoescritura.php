<?php
session_start();

if(isset($_SESSION['Usuario'])){
}
else{
    header('Location: ../index.php');
}

$nombreItem = "hLectoesItem";
$Item1 = "Reconoce las letras del alfabeto por nombre y sonido";
$Item2 = "Identifica los fonemas y grafemas que tiene una palabra";
$Item3 = "Puede completar palabras que se le presentan por escrito";
$Item4 = "Escribe la palabra que corresponde a cada imagen presentada";
$Item5 = "Organiza grafemas para formar palabras con sentido";
$Item6 = "Construye oraciones completas y con estructuración gramatical adecuada";
$Item7 = "Ordena palabras dadas para formar oraciones con sentido";
$Item8 = "Identifica las palabras que han sido omitidas en una oración";
$Item9 = "Escribe al dictado sin presentar omisiones, sustituciones o rotaciones";
$Item10 = "Realiza composiciones escritas con coherencia y cohesión semántica";
$Item11 = "Realiza lecturas con fluidez y precisión";
$Item12 = "Responde con claridad a preguntas de comprensión literal";
$Item13 = "Establece predicciones o hipótesis de lo que va a encontrar en una lectura";
$Item14 = "Deduce información no explícita en el texto en un texto dado";


?>
<!doctype html>
<html lang="en">
<head>
    <title>Habilidades basicas de lectoescritura - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Css/menuGeneral.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<section class="container text-center pt-3">
    <img src="../nombres/HABILIDADESLECTOESCRITURA.png" alt="">
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
    <form action="../mainApp/sendData/SDHlectoescritura.php" method="POST">
    <section class="row border-bottom mt-4 mb-2">
        <ul class="menuInterno mb-4 pb-2 pt-2">
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
        <section class="col-1 border border-dark">N°</section>
        <section class="col-6 border border-dark">Descriptores</section>
        <section class="col-2 border border-dark">Valoracion</section>
        <section class="col-3 border border-dark">Precisiones</section>
    </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">1</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item1?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"1"?>" name="<?=$nombreItem,"1"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea"  name="textAreaPres1"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">2</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item2?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"2"?>" name="<?=$nombreItem,"2"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres2"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">3</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item3?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"3"?>" name="<?=$nombreItem,"3"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres3"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">4</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item4?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"4"?>" name="<?=$nombreItem,"4"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres4"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">5</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item5?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"5"?>" name="<?=$nombreItem,"5"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres5"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">6</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item6?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"6"?>" name="<?=$nombreItem,"6"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea"  name="textAreaPres6" rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">7</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item7?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"7"?>" name="<?=$nombreItem,"7"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres7"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">8</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item8?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"8"?>" name="<?=$nombreItem,"8"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres8"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">9</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item9?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"9"?>" name="<?=$nombreItem,"9"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres9"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">10</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item10?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"10"?>" name="<?=$nombreItem,"10"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres10"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">11</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item11?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"11"?>" name="<?=$nombreItem,"11"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres11"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">12</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item12?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"12"?>" name="<?=$nombreItem,"12"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres12"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">13</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item13?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"13"?>" name="<?=$nombreItem,"13"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres13"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">14</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col"><?=$Item14?></section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="<?=$nombreItem,"14"?>" name="<?=$nombreItem,"14"?>" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>...</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </section>
                </section>
            </section>
            <section class="col-3">
                <section class="row">
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres14"  rows="2"></textarea></section>
                </section>
            </section>
        </section>

        <section class="row mt-3">
            <section class="col-4">Obseraciones(Definir si el desempeño es consecuente con el grado escolar que cursa):</section>
            <section class="col-8"><textarea class="form-control" name="hMotObservaciones" id="textArea" name="textAreaObser"  rows="3"></textarea></section>
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
        <section class="col-4"></section>
        <section class="col-4">Sumatoria</section>
        <section class="col-4">Puntaje mas alto</section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">No observado (0)</section>
        <section class="col-4"><label for="" id="hLectoesNoObservado">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">Siempre (1)</section>
        <section class="col-4"><label for="" id="hLectoesSiempre">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">A veces (2)</section>
        <section class="col-4"><label for="" id="hLectoesAveces">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">Nunca (3)</section>
        <section class="col-4"><label for="" id="hLectoesNunca">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
</section>
<script>
    function calcular(){

        var cNoObservado = 0;
        var cSiempre = 0;
        var cAveces= 0;
        var cNunca = 0;

        var noObservado = document.getElementById('hLectoesNoObservado');
        var siempre = document.getElementById('hLectoesSiempre');
        var aveces = document.getElementById('hLectoesAveces');
        var nunca = document.getElementById('hLectoesNunca');

        noObservado.innerHTML = 0;
        siempre.innerHTML = 0;
        aveces.innerHTML = 0;
        nunca.innerHTML = 0;

        var items1 = [document.getElementById('hLectoesItem1').selectedIndex, document.getElementById('hLectoesItem2').selectedIndex,
            document.getElementById('hLectoesItem3').selectedIndex, document.getElementById('hLectoesItem4').selectedIndex,
            document.getElementById('hLectoesItem5').selectedIndex, document.getElementById('hLectoesItem6').selectedIndex,
            document.getElementById('hLectoesItem7').selectedIndex, document.getElementById('hLectoesItem8').selectedIndex,
            document.getElementById('hLectoesItem9').selectedIndex, document.getElementById('hLectoesItem10').selectedIndex,
            document.getElementById('hLectoesItem11').selectedIndex, document.getElementById('hLectoesItem12').selectedIndex,
            document.getElementById('hLectoesItem13').selectedIndex, document.getElementById('hLectoesItem14').selectedIndex];

        for(let i = 0;i<items1.length;i++){
            if(items1[i]==2){
                cNoObservado +=1;
                noObservado.innerHTML = cNoObservado;
            }
            else if(items1[i]==3){
                cSiempre +=1;
                siempre.innerHTML = cSiempre;
            }
            else if(items1[i]==4){
                cAveces +=1;
                aveces.innerHTML = cAveces;
            }
            else if(items1[i]==5){
                cNunca +=1;
                nunca.innerHTML = cNunca;
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
