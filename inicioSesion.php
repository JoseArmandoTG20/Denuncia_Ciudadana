<?php
	$uiniciar=mysqli_connect('localhost','root','','denuncia');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
         include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/head.php");
    ?>



    <meta charset="utf-8">
	<title>Accept coordinates as input to a geocoder</title>
	<meta name='viewport' content='width=device-width, initial-scale=1' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />

	<link rel="stylesheet" href="main.css">



</head>
<body>
    <header>
        <div class="header_contenido">
            <div class="logo">
                <h1>REPORTE CIUDADANO</h1>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="../sobreNosotros.php">Sobre Nosotros</a></li>
                        <li><a href="../reportesPagina.php">Reportes</a></li>
                        <li class="menu_seleccionado"><a href="../inicioSesion.php"  class="texto_menu_seleccionado">Iniciar Sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>





    <div style="margin-top:100px">
        
        
        
        
        <div class="list" style="margin-left:30%">
            <form action="uiniciar.php" method="post">
                <input id="mail" type="text" name="mail" placeholder="Correo Electronico" style="width:90%; margin:5%;">
                <input id="pass" type="text" name="pass" placeholder="Conntraseña" style="width:90%; margin:5%;">
                
                <button id="r1" style="width:90%; margin:5%;"><a href="uiniciar.php">Iniciar Sesion</a></button>

                <button id="r2" style="width:90%; margin:5%;"><a href="./registroSesion.php">Registrar?</a></button>

                
                
            </form>
        </div>

        


        
    </div>






    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
    ?>
</body>
</html>