<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi pagina</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <img src="images/baner.jpeg" width="100%" height="auto"> </img>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?action=inicio">Inicio</a></li>
            <li><a href="index.php?action=nosotros">Nosotros</a></li>
            <li><a href="index.php?action=servicios">Servicios</a></li>
            <li><a href="index.php?action=contactanos">Contacto</a></li>
        </ul>
    </nav>
    <section>
        <?php
        require_once "controllers/controller.php";
        require_once "models/model.php";
        $mvc = new MvcController();
        $mvc->enlacesPaginasController();
        ?>

    </section>

    <footer>Derechos reservados @cuarto sofware</footer>
    <script type="text/javascript" src="js/prueba.js"></script>

</body>

</html>