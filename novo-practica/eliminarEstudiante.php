<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once 'conexion.php';
    $id = $_GET["id"];
    $my_query = "delete from estudiante where id = $id";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "\nRegistro Eliminado satisfactoriamente...";
    }else{
echo "Error al eliminar registro...";
    }
}else{
    echo"Error desconocido";
}
?>