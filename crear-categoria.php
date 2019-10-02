<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabecera.php';?>          
<?php require_once 'includes/lateral.php';?>

 <!-- caja principal -->
        <div id="principal">
            <h1>Crear categorias</h1>
            <p>
                Añade nuevas categorias al blog para que los usuarios puedan 
                usarlas al crear sus entradas.
            </p>
            <br>
            <form action="guardar-categoria.php" method="POST">
                <label>Nombre de la categoria</label>
                <input type="nombre" name="nombre"/>
                
                <input type="submit" value="Gaurdar"/>
            </form>
            
                  
        </div><!--fin de caja principal-->
    
<?php require_once 'includes/pie.php';?>