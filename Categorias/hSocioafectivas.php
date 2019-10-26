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
    <title>Habilidades Socioafectivas - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Css/menuGeneral.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<section class="container text-center pt-3">
    <img src="../nombres/HABILIDADESSOCIOAFECTIVAS.png" alt="">
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
    <section class="row border-bottom mt-4 mb-2">
        <ul class="menuInterno mb-4 pb-2 pt-2">
            <li><i class="far fa-save mr-2"></i>Guardar</li>
            <li><i class="far fa-sticky-note mr-2"></i>Limpiar</li>
            <li><a href="../Inicio.php"><i class="fas fa-backward mr-2"></i>Regresar al inicio</a></li>
        </ul>
    </section>
    <section class="row text-center mt-5 border border-dark">
        <section class="col-1 border border-dark">N°</section>
        <section class="col-6 border border-dark">Descriptores</section>
        <section class="col-2 border border-dark">Valoracion</section>
        <section class="col-3 border border-dark">Precisiones</section>
    </section>
    <form action="">

        <section class="row pt-1">
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">1</section>
                </section>
            </section>
            <section class="col-6">
                <section class="row text-left">
                    <section class="col">Expresa sus emociones y sentimientos de manera consecuente con la situacion</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem1" name="hSocioaItem1" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Comprende y respeta los sentiemientos y emociones de los demás</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem2" name="hSocioaItem2" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Se siente a gusto consigo mismo y se expresa con seguridad</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem3" name="hSocioaItem3" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Solicita ayuda cuando lo requiere y acepta el apoyo de los otros</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem4" name="hSocioaItem4" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Valora su trabajo y respeta el trabajo de los demás</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem5" name="hSocioaItem5" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Expresa espontáneamente su cariño y acepta con agrado las manifestaciones de los demás</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem6" name="hSocioaItem6" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Realiza renuncias que conllevan al logro de una meta específica</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem7" name="hSocioaItem7" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Se adapta con facilidad a situaciones y contextos nuevos</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem8" name="hSocioaItem8" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Controla sus impulsos cuando se siente sometido a situaciones de presión
                    </section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem9" name="hSocioaItem9" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Se relaciona de manera respetuosa con los demás (precisar si con pares o adultos)

                    </section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem10" name="hSocioaItem10" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Participa en actividades colectivas, ajustándose a las reglas establecidas
                    </section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem11" name="hSocioaItem11" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Manifiesta actitudes solidarias y cooperadoras con sus compañeros
                    </section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem12" name="hSocioaItem12" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Identifica las consecuencias de sus acciones y se propone metas de cambio
                    </section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem13" name="hSocioaItem13" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
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
                    <section class="col">Cuida sus pertenencias y en general todo lo que hay en su entorno</section>
                </section>
            </section>
            <section class="col-2"><section class="row">
                    <section class="col">
                        <select id="hSocioaItem14" name="hSocioaItem13" class="form-control">
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
                    <section class="col-12"><textarea class="form-control w-100" id="textArea" rows="2"></textarea></section>
                </section>
            </section>
        </section>
        <section class="row mt-3">
            <section class="col-4">Obseraciones(Definir si el desempeño es consecuente con el grado escolar que cursa):</section>
            <section class="col-8"><textarea class="form-control" id="textArea" rows="3"></textarea></section>
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
        <section class="col-4"><label for="" id="hSocioaNoObservado">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">Siempre (1)</section>
        <section class="col-4"><label for="" id="hSocioaSiempre">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center">
        <section class="col-4">A veces (2)</section>
        <section class="col-4"><label for="" id="hSocioaAveces">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
    <section class="row mt-2 text-center mb-4 pb-4">
        <section class="col-4">Nunca (3)</section>
        <section class="col-4"><label for="" id="hSocioaNunca">0</label></section>
        <section class="col-4"><label for="" id=""></label></section>
    </section>
</section>
<script>
    function calcular(){

        var cNoObservado = 0;
        var cSiempre = 0;
        var cAveces= 0;
        var cNunca = 0;
        document.getElementById('hSocioaNoObservado').innerHTML = 0;
        document.getElementById('hSocioaSiempre').innerHTML = 0;
        document.getElementById('hSocioaAveces').innerHTML = 0;
        document.getElementById('hSocioaNunca').innerHTML = 0;

        var items1 = [document.getElementById('hSocioaItem1').selectedIndex, document.getElementById('hSocioaItem2').selectedIndex,
            document.getElementById('hSocioaItem3').selectedIndex, document.getElementById('hSocioaItem4').selectedIndex,
            document.getElementById('hSocioaItem5').selectedIndex, document.getElementById('hSocioaItem6').selectedIndex,
            document.getElementById('hSocioaItem7').selectedIndex, document.getElementById('hSocioaItem8').selectedIndex,
            document.getElementById('hSocioaItem9').selectedIndex, document.getElementById('hSocioaItem10').selectedIndex,
            document.getElementById('hSocioaItem11').selectedIndex, document.getElementById('hSocioaItem12').selectedIndex,
            document.getElementById('hSocioaItem13').selectedIndex];

        for(let i = 0;i<items1.length;i++){
            if(items1[i]==2){
                cNoObservado +=1;
                document.getElementById('hSocioaNoObservado').innerHTML = cNoObservado;
            }
            else if(items1[i]==3){
                cSiempre +=1;
                document.getElementById('hSocioaSiempre').innerHTML = cSiempre;
            }
            else if(items1[i]==4){
                cAveces +=1;
                document.getElementById('hSocioaAveces').innerHTML = cAveces;
            }
            else if(items1[i]==5){
                cNunca +=1;
                document.getElementById('hSocioaNunca').innerHTML = cNunca;
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
