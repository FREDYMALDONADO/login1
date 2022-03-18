<?php

if ($_POST) {
    session_start();
    include('config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query= $conexion -> prepare(" SELECT * FROM tbl_usuario WHERE username = :username AND 
    password = :password");
    $query -> bindParam(':username',$username);
    $query -> bindParam('password',$password);
    $query -> execute();


    $usuario = $query -> fetch(PDO::FETCH_ASSOC);
   
    if($usuario){
        $_session['usuario'] = $usuario['username'];
        header("location:inicio.php");
    }else {
        echo "Usuario o contrasenia no existe";
    }
}
?>
