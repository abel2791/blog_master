<?php
 require_once 'includes/conexion.php';

//hacemos un if para verificar si existe el usuario identificado
if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    
    $sql = "DELETE FROM usuarios WHERE usuario_id = $usuario_id AND id = $entrada_id";
    mysqli_query($db, $sql);
}

header("Location: index.php");