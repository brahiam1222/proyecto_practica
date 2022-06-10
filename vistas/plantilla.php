
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link href="./css/carousel.css" rel="stylesheet">
    <link href="./css/carousel.rtl.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Principal</title>
</head>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="logo" viewBox="0 0 118 94">
  <image id="image0" width="118" height="94" x="0" y="0"
    href="./img/icono.svg" />



</svg>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <!-- <a href="index.php?pagina=inicio" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none"> -->
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Logo"><use xlink:href="#logo"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php?pagina=inicio" class="nav-link px-2 link-secondary">Inicio</a></li>
          <li><a href="index.php?pagina=terminacion" class="nav-link px-2 link-dark">Terminación</a></li>
          <li><a href="index.php?pagina=consolidado" class="nav-link px-2 link-dark">Consolidado</a></li>
          <li><a href="index.php?pagina=lluvia" class="nav-link px-2 link-dark">Lluvia</a></li>
          <!-- <li><a href="../vistas/registro.php" class="nav-link px-2 link-dark">Registro</a></li> -->
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php?pagina=salir">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="b-example-divider"></div>
  <main>

    <div class="container">
        <?php 

          //  if(session_start()!=null){
              if (isset($_GET["pagina"])) {
                if ($_GET["pagina"] == "inicio" || $_GET["pagina"] == "consolidado" || $_GET["pagina"] == "terminacion" || $_GET["pagina"] == "lluvia" || $_GET["pagina"] == "salir") {
                 
                    $pagina = $_GET["pagina"];
                    
                    include "paginas/".$pagina.".php";
                }else{
                    include "paginas/404.php";
                }
            }
          
            // else{
            //     header("location: index.php?pagina=inicio");
            // }
          //}
          else{
            echo '<script> window.location = "./vistas/registro.php";</script>';
            // header("location: vistas/ingreso.php");
          }
        
        ?>
      </main>
      
      
      
      <body>
        <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>