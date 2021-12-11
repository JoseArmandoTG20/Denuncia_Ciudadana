<?php
    $uiniciar = mysqli_connect('localhost', 'root', '', 'denuncia')or die(mysql_error($mysqli));

    insertar($uiniciar);

    function insertar($uiniciar){
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        

        $consulta = "SELECT nombre FROM `users` WHERE 'email'='$mail' AND 'passw'='$pass'";
        

        

        mysqli_query($uiniciar,$consulta);
        mysqli_close($uiniciar);
        
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