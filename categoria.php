<?php require_once 'includes/conexion.php';?>  
<?php require_once 'includes/helpers.php';?>     
<?php
       $categoria_actual = conseguirCategoria($db, $_GET['id']);
       if(!isset($categoria_actual['id'])){
           header("Location: index.php");
       }
    ?>
<?php require_once 'includes/cabecera.php';?>          
<?php require_once 'includes/lateral.php';?>

       <!-- caja principal -->
        <div id="principal">
            
            <h1>Entradas de <?=$categoria_actual['nombre']?></h1>
            
            <?php
                //creo una variable llamando a la funcion    
                $entradas = conseguirEntradas($db, null, $_GET['id']);
                if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
                    //y por cada entrada que recorra el mysql fetch me crea una variable entrada con un array asociativo
                    while ($entrada = mysqli_fetch_assoc($entradas)):
              ?>      
                    <!--imprimo-->
                    <article class="entrada">
                       <a href="entrada.php?id=<?=$entrada['id']?>">
                       <h2><?=$entrada['titulo']?></h2>
                       <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                       <p>
                           <!--limitamos numero de letras en los parrafos-->
                           <?= substr($entrada['descripcion'], 0, 180)."..."?>
                       </p>
                       </a>
                   </article>
            
            <?php
                    endwhile;
                else:
            ?>
                    <div class="alerta">No hay entradas en esta categoria</div>
            <?php
            endif; ?>
        </div><!--fin principal-->
    
<?php require_once 'includes/pie.php';?>