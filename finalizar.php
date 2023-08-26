<?php 
session_start();
include './php/conexion.php';
if(!isset($_SESSION['carrito'])){
  header('Location: ./index.php');
}
$arreglo=$_SESSION['carrito'];
$total=0;
for($i=0;$i < count($arreglo);$i++){
 $total=$total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
}
$fecha=date('Y-m-d h:m:s');
$conexion->query("insert into ventas(id_usuario,total,fecha) values(2,$total,'$fecha')")or die($conexion->error);
$id_venta=$conexion->insert_id;
for($i=0;$i < count($arreglo);$i++){
  $conexion->query("insert into productos_venta (id_venta,id_producto,cantidad,precio,subtotal)
  values(
    $id_venta,
    ".$arreglo[$i]['Id'].",
  ".$arreglo[$i]['Cantidad'].",
  ".$arreglo[$i]['Precio'].",
  ".$arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'].")")or die($conexion->error);
}
unset($_SESSION['carrito'])
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-256x205.jpeg" type="image/x-icon">
    <meta name="description" content="">


    <title>Catalogo</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap">
    </noscript>
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


    <style>
    img.pequeña {
        width: 100px;
        height: 100px;
    }
    </style>

</head>

<body>

    <section data-bs-version="5.1" class="menu cid-tlBxX1aOQ4" once="menu" id="menu1-1e">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.php">
                            <img src="assets/images/logomuebles.jpg" alt="" style="height: 7.5rem;">
                        </a>
                    </span>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="index.php#top">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link link text-black show text-primary display-4"
                                href="index.php#info3-v" aria-expanded="false">HISTORIA</a></li>
                        <li class="nav-item"><a class="nav-link link text-black show text-primary display-4"
                                href="index.php#info3-17">MISION/a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="catalogo.php">PRODUCTOS</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="#"><span
                                    class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"
                                    style="font-size: 32px; color: rgb(0, 0, 0);"></span></a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="carrito.php"><span
                                    class="mobi-mbri mobi-mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"
                                    style="font-size: 32px; color: rgb(0, 0, 0);"></span><span class="count">
                      <?php 
                      if(isset($_SESSION['carrito'])){
                        echo count($_SESSION['carrito']);
                      }else{
                        echo 0;
                      }
                      ?> 

                      </span></a>
                                
                                </li>
                    </ul>


                </div>
            </div>
        </nav>

    </section>

    <section data-bs-version="5.1" class="header1 cid-tlBxWU1qx1" id="header1-1c">





        <div class="align-center container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-4">




                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="info1 cid-tlBzpnvG69" id="info1-1n">



        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(35, 35, 35);"></div>
        <div class="align-center container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <h3 class="mbr-section-title mb-4 mbr-fonts-style display-1"><strong>DANDO VIDA A TU HOGAR</strong></h3>


                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features12 cid-tlBQNdyjix" id="features13-1p">




    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Gracias por su Compra</h2>
            <p class="lead mb-5">Esteramos poniendonos en contacto.</p>
            <p><a href="index.php" class="btn btn-sm btn-dark">Regresar</a></p>
          </div>
        </div>
      </div>
    </div>



    <section data-bs-version="5.1" class="footer7 cid-tlBxXrO0OL" once="footers" id="footer7-1m">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        Todos los derechos reservados, 2022
                    </p>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    <script>
      $(document).ready(function(){
        $(".btnEliminar").click(function(event){
          event.preventDefault();
          var id=$(this).data('id');
          var boton=$(this);
          $.ajax({
            method:'POST',
            url:'./php/eliminarCarrito.php',
            data:{
              id:id
            }
          }).done(function(respuesta){
              boton.parent('td').parent('tr').remove();
          });
        });
        $(".txtCantidad").keyup(function(){
          var cantidad = $(this).val();
          var precio = $(this).data('precio');
          var id = $(this).data('id');
          incrementar(cantidad,precio,id);
        });
        $(".btnIncrementar").click(function(){
        var precio =  $(this).parent('div').parent('div').find('input').data('precio');
        var id =  $(this).parent('div').parent('div').find('input').data('id');
        var cantidad = $(this).parent('div').parent('div').find('input').val();
        incrementar(cantidad, precio, id);


        });
        function incrementar(cantidad, precio, id){
          var mult = parseFloat(cantidad) * parseFloat(precio);
          $(".cant"+id).text("$"+mult);
          $.ajax({
            method:'POST',
            url:'./php/actualizarCarrito.php',
            data:{
              id:id,
              cantidad:cantidad
            }
          }).done(function(respuesta){
           
          });
        }
      });
    </script>
</body>

</html>