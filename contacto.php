<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header>
    <?php
        $pg="contacto";
        include_once ("menu.php");
        ?>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 mt-4">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por <a
                            href="https://api.whatsapp.com/send?phone=541162423341">whatsapp</a>.</p>
                </div>
                <div class="col-sm-6 col-12 mt-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control shadow" placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control shadow" placeholder="Correo">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow"></textarea>
                        </div>
                        <div style="text-align: end;" class="text-right">
                            <button type="submit" class="enviarbtn" >ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/bootstrap.min.js"></script>
<footer style="text-align: center;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.facebook.com/david.j.navarro1/" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="mailto:info@depcsuite.com">David_jose95@hotmail.com</a>
            </div>
            <div class="col-sm-3 col-12 text-right">
                <a href="https://api.whatsapp.com/send?phone=541168991656" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
            </div>

        </div>
    </div>
</footer>

</html>