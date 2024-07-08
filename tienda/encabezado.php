<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras con PHP y MySQL - By Parzibyte</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>

<body>

       
      
    
          
                <div class="navbar-item">
                <div class="contenedor">
        <header class="header">
            <nav>
                <div class="logo">
                    <img src="img/logo.jpeg" alt="Logo">

  
</div>
<ul class="nav-links">
                    <li><a href="catalogo.html"> INICIO</a></li>
                    <li><a href="registro.html"  > REGISTRO</a></li>
                    <li><a href="tienda.php"  > MENÚ</a></li>
                    <li><a href="contactanos.html"  > CONTACTO </a></li>
                
                </ul>


<div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                            <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </div>
</div>
</header>
                                            </body>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">