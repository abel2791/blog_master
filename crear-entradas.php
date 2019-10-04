<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabecera.php';?>          
<?php require_once 'includes/lateral.php';?>

 <!-- caja principal -->
        <div id="principal">
            <h1>Crear entradas</h1>
            <p>
                Añade nuevas entradas al blog para que los usuarios puedan 
                leerlas y disfrutar de nuestro contenido.
            </p>
            <br>
            <form action="guardar-entrada.php" method="POST">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo"/>
                
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion"/>
                
                <label for="categoria">Categorias</label>
                <select name="categoria">
                    <?php 
                    $categorias = conseguirCategorias($db);
                        //tambien le pongo un if para comprobrar si hay categorias
                        if(!empty($categorias)):{
                            
                        }
                        //hacemos un bucle para recorrer todas las categorias
                        //y voy a crear una variable categoria en cada iteraccion que yo haga en el mysqlli
                        while ($categoria = mysqli_fetch_assoc($categorias)): 
                    ?> 
                       <option value="<?=$categoria['id']?>">
                         <?=$categoria['nombre']?>
                       </option>
                    <?php
                        endwhile;
                        endif;
                    ?>
                </select>
                
                <input type="submit" value="Gaurdar"/>
            </form>
            
                  
        </div><!--fin de caja principal-->
    
<?php require_once 'includes/pie.php';?>
