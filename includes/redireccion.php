<?php
session_start();

//antes de iniciar la sesion, comprobar si existe la sesion
if(!isset($_SESSION)){
    session_start();
}

//comprobar sino esta la sesion
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}