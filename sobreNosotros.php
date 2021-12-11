<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/head.php");
    ?>
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
                        <li class="menu_seleccionado"><a href="../sobreNosotros.php" class="texto_menu_seleccionado">Sobre Nosotros</a></li>
                        <li><a href="../reportesPagina.php">Reportes</a></li>
                        <li><a href="../inicioSesion.php">Iniciar Sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/portada.php");
    ?>
    <div class="container-content">
        <article>
            <h1>Sobre Nosotros</h1>
            <p>Por que nos importa la ciudad, se ha creado esta pagina para poder mejorar la imagen de la ciudad y que los ciudadanos se sientan orgullosos de su ciudad, 
                en esta pagina, podran reportar algun daño, reparacion del alguna calle, bache, socavon, implementacion de un semaforo o un 4 altos.
            </p>
            </br>
            <h2>Informacion:</h2>
            <p>Pagina Creada para Motivo de Aprendizaje.</p>
            </br>
            <h2>Nombre de la Materia:</h2> 
            <p>Programacion Web.</br>
                Base de Datos II. </br>
            </p> 
            </br>
            <h2>Nombre de los Maestros:</h2>
            <p></p>
            </br>
            <h2>Nombre de los Alumnos:</h2>
            <h2></h2>
            <p>Torres Garcia Jose Armando</p>
            </br>
        </article>
    </div>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
    ?>
</body>
</html>