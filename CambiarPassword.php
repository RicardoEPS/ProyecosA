<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript">
            function Registrar(){
                //alert('Hola');
            }
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/StyleLogin.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/StyleRegistroLis.css"> 
        <title>Login</title>
        
    </head>
    <body>
        <div>
            <center>
                <form action="ValidarPassword.php" method="post" role="form" class="contactForm">
                    <div class="imgcontainer">
                        <img src="img/avatar.png" alt="Avatar" class="avatarRe">
                    </div>
                    <div class="containerlogin">
                        <div class="form-group label-floating is-empty">
                            <p style="font-size: 25px">Usuario*</p>
                            <input type="text" name="Usuario" class="form-control" id="name" placeholder="Usuario (Correo Electronico)" data-rule="minlen:5" style="font-size: 15px" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group label-floating is-empty">
                            <p style="font-size: 25px">Palabra Secreta*</p>
                            <input type="text" name="PalabraSecreta" class="form-control" id="name" placeholder="Palabra Secreta" data-rule="minlen:5" style="font-size: 15px" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group label-floating is-empty">
                            <p style="font-size: 25px">Nueva Contraseña*</p>
                            <input type="password" name="NewPassword" class="form-control" id="name" placeholder="Contraseña" data-rule="minlen:5" style="font-size: 15px" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group label-floating is-empty">
                            <p style="font-size: 25px">Repite La Contraseña*</p>
                            <input type="password" name="NewPassword2" class="form-control" id="name" placeholder="Contraseña" data-rule="minlen:5" style="font-size: 15px" required/>
                            <div class="validation"></div>
                        </div>
                        <p id="Leyenda">* Campos Obligatorios</p>
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group" class="contacts-btn-pad" class="col-md-12 btnpad">
                                <button type="submit" name="btn-CPassword">Cambiar Contraseña</button>
                                <!--class="btn btn-default"-->
                            </div>
                            <!--<div class="btn-group" class="contacts-btn-pad" class="col-md-12 btnpad">
                                <button type="submit" name="btn-IniciarSesion">Iniciar Sesion</button>
                                <!--class="btn btn-default"
                            </div>-->
                        </div>
                        <br>
                        <a id="OlPass" style="font-size: 20px" href="Login.php">Regresar</a>
                        <!--</div>-->
                        <!--<div class="containerlogin">
                        <label><b>Username</b></label>
                        <br/>
                        <input type="text" name="Nombre" placeholder="Usuario" required>
                        <br/>
                        <label><b>Password</b></label>
                        <br/>
                        <input type="password" name="Password" placeholder="Contraseña" required>
                        </div>
                        <button type="submit">Inicar Sesion</button>-->
                    </div>
                </form>
            </center>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="contactform/contactform.js"></script>
    </body>
</html>