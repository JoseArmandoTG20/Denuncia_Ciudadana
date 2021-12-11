<?php
	$conexion=mysqli_connect('localhost','root','','denuncia');
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
    <link rel="stylesheet" href="Header.css">
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
            
            <a href="formularioReporte.php">
            <input type="submit" name="addto" value="+" style="width: 5%;">
            </a> 

            
        </div>
        
        <div id="map" ></div>
        
        
        <div class="list">
            <table border="1" class="lt">
                <tr>
                        <td style="width: 3%;">ID</td>
                        <td style="width: 10%;">Titulo</td>
                        <td style="width: 28%;">Descripcion</td>
                        <td style="width: 20%;">Fecha y Hora</td>
                        <td style="width: 10%;">Estado</td>
                        
                </tr>
            </table>

            <script>var mapdata = new Array();</script>

            <div class="list2">
                <table border="1" class="lt">
                
                    <?php
                    $sql="SELECT * FROM reporte";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    
                    <tr >
                        
                        <td style="width: 7%;"><?php echo $mostrar['id'] ?></td>
                        <td ><?php echo $mostrar['titulo'] ?></td>
                        <td><?php echo $mostrar['descripcion'] ?></td>
                        <td><?php echo $mostrar['fecha_hr'] ?></td>
                        <td><?php echo $mostrar['estado'] ?></td>
                        

                        <script>
                            var ti = '<?php echo $mostrar['titulo'] ?>';
                            var l1 = '<?php echo $mostrar['lon'] ?>';
                            var l2 = '<?php echo $mostrar['lat'] ?>';
                            //var mapdata = new Array();
                            mapdata.push([ti,l1,l2]);
                        </script>
                    </tr>
                    
                    <?php
                    }
                    ?>

                </table>
            </div>

        </div>
        
        
        <script>
        var addi = false; 
        </script>
        <script src="main.js"></script>
    </div>









    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
    ?>
</body>
</html>