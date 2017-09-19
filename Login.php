<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript">
            function Registrar(){
                window.location.href='Registro.php'
            }
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/StyleLogin.css">
        <title>Login</title>
    </head>
    <body>
        <div>
            <center>
                <form action="Validar.php" method="post" role="form" class="contactForm">
                    <div class="imgcontainer">
                        <img src="img/avatar.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="containerlogin">
                        <div class="form-group label-floating is-empty">
                            <p>Usuario*</p>
                            <input type="text" name="Nombre" class="form-control" id="name" placeholder="Usuario (Correo Electronico)" data-rule="minlen:5" required/>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group label-floating is-empty">
                            <p>Contraseña*</p>
                            <input type="password" name="Password" class="form-control" id="name" placeholder="Contraseña" data-rule="minlen:5" required/>
                            <div class="validation"></div>
                        </div>
                        <p id="Leyenda">* Campos Obligatorios</p>
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group" class="contacts-btn-pad" class="col-md-12 btnpad">
                                <button type="submit" onclick="javascript:Registrar()">Registrarse</button>
                                <!--class="btn btn-default"-->
                            </div>
                            <div class="btn-group" class="contacts-btn-pad" class="col-md-12 btnpad">
                                <button type="submit" name="btn-IniciarSesion">Iniciar Sesion</button>
                                <!--class="btn btn-default"-->
                            </div>
                        </div>
                        <br>
                        <a id="OlPass" href="CambiarPassword.php">¿Olvidaste Tu Contraseña?</a>
                        
                        <!--<div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="contacts-btn-pad" class="col-md-12 btnpad">
                                <button type="submit" onclick="javascript:Registrar()" name="btn-Registrarse">Registrarse</button>
                            </div>
                            &ensp;
                            &ensp;
                            <div class="contacts-btn-pad" class="col-md-12 btnpad">
                                <button type="submit" name="btn-IniciarSesion">Inciar Sesion</button>
                            </div>
                        </div>-->
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