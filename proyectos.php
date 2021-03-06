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
            $pg = "proyectos";
            include_once("menu.php");
            ?>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-sm-5">
                        <h1>Proyectos</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-12 my-4">
                        <p>Los siguientes son algunos de los trabajos que he realizado:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <div class="row card m-1">
                            <img src="/images/abmclientes.png" alt="ABM Clientes" title="ABM Clientes" class="img-fluid">
                            <div class="col-12 color-gradiente py-3">
                                <h2>ABM Clientes</h2>
                            </div>
                            <div class="col-12 py-3">
                                <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                            </div>
                            <div class="row p-3 pb-0">
                                <div class="col-6">
                                    <a href="https://www.instagram.com/_djmn/" class="btn btn-rojo" target="_blank">Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="https://www.instagram.com/_djmn/" class="link-rojo" target="_blank">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="row card m-1">
                            <img src="" alt="Sistema de Gestión de Ventas" title="Sistema de Gestión de Ventas" class="img-fluid">
                            <div class="col-12 color-gradiente py-3">
                                <h2>Sistema de gestión de ventas</h2>
                            </div>
                            <div class="col-12 py-3">
                                <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                            </div>
                            <div class="row p-3 pb-0">
                                <div class="col-6">
                                    <a href="https://www.instagram.com/_djmn/" class="btn btn-rojo" target="_blank">Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="https://www.instagram.com/_djmn/" class="link-rojo" target="_blank">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="row card m-1">
                            <img src="" alt="Proyecto" title="Proyecto" class="img-fluid">
                            <div class="col-12 color-gradiente py-3">
                                <h2>Proyecto integrador</h2>
                            </div>
                            <div class="col-12 py-3">
                                <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                            </div>
                            <div class="row p-3 pb-0">
                                <div class="col-6">
                                    <a href="https://www.instagram.com/_djmn/" class="btn btn-rojo" target="_blank">Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="https://www.instagram.com/_djmn/" class="link-rojo" target="_blank">Código fuente</a>
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