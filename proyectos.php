<!DOCTYPE php>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
    <header>
    <?php
    $pg="proyectos";
        include_once ("menu.php");
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 mt-4">
                    <p>Estos son algunos de los proyectos que he realizado:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="row car m-1">
                        <img src="/images/abmclientes.png" alt="">
                        <div class="col 12 color-gradiente py-3"></div>
                        <h2>Proyecto 1</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magnam, accusantium illum
                            saepe eum nemo facere. Accusamus itaque at enim perspiciatis quas et velit asperiores, eos
                            veritatis voluptates numquam facere.</p>
                    </div>
                </div>
                <div class="row p-3 pb-0">
                    <div class="col-6"><a href="https://www.instagram.com/_djmn/" class="btn btn-rojo"
                            target="_blank">Ver pagina</a></div>
                    <div class="col-6"><a href="https://www.instagram.com/_djmn/" class="btn btn-rojo"
                            target="_blank">Codigo fuente</a>
                    </div>
                </div>

            </div>
        </div>

        </div>
    </main>
</body>
<footer style="text-align: center;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.facebook.com/david.j.navarro1/" target="_blank" title="facebook"><i
                        class="fab fa-facebook"></i></a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="mailto:info@depcsuite.com">David_jose95@hotmail.com</a>
            </div>
            <div class="col-sm-3 col-12 text-right">
                <a href="https://api.whatsapp.com/send?phone=541168991656" title="Whatsapp"><i
                        class="fab fa-whatsapp"></i></a>
            </div>

        </div>
    </div>
</footer>

</html>