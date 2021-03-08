<?php

session_start();

if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["Tipo_de_usuario"] == 2) {
        header("location:list_usuarios.php");
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
    <link rel="stylesheet" href="../css/nuevo_usuario.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">


</head>

<body>


    <?php

    include "../controlador/UsuarioControlador.php";
    include "../funciones/funcion.php";


    $page = isset($_GET["page"]) ? intval($_GET['page']) : 1;
    $filas = UsuarioControlador::getUsuarios($page);




    ?>









    <div class="container-fluid  p-0">



        <div class="row">
            <div class="col-md-3" style="height:900px; background-color: #f8fafb">
                <div class="container">
                    <h3 class="text-center mt-3"><?php echo $_SESSION["usuario"]["Tipo_de_usuario"] == 1 ? 'cliente' : 'administrador'; ?></h3>
                    <hr>



                    <div class="mt-5">
                        <img id="img1" class="rounded-circle mx-auto d-block responsive img-circle  clip-circle ml-5  float-center" style="width: 120px; height: 88px; margin-top:-30px; display:inline-block;"><br />
                    </div>

                    <div class="mt-2 text-center">
                        <h3><strong>Hola</strong> <?php echo $_SESSION["usuario"]["Nombres"]; ?></h3>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto float-none">

                        <a href="" class="btn  btn-lg ml-1" style="font-size: 18px;"><i class="fa fa-user-o fa-md mr-2"></i>Usuarios</a>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-2 float-none">

                        <a href="" class="btn btn-lg" style="font-size: 18px;"> <i class="fa fa-users fa-md mr-2"></i>Clientes</a>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-2 float-none">

                        <a href="" class="btn  btn-lg ml-1" style="font-size: 18px;"><i class="fa fa-map-marker  fa-md mr-2"></i>Sedes</a>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-2 float-none">

                        <a href="" class="btn  btn-lg" style="font-size: 18px;"><i class="fa fa-map-o  fa-md mr-2"></i>Ciudades</a>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-2 float-none">

                        <a href="" class="btn  btn-lg" style="font-size: 18px;"> <i class="fa fa-laptop  fa-md mr-2"></i>Equipos</a>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-2 float-none">

                        <a href="" class="btn  btn-lg" style="font-size: 18px;"><i class="fa fa-check-square-o  fa-md mr-2"></i>Protocolos</a>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-2 float-none">

                        <a href="" class="btn  btn-lg" style="font-size: 18px;"><i class="fa fa-cog  fa-md mr-2"></i>Confugraciones</a>
                    </div>

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-2 float-none">

                        <a href="" class="btn  btn-lg" style="font-size: 18px;"><i class="fa fa-home fa-md mr-2" aria-hidden="true"></i>Inicio</a>
                    </div>

                    <hr class="mt-3">

                    <div id="Navbar2" class="d-grid gap-2 col-12 mx-auto mt-5 float-none">

                        <a href="cerrar_sesion.php" class="btn  btn-lg" style="font-size: 18px;"><i class="fa fa-power-off  fa-md mr-2"></i>Cerrar sesión</a>
                    </div>
                </div>

            </div>



            <div class="col-md-9 col-lg-9" style="background-color: #d4dde5; height: 70px;">
                <div id="Navbar1" class="navbar ml-5">
                    <div class="ml-5">
                        <a class="navbar-brand nav-link mt-1 ml-5 float-left" href="../vista/nuevo_usuario.php">Nuevo</a>
                        <a class="navbar-brand nav-link mt-1 ml-4" href="../vista/list_usuarios.php">Lista</a>

                    </div>
                </div>

                <div class="col-md-12 col-lg-12  container-fluid">
                    <div>
                        <div class="col-lg-12">
                            <img src="../imagenes/logo.png" class="rounded mx-auto d-block responsive float-left" style="width: 68px; margin-top: 10px;" alt="Responsive image" />
                        </div>

                        <div class="mt-5 ml-4 col-lg-12 col-sm-12">
                            <h1 style="font-family: Champagne; font-size: 45px;" class="float-left ml-5 mt-2 text-center mb-5">Lista de usuarios</h1>
                            <i class="fa fa-search  fa-2x" class="mt-5" aria-hidden="true"></i>

                        </div>

                    </div>

                </div>







                <!-- <div class="col-xl-12 col-md-12 col-lg-12 mt-5 container-fluid table-responsive" style="width: 100%;">

                    <table class="table  table-hover ">
                        <thead style="background-color: #b11317; color: white">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" id="colu">Cedula </th>
                                <th scope="col" id="colu">Nombres</th>
                                <th scope="col" id="colu">Apellidos</th>
                                <th scope="col" id="colu">Cargo</th>
                                <th scope="col" id="colu">Telefono</th>
                                <th scope="col" id="colu">Tipo usuario</t> 
                                <th scope="col" id="colu">Foto</th>
                                <th scope="col" id="colu">Correo</th>
                                <th colspan="2" scope="col"  id="colu">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-striped">
                            <?php foreach ($filas as $usuario) {  ?>
                                <tr>
                                    <td> <a href="ver_datos.php?Cedula=<?= $usuario["Cedula"] ?>" class="btn btn-light btn-sm mt-1"><i class="fa fa-address-book-o" aria-hidden="true"></i></a></td>
                                    <td><?php echo $usuario["Cedula"] ?></td>
                                    <td><?php echo $usuario["Nombres"] ?></td>
                                    <td><?php echo $usuario["Apellidos"] ?></td>
                                    <td><?php echo $usuario["Cargo"] ?></td>
                                    <td><?php echo $usuario["Tel_usu"] ?></td>
                                    <td><?php echo $usuario["Tipo_de_usuario"] ?></td>
                                    <td><?php echo $usuario["Foto"] ?></td>
                                    <td><?php echo $usuario["correo_electronico"] ?></td>


                                    <td>

                                        <a href="crear_usuario_form.php?Cedula=<?= $usuario["Cedula"] ?>" class="btn btn-success btn-sm mt-1"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></a>



                                        <a href="javascript:eliminar(confirm('Deseas eliminar este usuario?'),
                                     'eliminar_usuario_logic.php?Cedula=<?php echo $usuario["Cedula"]  ?>');" class="btn btn-danger  btn-sm mt-1  mr-5"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
                                    </td>

                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>




                    <nav aria-label="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link page-link-previous" href="?page aria-label" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="?page=4">4</a></li>
                            <li class="page-item"><a class="page-link" href="?page=5">5</a></li>
                            <li class="page-item"><a class="page-link" href="?page=6">6</a></li>
                            <li class="page-item"><a class="page-link" href="?page=7">7</a></li>
                            <li class="page-item" background-color="red">
                                <a class="page-link page-link-next" href="?page aria-label=" Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>


                </div> -->



            </div>
        </div>




    </div>








    <section id="pie">
        <footer class="bg-dark py-5" id="pie_pagin">
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

                                            <div>Teléfono Fijo: 2211137</div>
                                            <div>Celular: (57) 3145735928</div>
                                            <div>pereitha99@hotmail.com</div>
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

                                            <div>Carrera 2 Nro 55g -31</div>
                                            <div>Caicedo villa-turbay.</div>
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

        <script>
            /*
    funcion de JavaScript para pasar y devolverse de pagina
    tomando el query
     */
            document.addEventListener('DOMContentLoaded', function() {
                console.log("page");
                const urlParams = new URLSearchParams(window.location.search);
                console.log(urlParams)

                const page = parseInt(urlParams.get('page')) + 1
                console.log(urlParams.get('page'))
                $('.page-link-next').attr('href', '?page=' + page)

                const pagenext = parseInt(urlParams.get('page')) - 1
                console.log(urlParams.get('page'))
                $('.page-link-previous').attr('href', '?page=' + pagenext)
                const pagePrevious = parseInt(urlParams.get('page')) - 1
                $('.page-link-previous').attr('href', '?page=' + pagePrevious)


            });
            jQuery(document).ready(function() {

            });
        </script>


        <script type="text/javascript">
            function eliminar(confirmacion, url) {

                if (confirmacion) {
                    window.location.href = url;
                }

            }
        </script>

        <script src="../jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../popper/popper.min.js"></script>

        <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="../js/codigo.js"></script>
</body>

</html>