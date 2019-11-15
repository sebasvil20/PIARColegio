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
    <title>Memoria - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Css/motivacionStyles.css">
    <link rel="stylesheet" href="../Css/menuGeneral.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://kit.fontawesome.com/6e9c638913.js"></script>
<section class="container text-center pt-3">
    <img src="../nombres/MEMORIA.png" alt="">
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
    <form action="../mainApp/sendData/SDmemoria.php" method="POST">
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
                    <section class="col">Repite mínimo 6 de las 15 palabras que se acaban de nombrar</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem1" name="memoItem1" class="form-control">
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
            <section class="col-2">Corto plazo</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">2</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Recuerda al menos 6 figuras de las 15 que se le acaban de mostrar</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem2" name="memoItem2" class="form-control">
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
                    <section class="col">Reproduce con errores menonres y en maximo 15 segundos, 4 trazos representados</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem3" name="memoItem3" class="form-control">
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
                    <section class="col">Hace una lista de 15 personas conocidas y luego identifica rápidamente las de un determinado género</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem4" name="memoItem4" class="form-control">
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
            <section class="col-2">Corto plazo de trabajo</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">5</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Logra tocar, en orden inverso, al menos 3 de las figuras que tocó el orientador (Iniciar con 2 hasta 7)</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem5" name="memoItem5" class="form-control">
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
                    <section class="col">Reproduce una figura atendiendo a tres instrucciones simultaneas (tamaño, color y entorno)</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem6" name="memoItem6" class="form-control">
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
                    <section class="col">Identifica el objeto presentado gráfica y oralmente y su funcionalidad básica</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem7" name="memoItem7" class="form-control">
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
            <section class="col-2">Largo plazo semántica</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">8</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Agrupa por categorias semánticas (animales, plantas, herramientas..) objetos presentados en fichas gráficas</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem8" name="memoItem8" class="form-control">
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
                    <section class="col">Genera una lista de palabaras a partir de una categoría semántica dada</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem9" name="memoItem9" class="form-control">
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
                    <section class="col">Luego de leer un relato, puede recordar episodios especificos</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem10" name="memoItem10" class="form-control">
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
            <section class="col-2">Largo plazo episódica</section>
            <section class="col-1">
                <section class="row text-center">
                    <section class="col">11</section>
                </section>
            </section>
            <section class="col-7">
                <section class="row text-left">
                    <section class="col">Puede ordenar de manera lógica sucesos o historias vividas o leídas</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem11" name="memoItem11" class="form-control">
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
                    <section class="col">Evoca fácilmente los aspectos o procesos trabajados en clase</section>
                </section>
            </section>
            <section class="col-2">
                <section class="row">
                    <section class="col">
                        <select id="memoItem12" name="memoItem12" class="form-control">
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
            <section class="col-10"><textarea class="form-control" id="textArea" name="textArea1" rows="3"></textarea></section>
        </section>
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
            <section class="col-3">Corto plazo</section>
            <section class="col-3"><label for="" id="sumSiCorPla">0</label></section>
            <section class="col-3"><label for="" id="sumNoCorPla">0</label></section>
            <section class="col-3"><label for="" id="">3</label></section>
        </section>
        <section class="row mt-2 text-center">
            <section class="col-3">Corto plazo de trabajo</section>
            <section class="col-3"><label for="" id="sumSiCorPlaTra">0</label></section>
            <section class="col-3"><label for="" id="sumNoCorPlaTra">0</label></section>
            <section class="col-3"><label for="" id="">3</label></section>
        </section>
        <section class="row mt-2 text-center">
            <section class="col-3">Largo plazo semántica</section>
            <section class="col-3"><label for="" id="sumSiLarPlaSeman">0</label></section>
            <section class="col-3"><label for="" id="sumNoLarPlaSeman">0</label></section>
            <section class="col-3"><label for="" id="">3</label></section>
        </section>
        <section class="row mt-2 text-center border-bottom pb-3 mb-4">
            <section class="col-3">Largo plazo episódica</section>
            <section class="col-3"><label for="" id="sumSiLarPlaEpi">0</label></section>
            <section class="col-3"><label for="" id="sumNoLarPlaEpi">0</label></section>
            <section class="col-3"><label for="" id="">3</label></section>
        </section>
    </form>
</section>
<script>
    function calcular(){
        var items1 = [document.getElementById('memoItem1').selectedIndex, document.getElementById('memoItem2').selectedIndex,
            document.getElementById('memoItem3').selectedIndex];

        var items2= [document.getElementById('memoItem4').selectedIndex,
            document.getElementById('memoItem5').selectedIndex, document.getElementById('memoItem6').selectedIndex];

        var items3= [document.getElementById('memoItem7').selectedIndex,
            document.getElementById('memoItem8').selectedIndex, document.getElementById('memoItem9').selectedIndex];

        var items4= [document.getElementById('memoItem10').selectedIndex,
            document.getElementById('memoItem11').selectedIndex, document.getElementById('memoItem12').selectedIndex];

        var cSiCorPla = 0;
        var cNoCorPla = 0;

        var cSiCorPlaTra = 0;
        var cNoCorPlaTra = 0;

        var cSiLarPlaSeman = 0;
        var cNoLarPlaSeman = 0;

        var cSiLarPlaEpi = 0;
        var cNoLarPlaEpi = 0;

        for(let i = 0;i<items1.length;i++){
            if(items1[i]==3){
                cNoCorPla +=1;
                document.getElementById('sumNoCorPla').innerHTML = cNoCorPla;
            }
            else if(items1[i]==2){
                cSiCorPla +=1;
                document.getElementById('sumSiCorPla').innerHTML = cSiCorPla;
            }
        }

        for(let i = 0;i<items2.length;i++){
            if(items2[i]==3){
                cNoCorPlaTra +=1;
                document.getElementById('sumNoCorPlaTra').innerHTML = cNoCorPlaTra;
            }
            else if(items2[i]==2){
                cSiCorPlaTra +=1;
                document.getElementById('sumSiCorPlaTra').innerHTML = cSiCorPlaTra;
            }
        }

        for(let i = 0;i<items3.length;i++){
            if(items3[i]==3){
                cNoLarPlaSeman +=1;
                document.getElementById('sumNoLarPlaSeman').innerHTML = cNoLarPlaSeman;
            }
            else if(items3[i]==2){
                cSiLarPlaSeman +=1;
                document.getElementById('sumSiLarPlaSeman').innerHTML = cSiLarPlaSeman;
            }
        }

        for(let i = 0;i<items4.length;i++){
            if(items4[i]==3){
                cNoLarPlaEpi +=1;
                document.getElementById('sumNoLarPlaEpi').innerHTML = cNoLarPlaEpi;
            }
            else if(items4[i]==2){
                cSiLarPlaEpi +=1;
                document.getElementById('sumSiLarPlaEpi').innerHTML = cSiLarPlaEpi;
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
