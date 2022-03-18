<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', '');
define('DATABASE', 'login');
$conexion=null;
try {
    $conexion = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    echo('Error  de conexion! ' . $e->getMessage());
}
 return $conexion;
?>