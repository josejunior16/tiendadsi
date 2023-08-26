<?php
include('./php/conexion.php');
if(isset($_GET['id'])){
  $resultado=$conexion ->query("select * from productos p inner join imgproductos i on i.id=p.id where p.id=".$_GET['id'])or die($conexion->error);
  if(mysqli_num_rows($resultado) > 0){
    $fila=mysqli_fetch_row($resultado);
  }else{
    header("Location: ./index.php");
  }

}else{
  header("Location: ./index.php");
}

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
        width: 300px;
        height: 300px;
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
                                href="index.php#info3-17">MISION</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="catalogo.php">PRODUCTOS</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="#"><span
                                    class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"
                                    style="font-size: 32px; color: rgb(0, 0, 0);"></span></a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="#"><span
                                    class="mobi-mbri mobi-mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"
                                    style="font-size: 32px; color: rgb(0, 0, 0);"></span></a></li>
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

    <section data-bs-version="5.1" class="gallery5 mbr-gallery cid-tlBU6GDLFH" id="gallery5-1q">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Detalle de
                        Categorias</strong></h3>
                <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5"></h4>
            </div>
        </div>
    </section>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="http://localhost/admintienda/public/<?php echo $fila[4];?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1]; ?></h2>
            <p><?php echo $fila[2]; ?></p>
            <p><strong class="text-primary h4"><?php echo $fila[3]; ?></strong></p>
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
             
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
             
            </div>

            </div>
            <p><a href="carrito.php?id=<?php echo $fila[0];?>" class="buy-now btn btn-sm btn-dark">Agregar</a></p>

          </div>
        </div>
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

</body>

</html>