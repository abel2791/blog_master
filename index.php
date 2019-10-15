<?php require_once 'includes/cabecera.php';?>          
<?php require_once 'includes/lateral.php';?>

       <!-- caja principal -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            
            <?php
                //creo una variable llamando a la funcion    
                $entradas = conseguirEntradas($db, true);
                if(!empty($entradas)):
                    //y por cada entrada que recorra el mysql fetch me crea una variable entrada con un array asociativo
                    while ($entrada = mysqli_fetch_assoc($entradas)):
              ?>      
                    <!--imprimo-->
                    <article class="entrada">
                       <a href="">
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
                endif;
            ?>
         
                    <div id="ver-todas">
                        <a href="entradas.php">Ver todas las entradas</a>
                    </div>  
        </div><!--fin principal-->
    
<?php require_once 'includes/pie.php';?>