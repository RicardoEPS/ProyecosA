<!DOCTYPE html>
   <?php
    session_start();
    if($_SESSION["Usuario"] == ""){
        header("Location:Login.php");
        exit();
    }else{
        /*echo "Hola ". $_SESSION['Tipo'] .$_SESSION["Usuario"];
        if($_SESSION["Tipo"] == "A"){
            echo "Hola: "."Administrador ".$_SESSION["Usuario"];
        }
        if($_SESSION["Tipo"] == "C"){
            echo "Hola: "."Tipo C ".$_SESSION["Usuario"];
        }*/
    }
    include_once 'Conexion.php';
    /*if(isset($_POST['btn-guardar']))
    {
        $_SESSION["Usuario"] = "";
        header("Location:Login.php");
        exit();
    }*/
?>
<html lang="es">
    <head>
        <script type="text/javascript">
            function Salir()
            {
                var Res = confirm('¿Desea Salir?');
                if(Res == true)
                {
                    window.location.href='LogOut.php';
                    //window.location="LogOut.php";
                    //window.location.href='LogOut.php?';
                    alert('Hasta Luego');
                }
            }
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Delicious</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/StyleM.css">
        <!-- =======================================================
        Theme Name: Delicious
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>
    <body>
        <!--banner-->

        <section id="banner">
            <div id="ContenedorMR">
                <ul id="MenuIz">
                    <li>
                        <a href="javascript:openNav()">TAPATON</a>
                    </li>
                </ul>
                <ul id="Menu">
                    <li>
                       <center>
                        <?php
                            echo '<div class="Usuario" style="width: 400px;">'.'Hola '.$_SESSION["Usuario"].'</div>';
                            ?>
                        </center>
                    </li>
                    <li><a href="javascript:Salir()"><img src="img/CerrarSesion.png" width="40px" class="CerrarSesion" title="Cerrar Sesion" style="color: black"></a></li>
                </ul>
            </div>
            <div class="bg-color">
                <!--<header id="header">
                    <div class="container">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#about">Acerca de</a>
                            <a href="#event">Eventos</a>
                            <a href="#menu-list">Menu</a>
                            <a href="#contact">Reservar Una Mesa</a>
                        </div>
                        <!-- Use any element to open the sidenav
                        <span onclick="openNav()" class="pull-right menu-icon" style="position: fixed; top: 25px; right: 20px; color: black; z-index: 3; opacity: 10">☰</span>
                    </div>
                </header>-->
                <div class="container">
                    <div class="row">
                        <div class="inner text-center">
                            <h1 class="logo-name">TAPATON</h1>
                            <h2>Contando Sonrisas</h2>
                            <p>Especializado En Comida Saludable!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / banner -->
        <!--about
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center marb-35">
                        <h1 class="header-h">Viaje Delicioso</h1>
                        <p class="header-p">Risotto de Hongos con Poro,
                            Ensalada Tipo Rusa,
                            Tartara de Salmon,
                            Lentejas a la Vinagreta,
                            Aderezo de Kiwi,

                            Bacalao Para Navidad,
                            Salmon Con Mayonesa de Mostaza y Miel,
                            Almejas a la Marinera,
                            Tatakin de Atun,
                            Garbanzos de Bacalao Y Espinacas,

                            Mayulas Flameadas al Cognac,
                            Arroz Con Manzanas Y Nueces,
                            Paella Primaveral de Verduras,
                            Fettucine Con Salsa de Hongos,
                            Risotto de Limon Con Camarones.</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-info">
                                <h2 class="heading">Lo Mejor Que Provaras</h2>
                                <p>Estamos Seguros que volveras porque aqui encontraras lo mejor de lo mejor!</p>
                                <div class="details-list">
                                    <ul>
                                        <li><i class="fa fa-check"></i>Risotto de Hongos Con Poro</li>
                                        <li><i class="fa fa-check"></i>Tartara de Salmon</li>
                                        <li><i class="fa fa-check"></i>Tatakin de Atun </li>
                                        <li><i class="fa fa-check"></i>Fettucione Con Salsa de Hongos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="img/res01.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>-->
        <!--/about-->
        <!-- event -->
        <!--<section id="event">
            <div class="bg-color" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center" style="padding:60px;">
                            <h1 class="header-h">Proximos Eventos</h1>
                            <p class="header-p">Decoraciones 100% Completas</p>
                        </div>
                        <div class="col-md-12" style="padding-bottom:60px;">
                            <div class="item active left">
                                <div class="col-md-6 col-sm-6 left-images">
                                    <img src="img/res02.jpg" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6 details-text">
                                    <div class="content-holder">
                                        <h2>Arroz Tradicional Con Camarones</h2>
                                        <p>Arroz con camarones:<br> Preparado con arroz, camarones, cebolla, pimiento, tomate, perejil, comino, achiote y vino blanco..</p>
                                        <address>
                                            <strong>Lugar: </strong>
                                            1612 Collins Str, Victoria 8007
                                            <br>
                                            <strong>Hora: </strong>
                                            07:30pm
                                        </address>
                                        <a class="btn btn-imfo btn-read-more" href="events-details.html">Leer Mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <--/ even
        <-- menu
        <section id="menu-list" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center marb-35">
                        <h1 class="header-h">Lista De Menús</h1>
                        <p class="header-p">Los Mejores Platillos
                            <br>Para Los Mejores Paladares.</p>
                    </div>
                    <div class="col-md-12  text-center gallery-trigger">
                        <ul>
                            <li><a class="filter" data-filter="all" href="VerTodo.php#menu-list">Mostrar Todo</a></li>
                            <li><a class="filter" data-filter=".category-1" href="VerDesayunos.php#menu-list">Desayuno</a></li>
                            <li><a class="filter" data-filter=".category-2" href="VerComidas.php#menu-list">Comida</a></li>
                            <li><a class="filter" data-filter=".category-3" href="VerCenas.php#menu-list">Cena</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12  text-center gallery-trigger">
                        <ul>
                            <li><a class="filter" data-filter=".category-1" href="NuevoProducto.php#about">Nuevo Producto</a></li>
                            <li><a class="filter" data-filter=".category-1" href="Buscar.php#menu-list">Buscar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <--/ menu
        <-- contact
        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="header-h">Reserva Tu Mesa</h1>
                        <p class="header-p">Reserva Ahora Y
                            <br>Asegura Una Buena Mesa.</p>
                    </div>
                </div>
                <div class="row msg-row">
                    <div class="col-md-4 col-sm-4 mr-15">
                        <div class="media-2">
                            <div class="media-left">
                                <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                            </div>
                            <div class="media-body">
                                <h4 class="dark-blue regular">Numeros Telefonicos</h4>
                                <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Reserva de Teléfono</span></p>
                            </div>
                        </div>
                        <div class="media-2">
                            <div class="media-left">
                                <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                            </div>
                            <div class="media-body">
                                <h4 class="dark-blue regular">Horario de Apertura</h4>
                                <p class="light-blue regular alt-p"> Lunes A Viernes 09.00 - 24:00</p>
                                <p class="light-blue regular alt-p">
                                    Viernes A Domingo 08:00 - 03.00
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <form action="" method="post" role="form" class="contactForm">
                            <div id="sendmessage">Su Solicitud De Reserva A Sido Enviada. Gracias!</div>
                            <div id="errormessage"></div>
                            <div class="col-md-6 col-sm-6 contact-form pad-form">
                                <div class="form-group label-floating is-empty">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6 contact-form">
                                <div class="form-group">
                                    <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 contact-form pad-form">
                                <div class="form-group">
                                    <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Tu Correo Electrinico" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 contact-form">
                                <div class="form-group">
                                    <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 contact-form">
                                <div class="form-group">
                                    <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Telefono" data-rule="required" data-msg="This field is required" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 contact-form">
                                <div class="form-group">
                                    <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="Numero de Personas" data-rule="required" data-msg="This field is required" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12 contact-form">
                                <div class="form-group label-floating is-empty">
                                    <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                                    <div class="validation"></div>
                                </div>

                            </div>
                            <div class="col-md-12 btnpad">
                                <div class="contacts-btn-pad">
                                    <button class="contacts-btn">Reservar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <-- / contact-->
        <!-- footer -->
        <footer class="footer text-center">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 text-center">
                        <div class="widget">
                            <!--<--<h4 class="widget-title">Delicious</h4/-->
                            <a href="javascript:Salir()" style="right: 0px; top: 0px; right: 20px;"><img src="img/CerrarSesion.png" width="40px" class="CerrarSesion" title="Cerrar Sesion"><br>Cerrar Sesion</a>
                            <br>
                            <br>
                            <!--<address>324 Ellte Road<br>Delhi, DL 110013</address>
                            <div class="social-list">
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </div>-->
                            <p class="copyright clear-float">
                                © Delicious Theme. Todos Los Derechos Reservados
                            <div class="credits">
                                <!--
All the links in the footer should remain intact.
You can delete the links only if you purchased the pro version.
Licensing information: https://bootstrapmade.com/license/
Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
-->
                                Diseñado Por <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a>
                                <br>Modificado Por: <a href="#">RPS</a>
                            </div>
                            </p>
                    </div>
                </div>
            </div>
            </div>
        </footer>
    <!-- / footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    </body>
</html>
