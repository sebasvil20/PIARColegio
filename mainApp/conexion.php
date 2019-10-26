<?php
    $mysqli = new mysqli('localhost','root','','piar');
    if($mysqli ->connect_error):
        echo "Error al conectarse con MySql debido al error",$mysqli->connect_error;
    endif;


    /* $mysqli = new mysqli('localhost','root','','id10826021_login');
    if($mysqli ->connect_error):
        echo "Error al conectarse con MySql debido al error",$misqli->connect_error;
    endif; */
?>




