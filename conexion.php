<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'denuncia')or die(mysql_error($mysqli));

    insertar($conexion);

    function insertar($conexion){
        $title = $_POST['title'];
        $des = $_POST['des'];
        $lon = $_POST['lon'];
        $lat = $_POST['lat'];

        $consulta = "call new_report('$title','1', '$des', '$lon', '$lat','0');";

        mysqli_query($conexion,$consulta);
        mysqli_close($conexion);
        
    }
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv='refresh' content='0; URL="reportesPagina.php"'>
    </head>
    <body>
    </body>
</html>