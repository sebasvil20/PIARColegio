<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    
    require 'conexion.php';
    sleep(0.2);
    session_start();

    $mysqli->set_charset('utf8');

    $usuario = $mysqli->real_escape_string($_POST['usuariolg']);
    $pass = $mysqli->real_escape_string($_POST['passwordlg']);

    if($nuevaconsulta = $mysqli->prepare("SELECT Usuario, Tipo, Nombre FROM usuarios WHERE Usuario = ? AND Contrasena = ?")){

        $nuevaconsulta->bind_param('ss', $usuario, $pass);
        $nuevaconsulta->execute();
        $resultado = $nuevaconsulta->get_result();
        
        if($resultado->num_rows == 1){
            $datos = $resultado->fetch_assoc();
            $_SESSION['Usuario'] = $datos;
            echo json_encode(array('error' => false , 'Tipo' => $datos['Tipo']));
        }
        else{
            echo json_encode(array('error' => true));
        }
        $nuevaconsulta->close();
    }

}


$mysqli->close();

?>