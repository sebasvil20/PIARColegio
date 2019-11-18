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
    <title>Habilidades comunicativas - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Css/menuGeneral.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<section class="container text-center pt-3">
    <img src="../nombres/HABILIDADESCOMUNICATIVAS.png" alt="">
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
    <form action="../mainApp/sendData/SDHcomunicativas.php" method="POST">
    <section class="row border-bottom mt-4 mb-2">
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
                    <section class="col">La producción de sus mensajes resulta claros y comprensibles para su interlocutor</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hComunitem1" name="hComunitem1" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres1" rows="2"></textarea></section>
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
                    <section class="col">Pronuncia adecuadamente todos los fonemas que integran la palabra</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hComunitem2" name="hComunitem2" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres2" rows="2"></textarea></section>
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
                    <section class="col">Se comunica con oraciones completas y gramaticalmente adecuadas</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hComunitem3" name="hComunitem3" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres3" rows="2"></textarea></section>
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
                    <section class="col">Maneja y respeta tópicos conversacionales (Inicia, mantiene y finaliza una conversacion)</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hComunitem4" name="hComunitem4" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres4" rows="2"></textarea></section>
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
                    <section class="col">Relata de forma secuenciada, clara y coherente experiencias personales</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hComunitem5" name="hComunitem5" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres5" rows="2"></textarea></section>
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
                        <section class="col">Tiene un vocabulario amplio y lo utiliza adecuadamente</section>
                    </section>
                </section>
                <section class="col-2"><section class="row">
                        <section class="col">
                            <select id="hComunitem6" name="hComunitem6" class="form-control">
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
                        <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres6" rows="2"></textarea></section>
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
                        <section class="col">Comprende señas y gestos naturales asociados al lenguaje corporal</section>
                    </section>
                </section>
                <section class="col-2"><section class="row">
                        <section class="col">
                            <select id="hComunitem7" name="hComunitem7" class="form-control">
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
                        <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres7" rows="2"></textarea></section>
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
                        <section class="col">Comprende y sigue instrucciones (precisar si son sencillas o complejas)</section>
                    </section>
                </section>
                <section class="col-2"><section class="row">
                        <section class="col">
                            <select id="hComunitem8" name="hComunitem8" class="form-control">
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
                        <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres8" rows="2"></textarea></section>
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
                        <section class="col">Deduce información no explícita en los mensajes de su interlocutor</section>
                    </section>
                </section>
                <section class="col-2"><section class="row">
                        <section class="col">
                            <select id="hComunitem9" name="hComunitem9" class="form-control">
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
                        <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres9" rows="2"></textarea></section>
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
                        <section class="col">Formula preguntas que le ayudan a comprender mejor el mensaje que recibe</section>
                    </section>
                </section>
                <section class="col-2"><section class="row">
                        <section class="col">
                            <select id="hComunitem10" name="hComunitem10" class="form-control">
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
                        <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres10" rows="2"></textarea></section>
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
                        <section class="col">Comprende la intención comunicativa de su interlocutor</section>
                    </section>
                </section>
                <section class="col-2"><section class="row">
                        <section class="col">
                            <select id="hComunitem11" name="hComunitem11" class="form-control">
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
                        <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres11" rows="2"></textarea></section>
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
                        <section class="col">Se comunica de manera espontánea con los demás (Precisar si con pares o adultos)</section>
                    </section>
                </section>
                <section class="col-2"><section class="row">
                        <section class="col">
                            <select id="hComunitem12" name="hComunitem12" class="form-control">
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
                        <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres12" rows="2"></textarea></section>
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
                    <section class="col">Respeta las reglas establecidas de manera implícita y explícita en la comunicacion</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hComunitem13" name="hComunitem13" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres13" rows="2"></textarea></section>
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
                            <section class="col">Ajusta su lenguaje a las situaciones y contextos en que se encuentra</section>
                        </section>
                    </section>
                    <section class="col-2"><section class="row">
                            <section class="col">
                                <select id="hComunitem14" name="hComunitem14" class="form-control">
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
                            <section class="col-12"><textarea class="form-control w-100" id="textArea" name="textAreaPres14" rows="2"></textarea></section>
                        </section>
                    </section>
                </section>
        <section class="row mt-3">
            <section class="col-4">Obseraciones(Definir si el desempeño es consecuente con el grado escolar que cursa):</section>
            <section class="col-8"><textarea class="form-control" id="textArea" name="textAreaObser" rows="3"></textarea></section>
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
        <section class="col-4"><label for="" id="hComNoObservado">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">Siempre (1)</section>
        <section class="col-4"><label for="" id="hComSiempre">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">A veces (2)</section>
        <section class="col-4"><label for="" id="hComAveces">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center mb-4 pb-4">
        <section class="col-4">Nunca (3)</section>
        <section class="col-4"><label for="" id="hComNunca">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
</section>
<script>
    function limpiarDatos() {
        var i = 1;
        for(i=1;i<=14;i++){
            document.getElementById('hComunitem'+i).selectedIndex='0';
            document.getElementById('textArea').value='';
        }
    }
    function calcular(){

        var cNoObservado = 0;
        var cSiempre = 0;
        var cAveces= 0;
        var cNunca = 0;
        document.getElementById('hComNoObservado').innerHTML = 0;
        document.getElementById('hComSiempre').innerHTML = 0;
        document.getElementById('hComAveces').innerHTML = 0;
        document.getElementById('hComNunca').innerHTML = 0;

        var items1 = [document.getElementById('hComunitem1').selectedIndex, document.getElementById('hComunitem2').selectedIndex,
            document.getElementById('hComunitem3').selectedIndex, document.getElementById('hComunitem4').selectedIndex,
            document.getElementById('hComunitem5').selectedIndex, document.getElementById('hComunitem6').selectedIndex,
            document.getElementById('hComunitem7').selectedIndex, document.getElementById('hComunitem8').selectedIndex,
            document.getElementById('hComunitem9').selectedIndex, document.getElementById('hComunitem10').selectedIndex,
            document.getElementById('hComunitem11').selectedIndex, document.getElementById('hComunitem12').selectedIndex,
            document.getElementById('hComunitem13').selectedIndex,document.getElementById('hComunitem14').selectedIndex];




        for(let i = 0;i<items1.length;i++){
            if(items1[i]==2){
                cNoObservado +=1;
                document.getElementById('hComNoObservado').innerHTML = cNoObservado;
            }
            else if(items1[i]==3){
                cSiempre +=1;
                document.getElementById('hComSiempre').innerHTML = cSiempre;
            }
            else if(items1[i]==4){
                cAveces +=1;
                document.getElementById('hComAveces').innerHTML = cAveces;
            }
            else if(items1[i]==5){
                cNunca +=1;
                document.getElementById('hComNunca').innerHTML = cNunca;
            }
        }


    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
