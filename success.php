<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Registo Exitoso - Skate Pack</title>

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
                <h3>¡Te has registrado con éxito!</h3>
                <?php
                if(isset($_POST["fName"])){
                echo "<p><b>Nombre: </b>" . $_POST["fName"] . "</p>";
                }
                if(isset($_POST['lName'])){
                echo "<p><b>Apellido: </b>" . $_POST['lName'] . "</p>";
                }
                if(isset($_POST['email'])){
                echo "<p><b>Correo electrónico: </b>" . $_POST['email'] . "</p>";
                }

                echo "<h4>Intereses</h4>";

                if(isset($_POST['sls'])){
                echo "<p>Street League Skateboarding</p>";
                }
                if(isset($_POST['batb'])){
                echo "<p>Battle at the Berrics</p>";
                }

                if(isset($_POST["birth"])){
                $zodiac = '';
                list($year, $month, $day) = explode('-', $_POST["birth"]);
                if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Aries"; } 
                elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Tauro"; } 
                elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Géminis"; } 
                elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cáncer"; } 
                elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; } 
                elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; } 
                elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; } 
                elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; } 
                elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagitario"; } 
                elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricornio"; } 
                elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Acuario"; } 
                elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Piscis"; } 
                $age = (date("md", date("U", mktime(0, 0, 0, $month, $day, $year))) > date("md")
                ? ((date("Y") - $year) - 1)
                : (date("Y") - $year));

                echo "<h4>Signo zodiacal</h4>";
                echo $zodiac;
                echo "<p><b>Edad:</b> " . $age . "</p>";
                }
                ?>
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
