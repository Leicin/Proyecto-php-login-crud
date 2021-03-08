<?php

session_start();

if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:logueo.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metrolegal</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top ">

        <a class="navbar-brand" href="index.php">
            <img src="../imagenes/cardinal.png" width="120" height="40" alt="40">
        </a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a id="a_metrolegal" class="navbar-brand text-white"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">





            </ul>

            <p style="margin-bottom: 4px;">
                <a id="btn_cerrar" href="cerrar_sesion.php" class="btn btn-outline-light  btn-lg ">Cerrar sesion</a>
            </p>
        </div>


    </nav>


    </div>
    </nav>

    <br>



    <div id="contenedor_jumbotron" class="container text-center " style="margin-top: 100px;">
        <div class="jumbotron">

            <h1 class="display-2"><strong>¡Bienvenido!</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
            <p class="mt-4 display-4">Conect service <span class="badge badge-dark"> <?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>


        </div>

    </div>





    <section class="informacion">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 mb-5 ">
                    <div class="card   mb-3" style="border: 2px solid red">
                        <div class="card-body">
                            <img src="../imagenes/informacion.png" class="card-img-top p-2  mt-1" alt="">
                            <h1 class="text-center">informacion del cliente</h1>
                            <a id="register" href="registro_empresa.php"  class="btn btn-danger mx-auto  btn-lg mt-3 ">Agregar</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2 mb-5">

                </div>

                <div class="col-sm-5 mb-5  ">
                    <div class="card  mb-3" style="border: 2px solid red">
                        <div class="card-body">
                            <img src="../imagenes/indicadores_de_peso.png" class="card-img-top  p-3   mt-3" alt="">
                            <h1 class="text-center">informacion del equipo</h1>
                            <a  href="info_equipo.php"  class="btn btn-danger mx-auto  btn-lg mt-3">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section id="pie">
        <footer class="bg-dark py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="accordion d-lg-flex w-100" data-parent="accordion">

                                <div class="col-lg-4 mt-5 col-md-12">

                                    <a href="#One" class="h4 text-white nav-link p-0 d-block d-lg-none d-xl-none" data-toggle="collapse" id="accordion"> Redes sociales:</a>
                                    <div class="text-white h4 d-none d-lg-block d-kl-block">
                                        Redes sociales:
                                    </div>
                                    <div class="collapse text-white d-lg-flex" id="One" data-parent="#accordion">
                                        <ul class="list-unstyled  d-flex w-100 justify-content-between">
                                            <li><a href="https://www.facebook.com/" target="blank" class="nav-limk p-0"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/?lang=es" target="blank" class="nav-limk p-0"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="https://www.instagram.com/?hl=es-la" target="blank" class="nav-limk p-0"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li><a href="https://www.youtube.com/?gl=CO&hl=es-419" target="blank" class="nav-limk p-0"><i class="fa fa-youtube-play"></i></a>
                                            </li>
                                            <li><a href="#" class="nav-limk p-0"><i class="fa fa-linked-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-5 col-md-12">

                                    <a href="#Two" class="h4 text-white nav-link p-0 d-block d-lg-none d-xl-none" data-toggle="collapse" id="accordion">Contactenos:</a>
                                    <div class="text-white h4  d-none d-lg-block d-kl-block">
                                        Contactenos:
                                    </div>
                                    <div class="collapse text-white d-lg-flex" id="Two" data-parent="#accordion">
                                        <div>

                                            <div>Teléfono Fijo: (57) (4) 6046332</div>
                                            <div>info@cardinalscale.com.co</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 mt-5 col-md-12">

                                    <a href="#Three" class="h4 text-white nav-link p-0 d-block d-lg-none d-xl-none" data-toggle="collapse" id="accordion"> Estamos ubicados:</a>
                                    <div class="text-white h4 d-none d-lg-block d-kl-block">
                                        Estamos ubicados:
                                    </div>
                                    <div class="collapse text-white d-lg-flex" id="Three" data-parent="#accordion">
                                        <div>

                                            <div>Cra.43 A No 61 Sur 152 Bodega 131 </div>
                                            <div>Sabaneta (Ciudadela industrial sabaneta)</div>
                                            <div>Medellín - Antioquia - Colombia</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="container-fluid">
            <div class="row bg-danger">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="p-4 text-white">&copy; Cardinal Weight Colombia 2020</span>
                    </div>
                </div>
            </div>

        </div>


        <script src="../jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../popper/popper.min.js"></script>

        <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="../codigo.js"></script>
</body>

</html>