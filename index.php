<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    <body>
        <!-- Logo --> 
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>            
           <!-- menu --> 
           <nav id="menu">
               <ul>
                   <li>
                       <a href="index.php">Inicio</a>
                   </li>
                   <li>
                       <a href="index.php">Categoria 1</a>
                   </li>
                   <li>
                       <a href="index.php">Categoria 2</a>
                   </li>
                   <li>
                       <a href="index.php">Categoria 3</a>
                   </li>
                   <li>
                       <a href="index.php">Categoria 4</a>
                   </li>
                   <li>
                       <a href="index.php">Sobre mi</a>
                   </li>
                   <li>
                       <a href="index.php">Contacto</a>
                   </li>
                   
               </ul>
           </nav>
           
           <div class="clearfix"></div><!---para que borre todos los flotados para que lo de abajo
           no se monte con lo de arriba-->
        </header>
        
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