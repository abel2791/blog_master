<?php

//iniciar la sesion y la conexion a la base de datos
require_once 'includes/conexion.php';

//Recoger los datos del formulario
//trim para que limpie los espacios por delante y por detras
if(isset($_POST)){
     //borrar error antig
            if(isset($_SESSION['error_login'])){
                session_unset($_SESSION['error_login']);
            }
            
     
    //Recoger datos del formulario           
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    //consulta a la base de datos para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    
    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
       
        
        //Comprobar la contraseña / cifrar
        $verify = password_verify($password, $usuario['password']);
        
        if($verify){
            //Utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario']= $usuario;
            
                   
        }else{
            //si falla enviar una sesion con el fallo 
            $_SESSION['error_login'] = "Login incorrecto";
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = "Login incorrecto";
    }    
   
}
//redirigir al index.php
header('Location: index.php');