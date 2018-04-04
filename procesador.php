<?php
$host="localhost";
$user="root";
$pass="mysql2018";
$DB="loginud";
$port="3306";
$usuario = $_REQUEST["usuario"];
$clave = $_REQUEST["contraseña"];
$connection = mysqli_connect($host,$user, $pass, $DB, $port);

$cadena ="select usuario,contraseña from usuario";
$resultado = mysqli_query($connection, $cadena);

if(mysqli_num_rows($resultado)>0){
    while($registro= mysqli_fetch_assoc($resultado)){
        if($usuario==$registro["usuario"] && $clave==$registro["contraseña"]){
            echo "Acceso garantizado";
            return;
        }
    }
    echo "Datos incorrectos";
}else{
    echo "0 registros";
}
