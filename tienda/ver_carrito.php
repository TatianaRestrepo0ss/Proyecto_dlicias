
<?php
include_once "funciones.php";
include_once "encabezado.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital,wght@0,400;0,700;1,400&family=Scope+One&display=swap"
        rel="stylesheet">

    <title>Carrito</title>
</head>

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
   
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                <a href="tienda.php" class="button is-warning">Ver tienda</a>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <h2 class="is-size-2">Mi carrito de compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Quitar</th>
                    </tr>
                </thead>









                
                    <?php
                    include_once "encabezado.php";
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
                        <tr>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php echo $producto->descripcion ?></td>
                            <td>$<?php echo number_format($producto->precio, 2) ?></td>
                            <td>
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>


                        <div class="contenedor">
                            
        <header class="header">
        


           
            </nav>
        </header>
        <main class="contenido_factura">
            <h3>Resumen de tu pedido</h3>
            <div class="row1">
               
                    <div class="uno">
                       
                    
                </div>
                <div class="caja2">
                
                        <div class="elemento1">
                        
                        </div>
                        <div class="elemento2">
                        
                            
                     
                    </div>
                  
                        <div class="elemento3">
                            
                     
                       
                        
                    </div>
                </div>
            </div>  
                <div class="elemento3">

            <div class="row2">
                <div class="caja3">
                <div class="opciones-adiciones">
                    <div class="options">
                        <h3>Elige tus papas $6000</h3>
                        <input type="checkbox" id="cheese" name="addition" value="cheese">
                        <label for="cheese">Papas a la francesa</label><br>
                        <input type="checkbox" id="bacon" name="addition" value="bacon">
                        <label for="bacon">Papas en casco</label><br>
                    </div>
                    <div class="additions">
                        <h3>Adiciones</h3>
                        <h4>Costo por adición $2500</h4>
                        <input type="checkbox" id="cheese" name="addition" value="cheese">
                        <label for="cheese">Queso asado</label><br>
                        <input type="checkbox" id="bacon" name="addition" value="bacon">
                        <label for="bacon">Tocineta</label><br>
                        <input type="checkbox" id="guacamole" name="addition" value="guacamole">
                        <label for="guacamole">Guacamole</label><br>
                        <input type="checkbox" id="onion" name="addition" value="onion">
                        <label for="onion">Cebolla caramelizada</label>
                    </div>
                </div>
            </div>
            


                <div class="dropdown">
    <label for="pagina">METODO DE PAGO:</label>
    <select id="pagina" onchange="irAPagina(this)">
      <option value="pago.html">Tarjeta debito o credito</option>
        <option value="">Efectivo</option>
        <option value="pago.html">Paypal</option>
    </select>
</div>

<script>
    function irAPagina(selectElement) {
        var selectedValue = selectElement.value;
        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }
</script>
</div>




<div class="row2">
                <div class="caja4">

                    <div class="dropdown">

                        <label for="opciones">SELECCIONE PROPINA A DOMICILIARIO:</label>
                        <select id="opciones">
                            <option value="opcion1">No deseo dar propina</option>
                            <option value="opcion2">2.500</option>
                            <option value="opcion3">3.500</option>
                            <option value="opcion2">4.500</option>
                        </select>


                    </div>
                </div>
            </div>

    </form>


    
            <div class="row3">
                <div>
                <li><a href="tienda.php"  > ÁTRAS</a></li>
                </div>

            </div>
        </main>
           
          
        </main>
        <aside class="sidebar">
            <div class="logo_sidebar">
                <img src="img/logo_sb.jpeg" alt="">
            </div>

        </aside>

    </div>




              
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <a href="pago.html" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</a>
        </div>
    </div>
    </tbody>
<?php } ?>
<?php include_once "pie.php" ?>