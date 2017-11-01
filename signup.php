<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Registro - Skate Pack</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">Skate Pack</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">Menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="aboutus.html">Sobre Nosotros</a></li>
                    <li><a href="catalog.php">Catálogo</a></li>
                    <li><a href="signup.php">Registrarse</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="aboutus.html">Sobre Nosotros</a></li>
                    <li><a href="catalog.php">Catálogo</a></li>
                    <li><a href="signup.php">Registrarse</a></li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <div class="section">
                <h3>Regístrate</h3>
                <div class="row">
                    <form class="col s12" action="success.php" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Alberto" name="fName" type="text" class="validate" required/>
                                <label for="fName">Primer Nombre</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="lName" type="text" class="validate" required/>
                                <label for="lName">Apellido</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="password" type="password" class="validate" required/>
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@ingweb.com.pa" placeholder="...@ingweb.com.pa" name="email" type="email" class="validate" required/>
                                <label for="email" data-error="Debe tener dominio @ingweb.com.pa">Correo Electrónico</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="date" name="birth" class="datepicker" required/>
                                <label for="birth">Fecha de Nacimiento</label>
                            </div>
                        </div>
                        <h4>Intereses</h4>
                        <p>
                        <input type="checkbox" id="batb" class="filled-in" name="batb" checked="checked" />
                        <label for="batb">Battle at the Berrics</label>
                        </p>
                        <p>
                        <input type="checkbox" id="sls" class="filled-in" name="sls"/>
                        <label for="sls">Street League Skateboarding</label>
                        </p>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="action" method="post">Enviar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="page-footer teal">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Sobre nosotros</h5>
                        <p class="grey-text text-lighten-4">Somos una empresa fundada con la mentalidad de fomentar la cultura del skateboarding a nivel internacional; ofreciendo productos de primera y para todos los niveles de experiencia.</p>

                    </div>
                    <div class="col l6 s12">
                        <h5 class="white-text">Enlaces</h5>
                        <ul>
                            <li><a class="white-text" href="aboutus.html">Sobre Nosotros</a></li>
                            <li><a class="white-text" href="catalog.php">Catálogo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Creado por <a class="brown-text text-lighten-3" href="http://albertocg.com">Alberto Castillo</a> | 1SF131 | 8-911-1328
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>
