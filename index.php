<?php require_once 'includes/cabecera.php';?>
<div id="contenedor">        
        <!-- barra lateral -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    
                     <label for="password">Contraseña</label>
                     <input type="password" name="password" />
                     
                     <input type="submit" value="Entrar"/>
                </form>                
            </div>
            
            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" />
                    
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" />
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    
                     <label for="password">Contraseña</label>
                     <input type="password" name="password" />
                     
                     <input type="submit" value="Registrar"/>
                </form>                
            </div>
        </aside>
        
        <!-- caja principal -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nunc, suscipit sit amet rutrum at, posuere quis massa. Nulla facilisi. Proin volutpat elit quis mauris finibus, a eleifend quam posuere. Sed mollis gravida tincidunt. Praesent leo libero, feugiat quis pulvinar vitae, finibus vitae lectus. Ut libero felis, ultricies vitae ultrices at, tincidunt sed nisl. Duis luctus velit in vulputate faucibus. Sed interdum tincidunt magna, eu aliquet nulla facilisis nec. Maecenas fermentum pretium mauris, in congue risus venenatis eu. Aenean accumsan tellus at dui gravida malesuada. Sed in sodales dolor. Morbi dictum tellus in tincidunt posuere.
                </p>
                </a>
            </article>
            
            <article class="entrada">
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nunc, suscipit sit amet rutrum at, posuere quis massa. Nulla facilisi. Proin volutpat elit quis mauris finibus, a eleifend quam posuere. Sed mollis gravida tincidunt. Praesent leo libero, feugiat quis pulvinar vitae, finibus vitae lectus. Ut libero felis, ultricies vitae ultrices at, tincidunt sed nisl. Duis luctus velit in vulputate faucibus. Sed interdum tincidunt magna, eu aliquet nulla facilisis nec. Maecenas fermentum pretium mauris, in congue risus venenatis eu. Aenean accumsan tellus at dui gravida malesuada. Sed in sodales dolor. Morbi dictum tellus in tincidunt posuere.
                </p>
                </a>
            </article>
            
            <article class="entrada">
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nunc, suscipit sit amet rutrum at, posuere quis massa. Nulla facilisi. Proin volutpat elit quis mauris finibus, a eleifend quam posuere. Sed mollis gravida tincidunt. Praesent leo libero, feugiat quis pulvinar vitae, finibus vitae lectus. Ut libero felis, ultricies vitae ultrices at, tincidunt sed nisl. Duis luctus velit in vulputate faucibus. Sed interdum tincidunt magna, eu aliquet nulla facilisis nec. Maecenas fermentum pretium mauris, in congue risus venenatis eu. Aenean accumsan tellus at dui gravida malesuada. Sed in sodales dolor. Morbi dictum tellus in tincidunt posuere.
                </p>
                </a>
            </article>
            
            <article class="entrada">
                <a href="">
                <h2>Titulo de mi entrada</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna nunc, suscipit sit amet rutrum at, posuere quis massa. Nulla facilisi. Proin volutpat elit quis mauris finibus, a eleifend quam posuere. Sed mollis gravida tincidunt. Praesent leo libero, feugiat quis pulvinar vitae, finibus vitae lectus. Ut libero felis, ultricies vitae ultrices at, tincidunt sed nisl. Duis luctus velit in vulputate faucibus. Sed interdum tincidunt magna, eu aliquet nulla facilisis nec. Maecenas fermentum pretium mauris, in congue risus venenatis eu. Aenean accumsan tellus at dui gravida malesuada. Sed in sodales dolor. Morbi dictum tellus in tincidunt posuere.
                </p>
                </a>
            </article>
                    <div id="ver-todas">
                       <a href="">Ver todas las entradas</a>
                    </div>  
        </div><!--fin principal-->
    
        <div class="clearfix"></div><!---para que el pie de pagina no suba,hacia arriba--->
      </div>
        
        
        <!-- pie de pagina -->
        <footer id="pie">
            <p>Desarrollado por Enrique Abel &copy; 2019</p>
        </footer>
    </body>
</html>