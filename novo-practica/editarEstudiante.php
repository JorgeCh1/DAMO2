<?php
if($_SERVER["REQUEST_METHOD"]=="PUT"){
    require_once 'conexion.php';
    $id = $_GET["id"];
    $nombres = $_GET["nombres"];
    $apellidos = $_GET["apellidos"];
    $carrera = $_GET["carrera"];
    $año = $_GET["año"];
    $my_query = "UPDATE estudiante SET nombres= '$nombres', apellidos= '$apellidos', carrera= '$carrera', año= '$año' WHERE id = '$id'";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "\nRegistro actualizado satisfactoriamente...";
    }else{
echo "Error al actualizar registro...";
    }
}else{
    echo"Error desconocido";
}
?>