<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="En Ballena creamos muebles a medida desde 1985. Fusionando el diseño, con la mejor calidad de maderas, resistentes y cómodas." />
  <title>Contacto</title>
  <meta name="robots" content="index, follow, max-image-preview:large">
  <link rel="icon" type="shortcut icon" href="favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <script src="js/jquery3.5.1.min.js"></script>
  <link href="css/bootstrap5.1.1.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/fancybox4.0.5.min.css" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <?php
    $destinatario = "info@mueblesballena.com";

    $asunto = "Consulta por web";

    $mensaje = "nombre: " . $_POST["nombre"] . "\n";
    $mensaje.= "correo: " . $_POST["correo"] . "\n";
    $mensaje.= "cuerpo-mail: " . $_POST["cuerpo-mail"] . "\n";
    $cabeceras = 'From: info@mueblesballena.com';

    $enviado = mail($destinatario, $asunto, $mensaje, $cabeceras);


    if ($enviado) {
        $msg_visible = "Sus datos fueron enviados correctamente.";
    } else {
        $msg_visible = "No se ha podido enviar el mail.";
    }
    ?>

    <body onload="redirectToIndex()">
    <main id="contenedor">
            <section class="row gx-0 justify-content-center">
                <div class="col-md-2 col-xl-3"></div>
                <div class="texto col-md-8 col-xl-5 p-5">
                    <h3><?php echo $msg_visible ?></h3>
                    <p>Será redirigido a la página principal. Si en unos segundos esto no sucede, haga click <a href="index.html">aquí.</a>
                    </p>
                    <a class="btn btn-primary" style="margin-top: 2.5rem;
    color: var(--ballena-negro);
    width: 150px;
    font-size: 1.5rem;
    font-weight: 700;">Volver</a>
                </div>
                <div class="col-md-2 col-xl-3"></div>
            </section>
            <script src="js/bootstrap.bundle5.1.1.min.js"></script>
    <script src="js/volver.js"></script>
    </body>
</html>