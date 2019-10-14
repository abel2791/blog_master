<?php

if(isset($_POST)){
     
    //la conexion y la session la pongo en el if porque es mas recomendable que solo se carguen esos archivos
    //Conexion a la base de datos
    require_once 'includes/conexion.php';

    
    //recoger los valores del formulario de actulizar 
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    
    //Array de errores
    $errores = array();
    
    //validar los datos antes de guardarlos en la base de datos :)  
    
    //validar el nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    
    //validar apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }
    
    //validar email
     if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "el email no es valido";
    }
    
   
    
    $guardar_usuario=false;
    if(count($errores) == 0){
        $guardar_usuario = true;
                     
        //actualizar usuario en la base de datos en la tabla usuarios
        //antes de hacer la consulta, tenemos que recoger en una variable usuario lo que es el objeto del usuario que esta en la sesion
        $usuario = $_SESSION['usuario'];
        $sql = "UPDATE usuarios SET ".
                "nombre = '$nombre', ".
                "apellidos = '$apellidos', ".
                "email = '$email' ".
                "WHERE id = ".$usuario['id']; 
        $guardar = mysqli_query($db, $sql);
        
        if($guardar){
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            $_SESSION['completado'] = "Tus datos se han actualizado con exito";
        }else{
             $_SESSION['errores']['general'] = "¡¡Fallo al actualizar el usuario!!";
        }
        
        //hacemos una redireccion
        header('Location: index.php');
                
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
    
}

header('Location: mis-datos.php');



