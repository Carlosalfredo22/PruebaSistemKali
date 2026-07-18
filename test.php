<?php

include("conexion.php");

if($conn){
    echo "<h2 style='color:green'>✅ Conexión exitosa a la base de datos.</h2>";
}else{
    echo "<h2 style='color:red'>❌ Error al conectar.</h2>";
}

?>