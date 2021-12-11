<?php
    $uregistrar = mysqli_connect('localhost', 'root', '', 'denuncia')or die(mysql_error($mysqli));

    insertar($uregistrar);

    function insertar($uregistrar){
        
        $name = $_POST['name'];
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $bday = $_POST['bday'];
        $mail = $_POST['mail'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        $consulta =  "call new_user('$name','$p1','$p2', '$bday', '$mail', '$pass1',0);";

        mysqli_query($uregistrar,$consulta);
        mysqli_close($uregistrar);
        
    }
?>

<!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='0; URL="inicioSesion.php"'>
    </head>
    <body>
    </body>
</html>