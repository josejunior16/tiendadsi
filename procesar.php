<?php 
session_start();
if(!isset($_SESSION['carrito'])){
  header('Location: ./index.php');
}
$arreglo=$_SESSION['carrito'];

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logomuebles.jpeg" type="image/x-icon">
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
                            <img src="assets/images/logo-256x205.jpeg" alt="" style="height: 7.5rem;">
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
                                href="index.php#info3-17">MISION</a></li>
                        
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
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Datos de Usuario</h2>
            <div class="p-3 p-lg-5 border">
             
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
               
              </div>
           


              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Correo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
              </div>

              <div class="form-group">
                    <div class="form-group">
                      <label for="c_account_password" class="text-black">Password</label>
                      <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                    </div>
                  
              </div>

            </div>
          </div>
          <div class="col-md-6">

            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Detalle de Compra</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>Total</th>
                    </thead>
                    <?php
                  $total=0;
                      for($i=0;$i<count($arreglo);$i++){
                        $total= $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
                  ?>
                    <tbody>
                      <tr>
                        <td><?php echo  $arreglo[$i]['Nombre']; ?><strong class="mx-2"></td>
                        <td><?php echo  $arreglo[$i]['Cantidad']; ?></td>
                        <td><?php echo  $arreglo[$i]['Precio']; ?></td>
                        <td>$<?php echo  $arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']; ?></td>
                      </tr>
                      <?php 
                      }
                      ?>
                      <tr>
                        <td class="text-black font-weight-bold"  colspan="3"><strong>Total de Compra</strong></td>
                        <td class="text-black font-weight-bold" ><strong>$<?php echo $total; ?></strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>


                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-dark btn-lg py-3 btn-block" onclick="window.location='finalizar.php'">Procesar pago</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>




    <section data-bs-version="5.1" class="footer7 cid-tlBxXrO0OL" once="footers" id="footer7-1m">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        Todos los derechos reservados, 2023
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