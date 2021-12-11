<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/head.php");
    ?>
</head>
<body>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/header.php");
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/portada.php");
    ?>
    <div class="container-content">
        <article>

            <h1>¿Como Realizar tu Reporte?</h1>

            <p>
                Para poder realizar tu reporte necesitas seguir estos pasos: </br>
                1.-Ingresar o Registrarte en nuestra pagina lo puedes realizar en el menu de <a href="../inicioSesion.php">Iniciar Sesion </a>.</br>
                2.-Ingresado o ya que te registraste ve al apartado de <a href="../reportesPagina.php">Reporte.</a></br>
                3.-Selecciona la seccion de <a href="../reportesPagina.php">reportes</a>.</br>
                4.-Da click en el boton de Crear <a href="../formularioReporte.php"> reporte </a>.</br>
                5.-Ingresa los datos que se te piden en el formulario</br>
            </p>
            </br>
            <p>
                
            </p>

               
        </article>

        <div class="container-aside">	

            <aside>
                <h2>Abren vialidad tras reparación de socavón</h2>
                <p>Luego de que en semanas pasadas se reportó la formación de un pequeño socavón en la ciudad de León, 
                    se anunció el término de su reparación este 24 de julio, por lo que el Sistema de Agua Potable y Alcantarillado de León (SAPAL) 
                    la circulación en la zona se abrirá de manera normal.
                </p>
            </aside>

            <aside>
                <h2>Entregan más calles dignas en la Ciudad de La Paz</h2>
                <p>Unas de las obras inauguradas recientemente son las pavimentaciones a 
                    base de concreto asfáltico de la calle Cedif y calle Democracia de la colonia El Polvorín, 
                    donde el presidente municipal acudió a cortar el listón, cumpliendo con el debido protocolo de salud. 
                </p>
                
            </aside>

            <aside>
                <h2>Alcaldía de La Paz prepara reparación de aceras en coordinación con vecinos</h2>
                <p>
                El alcalde Iván Arias anunció este jueves que en las próximas semanas se pondrá en ejecución 
                un plan de mejoramiento de aceras de la ciudad en coordinación con los vecinos de los diferentes 
                barrios.

                “Vamos a hacer un plan de arreglo de las aceras”, 
                afirmó Arias a la conclusión del programa de radio que conduce “La Paz en Paz”. 
                Añadió que el trabajo se efectuará en coordinación con los vecinos 
                porque son corresponsables del cuidado.
                </p>
                
            </aside>
        </div>
    </div>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
    ?>
</body>
</html>