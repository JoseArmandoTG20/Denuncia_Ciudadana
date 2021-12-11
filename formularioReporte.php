<?php
	$conexion=mysqli_connect('localhost','root','','denuncia');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/head.php");
    ?>
    <link rel="stylesheet" href="./src/css/formularioReporte.css"/>



    <meta charset="utf-8">
	<title>Accept coordinates as input to a geocoder</title>
	<meta name='viewport' content='width=device-width, initial-scale=1' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />

	<link rel="stylesheet" href="main.css">

	<style>
	</style>
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
                        <li class="menu_seleccionado"><a href="#" class="texto_menu_seleccionado">Reportes</a></li>
                        <li><a href="../inicioSesion.php">Iniciar Sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    









    <div style="margin-top:100px">
        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
        


        
        <div class="coor">
            <pre id="info"></pre>
        </div>

        <div class="options">
            <input type="submit" name="clean" value="X"   style="width: 5%;" onclick="clean()">
            <a href="reportesPagina.php">
            <input type="submit" name="return" value="<-" style="width: 5%;">
            </a> 
        </div>
        
        <div id="map" ></div>
        
        
        <div class="list">
            <form action="conexion.php" method="post">
                <input type="text" name="title" placeholder="Titulo" style="width:85%; margin:5%;">
                <input type="text" name="des" placeholder="Descripcion" style="width:85%; margin:5%;">
                
                <input id="lonn" type="text" name="lon" placeholder="Longitud" class="field left" readonly style="width:85%;height:25px; margin:5%;">
                <input id="latt" type="text" name="lat" placeholder="Latitude" class="field left" readonly style="width:85%;height:25px; margin:5%;">

                <button type="submit" name="enviar" style="width: 100%;">Enviar</button>
                
            </form>
        </div>

        <script>var mapdata = new Array();</script>

        <?php
        $sql="SELECT * FROM reporte";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
        ?>
            <script>
                var ti = '<?php echo $mostrar['titulo'] ?>';
                var l1 = '<?php echo $mostrar['lon'] ?>';
                var l2 = '<?php echo $mostrar['lat'] ?>';
                //var mapdata = new Array();
                mapdata.push([ti,l1,l2]);
            </script>
        <?php
        }
        ?>
        
        <script>
        var addi = true; 
        </script>
        <script src="main.js"></script>
    </div>








    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
    ?>
</body>
</html>